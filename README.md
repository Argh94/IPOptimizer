# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-03 10:54:42 +0330

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
| 198.41.223.103 | 80, 443, 8080 | 53 |
| 198.41.223.103 | 80, 443, 8080 | 53 |
| 162.159.235.32 | 80, 443, 8080 | 54 |
| 162.159.235.32 | 80, 443, 8080 | 54 |
| 162.159.235.120 | 80, 443, 8080 | 56 |
| 162.159.235.120 | 80, 443, 8080 | 56 |
| 104.17.121.209 | 80, 443, 8080 | 134 |
| 104.19.245.122 | 80, 443, 8080 | 142 |
| 104.18.239.219 | 80, 443, 8080 | 148 |
| 104.18.248.198 | 80, 443, 8080 | 148 |
| 104.17.131.165 | 80, 443, 8080 | 149 |
| 172.64.80.202 | 80, 443, 8080 | 174 |
| 172.64.80.202 | 80, 443, 8080 | 174 |
| 172.67.210.88 | 80, 443, 8080 | 177 |
| 172.67.210.88 | 80, 443, 8080 | 177 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:91bf:a533:afa2:4d8a:5566:5325] | 80, 443, 8080 | 3 |
| [2606:4700:3012:94eb:7f52:b142:aa6e:abb1] | 80, 443, 8080 | 3 |
| [2606:4700:976b:c6bd:94a6:ef8d:583b:c6aa] | 80, 443, 8080 | 3 |
| [2606:4700:976b:8a3a:ec7a:494e:dbd3:cd96] | 80, 443, 8080 | 3 |
| [2606:4700:9ae3:14e4:990b:eee7:94d9:1ab1] | 80, 443, 8080 | 3 |
| [2606:4700:91bf:a533:afa2:4d8a:5566:5325] | 80, 443, 8080 | 3 |
| [2606:4700:3012:94eb:7f52:b142:aa6e:abb1] | 80, 443, 8080 | 3 |
| [2606:4700:976b:c6bd:94a6:ef8d:583b:c6aa] | 80, 443, 8080 | 3 |
| [2606:4700:976b:8a3a:ec7a:494e:dbd3:cd96] | 80, 443, 8080 | 3 |
| [2606:4700:9ae3:14e4:990b:eee7:94d9:1ab1] | 80, 443, 8080 | 3 |
| [2606:4700:91bf:a533:afa2:4d8a:5566:5325] | 80, 443, 8080 | 3 |
| [2606:4700:3012:94eb:7f52:b142:aa6e:abb1] | 80, 443, 8080 | 3 |
| [2606:4700:976b:c6bd:94a6:ef8d:583b:c6aa] | 80, 443, 8080 | 3 |
| [2606:4700:976b:8a3a:ec7a:494e:dbd3:cd96] | 80, 443, 8080 | 3 |
| [2606:4700:9ae3:14e4:990b:eee7:94d9:1ab1] | 80, 443, 8080 | 3 |

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
