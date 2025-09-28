# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-28 10:16:21 +0330

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
| 198.41.209.149 | 80, 443, 8080 | 52 |
| 162.159.248.175 | 80, 443, 8080 | 53 |
| 172.64.89.136 | 80, 443, 8080 | 54 |
| 162.159.46.201 | 80, 443, 8080 | 54 |
| 162.159.241.43 | 80, 443, 8080 | 55 |
| 162.159.133.177 | 80, 443, 8080 | 57 |
| 104.16.243.140 | 80, 443, 8080 | 128 |
| 104.18.139.124 | 80, 443, 8080 | 129 |
| 104.16.87.9 | 80, 443, 8080 | 131 |
| 104.16.238.251 | 80, 443, 8080 | 133 |
| 104.19.177.54 | 80, 443, 8080 | 133 |
| 172.67.164.216 | 80, 443, 8080 | 145 |
| 172.67.228.35 | 80, 443, 8080 | 146 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8d97:b277:cb0d:d149:592a:dba5] | 80, 443, 8080 | 3 |
| [2606:4700:9ad5:41ac:ec62:8d0c:339b:748f] | 80, 443, 8080 | 3 |
| [2606:4700:9ad5:2779:84e0:5bfa:adce:c35] | 80, 443, 8080 | 3 |
| [2606:4700:8d97:b277:cb0d:d149:592a:dba5] | 80, 443, 8080 | 3 |
| [2606:4700:9ad5:41ac:ec62:8d0c:339b:748f] | 80, 443, 8080 | 3 |
| [2606:4700:9ad5:2779:84e0:5bfa:adce:c35] | 80, 443, 8080 | 3 |
| [2606:4700:8d97:b277:cb0d:d149:592a:dba5] | 80, 443, 8080 | 3 |
| [2606:4700:9ad5:41ac:ec62:8d0c:339b:748f] | 80, 443, 8080 | 3 |
| [2606:4700:9ad5:2779:84e0:5bfa:adce:c35] | 80, 443, 8080 | 3 |
| [2606:4700:1e:c4e4:d35b:ad0f:e44b:89a0] | 80, 443, 8080 | 13 |
| [2606:4700:1e:3a0e:698:d37e:61b5:c9e] | 80, 443, 8080 | 13 |
| [2606:4700:1e:c4e4:d35b:ad0f:e44b:89a0] | 80, 443, 8080 | 13 |
| [2606:4700:1e:3a0e:698:d37e:61b5:c9e] | 80, 443, 8080 | 13 |
| [2606:4700:1e:c4e4:d35b:ad0f:e44b:89a0] | 80, 443, 8080 | 13 |
| [2606:4700:1e:3a0e:698:d37e:61b5:c9e] | 80, 443, 8080 | 13 |

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
