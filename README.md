# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-07 00:04:00 +0330

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
| 198.41.208.113 | 80, 443, 8080 | 51 |
| 198.41.208.208 | 80, 443, 8080 | 52 |
| 141.101.120.86 | 80, 443, 8080 | 52 |
| 162.159.252.186 | 80, 443, 8080 | 52 |
| 190.93.247.220 | 80, 443, 8080 | 53 |
| 172.67.122.176 | 80, 443, 8080 | 55 |
| 162.159.241.103 | 80, 443, 8080 | 55 |
| 162.159.242.192 | 80, 443, 8080 | 56 |
| 104.19.196.210 | 80, 443, 8080 | 129 |
| 104.17.150.81 | 80, 443, 8080 | 129 |
| 104.19.71.50 | 80, 443, 8080 | 129 |
| 104.18.66.69 | 80, 443, 8080 | 129 |
| 104.18.163.181 | 80, 443, 8080 | 130 |
| 172.67.246.241 | 80, 443, 8080 | 132 |
| 172.67.198.38 | 80, 443, 8080 | 132 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:91b8:dc5c:3a61:feb6:7a4b:c4d8] | 80, 443, 8080 | 3 |
| [2606:4700:9b04:b60d:84de:4c7c:aec9:ae6a] | 80, 443, 8080 | 3 |
| [2606:4700:3017:a108:c274:edd2:f2a2:9061] | 80, 443, 8080 | 3 |
| [2606:4700:9b04:2cd0:115c:c9ad:2624:2eac] | 80, 443, 8080 | 3 |
| [2606:4700:91b8:dc5c:3a61:feb6:7a4b:c4d8] | 80, 443, 8080 | 3 |
| [2606:4700:9b04:b60d:84de:4c7c:aec9:ae6a] | 80, 443, 8080 | 3 |
| [2606:4700:3017:a108:c274:edd2:f2a2:9061] | 80, 443, 8080 | 3 |
| [2606:4700:9b04:2cd0:115c:c9ad:2624:2eac] | 80, 443, 8080 | 3 |
| [2606:4700:91b8:dc5c:3a61:feb6:7a4b:c4d8] | 80, 443, 8080 | 3 |
| [2606:4700:9b04:b60d:84de:4c7c:aec9:ae6a] | 80, 443, 8080 | 3 |
| [2606:4700:3017:a108:c274:edd2:f2a2:9061] | 80, 443, 8080 | 3 |
| [2606:4700:9b04:2cd0:115c:c9ad:2624:2eac] | 80, 443, 8080 | 3 |
| [2606:4700:91b8:e340:7ed3:ac92:98d4:ec51] | 80, 443, 8080 | 4 |
| [2606:4700:91b8:e340:7ed3:ac92:98d4:ec51] | 80, 443, 8080 | 4 |
| [2606:4700:91b8:e340:7ed3:ac92:98d4:ec51] | 80, 443, 8080 | 4 |

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
