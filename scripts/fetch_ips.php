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
$readme_content .= "[![PHP Version](https://img.shields.io/badge/PHP-8.0%2B-blue)](https://www.php.net)\n";
$readme_content .= "[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)\n";
$readme_content .= "[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)\n";
$readme_content .= "[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)\n\n";

$readme_content .= "## 🚀 بهینه‌سازی شبکه با IPهای برتر\n\n";
$readme_content .= "**IPOptimizer** هر ۵ ساعت یک‌بار لیستی از IPهای بهینه (IPv4 و IPv6) با کمترین تأخیر را از [Hostmonit](https://hostmonit.com/) دریافت می‌کند. این IPها برای تنظیم پروکسی، VPN یا بهبود عملکرد شبکه مناسب هستند.\n\n";
$readme_content .= "**آخرین به‌روزرسانی:** $last_updated\n\n";
$readme_content .= "**فایل‌های JSON**: فایل‌های `ipv4.json`، `ipv6.json` و `export.json` در پوشه `list` یا [بخش Releases](https://github.com/Argh94/IPOptimizer/releases) در دسترس هستند.\n\n";

$readme_content .= "## ✨ ویژگی‌ها\n";
$readme_content .= "- 📡 **IPهای کم‌تأخیر**: مرتب‌سازی IPها بر اساس کمترین latency.\n";
$readme_content .= "- 🔍 **بررسی پورت‌ها**: پورت‌های باز (80، 443، 8080) به‌صورت خودکار بررسی می‌شوند.\n";
$readme_content .= "- ⏰ **به‌روزرسانی منظم**: به‌روزرسانی خودکار هر ۵ ساعت با GitHub Actions.\n";
$readme_content .= "- 📄 **خروجی JSON**: ذخیره‌سازی داده‌ها در فایل‌های `ipv4.json`، `ipv6.json` و `export.json`.\n\n";

$readme_content .= "<div align=\"center\">\n\n";
$readme_content .= "### IPv4\n";
$readme_content .= "| IP | پورت‌های پیشنهادی | تأخیر (ms) |\n";
$readme_content .= "|----|-------------------|------------|\n";
foreach (array_slice($ipv4_with_ports, 0, 15) as $ip_data) {
    $ip = $ip_data['ip'];
    $ports = !empty($ip_data['open_ports']) ? implode(", ", $ip_data['open_ports']) : "بررسی با ابزارهای آنلاین";
    $latency = $ip_data['latency'] ?? 'N/A';
    $readme_content .= "| $ip | $ports | $latency |\n";
}

$readme_content .= "\n### IPv6\n";
$readme_content .= "| IP | پورت‌های پیشنهادی | تأخیر (ms) |\n";
$readme_content .= "|----|-------------------|------------|\n";
foreach (array_slice($ipv6_with_ports, 0, 15) as $ip_data) {
    $ip = $ip_data['ip'];
    $ports = !empty($ip_data['open_ports']) ? implode(", ", $ip_data['open_ports']) : "بررسی با ابزارهای آنلاین (Nmap)";
    $latency = $ip_data['latency'] ?? 'N/A';
    $readme_content .= "| [$ip] | $ports | $latency |\n";
}
$readme_content .= "\n</div>\n\n";

$readme_content .= "## 🛠️ نصب و استفاده\n\n";
$readme_content .= "<div align=\"center\">\n";
$readme_content .= "1. **کلون کردن مخزن**:\n";
$readme_content .= "   ```bash\n";
$readme_content .= "   git clone https://github.com/Argh94/IPOptimizer.git\n";
$readme_content .= "   cd IPOptimizer\n";
$readme_content .= "   ```\n\n";
$readme_content .= "2. **تنظیمات PHP**:\n";
$readme_content .= "   - PHP 8.0 یا بالاتر نصب کنید.\n";
$readme_content .= "   - کلید API Hostmonit را در متغیر محیطی `HOSTMONIT_API_KEY` تنظیم کنید:\n";
$readme_content .= "     ```bash\n";
$readme_content .= "     export HOSTMONIT_API_KEY=\"your-api-key\"\n";
$readme_content .= "     ```\n";
$readme_content .= "   - (اختیاری) مسیر ذخیره‌سازی فایل‌های JSON را با متغیر محیطی `LIST_DIR` تنظیم کنید:\n";
$readme_content .= "     ```bash\n";
$readme_content .= "     export LIST_DIR=\"your-custom-path\"\n";
$readme_content .= "     ```\n\n";
$readme_content .= "3. **اجرای اسکریپت**:\n";
$readme_content .= "   ```bash\n";
$readme_content .= "   php scripts/fetch_ips.php\n";
$readme_content .= "   ```\n\n";
$readme_content .= "4. **بررسی خروجی**:\n";
$readme_content .= "   - فایل‌های JSON (`ipv4.json`، `ipv6.json`، `export.json`) در پوشه `list` یا [بخش Releases](https://github.com/Argh94/IPOptimizer/releases) در دسترس هستند.\n";
$readme_content .= "   - لیست IPها در `README.md` به‌روزرسانی می‌شود.\n";
$readme_content .= "</div>\n\n";

$readme_content .= "## 📬 پشتیبانی\n\n";
$readme_content .= "<div align=\"center\">\n";
$readme_content .= "- 🐛 **گزارش مشکلات**: [Issues](https://github.com/Argh94/IPOptimizer/issues)\n";
$readme_content .= "- 📧 **تماس**: [ircfspace@gmail.com](mailto:ircfspace@gmail.com)\n";
$readme_content .= "</div>\n\n";

$readme_content .= "## 📄 لایسنس\n\n";
$readme_content .= "<div align=\"center\">\n";
$readme_content .= "این پروژه تحت [لایسنس MIT](https://opensource.org/licenses/MIT) منتشر شده است.\n";
$readme_content .= "</div>\n";

file_put_contents("README.md", $readme_content);
echo "README.md updated successfully!\n";
