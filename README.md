# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-04-10 11:36:14 +0330

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
| 198.41.208.146 | 80, 443, 8080 | 55 |
| 198.41.209.211 | 80, 443, 8080 | 55 |
| 198.41.208.212 | 80, 443, 8080 | 55 |
| 198.41.209.9 | 80, 443, 8080 | 55 |
| 198.41.208.146 | 80, 443, 8080 | 55 |
| 198.41.209.211 | 80, 443, 8080 | 55 |
| 198.41.208.212 | 80, 443, 8080 | 55 |
| 198.41.209.9 | 80, 443, 8080 | 55 |
| 198.41.208.137 | 80, 443, 8080 | 56 |
| 198.41.208.137 | 80, 443, 8080 | 56 |
| 198.41.211.204 | 80, 443, 8080 | 71 |
| 198.41.211.95 | 80, 443, 8080 | 87 |
| 198.41.222.83 | 80, 443, 8080 | 93 |
| 104.17.139.98 | 80, 443, 8080 | 142 |
| 104.17.246.4 | 80, 443, 8080 | 146 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9adb:6b51:f4c7:afa3:e9da:6d24] | 80, 443, 8080 | 3 |
| [2606:4700:8caa:153b:6df1:7a61:bc73:e9a0] | 80, 443, 8080 | 3 |
| [2606:4700:3030:584:6139:8945:f0e8:2d60] | 80, 443, 8080 | 3 |
| [2606:4700:90cd:ac43:6720:211e:4750:94b5] | 80, 443, 8080 | 3 |
| [2606:4700:90cd:35ba:aae6:5fb1:42db:64f7] | 80, 443, 8080 | 3 |
| [2606:4700:9adb:6b51:f4c7:afa3:e9da:6d24] | 80, 443, 8080 | 3 |
| [2606:4700:8caa:153b:6df1:7a61:bc73:e9a0] | 80, 443, 8080 | 3 |
| [2606:4700:3030:584:6139:8945:f0e8:2d60] | 80, 443, 8080 | 3 |
| [2606:4700:90cd:ac43:6720:211e:4750:94b5] | 80, 443, 8080 | 3 |
| [2606:4700:90cd:35ba:aae6:5fb1:42db:64f7] | 80, 443, 8080 | 3 |
| [2606:4700:9adb:6b51:f4c7:afa3:e9da:6d24] | 80, 443, 8080 | 3 |
| [2606:4700:8caa:153b:6df1:7a61:bc73:e9a0] | 80, 443, 8080 | 3 |
| [2606:4700:3030:584:6139:8945:f0e8:2d60] | 80, 443, 8080 | 3 |
| [2606:4700:90cd:ac43:6720:211e:4750:94b5] | 80, 443, 8080 | 3 |
| [2606:4700:90cd:35ba:aae6:5fb1:42db:64f7] | 80, 443, 8080 | 3 |

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
