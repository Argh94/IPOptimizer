# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-01 10:22:55 +0330

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
| 172.64.88.124 | 80, 443, 8080 | 52 |
| 162.159.46.228 | 80, 443, 8080 | 52 |
| 162.159.249.217 | 80, 443, 8080 | 53 |
| 172.64.84.137 | 80, 443, 8080 | 53 |
| 141.101.114.245 | 80, 443, 8080 | 53 |
| 162.159.252.143 | 80, 443, 8080 | 55 |
| 172.67.80.239 | 80, 443, 8080 | 55 |
| 172.67.77.233 | 80, 443, 8080 | 56 |
| 172.67.171.221 | 80, 443, 8080 | 130 |
| 172.67.235.191 | 80, 443, 8080 | 130 |
| 104.19.40.165 | 80, 443, 8080 | 157 |
| 104.19.47.79 | 80, 443, 8080 | 157 |
| 104.25.95.37 | 80, 443, 8080 | 164 |
| 104.25.28.47 | 80, 443, 8080 | 166 |
| 172.67.193.22 | 80, 443, 8080 | 182 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9adb:dddf:f9fd:15eb:15ee:19d6] | 80, 443, 8080 | 3 |
| [2606:4700:8de4:438c:a01f:ecb7:4ce6:fea0] | 80, 443, 8080 | 3 |
| [2606:4700:8de4:12bb:1aac:ad9c:5552:558c] | 80, 443, 8080 | 3 |
| [2606:4700:9adb:c167:a70f:6540:f9a1:e526] | 80, 443, 8080 | 3 |
| [2606:4700:9adb:dddf:f9fd:15eb:15ee:19d6] | 80, 443, 8080 | 3 |
| [2606:4700:8de4:438c:a01f:ecb7:4ce6:fea0] | 80, 443, 8080 | 3 |
| [2606:4700:8de4:12bb:1aac:ad9c:5552:558c] | 80, 443, 8080 | 3 |
| [2606:4700:9adb:c167:a70f:6540:f9a1:e526] | 80, 443, 8080 | 3 |
| [2606:4700:9adb:dddf:f9fd:15eb:15ee:19d6] | 80, 443, 8080 | 3 |
| [2606:4700:8de4:438c:a01f:ecb7:4ce6:fea0] | 80, 443, 8080 | 3 |
| [2606:4700:8de4:12bb:1aac:ad9c:5552:558c] | 80, 443, 8080 | 3 |
| [2606:4700:9adb:c167:a70f:6540:f9a1:e526] | 80, 443, 8080 | 3 |
| [2606:4700:4403:f7a9:7fde:6e29:8aae:21aa] | 80, 443, 8080 | 4 |
| [2606:4700:4403:f7a9:7fde:6e29:8aae:21aa] | 80, 443, 8080 | 4 |
| [2606:4700:4403:f7a9:7fde:6e29:8aae:21aa] | 80, 443, 8080 | 4 |

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
