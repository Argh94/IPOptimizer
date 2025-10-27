# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-27 10:23:55 +0330

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
| 198.41.208.112 | 80, 443, 8080 | 51 |
| 198.41.209.186 | 80, 443, 8080 | 51 |
| 190.93.245.178 | 80, 443, 8080 | 54 |
| 198.41.209.120 | 80, 443, 8080 | 54 |
| 198.41.208.133 | 80, 443, 8080 | 55 |
| 162.159.255.215 | 80, 443, 8080 | 55 |
| 190.93.246.167 | 80, 443, 8080 | 56 |
| 162.159.241.57 | 80, 443, 8080 | 57 |
| 162.159.36.72 | 80, 443, 8080 | 69 |
| 104.18.144.195 | 80, 443, 8080 | 129 |
| 104.19.190.94 | 80, 443, 8080 | 129 |
| 172.64.88.69 | 80, 443, 8080 | 130 |
| 104.16.82.88 | 80, 443, 8080 | 130 |
| 172.67.138.173 | 80, 443, 8080 | 150 |
| 172.67.185.61 | 80, 443, 8080 | 150 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:83be:1560:740f:ee8c:c831:ba70] | 80, 443, 8080 | 3 |
| [2606:4700:90da:7fe2:bf7d:bf92:ba2c:dc25] | 80, 443, 8080 | 3 |
| [2606:4700:90da:f8a0:4b90:d9df:b216:a704] | 80, 443, 8080 | 3 |
| [2606:4700:83be:1560:740f:ee8c:c831:ba70] | 80, 443, 8080 | 3 |
| [2606:4700:90da:7fe2:bf7d:bf92:ba2c:dc25] | 80, 443, 8080 | 3 |
| [2606:4700:90da:f8a0:4b90:d9df:b216:a704] | 80, 443, 8080 | 3 |
| [2606:4700:83be:1560:740f:ee8c:c831:ba70] | 80, 443, 8080 | 3 |
| [2606:4700:90da:7fe2:bf7d:bf92:ba2c:dc25] | 80, 443, 8080 | 3 |
| [2606:4700:90da:f8a0:4b90:d9df:b216:a704] | 80, 443, 8080 | 3 |
| [2606:4700:83be:be8a:49e9:c219:9883:2077] | 80, 443, 8080 | 4 |
| [2606:4700:83be:be8a:49e9:c219:9883:2077] | 80, 443, 8080 | 4 |
| [2606:4700:83be:be8a:49e9:c219:9883:2077] | 80, 443, 8080 | 4 |
| [2606:4700:8de8:efdc:7ea6:5cdc:bd75:333a] | 80, 443, 8080 | 16 |
| [2606:4700:8de8:efdc:7ea6:5cdc:bd75:333a] | 80, 443, 8080 | 16 |
| [2606:4700:8de8:efdc:7ea6:5cdc:bd75:333a] | 80, 443, 8080 | 16 |

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
