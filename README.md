# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-02-01 10:41:01 +0330

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
| 198.41.209.50 | 80, 443, 8080 | 50 |
| 198.41.208.113 | 80, 443, 8080 | 50 |
| 198.41.209.50 | 80, 443, 8080 | 50 |
| 198.41.208.113 | 80, 443, 8080 | 50 |
| 162.159.247.213 | 80, 443, 8080 | 51 |
| 172.64.80.136 | 80, 443, 8080 | 51 |
| 198.41.211.218 | 80, 443, 8080 | 51 |
| 162.159.247.213 | 80, 443, 8080 | 51 |
| 172.64.80.136 | 80, 443, 8080 | 51 |
| 198.41.211.218 | 80, 443, 8080 | 51 |
| 172.64.94.178 | 80, 443, 8080 | 133 |
| 104.17.56.137 | 80, 443, 8080 | 133 |
| 104.17.197.44 | 80, 443, 8080 | 134 |
| 104.19.47.232 | 80, 443, 8080 | 139 |
| 104.18.154.129 | 80, 443, 8080 | 139 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9c6a:8132:1ff1:b10b:fe90:90ee] | 80, 443, 8080 | 3 |
| [2606:4700:9c6a:4fc4:9dda:8f88:2af5:5e1b] | 80, 443, 8080 | 3 |
| [2606:4700:90db:8ab:945a:cf97:ea28:3b3a] | 80, 443, 8080 | 3 |
| [2606:4700:99e0:21f4:4985:9a04:cc6d:4de2] | 80, 443, 8080 | 3 |
| [2606:4700:8d79:1b35:bd19:24b:21d1:b38b] | 80, 443, 8080 | 3 |
| [2606:4700:9c6a:8132:1ff1:b10b:fe90:90ee] | 80, 443, 8080 | 3 |
| [2606:4700:9c6a:4fc4:9dda:8f88:2af5:5e1b] | 80, 443, 8080 | 3 |
| [2606:4700:90db:8ab:945a:cf97:ea28:3b3a] | 80, 443, 8080 | 3 |
| [2606:4700:99e0:21f4:4985:9a04:cc6d:4de2] | 80, 443, 8080 | 3 |
| [2606:4700:8d79:1b35:bd19:24b:21d1:b38b] | 80, 443, 8080 | 3 |
| [2606:4700:9c6a:8132:1ff1:b10b:fe90:90ee] | 80, 443, 8080 | 3 |
| [2606:4700:9c6a:4fc4:9dda:8f88:2af5:5e1b] | 80, 443, 8080 | 3 |
| [2606:4700:90db:8ab:945a:cf97:ea28:3b3a] | 80, 443, 8080 | 3 |
| [2606:4700:99e0:21f4:4985:9a04:cc6d:4de2] | 80, 443, 8080 | 3 |
| [2606:4700:8d79:1b35:bd19:24b:21d1:b38b] | 80, 443, 8080 | 3 |

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
