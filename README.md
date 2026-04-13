# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-04-14 00:54:35 +0330

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
| 104.16.0.65 | 80, 443, 8080 | 129 |
| 104.16.167.229 | 80, 443, 8080 | 130 |
| 104.19.126.233 | 80, 443, 8080 | 130 |
| 104.18.197.186 | 80, 443, 8080 | 130 |
| 104.16.24.235 | 80, 443, 8080 | 131 |
| 172.67.254.126 | 80, 443, 8080 | 179 |
| 172.67.91.40 | 80, 443, 8080 | 179 |
| 172.67.254.126 | 80, 443, 8080 | 179 |
| 172.67.91.40 | 80, 443, 8080 | 179 |
| 172.64.93.92 | 80, 443, 8080 | 180 |
| 172.67.225.92 | 80, 443, 8080 | 180 |
| 172.64.93.92 | 80, 443, 8080 | 180 |
| 172.67.225.92 | 80, 443, 8080 | 180 |
| 172.64.76.27 | 80, 443, 8080 | 184 |
| 172.64.76.27 | 80, 443, 8080 | 184 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8de8:45c0:12f4:7a51:ebae:5859] | 80, 443, 8080 | 3 |
| [2606:4700:9648:4fae:d4ee:98af:1631:365d] | 80, 443, 8080 | 3 |
| [2606:4700:9648:fdf4:49c2:fbde:c0f0:308] | 80, 443, 8080 | 3 |
| [2606:4700:8cac:63a2:71a5:b9f3:d609:804d] | 80, 443, 8080 | 3 |
| [2606:4700:8de8:45c0:12f4:7a51:ebae:5859] | 80, 443, 8080 | 3 |
| [2606:4700:9648:4fae:d4ee:98af:1631:365d] | 80, 443, 8080 | 3 |
| [2606:4700:9648:fdf4:49c2:fbde:c0f0:308] | 80, 443, 8080 | 3 |
| [2606:4700:8cac:63a2:71a5:b9f3:d609:804d] | 80, 443, 8080 | 3 |
| [2606:4700:8de8:45c0:12f4:7a51:ebae:5859] | 80, 443, 8080 | 3 |
| [2606:4700:9648:4fae:d4ee:98af:1631:365d] | 80, 443, 8080 | 3 |
| [2606:4700:9648:fdf4:49c2:fbde:c0f0:308] | 80, 443, 8080 | 3 |
| [2606:4700:8cac:63a2:71a5:b9f3:d609:804d] | 80, 443, 8080 | 3 |
| [2606:4700:101:7265:cf9a:2ab3:c53c:2bcf] | 80, 443, 8080 | 13 |
| [2606:4700:101:7265:cf9a:2ab3:c53c:2bcf] | 80, 443, 8080 | 13 |
| [2606:4700:101:7265:cf9a:2ab3:c53c:2bcf] | 80, 443, 8080 | 13 |

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
