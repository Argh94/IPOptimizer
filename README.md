# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-26 10:18:16 +0330

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
| 198.41.209.202 | 80, 443, 8080 | 51 |
| 198.41.209.137 | 80, 443, 8080 | 51 |
| 198.41.208.113 | 80, 443, 8080 | 51 |
| 198.41.209.149 | 80, 443, 8080 | 51 |
| 198.41.208.41 | 80, 443, 8080 | 51 |
| 172.67.73.50 | 80, 443, 8080 | 54 |
| 172.67.112.217 | 80, 443, 8080 | 56 |
| 172.67.86.65 | 80, 443, 8080 | 56 |
| 198.41.223.141 | 80, 443, 8080 | 86 |
| 104.17.162.54 | 80, 443, 8080 | 129 |
| 104.18.79.0 | 80, 443, 8080 | 129 |
| 104.16.96.174 | 80, 443, 8080 | 130 |
| 104.19.174.34 | 80, 443, 8080 | 132 |
| 172.67.163.43 | 80, 443, 8080 | 145 |
| 172.67.166.40 | 80, 443, 8080 | 146 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9aec:89e5:b436:b0ca:672c:4556] | 80, 443, 8080 | 3 |
| [2606:4700:9aec:62e7:6c52:f020:216b:20ad] | 80, 443, 8080 | 3 |
| [2606:4700:d0:888f:bf23:e411:7153:ec3] | 80, 443, 8080 | 3 |
| [2606:4700:4409:c666:9d83:6e9f:7548:127a] | 80, 443, 8080 | 3 |
| [2606:4700:9aec:89e5:b436:b0ca:672c:4556] | 80, 443, 8080 | 3 |
| [2606:4700:9aec:62e7:6c52:f020:216b:20ad] | 80, 443, 8080 | 3 |
| [2606:4700:d0:888f:bf23:e411:7153:ec3] | 80, 443, 8080 | 3 |
| [2606:4700:4409:c666:9d83:6e9f:7548:127a] | 80, 443, 8080 | 3 |
| [2606:4700:9aec:89e5:b436:b0ca:672c:4556] | 80, 443, 8080 | 3 |
| [2606:4700:9aec:62e7:6c52:f020:216b:20ad] | 80, 443, 8080 | 3 |
| [2606:4700:d0:888f:bf23:e411:7153:ec3] | 80, 443, 8080 | 3 |
| [2606:4700:4409:c666:9d83:6e9f:7548:127a] | 80, 443, 8080 | 3 |
| [2606:4700:101:126:85cc:ccc:827b:25f3] | 80, 443, 8080 | 4 |
| [2606:4700:101:126:85cc:ccc:827b:25f3] | 80, 443, 8080 | 4 |
| [2606:4700:101:126:85cc:ccc:827b:25f3] | 80, 443, 8080 | 4 |

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
