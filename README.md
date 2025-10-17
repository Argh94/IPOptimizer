# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-17 10:18:05 +0330

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
| 198.41.209.210 | 80, 443, 8080 | 50 |
| 141.101.120.246 | 80, 443, 8080 | 51 |
| 198.41.209.120 | 80, 443, 8080 | 51 |
| 141.101.120.187 | 80, 443, 8080 | 52 |
| 172.64.95.71 | 80, 443, 8080 | 52 |
| 172.64.85.247 | 80, 443, 8080 | 55 |
| 172.67.95.79 | 80, 443, 8080 | 57 |
| 198.41.222.133 | 80, 443, 8080 | 70 |
| 104.17.185.231 | 80, 443, 8080 | 130 |
| 104.19.178.253 | 80, 443, 8080 | 131 |
| 104.18.69.233 | 80, 443, 8080 | 140 |
| 104.17.166.122 | 80, 443, 8080 | 144 |
| 172.67.178.187 | 80, 443, 8080 | 145 |
| 172.67.128.96 | 80, 443, 8080 | 145 |
| 162.159.234.119 | 80, 443, 8080 | 218 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:4700:d6ed:b782:1632:7684:7abf] | 80, 443, 8080 | 3 |
| [2606:4700:4700:f00:d640:ce47:d945:3601] | 80, 443, 8080 | 3 |
| [2606:4700:4700:d6ed:b782:1632:7684:7abf] | 80, 443, 8080 | 3 |
| [2606:4700:4700:f00:d640:ce47:d945:3601] | 80, 443, 8080 | 3 |
| [2606:4700:4700:d6ed:b782:1632:7684:7abf] | 80, 443, 8080 | 3 |
| [2606:4700:4700:f00:d640:ce47:d945:3601] | 80, 443, 8080 | 3 |
| [2606:4700:133:c841:1619:21e0:3011:381d] | 80, 443, 8080 | 4 |
| [2606:4700:133:c841:1619:21e0:3011:381d] | 80, 443, 8080 | 4 |
| [2606:4700:133:c841:1619:21e0:3011:381d] | 80, 443, 8080 | 4 |
| [2606:4700:133:e2f6:b141:e9dc:c326:fbb3] | 80, 443, 8080 | 13 |
| [2606:4700:3019:479:101c:b506:ba6c:7b72] | 80, 443, 8080 | 13 |
| [2606:4700:133:e2f6:b141:e9dc:c326:fbb3] | 80, 443, 8080 | 13 |
| [2606:4700:3019:479:101c:b506:ba6c:7b72] | 80, 443, 8080 | 13 |
| [2606:4700:133:e2f6:b141:e9dc:c326:fbb3] | 80, 443, 8080 | 13 |
| [2606:4700:3019:479:101c:b506:ba6c:7b72] | 80, 443, 8080 | 13 |

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
