# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-26 10:17:07 +0330

**JSON Files**: The `ipv4.json`, `ipv6.json`, and `export.json` files are available in the [Releases section](https://github.com/Argh94/IPOptimizer/releases).

## ✨ Features
- 📡 **Low-Latency IPs**: Sorted by lowest latency.
- 🔍 **Suggested Ports**: Open ports (80, 443, 8080) are automatically checked.
- ⏰ **Regular Updates**: Every 5 hours via GitHub Actions.
- 📄 **JSON Outputs**: Data is stored in the Releases section (`ipv4.json`, `ipv6.json`, `export.json`).

## 📋 Optimized IPs

**Note:** The displayed ports have been checked by the server, but they may vary depending on your network. For verification, use [YouGetSignal](https://www.yougetsignal.com/tools/open-ports/) (IPv4) or [Nmap](https://nmap.org/) (IPv6).

### IPv4
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| 198.41.208.202 | 80, 443, 8080 | 52 |
| 198.41.208.197 | 80, 443, 8080 | 52 |
| 190.93.245.40 | 80, 443, 8080 | 56 |
| 198.41.211.237 | 80, 443, 8080 | 67 |
| 104.17.72.120 | 80, 443, 8080 | 129 |
| 104.16.106.5 | 80, 443, 8080 | 129 |
| 104.19.68.121 | 80, 443, 8080 | 130 |
| 104.17.214.172 | 80, 443, 8080 | 140 |
| 172.67.193.74 | 80, 443, 8080 | 143 |
| 172.67.137.29 | 80, 443, 8080 | 143 |
| 172.67.142.249 | 80, 443, 8080 | 144 |
| 172.67.253.93 | 80, 443, 8080 | 145 |
| 172.64.72.33 | 80, 443, 8080 | 232 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8ddb:e07a:a8be:47dd:e433:c5e] | 80, 443, 8080 | 3 |
| [2606:4700:17:9cd8:ca1d:92a1:7bf0:6659] | 80, 443, 8080 | 3 |
| [2606:4700:8396:227:8400:c58a:ed4d:938a] | 80, 443, 8080 | 3 |
| [2606:4700:9c60:7862:385d:70cd:658a:5da9] | 80, 443, 8080 | 3 |
| [2606:4700:8ddb:663c:e7bc:70d0:194d:74a6] | 80, 443, 8080 | 3 |
| [2606:4700:8ddb:e07a:a8be:47dd:e433:c5e] | 80, 443, 8080 | 3 |
| [2606:4700:17:9cd8:ca1d:92a1:7bf0:6659] | 80, 443, 8080 | 3 |
| [2606:4700:8396:227:8400:c58a:ed4d:938a] | 80, 443, 8080 | 3 |
| [2606:4700:9c60:7862:385d:70cd:658a:5da9] | 80, 443, 8080 | 3 |
| [2606:4700:8ddb:663c:e7bc:70d0:194d:74a6] | 80, 443, 8080 | 3 |
| [2606:4700:8ddb:e07a:a8be:47dd:e433:c5e] | 80, 443, 8080 | 3 |
| [2606:4700:17:9cd8:ca1d:92a1:7bf0:6659] | 80, 443, 8080 | 3 |
| [2606:4700:8396:227:8400:c58a:ed4d:938a] | 80, 443, 8080 | 3 |
| [2606:4700:9c60:7862:385d:70cd:658a:5da9] | 80, 443, 8080 | 3 |
| [2606:4700:8ddb:663c:e7bc:70d0:194d:74a6] | 80, 443, 8080 | 3 |

## 🛠️ Installation and Usage
1. **Clone the Repository**:
   ```bash
   git clone https://github.com/Argh94/IPOptimizer.git
   ```
2. **PHP Setup**:
   - Install PHP 8.0 or higher.
   - Set the Hostmonit API key in the `HOSTMONIT_API_KEY` environment variable:
     ```bash
     export HOSTMONIT_API_KEY="your-api-key"
     ```
3. **Run the Script**:
   ```bash
   php scripts/fetch_ips.php
   ```
4. **Check Output**:
   - JSON files are available in the [Releases section](https://github.com/Argh94/IPOptimizer/releases).
   - IP list in `README.md`.

## 📬 Support
- 🐛 **Report Issues**: [Issues](https://github.com/Argh94/IPOptimizer/issues)
- 📧 **Contact**: [ircfspace@gmail.com](mailto:ircfspace@gmail.com)

## 📄 License
This project is licensed under the [MIT License](https://github.com/Argh94/HandWave/blob/main/LICENCE).
