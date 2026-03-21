# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-22 00:21:53 +0330

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
| 198.41.209.16 | 80, 443, 8080 | 55 |
| 198.41.209.16 | 80, 443, 8080 | 55 |
| 198.41.208.231 | 80, 443, 8080 | 56 |
| 198.41.208.169 | 80, 443, 8080 | 56 |
| 198.41.208.231 | 80, 443, 8080 | 56 |
| 198.41.208.169 | 80, 443, 8080 | 56 |
| 198.41.208.20 | 80, 443, 8080 | 57 |
| 198.41.208.20 | 80, 443, 8080 | 57 |
| 104.16.151.226 | 80, 443, 8080 | 130 |
| 104.18.233.205 | 80, 443, 8080 | 130 |
| 104.17.61.82 | 80, 443, 8080 | 134 |
| 104.18.82.235 | 80, 443, 8080 | 145 |
| 104.16.101.24 | 80, 443, 8080 | 146 |
| 162.159.235.195 | 80, 443, 8080 | 180 |
| 162.159.235.195 | 80, 443, 8080 | 180 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9647:62c7:220f:ae0b:aaae:3dbe] | 80, 443, 8080 | 1 |
| [2606:4700:9ad0:87f4:803a:73f0:ea32:f720] | 80, 443, 8080 | 1 |
| [2606:4700:3032:206e:8711:bb56:a842:bb60] | 80, 443, 8080 | 1 |
| [2606:4700:8d98:1ac6:4393:e338:5c75:6983] | 80, 443, 8080 | 1 |
| [2606:4700:90c8:c404:fe94:7064:bcd0:1cbe] | 80, 443, 8080 | 1 |
| [2606:4700:9647:62c7:220f:ae0b:aaae:3dbe] | 80, 443, 8080 | 1 |
| [2606:4700:9ad0:87f4:803a:73f0:ea32:f720] | 80, 443, 8080 | 1 |
| [2606:4700:3032:206e:8711:bb56:a842:bb60] | 80, 443, 8080 | 1 |
| [2606:4700:8d98:1ac6:4393:e338:5c75:6983] | 80, 443, 8080 | 1 |
| [2606:4700:90c8:c404:fe94:7064:bcd0:1cbe] | 80, 443, 8080 | 1 |
| [2606:4700:9647:62c7:220f:ae0b:aaae:3dbe] | 80, 443, 8080 | 1 |
| [2606:4700:9ad0:87f4:803a:73f0:ea32:f720] | 80, 443, 8080 | 1 |
| [2606:4700:3032:206e:8711:bb56:a842:bb60] | 80, 443, 8080 | 1 |
| [2606:4700:8d98:1ac6:4393:e338:5c75:6983] | 80, 443, 8080 | 1 |
| [2606:4700:90c8:c404:fe94:7064:bcd0:1cbe] | 80, 443, 8080 | 1 |

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
