# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-04 10:14:36 +0330

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
| 198.41.208.202 | 80, 443, 8080 | 52 |
| 198.41.209.137 | 80, 443, 8080 | 53 |
| 198.41.215.125 | 80, 443, 8080 | 54 |
| 172.67.119.171 | 80, 443, 8080 | 55 |
| 162.159.253.165 | 80, 443, 8080 | 56 |
| 198.41.222.117 | 80, 443, 8080 | 68 |
| 162.159.36.134 | 80, 443, 8080 | 95 |
| 104.19.43.20 | 80, 443, 8080 | 128 |
| 104.16.153.163 | 80, 443, 8080 | 129 |
| 104.16.101.86 | 80, 443, 8080 | 130 |
| 172.67.228.129 | 80, 443, 8080 | 218 |
| 172.67.212.128 | 80, 443, 8080 | 222 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9b06:cee0:5745:35e3:208b:e8d6] | 80, 443, 8080 | 3 |
| [2606:4700:3037:1434:7cc:adcb:a14a:cdc4] | 80, 443, 8080 | 3 |
| [2606:4700:135:edaa:32af:3d2a:46f7:131a] | 80, 443, 8080 | 3 |
| [2606:4700:9b06:cee0:5745:35e3:208b:e8d6] | 80, 443, 8080 | 3 |
| [2606:4700:3037:1434:7cc:adcb:a14a:cdc4] | 80, 443, 8080 | 3 |
| [2606:4700:135:edaa:32af:3d2a:46f7:131a] | 80, 443, 8080 | 3 |
| [2606:4700:9b06:cee0:5745:35e3:208b:e8d6] | 80, 443, 8080 | 3 |
| [2606:4700:3037:1434:7cc:adcb:a14a:cdc4] | 80, 443, 8080 | 3 |
| [2606:4700:135:edaa:32af:3d2a:46f7:131a] | 80, 443, 8080 | 3 |
| [2606:4700:83b5:d06c:ef2d:4b3f:ba75:bff6] | 80, 443, 8080 | 161 |
| [2606:4700:83b5:d06c:ef2d:4b3f:ba75:bff6] | 80, 443, 8080 | 161 |
| [2606:4700:83b5:d06c:ef2d:4b3f:ba75:bff6] | 80, 443, 8080 | 161 |
| [2606:4700:83b5:d57:bdb5:df97:486c:23ae] | 80, 443, 8080 | 171 |
| [2606:4700:83b5:d57:bdb5:df97:486c:23ae] | 80, 443, 8080 | 171 |
| [2606:4700:83b5:d57:bdb5:df97:486c:23ae] | 80, 443, 8080 | 171 |

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
