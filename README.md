<style>
  .container { display: flex; justify-content: space-between; }
  .persian { text-align: right; direction: rtl; width: 48%; }
  .english { text-align: left; direction: ltr; width: 48%; }
  .code-block { text-align: left; direction: ltr; width: 100%; }
  table { width: 100%; }
</style>

# IPOptimizer

<div class="english">
[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0%2B-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)
</div>

<div class="container">
<div class="persian">
## 🚀 بهینه‌سازی شبکه با IPهای برتر

**IPOptimizer** هر ۵ ساعت یک‌بار لیستی از IPهای بهینه (IPv4 و IPv6) با کمترین تأخیر را از [Hostmonit](https://hostmonit.com/) دریافت می‌کند. این IPها برای تنظیم پروکسی، VPN یا بهبود عملکرد شبکه مناسب هستند.

**آخرین به‌روزرسانی:** 2025-08-16 00:58:57 +0330

**فایل‌های JSON**: فایل‌های `ipv4.json`، `ipv6.json` و `export.json` در پوشه `list` یا [بخش Releases](https://github.com/Argh94/IPOptimizer/releases) در دسترس هستند.

</div>
<div class="english">
## ✨ Features
- 📡 **Low-latency IPs**: IPs sorted by lowest latency.
- 🔍 **Port Scanning**: Open ports (80, 443, 8080) are automatically checked.
- ⏰ **Regular Updates**: Automatic updates every 5 hours via GitHub Actions.
- 📄 **JSON Output**: Data stored in `ipv4.json`, `ipv6.json`, and `export.json`.
</div>
</div>

<div class="code-block">
### IPv4
| IP | Suggested Ports | Latency (ms) |
|----|-------------------|------------|
| 141.101.121.249 | 80, 443, 8080 | 51 |
| 141.101.122.148 | 80, 443, 8080 | 51 |
| 141.101.120.246 | 80, 443, 8080 | 51 |
| 141.101.114.197 | 80, 443, 8080 | 51 |
| 141.101.114.245 | 80, 443, 8080 | 51 |
| 162.159.36.245 | 80, 443, 8080 | 56 |
| 172.67.66.4 | 80, 443, 8080 | 56 |
| 190.93.244.23 | 80, 443, 8080 | 57 |
| 104.18.66.1 | 80, 443, 8080 | 128 |
| 104.18.167.106 | 80, 443, 8080 | 129 |
| 104.17.196.243 | 80, 443, 8080 | 129 |
| 104.17.34.19 | 80, 443, 8080 | 130 |
| 172.67.188.197 | 80, 443, 8080 | 130 |
| 172.67.213.96 | 80, 443, 8080 | 130 |
| 104.19.202.24 | 80, 443, 8080 | 132 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|----|-------------------|------------|
| [2606:4700:9a90:adc5:812a:af3c:1fbb:ed0d] | 80, 443, 8080 | 3 |
| [2606:4700:9a90:f94a:7fe1:f3ad:2b43:f45a] | 80, 443, 8080 | 3 |
| [2606:4700:8:4a93:60cc:50da:ccf5:f039] | 80, 443, 8080 | 3 |
| [2606:4700:d0:f951:5cb3:6904:6bd6:1647] | 80, 443, 8080 | 3 |
| [2606:4700:9a90:adc5:812a:af3c:1fbb:ed0d] | 80, 443, 8080 | 3 |
| [2606:4700:9a90:f94a:7fe1:f3ad:2b43:f45a] | 80, 443, 8080 | 3 |
| [2606:4700:8:4a93:60cc:50da:ccf5:f039] | 80, 443, 8080 | 3 |
| [2606:4700:d0:f951:5cb3:6904:6bd6:1647] | 80, 443, 8080 | 3 |
| [2606:4700:9a90:adc5:812a:af3c:1fbb:ed0d] | 80, 443, 8080 | 3 |
| [2606:4700:9a90:f94a:7fe1:f3ad:2b43:f45a] | 80, 443, 8080 | 3 |
| [2606:4700:8:4a93:60cc:50da:ccf5:f039] | 80, 443, 8080 | 3 |
| [2606:4700:d0:f951:5cb3:6904:6bd6:1647] | 80, 443, 8080 | 3 |
| [2606:4700:1:f18d:5dc2:bc4f:c9c8:8e19] | 80, 443, 8080 | 9 |
| [2606:4700:1:f18d:5dc2:bc4f:c9c8:8e19] | 80, 443, 8080 | 9 |
| [2606:4700:1:f18d:5dc2:bc4f:c9c8:8e19] | 80, 443, 8080 | 9 |
</div>

<div class="container">
<div class="persian">
## 🛠️ نصب و استفاده

1. **کلون کردن مخزن**:
</div>
<div class="english code-block">
   ```bash
   git clone https://github.com/Argh94/IPOptimizer.git
   cd IPOptimizer
   ```

2. **PHP Setup**:
   - Install PHP 8.0 or higher.
   - Set the Hostmonit API key in the environment variable `HOSTMONIT_API_KEY`:
     ```bash
     export HOSTMONIT_API_KEY="your-api-key"
     ```
   - (Optional) Set the JSON files' storage path with the environment variable `LIST_DIR`:
     ```bash
     export LIST_DIR="your-custom-path"
     ```

3. **Run the Script**:
   ```bash
   php scripts/fetch_ips.php
   ```

4. **Check Output**:
   - JSON files (`ipv4.json`, `ipv6.json`, `export.json`) are available in the `list` folder or [Releases section](https://github.com/Argh94/IPOptimizer/releases).
   - IP list is updated in `README.md`.
</div>
</div>

<div class="container">
<div class="persian">
## 📬 پشتیبانی

- 🐛 **گزارش مشکلات**: [Issues](https://github.com/Argh94/IPOptimizer/issues)
- 📧 **تماس**: [ircfspace@gmail.com](mailto:ircfspace@gmail.com)
</div>
<div class="english">
## 📄 License

This project is licensed under the [MIT License](https://opensource.org/licenses/MIT).
</div>
</div>
