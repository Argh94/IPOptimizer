<?php

function get_optimization_ip($type = 'v4') {
    $KEY = getenv('HOSTMONIT_API_KEY') ?: 'o1zrmHAF';
    try {
        $headers = array('Content-Type: application/json');
        $data = array("key" => $KEY, "type" => $type);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.hostmonit.com/get_optimization_ip');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36');
        $response = curl_exec($ch);
        $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        if ($http_status == 200 && $response && json_decode($response)) {
            return json_decode($response, true);
        } else {
            echo "CHANGE OPTIMIZATION IP ERROR: REQUEST STATUS CODE IS NOT 200 OR INVALID RESPONSE\n";
            return null;
        }
    } catch (Exception $e) {
        echo "CHANGE OPTIMIZATION IP ERROR: " . $e->getMessage() . "\n";
        return null;
    }
}

function check_open_ports($ip, $ports = [80, 443, 8080], $timeout = 2) {
    if (!filter_var($ip, FILTER_VALIDATE_IP)) {
        echo "INVALID IP: $ip\n";
        return [];
    }
    $open_ports = [];
    $mh = curl_multi_init();
    $handles = [];
    
    foreach ($ports as $port) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "tcp://$ip:$port");
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        curl_multi_add_handle($mh, $ch);
        $handles[$port] = $ch;
    }

    $running = null;
    do {
        curl_multi_exec($mh, $running);
        curl_multi_select($mh);
    } while ($running > 0);

    foreach ($ports as $port) {
        $ch = $handles[$port];
        $info = curl_getinfo($ch);
        if ($info['http_code'] == 0 && curl_errno($ch) == 0) {
            $open_ports[] = $port;
        }
        curl_multi_remove_handle($mh, $ch);
        curl_close($ch);
    }
    curl_multi_close($mh);
    return $open_ports;
}

function process_ips($ip_list, $type, $ports_to_check, $timeout = 2) {
    $ips = [];
    $ips_with_ports = [];
    $list_dir = getenv('LIST_DIR') ?: 'list'; // استفاده از متغیر محیطی
    if (isset($ip_list['code'], $ip_list['total']) && $ip_list['code'] === 200 && $ip_list['total'] > 0) {
        foreach ($ip_list['info'] as $l) {
            $ips = array_merge($ips, $l);
        }
        usort($ips, fn($a, $b) => ($a['latency'] ?? 9999) <=> ($b['latency'] ?? 9999));
        foreach (array_slice($ips, 0, 15) as $ip_data) {
            $ip = $ip_data['ip'];
            $open_ports = check_open_ports($ip, $ports_to_check, $timeout);
            $ips_with_ports[] = array_merge($ip_data, ['open_ports' => $open_ports]);
        }
        if (!is_dir($list_dir)) {
            mkdir($list_dir, 0777, true);
        }
        file_put_contents("$list_dir/$type.json", json_encode(array_slice($ips_with_ports, 0, 25), JSON_PRETTY_PRINT));
    }
    return $ips_with_ports;
}

date_default_timezone_set('Asia/Tehran');
$last_updated = date('Y-m-d H:i:s T');

$ports_to_check = [80, 443, 8080];

$getListIpv4 = get_optimization_ip();
$ipv4_with_ports = process_ips($getListIpv4, 'ipv4', $ports_to_check);

$getListIpv6 = get_optimization_ip('v6');
$ipv6_with_ports = process_ips($getListIpv6, 'ipv6', $ports_to_check);

$ips = [];
$list_dir = getenv('LIST_DIR') ?: 'list'; // استفاده از متغیر محیطی برای export.json
if (!empty($ipv4_with_ports) || !empty($ipv6_with_ports)) {
    $ips['ipv4'] = array_slice($ipv4_with_ports, 0, 25);
    $ips['ipv6'] = array_slice($ipv6_with_ports, 0, 25);
    if (!is_dir($list_dir)) {
        mkdir($list_dir, 0777, true);
    }
    file_put_contents("$list_dir/export.json", json_encode($ips, JSON_PRETTY_PRINT));
}

$readme_content = "# IPOptimizer\n\n";
$readme_content .= "[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)\n";
$readme_content .= "[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)\n";
$readme_content .= "[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)\n";
$readme_content .= "[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)\n";
$readme_content .= "[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)\n\n";

