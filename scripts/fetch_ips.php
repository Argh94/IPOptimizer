<?php

// تنظیم منطقه زمانی به وقت ایران
date_default_timezone_set('Asia/Tehran');

// اطمینان از وجود پوشه list
if (!is_dir('list')) {
    mkdir('list', 0777, true);
}

function get_optimization_ip($type = 'v4') {
    $KEY = 'o1zrmHAF';
    try {
        $headers = ['Content-Type: application/json'];
        $data = ['key' => $KEY, 'type' => $type];
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
        if ($http_status == 200) {
            $decoded = json_decode($response, true);
            if (json_last_error() === JSON_ERROR_NONE) {
                file_put_contents("list/api_response_$type.json", json_encode($decoded, JSON_PRETTY_PRINT)); // لاگ برای دیباگ
                return $decoded;
            } else {
                echo "JSON DECODE ERROR: " . json_last_error_msg() . "\n";
                return null;
            }
        } else {
            echo "CHANGE OPTIMIZATION IP ERROR: REQUEST STATUS CODE IS $http_status\n";
            file_put_contents("list/error_$type.txt", "HTTP Status: $http_status\nResponse: $response");
            return null;
        }
    } catch (Exception $e) {
        echo "CHANGE OPTIMIZATION IP ERROR: " . $e->getMessage() . "\n";
        file_put_contents("list/error_$type.txt", "Exception: " . $e->getMessage());
        return null;
    }
}

// دریافت تاریخ و ساعت به وقت ایران
$last_updated = date('Y-m-d H:i:s');

// دریافت لیست IPv4
$getListIpv4 = get_optimization_ip();
$ipv4 = [];
if (isset($getListIpv4['code'], $getListIpv4['total']) && $getListIpv4['code'] === 200 && $getListIpv4['total'] > 0) {
    foreach ($getListIpv4['info'] as $l) {
        if (is_array($l) && isset($l['ip'], $l['port'])) {
            $ipv4[] = $l['ip'] . ':' . $l['port'];
        } elseif (is_string($l)) {
            $ipv4[] = $l;
        } else {
            echo "Unexpected IPv4 data format: " . print_r($l, true) . "\n";
            file_put_contents("list/debug_ipv4.txt", print_r($l, true), FILE_APPEND);
        }
    }
    if (!empty($ipv4)) {
        file_put_contents("list/ipv4.json", json_encode(array_slice($ipv4, 0, 25), JSON_PRETTY_PRINT));
    } else {
        echo "No valid IPv4 addresses found\n";
        file_put_contents("list/debug_ipv4.txt", "No valid IPv4 addresses found\n", FILE_APPEND);
    }
} else {
    echo "Invalid IPv4 API response: " . print_r($getListIpv4, true) . "\n";
    file_put_contents("list/debug_ipv4.txt", "Invalid response: " . print_r($getListIpv4, true), FILE_APPEND);
}

// دریافت لیست IPv6
$getListIpv6 = get_optimization_ip('v6');
$ipv6 = [];
if (isset($getListIpv6['code'], $getListIpv6['total']) && $getListIpv6['code'] === 200 && $getListIpv6['total'] > 0) {
    foreach ($getListIpv6['info'] as $l) {
        if (is_array($l) && isset($l['ip'], $l['port'])) {
            $ipv6[] = '[' . $l['ip'] . ']:' . $l['port'];
        } elseif (is_string($l)) {
            $ipv6[] = $l;
        } else {
            echo "Unexpected IPv6 data format: " . print_r($l, true) . "\n";
            file_put_contents("list/debug_ipv6.txt", print_r($l, true), FILE_APPEND);
        }
    }
    if (!empty($ipv6)) {
        file_put_contents("list/ipv6.json", json_encode(array_slice($ipv6, 0, 25), JSON_PRETTY_PRINT));
    } else {
        echo "No valid IPv6 addresses found\n";
        file_put_contents("list/debug_ipv6.txt", "No valid IPv6 addresses found\n", FILE_APPEND);
    }
} else {
    echo "Invalid IPv6 API response: " . print_r($getListIpv6, true) . "\n";
    file_put_contents("list/debug_ipv6.txt", "Invalid response: " . print_r($getListIpv6, true), FILE_APPEND);
}

// ترکیب و ذخیره در export.json
$ips = [];
if (!empty($ipv4) && !empty($ipv6)) {
    $ips['ipv4'] = array_slice($ipv4, 0, 25);
    $ips['ipv6'] = array_slice($ipv6, 0, 25);
    file_put_contents("list/export.json", json_encode($ips, JSON_PRETTY_PRINT));
}

// تولید فایل README.md
$readme_content = "# Optimized IP Addresses\n\n";
$readme_content .= "## Last Updated: $last_updated\n\n";
$readme_content .= "This repository provides a list of optimized IPv4 and IPv6 addresses fetched from the Hostmonit API. These addresses can be used for network optimization, proxy setup, or other connectivity purposes. The list is updated every 2 hours to ensure freshness.\n\n";
$readme_content .= "Click on any IP address below to copy it to your clipboard.\n\n";
$readme_content .= <<<EOD
<script>
function copyToClipboard(text) {
    navigator.clipboard.writeText(text).then(() => {
        alert('Copied to clipboard: ' + text);
    });
}
</script>

## IPv4 Addresses\n
EOD;

if (!empty($ipv4)) {
    foreach (array_slice($ipv4, 0, 15) as $ip) {
        $safe_ip = htmlspecialchars($ip, ENT_QUOTES, 'UTF-8');
        $readme_content .= "- <a href='#' onclick=\"copyToClipboard('$safe_ip')\">$ip</a>\n";
    }
} else {
    $readme_content .= "- No IPv4 addresses available at this time.\n";
}

$readme_content .= "\n## IPv6 Addresses\n";
if (!empty($ipv6)) {
    foreach (array_slice($ipv6, 0, 15) as $ip) {
        $safe_ip = htmlspecialchars($ip, ENT_QUOTES, 'UTF-8');
        $readme_content .= "- <a href='#' onclick=\"copyToClipboard('$safe_ip')\">$ip</a>\n";
    }
} else {
    $readme_content .= "- No IPv6 addresses available at this time.\n";
}

$readme_content .= "\n*Generated by [scripts/fetch_ips.php](scripts/fetch_ips.php)*\n";

file_put_contents("README.md", $readme_content);
echo "README.md updated successfully!\n";
