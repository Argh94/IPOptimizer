# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-09 00:08:38 +0330

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
| 198.41.208.208 | 80, 443, 8080 | 52 |
| 162.159.252.186 | 80, 443, 8080 | 52 |
| 190.93.247.220 | 80, 443, 8080 | 53 |
| 162.159.246.181 | 80, 443, 8080 | 53 |
| 162.159.134.90 | 80, 443, 8080 | 54 |
| 162.159.250.209 | 80, 443, 8080 | 56 |
| 172.67.84.232 | 80, 443, 8080 | 56 |
| 172.67.102.208 | 80, 443, 8080 | 57 |
| 172.67.232.26 | 80, 443, 8080 | 132 |
| 162.159.242.138 | 80, 443, 8080 | 137 |
| 104.19.137.29 | 80, 443, 8080 | 147 |
| 104.17.92.8 | 80, 443, 8080 | 148 |
| 172.67.193.59 | 80, 443, 8080 | 149 |
| 162.159.135.204 | 80, 443, 8080 | 152 |
| 104.21.36.180 | 80, 443, 8080 | 153 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:99ea:8069:f375:44e5:b714:7c8b] | 80, 443, 8080 | 3 |
| [2606:4700:8d90:a850:37d9:cd75:42c9:5176] | 80, 443, 8080 | 3 |
| [2606:4700:99ea:8069:f375:44e5:b714:7c8b] | 80, 443, 8080 | 3 |
| [2606:4700:8d90:a850:37d9:cd75:42c9:5176] | 80, 443, 8080 | 3 |
| [2606:4700:99ea:8069:f375:44e5:b714:7c8b] | 80, 443, 8080 | 3 |
| [2606:4700:8d90:a850:37d9:cd75:42c9:5176] | 80, 443, 8080 | 3 |
| [2606:4700:9a9b:6027:9314:c82f:9e37:33a1] | 80, 443, 8080 | 4 |
| [2606:4700:9ae5:5c98:8f75:9d2b:38e:6f08] | 80, 443, 8080 | 4 |
| [2606:4700:9a9b:8a1c:4be2:412f:1dc7:c2a5] | 80, 443, 8080 | 4 |
| [2606:4700:9a9b:6027:9314:c82f:9e37:33a1] | 80, 443, 8080 | 4 |
| [2606:4700:9ae5:5c98:8f75:9d2b:38e:6f08] | 80, 443, 8080 | 4 |
| [2606:4700:9a9b:8a1c:4be2:412f:1dc7:c2a5] | 80, 443, 8080 | 4 |
| [2606:4700:9a9b:6027:9314:c82f:9e37:33a1] | 80, 443, 8080 | 4 |
| [2606:4700:9ae5:5c98:8f75:9d2b:38e:6f08] | 80, 443, 8080 | 4 |
| [2606:4700:9a9b:8a1c:4be2:412f:1dc7:c2a5] | 80, 443, 8080 | 4 |

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
