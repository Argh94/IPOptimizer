# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-11-04 10:21:10 +0330

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
| 198.41.209.100 | 80, 443, 8080 | 52 |
| 141.101.120.103 | 80, 443, 8080 | 52 |
| 198.41.209.71 | 80, 443, 8080 | 53 |
| 172.64.81.126 | 80, 443, 8080 | 56 |
| 162.159.129.202 | 80, 443, 8080 | 57 |
| 162.159.46.22 | 80, 443, 8080 | 91 |
| 104.19.36.166 | 80, 443, 8080 | 130 |
| 104.19.114.10 | 80, 443, 8080 | 132 |
| 104.17.169.104 | 80, 443, 8080 | 133 |
| 104.17.65.87 | 80, 443, 8080 | 141 |
| 172.67.129.46 | 80, 443, 8080 | 143 |
| 172.67.209.26 | 80, 443, 8080 | 143 |
| 172.67.248.6 | 80, 443, 8080 | 143 |
| 104.25.152.70 | 80, 443, 8080 | 178 |
| 104.16.213.235 | 80, 443, 8080 | 190 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8de6:d6e5:e45c:c1f8:b913:9063] | 80, 443, 8080 | 3 |
| [2606:4700:90db:c56c:3bfc:ccf0:1b60:dbff] | 80, 443, 8080 | 3 |
| [2606:4700:91b8:b54e:1c0:a330:590f:33db] | 80, 443, 8080 | 3 |
| [2606:4700:8de6:d6e5:e45c:c1f8:b913:9063] | 80, 443, 8080 | 3 |
| [2606:4700:90db:c56c:3bfc:ccf0:1b60:dbff] | 80, 443, 8080 | 3 |
| [2606:4700:91b8:b54e:1c0:a330:590f:33db] | 80, 443, 8080 | 3 |
| [2606:4700:8de6:d6e5:e45c:c1f8:b913:9063] | 80, 443, 8080 | 3 |
| [2606:4700:90db:c56c:3bfc:ccf0:1b60:dbff] | 80, 443, 8080 | 3 |
| [2606:4700:91b8:b54e:1c0:a330:590f:33db] | 80, 443, 8080 | 3 |
| [2606:4700:83b8:93b6:cc3a:5034:69cf:8a0f] | 80, 443, 8080 | 147 |
| [2606:4700:83b8:a29a:91e:ced8:14e5:383c] | 80, 443, 8080 | 147 |
| [2606:4700:83b8:93b6:cc3a:5034:69cf:8a0f] | 80, 443, 8080 | 147 |
| [2606:4700:83b8:a29a:91e:ced8:14e5:383c] | 80, 443, 8080 | 147 |
| [2606:4700:83b8:93b6:cc3a:5034:69cf:8a0f] | 80, 443, 8080 | 147 |
| [2606:4700:83b8:a29a:91e:ced8:14e5:383c] | 80, 443, 8080 | 147 |

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