$readme_content .= "## 🚀 Network Optimization with Top IPs\n\n";
$readme_content .= "**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.\n\n";
$readme_content .= "**Last Updated:** $last_updated\n\n";
$readme_content .= "**JSON Files**: The `ipv4.json`, `ipv6.json`, and `export.json` files are available in the [Releases section](https://github.com/Argh94/IPOptimizer/releases).\n\n";

$readme_content .= "## ✨ Features\n";
$readme_content .= "- 📡 **Low-Latency IPs**: Sorted by lowest latency.\n";
$readme_content .= "- 🔍 **Suggested Ports**: Open ports (80, 443, 8080) are automatically checked.\n";
$readme_content .= "- ⏰ **Regular Updates**: Every 5 hours via GitHub Actions.\n";
$readme_content .= "- 📄 **JSON Outputs**: Data is stored in the Releases section (`ipv4.json`, `ipv6.json`, `export.json`).\n\n";

$readme_content .= "## 📋 Optimized IPs\n\n";
$readme_content .= "**Note:** The displayed ports have been checked by the server, but they may vary depending on your network. For verification, use [YouGetSignal](https://www.yougetsignal.com/tools/open-ports/) (IPv4) or [Nmap](https://nmap.org/) (IPv6).\n\n";

$readme_content .= "### IPv4\n";
$readme_content .= "<table align=\"center\">\n";
$readme_content .= "| IP | Suggested Ports | Latency (ms) |\n";
$readme_content .= "|:---:|:---------------:|:------------:|\n";
foreach (array_slice($ipv4_with_ports, 0, 15) as $ip_data) {
    $ip = $ip_data['ip'];
    $ports = !empty($ip_data['open_ports']) ? implode(", ", $ip_data['open_ports']) : "Check with online tools";
    $latency = $ip_data['latency'] ?? 'N/A';
    $readme_content .= "| $ip | $ports | $latency |\n";
}
$readme_content .= "</table>\n";

$readme_content .= "\n### IPv6\n";
$readme_content .= "<table align=\"center\">\n";
$readme_content .= "| IP | Suggested Ports | Latency (ms) |\n";
$readme_content .= "|:---:|:---------------:|:------------:|\n";
foreach (array_slice($ipv6_with_ports, 0, 15) as $ip_data) {
    $ip = $ip_data['ip'];
    $ports = !empty($ip_data['open_ports']) ? implode(", ", $ip_data['open_ports']) : "Check with online tools (Nmap)";
    $latency = $ip_data['latency'] ?? 'N/A';
    $readme_content .= "| [$ip] | $ports | $latency |\n";
}
$readme_content .= "</table>\n";

$readme_content .= "\n## 🛠️ Installation and Usage\n";
$readme_content .= "1. **Clone the Repository**:\n";
$readme_content .= "   ```bash\n";
$readme_content .= "   git clone https://github.com/Argh94/IPOptimizer.git\n";
$readme_content .= "   ```\n";
$readme_content .= "2. **PHP Setup**:\n";
$readme_content .= "   - Install PHP 8.0 or higher.\n";
$readme_content .= "   - Set the Hostmonit API key in the `HOSTMONIT_API_KEY` environment variable:\n";
$readme_content .= "     ```bash\n";
$readme_content .= "     export HOSTMONIT_API_KEY=\"your-api-key\"\n";
$readme_content .= "     ```\n";
$readme_content .= "3. **Run the Script**:\n";
$readme_content .= "   ```bash\n";
$readme_content .= "   php scripts/fetch_ips.php\n";
$readme_content .= "   ```\n";
$readme_content .= "4. **Check Output**:\n";
$readme_content .= "   - JSON files are available in the [Releases section](https://github.com/Argh94/IPOptimizer/releases).\n";
$readme_content .= "   - IP list in `README.md`.\n\n";

$readme_content .= "## 📬 Support\n";
$readme_content .= "- 🐛 **Report Issues**: [Issues](https://github.com/Argh94/IPOptimizer/issues)\n";
$readme_content .= "- 📧 **Contact**: [ircfspace@gmail.com](mailto:ircfspace@gmail.com)\n\n";

$readme_content .= "## 📄 License\n";
$readme_content .= "This project is licensed under the [MIT License](https://github.com/Argh94/HandWave/blob/main/LICENCE).\n";

file_put_contents("README.md", $readme_content);
echo "README.md updated successfully!\n";
