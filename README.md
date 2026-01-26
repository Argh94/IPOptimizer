# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-01-27 00:22:01 +0330

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
| 162.159.252.202 | 80, 443, 8080 | 51 |
| 198.41.209.112 | 80, 443, 8080 | 51 |
| 141.101.120.139 | 80, 443, 8080 | 51 |
| 198.41.208.70 | 80, 443, 8080 | 51 |
| 162.159.235.154 | 80, 443, 8080 | 51 |
| 162.159.252.202 | 80, 443, 8080 | 51 |
| 198.41.209.112 | 80, 443, 8080 | 51 |
| 141.101.120.139 | 80, 443, 8080 | 51 |
| 198.41.208.70 | 80, 443, 8080 | 51 |
| 162.159.235.154 | 80, 443, 8080 | 51 |
| 104.19.236.36 | 80, 443, 8080 | 129 |
| 104.17.204.150 | 80, 443, 8080 | 130 |
| 172.64.67.123 | 80, 443, 8080 | 130 |
| 104.16.179.76 | 80, 443, 8080 | 131 |
| 104.16.202.162 | 80, 443, 8080 | 133 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:976c:d559:5633:bc39:6d7c:be18] | 80, 443, 8080 | 8 |
| [2606:4700:91b3:b68f:81de:bbc4:222f:5517] | 80, 443, 8080 | 8 |
| [2606:4700:976c:d559:5633:bc39:6d7c:be18] | 80, 443, 8080 | 8 |
| [2606:4700:91b3:b68f:81de:bbc4:222f:5517] | 80, 443, 8080 | 8 |
| [2606:4700:976c:d559:5633:bc39:6d7c:be18] | 80, 443, 8080 | 8 |
| [2606:4700:91b3:b68f:81de:bbc4:222f:5517] | 80, 443, 8080 | 8 |
| [2606:4700:976c:c6e5:921f:8bb2:c4f2:34c7] | 80, 443, 8080 | 9 |
| [2606:4700:8deb:9ec1:74ca:608c:38a8:ff0b] | 80, 443, 8080 | 9 |
| [2606:4700:9c6a:5292:bb12:18f8:a4ee:c3cc] | 80, 443, 8080 | 9 |
| [2606:4700:976c:c6e5:921f:8bb2:c4f2:34c7] | 80, 443, 8080 | 9 |
| [2606:4700:8deb:9ec1:74ca:608c:38a8:ff0b] | 80, 443, 8080 | 9 |
| [2606:4700:9c6a:5292:bb12:18f8:a4ee:c3cc] | 80, 443, 8080 | 9 |
| [2606:4700:976c:c6e5:921f:8bb2:c4f2:34c7] | 80, 443, 8080 | 9 |
| [2606:4700:8deb:9ec1:74ca:608c:38a8:ff0b] | 80, 443, 8080 | 9 |
| [2606:4700:9c6a:5292:bb12:18f8:a4ee:c3cc] | 80, 443, 8080 | 9 |

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
