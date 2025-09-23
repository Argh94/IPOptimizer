# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-23 10:19:34 +0330

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
| 162.159.251.118 | 80, 443, 8080 | 53 |
| 172.64.89.136 | 80, 443, 8080 | 55 |
| 173.245.49.223 | 80, 443, 8080 | 55 |
| 172.64.95.89 | 80, 443, 8080 | 55 |
| 172.67.110.92 | 80, 443, 8080 | 56 |
| 172.64.93.89 | 80, 443, 8080 | 56 |
| 104.19.117.119 | 80, 443, 8080 | 128 |
| 104.19.122.185 | 80, 443, 8080 | 129 |
| 104.17.148.222 | 80, 443, 8080 | 129 |
| 104.17.235.197 | 80, 443, 8080 | 130 |
| 104.19.94.148 | 80, 443, 8080 | 131 |
| 172.67.136.167 | 80, 443, 8080 | 145 |
| 172.67.194.40 | 80, 443, 8080 | 146 |
| 172.67.213.246 | 80, 443, 8080 | 146 |
| 172.67.153.88 | 80, 443, 8080 | 163 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9764:d295:274b:6d41:d372:8e7e] | 80, 443, 8080 | 3 |
| [2606:4700:9b07:6251:75a3:1ac6:3317:fd09] | 80, 443, 8080 | 3 |
| [2606:4700:9764:d295:274b:6d41:d372:8e7e] | 80, 443, 8080 | 3 |
| [2606:4700:9b07:6251:75a3:1ac6:3317:fd09] | 80, 443, 8080 | 3 |
| [2606:4700:9764:d295:274b:6d41:d372:8e7e] | 80, 443, 8080 | 3 |
| [2606:4700:9b07:6251:75a3:1ac6:3317:fd09] | 80, 443, 8080 | 3 |
| [2606:4700:9764:fc86:835b:9441:b179:f7a9] | 80, 443, 8080 | 4 |
| [2606:4700:9764:fc86:835b:9441:b179:f7a9] | 80, 443, 8080 | 4 |
| [2606:4700:9764:fc86:835b:9441:b179:f7a9] | 80, 443, 8080 | 4 |
| [2606:4700:83b2:a3ff:2a60:e65:f717:51df] | 80, 443, 8080 | 176 |
| [2606:4700:83b2:a3ff:2a60:e65:f717:51df] | 80, 443, 8080 | 176 |
| [2606:4700:83b2:a3ff:2a60:e65:f717:51df] | 80, 443, 8080 | 176 |
| [2606:4700:83b2:4bdc:3782:e9e1:d969:cdf1] | 80, 443, 8080 | 177 |
| [2606:4700:83b2:4bdc:3782:e9e1:d969:cdf1] | 80, 443, 8080 | 177 |
| [2606:4700:83b2:4bdc:3782:e9e1:d969:cdf1] | 80, 443, 8080 | 177 |

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
