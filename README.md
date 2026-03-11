# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-12 00:28:33 +0330

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
| 104.17.94.139 | 80, 443, 8080 | 130 |
| 104.17.137.72 | 80, 443, 8080 | 130 |
| 104.17.233.124 | 80, 443, 8080 | 130 |
| 104.19.18.20 | 80, 443, 8080 | 130 |
| 104.17.162.152 | 80, 443, 8080 | 140 |
| 172.67.182.173 | 80, 443, 8080 | 179 |
| 172.67.176.195 | 80, 443, 8080 | 179 |
| 172.67.179.170 | 80, 443, 8080 | 179 |
| 172.67.232.186 | 80, 443, 8080 | 179 |
| 172.67.182.173 | 80, 443, 8080 | 179 |
| 172.67.176.195 | 80, 443, 8080 | 179 |
| 172.67.179.170 | 80, 443, 8080 | 179 |
| 172.67.232.186 | 80, 443, 8080 | 179 |
| 172.67.237.210 | 80, 443, 8080 | 181 |
| 172.67.237.210 | 80, 443, 8080 | 181 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8d72:b2bf:ba4d:eecf:f9:b770] | 80, 443, 8080 | 1 |
| [2606:4700:8d72:b2bf:ba4d:eecf:f9:b770] | 80, 443, 8080 | 1 |
| [2606:4700:8d72:b2bf:ba4d:eecf:f9:b770] | 80, 443, 8080 | 1 |
| [2606:4700:3024:2a90:52d4:325c:1bca:49a9] | 80, 443, 8080 | 3 |
| [2606:4700:8ded:2929:9436:10cd:4dbe:e058] | 80, 443, 8080 | 3 |
| [2606:4700:99e6:54f:2546:e248:fe8f:f56c] | 80, 443, 8080 | 3 |
| [2606:4700:3024:2a90:52d4:325c:1bca:49a9] | 80, 443, 8080 | 3 |
| [2606:4700:8ded:2929:9436:10cd:4dbe:e058] | 80, 443, 8080 | 3 |
| [2606:4700:99e6:54f:2546:e248:fe8f:f56c] | 80, 443, 8080 | 3 |
| [2606:4700:3024:2a90:52d4:325c:1bca:49a9] | 80, 443, 8080 | 3 |
| [2606:4700:8ded:2929:9436:10cd:4dbe:e058] | 80, 443, 8080 | 3 |
| [2606:4700:99e6:54f:2546:e248:fe8f:f56c] | 80, 443, 8080 | 3 |
| [2606:4700:3024:4b26:cba0:e756:21ed:5a3b] | 80, 443, 8080 | 13 |
| [2606:4700:3024:4b26:cba0:e756:21ed:5a3b] | 80, 443, 8080 | 13 |
| [2606:4700:3024:4b26:cba0:e756:21ed:5a3b] | 80, 443, 8080 | 13 |

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
