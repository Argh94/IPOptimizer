# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-19 00:10:33 +0330

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
| 162.159.249.92 | 80, 443, 8080 | 54 |
| 141.101.114.6 | 80, 443, 8080 | 54 |
| 162.159.254.6 | 80, 443, 8080 | 54 |
| 198.41.222.233 | 80, 443, 8080 | 55 |
| 198.41.223.169 | 80, 443, 8080 | 55 |
| 172.67.67.161 | 80, 443, 8080 | 56 |
| 172.67.92.208 | 80, 443, 8080 | 56 |
| 198.41.211.214 | 80, 443, 8080 | 86 |
| 198.41.211.14 | 80, 443, 8080 | 91 |
| 104.18.80.14 | 80, 443, 8080 | 129 |
| 104.19.204.131 | 80, 443, 8080 | 129 |
| 104.18.237.23 | 80, 443, 8080 | 132 |
| 172.67.162.204 | 80, 443, 8080 | 145 |
| 172.67.198.255 | 80, 443, 8080 | 145 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9c63:a306:3228:b417:5fed:408e] | 80, 443, 8080 | 3 |
| [2606:4700:9c63:4e16:cd39:19fe:897f:3e56] | 80, 443, 8080 | 3 |
| [2606:4700:2d:4ec5:1673:3d2e:23fb:d9e3] | 80, 443, 8080 | 3 |
| [2606:4700:9c63:a306:3228:b417:5fed:408e] | 80, 443, 8080 | 3 |
| [2606:4700:9c63:4e16:cd39:19fe:897f:3e56] | 80, 443, 8080 | 3 |
| [2606:4700:2d:4ec5:1673:3d2e:23fb:d9e3] | 80, 443, 8080 | 3 |
| [2606:4700:9c63:a306:3228:b417:5fed:408e] | 80, 443, 8080 | 3 |
| [2606:4700:9c63:4e16:cd39:19fe:897f:3e56] | 80, 443, 8080 | 3 |
| [2606:4700:2d:4ec5:1673:3d2e:23fb:d9e3] | 80, 443, 8080 | 3 |
| [2606:4700:8394:23b7:13b3:ce8a:44e:82c6] | 80, 443, 8080 | 4 |
| [2606:4700:8394:23b7:13b3:ce8a:44e:82c6] | 80, 443, 8080 | 4 |
| [2606:4700:8394:23b7:13b3:ce8a:44e:82c6] | 80, 443, 8080 | 4 |
| [2606:4700:2d:1c1b:4179:ec0b:ae5:2962] | 80, 443, 8080 | 12 |
| [2606:4700:2d:1c1b:4179:ec0b:ae5:2962] | 80, 443, 8080 | 12 |
| [2606:4700:2d:1c1b:4179:ec0b:ae5:2962] | 80, 443, 8080 | 12 |

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
