# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-18 10:15:58 +0330

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
| 172.64.95.71 | 80, 443, 8080 | 52 |
| 162.159.193.242 | 80, 443, 8080 | 55 |
| 172.67.114.70 | 80, 443, 8080 | 56 |
| 141.101.121.174 | 80, 443, 8080 | 56 |
| 172.67.118.178 | 80, 443, 8080 | 56 |
| 172.64.93.40 | 80, 443, 8080 | 56 |
| 104.17.208.148 | 80, 443, 8080 | 128 |
| 104.19.11.156 | 80, 443, 8080 | 129 |
| 104.19.57.33 | 80, 443, 8080 | 130 |
| 104.16.100.214 | 80, 443, 8080 | 131 |
| 104.16.25.168 | 80, 443, 8080 | 132 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:13d:cf52:334:52fe:47ba:551a] | 80, 443, 8080 | 3 |
| [2606:4700:9aea:f3c2:115a:8dbb:4c72:459c] | 80, 443, 8080 | 3 |
| [2606:4700:8395:d33a:82aa:a5fd:ad2d:afcf] | 80, 443, 8080 | 3 |
| [2606:4700:13d:cf52:334:52fe:47ba:551a] | 80, 443, 8080 | 3 |
| [2606:4700:9aea:f3c2:115a:8dbb:4c72:459c] | 80, 443, 8080 | 3 |
| [2606:4700:8395:d33a:82aa:a5fd:ad2d:afcf] | 80, 443, 8080 | 3 |
| [2606:4700:13d:cf52:334:52fe:47ba:551a] | 80, 443, 8080 | 3 |
| [2606:4700:9aea:f3c2:115a:8dbb:4c72:459c] | 80, 443, 8080 | 3 |
| [2606:4700:8395:d33a:82aa:a5fd:ad2d:afcf] | 80, 443, 8080 | 3 |
| [2606:4700:90c1:38d0:b778:2ecd:1374:bcbd] | 80, 443, 8080 | 4 |
| [2606:4700:90c1:38d0:b778:2ecd:1374:bcbd] | 80, 443, 8080 | 4 |
| [2606:4700:90c1:38d0:b778:2ecd:1374:bcbd] | 80, 443, 8080 | 4 |
| [2606:4700:13d:5a33:541b:f8f3:f71:38b9] | 80, 443, 8080 | 13 |
| [2606:4700:13d:5a33:541b:f8f3:f71:38b9] | 80, 443, 8080 | 13 |
| [2606:4700:13d:5a33:541b:f8f3:f71:38b9] | 80, 443, 8080 | 13 |

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
