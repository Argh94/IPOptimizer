<?php

function get_optimization_ip($type = 'v4') {
    $KEY = 'o1zrmHAF';
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
        if ($http_status == 200) {
            return json_decode($response, true);
        } else {
            echo "CHANGE OPTIMIZATION IP ERROR: REQUEST STATUS CODE IS NOT 200\n";
            return null;
        }
    } catch (Exception $e) {
        echo "CHANGE OPTIMIZATION IP ERROR: " . $e->getMessage() . "\n";
        return null;
    }
}

// تنظیم تایم‌زون به ایران و گرفتن تاریخ و ساعت به وقت تهران
date_default_timezone_set('Asia/Tehran');
$last_updated = date('Y-m-d H:i:s T');

$getListIpv4 = get_optimization_ip();
$ipv4 = [];
if (isset($getListIpv4['code'], $getListIpv4['total']) &&
    $getListIpv4['code'] === 200 && $getListIpv4['total'] > 0) {
    foreach ($getListIpv4['info'] as $l) {
        $ipv4 = array_merge($ipv4, $l);
    }
    file_put_contents("list/ipv4.json", json_encode(array_slice($ipv4, 0, 25), JSON_PRETTY_PRINT));
}

$getListIpv6 = get_optimization_ip('v6');
$ipv6 = [];
if (isset($getListIpv6['code'], $getListIpv6['total']) &&
    $getListIpv6['code'] === 200 && $getListIpv6['total'] > 0) {
    foreach ($getListIpv6['info'] as $l) {
        $ipv6 = array_merge($ipv6, $l);
    }
    file_put_contents("list/ipv6.json", json_encode(array_slice($ipv6, 0, 25), JSON_PRETTY_PRINT));
}

$ips = [];
if (!empty($ipv4) && !empty($ipv6)) {
    $ips['ipv4'] = array_slice($ipv4, 0, 25);
    $ips['ipv6'] = array_slice($ipv6, 0, 25);
    file_put_contents("list/export.json", json_encode($ips, JSON_PRETTY_PRINT));
}

// توضیحات حرفه‌ای‌تر و نام پروژه جدید
$readme_content = "# IPGenerator_Endpoint\n\n";
$readme_content .= "## آخرین بروزرسانی: $last_updated\n\n";
$readme_content .= "این پروژه به صورت کاملاً خودکار، لیستی از IPهای بهینه (IPv4 و IPv6) را از API سرویس Hostmonit دریافت و به‌روزرسانی می‌کند. این IPها برای کاربردهایی نظیر افزایش سرعت و پایداری اتصال، راه‌اندازی پروکسی، بهبود Routing و کاهش Latency قابل استفاده هستند.\n\n";
$readme_content .= "هر دو ساعت یک‌بار اطلاعات جدید دریافت و فایل‌ها به‌روزرسانی می‌شوند. اطلاعات ارائه‌شده شامل ۱۵ IP برتر به همراه پورت مربوطه است؛ برای IPv4 به فرم `IP:443` و برای IPv6 به فرم `[IPv6]:443` نمایش داده می‌شوند.\n\n";
$readme_content .= "### نحوه استفاده از لیست:\n";
$readme_content .= "- می‌توانید IPهای درج‌شده را در تنظیمات سرویس‌های مختلف خود (مانند CDN، Proxy، VPN و ...) وارد کنید.\n";
$readme_content .= "- لیست به صورت خودکار در فایل‌های `ipv4.json` و `ipv6.json` ذخیره می‌شود و فایل `export.json` نیز شامل هر دو لیست است.\n\n";
$readme_content .= "---\n\n";

$readme_content .= "## IPv4\n";
foreach (array_slice($ipv4, 0, 15) as $ip) {
    if (is_array($ip) && isset($ip['ip'])) {
        $readme_content .= "```\n" . $ip['ip'] . ":443\n```\n";
    } else {
        $readme_content .= "```\n" . $ip . ":443\n```\n";
    }
}

$readme_content .= "\n## IPv6\n";
foreach (array_slice($ipv6, 0, 15) as $ip) {
    if (is_array($ip) && isset($ip['ip'])) {
        $readme_content .= "```\n[" . $ip['ip'] . "]:443\n```\n";
    } else {
        $readme_content .= "```\n[" . $ip . "]:443\n```\n";
    }
}

$readme_content .= "\n*این لیست به صورت خودکار توسط [fetch_ips.php](scripts/fetch_ips.php) تولید شده است.*\n";

file_put_contents("README.md", $readme_content);
echo "README.md updated successfully!\n";
