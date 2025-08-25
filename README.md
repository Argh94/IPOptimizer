# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-08-25 10:22:39 +0330

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
| 198.41.209.199 | 80, 443, 8080 | 53 |
| 172.64.94.214 | 80, 443, 8080 | 53 |
| 141.101.123.102 | 80, 443, 8080 | 54 |
| 162.159.235.254 | 80, 443, 8080 | 54 |
| 162.159.247.184 | 80, 443, 8080 | 54 |
| 172.64.92.115 | 80, 443, 8080 | 55 |
| 162.159.236.129 | 80, 443, 8080 | 56 |
| 141.101.122.146 | 80, 443, 8080 | 56 |
| 172.67.171.250 | 80, 443, 8080 | 130 |
| 172.67.138.111 | 80, 443, 8080 | 131 |
| 104.18.117.240 | 80, 443, 8080 | 138 |
| 104.16.235.86 | 80, 443, 8080 | 153 |
| 104.16.206.198 | 80, 443, 8080 | 153 |
| 172.67.206.140 | 80, 443, 8080 | 155 |
| 104.18.125.88 | 80, 443, 8080 | 158 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:2a:9cc3:77ec:bc90:b5da:b97] | 80, 443, 8080 | 3 |
| [2606:4700:2a:8b8f:875a:9898:3116:e700] | 80, 443, 8080 | 3 |
| [2606:4700:2a:9cc3:77ec:bc90:b5da:b97] | 80, 443, 8080 | 3 |
| [2606:4700:2a:8b8f:875a:9898:3116:e700] | 80, 443, 8080 | 3 |
| [2606:4700:2a:9cc3:77ec:bc90:b5da:b97] | 80, 443, 8080 | 3 |
| [2606:4700:2a:8b8f:875a:9898:3116:e700] | 80, 443, 8080 | 3 |
| [2606:4700:9644:e11c:2d5d:8f7d:3c3e:3b4f] | 80, 443, 8080 | 4 |
| [2606:4700:9a93:c2c:d97f:d768:63fa:f2b7] | 80, 443, 8080 | 4 |
| [2606:4700:9644:788a:ff7e:412d:3ad2:62f1] | 80, 443, 8080 | 4 |
| [2606:4700:9644:e11c:2d5d:8f7d:3c3e:3b4f] | 80, 443, 8080 | 4 |
| [2606:4700:9a93:c2c:d97f:d768:63fa:f2b7] | 80, 443, 8080 | 4 |
| [2606:4700:9644:788a:ff7e:412d:3ad2:62f1] | 80, 443, 8080 | 4 |
| [2606:4700:9644:e11c:2d5d:8f7d:3c3e:3b4f] | 80, 443, 8080 | 4 |
| [2606:4700:9a93:c2c:d97f:d768:63fa:f2b7] | 80, 443, 8080 | 4 |
| [2606:4700:9644:788a:ff7e:412d:3ad2:62f1] | 80, 443, 8080 | 4 |

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
