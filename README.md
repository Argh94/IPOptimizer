# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-04 00:27:56 +0330

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
| 172.64.92.211 | 80, 443, 8080 | 52 |
| 104.16.9.245 | 80, 443, 8080 | 52 |
| 172.64.92.211 | 80, 443, 8080 | 52 |
| 104.16.9.245 | 80, 443, 8080 | 52 |
| 141.101.121.25 | 80, 443, 8080 | 53 |
| 141.101.121.25 | 80, 443, 8080 | 53 |
| 162.159.241.98 | 80, 443, 8080 | 57 |
| 162.159.241.98 | 80, 443, 8080 | 57 |
| 104.16.181.186 | 80, 443, 8080 | 131 |
| 104.18.65.185 | 80, 443, 8080 | 131 |
| 104.18.138.126 | 80, 443, 8080 | 131 |
| 104.17.206.91 | 80, 443, 8080 | 132 |
| 162.159.255.205 | 80, 443, 8080 | 140 |
| 162.159.232.227 | 80, 443, 8080 | 177 |
| 162.159.232.227 | 80, 443, 8080 | 177 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:25:da5e:c6b8:ab5:b76d:a0c1] | 80, 443, 8080 | 1 |
| [2606:4700:3036:ff1c:9907:41d7:408a:ec03] | 80, 443, 8080 | 1 |
| [2606:4700:9767:faeb:a3a9:92fd:763c:c5ca] | 80, 443, 8080 | 1 |
| [2606:4700:9767:5b4e:9a9d:e1f3:201b:9337] | 80, 443, 8080 | 1 |
| [2606:4700:9b03:460e:964c:5f3e:2629:dcfd] | 80, 443, 8080 | 1 |
| [2606:4700:25:da5e:c6b8:ab5:b76d:a0c1] | 80, 443, 8080 | 1 |
| [2606:4700:3036:ff1c:9907:41d7:408a:ec03] | 80, 443, 8080 | 1 |
| [2606:4700:9767:faeb:a3a9:92fd:763c:c5ca] | 80, 443, 8080 | 1 |
| [2606:4700:9767:5b4e:9a9d:e1f3:201b:9337] | 80, 443, 8080 | 1 |
| [2606:4700:9b03:460e:964c:5f3e:2629:dcfd] | 80, 443, 8080 | 1 |
| [2606:4700:25:da5e:c6b8:ab5:b76d:a0c1] | 80, 443, 8080 | 1 |
| [2606:4700:3036:ff1c:9907:41d7:408a:ec03] | 80, 443, 8080 | 1 |
| [2606:4700:9767:faeb:a3a9:92fd:763c:c5ca] | 80, 443, 8080 | 1 |
| [2606:4700:9767:5b4e:9a9d:e1f3:201b:9337] | 80, 443, 8080 | 1 |
| [2606:4700:9b03:460e:964c:5f3e:2629:dcfd] | 80, 443, 8080 | 1 |

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
