# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-08-27 10:18:57 +0330

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
| 198.41.209.105 | 80, 443, 8080 | 51 |
| 172.64.94.214 | 80, 443, 8080 | 52 |
| 162.159.248.156 | 80, 443, 8080 | 53 |
| 172.64.80.112 | 80, 443, 8080 | 54 |
| 172.67.114.198 | 80, 443, 8080 | 56 |
| 172.64.83.6 | 80, 443, 8080 | 56 |
| 172.67.93.253 | 80, 443, 8080 | 57 |
| 162.159.153.240 | 80, 443, 8080 | 79 |
| 172.67.128.70 | 80, 443, 8080 | 130 |
| 172.67.200.63 | 80, 443, 8080 | 131 |
| 104.17.35.44 | 80, 443, 8080 | 133 |
| 104.19.137.50 | 80, 443, 8080 | 140 |
| 104.18.139.195 | 80, 443, 8080 | 140 |
| 104.16.188.197 | 80, 443, 8080 | 142 |
| 104.16.0.220 | 80, 443, 8080 | 148 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:91b2:b9a:cdc1:68a0:971d:8dd4] | 80, 443, 8080 | 3 |
| [2606:4700:91bb:f3ce:9ea4:76a5:fa3f:3afa] | 80, 443, 8080 | 3 |
| [2606:4700:91b2:b9a:cdc1:68a0:971d:8dd4] | 80, 443, 8080 | 3 |
| [2606:4700:91bb:f3ce:9ea4:76a5:fa3f:3afa] | 80, 443, 8080 | 3 |
| [2606:4700:91b2:b9a:cdc1:68a0:971d:8dd4] | 80, 443, 8080 | 3 |
| [2606:4700:91bb:f3ce:9ea4:76a5:fa3f:3afa] | 80, 443, 8080 | 3 |
| [2606:4700:91b2:85d8:27f8:32a1:5724:5248] | 80, 443, 8080 | 4 |
| [2606:4700:91b2:85d8:27f8:32a1:5724:5248] | 80, 443, 8080 | 4 |
| [2606:4700:91b2:85d8:27f8:32a1:5724:5248] | 80, 443, 8080 | 4 |
| [2606:4700:83bd:3a8d:3426:b081:406:3858] | 80, 443, 8080 | 157 |
| [2606:4700:83bd:3a8d:3426:b081:406:3858] | 80, 443, 8080 | 157 |
| [2606:4700:83bd:3a8d:3426:b081:406:3858] | 80, 443, 8080 | 157 |
| [2606:4700:83bd:2ab3:44d7:b4e0:767e:5610] | 80, 443, 8080 | 165 |
| [2606:4700:83bd:2ab3:44d7:b4e0:767e:5610] | 80, 443, 8080 | 165 |
| [2606:4700:83bd:2ab3:44d7:b4e0:767e:5610] | 80, 443, 8080 | 165 |

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
