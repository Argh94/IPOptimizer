# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-12 00:14:20 +0330

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
| 198.41.208.41 | 80, 443, 8080 | 51 |
| 198.41.209.49 | 80, 443, 8080 | 51 |
| 198.41.208.41 | 80, 443, 8080 | 51 |
| 198.41.209.49 | 80, 443, 8080 | 51 |
| 198.41.208.72 | 80, 443, 8080 | 52 |
| 198.41.208.72 | 80, 443, 8080 | 52 |
| 198.41.209.210 | 80, 443, 8080 | 53 |
| 198.41.209.210 | 80, 443, 8080 | 53 |
| 104.17.191.109 | 80, 443, 8080 | 54 |
| 104.17.191.109 | 80, 443, 8080 | 54 |
| 198.41.222.203 | 80, 443, 8080 | 64 |
| 104.18.63.193 | 80, 443, 8080 | 127 |
| 104.19.41.56 | 80, 443, 8080 | 128 |
| 104.19.218.152 | 80, 443, 8080 | 132 |
| 104.17.203.64 | 80, 443, 8080 | 132 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:99e5:6ed8:eb67:7d0e:aea7:9db2] | 80, 443, 8080 | 3 |
| [2606:4700:9aef:3f2d:b56f:92fc:4884:f614] | 80, 443, 8080 | 3 |
| [2606:4700:99e5:2aeb:f514:d78f:2b50:92fa] | 80, 443, 8080 | 3 |
| [2606:4700:17:9332:9396:866f:176f:135e] | 80, 443, 8080 | 3 |
| [2606:4700:99e5:6ed8:eb67:7d0e:aea7:9db2] | 80, 443, 8080 | 3 |
| [2606:4700:9aef:3f2d:b56f:92fc:4884:f614] | 80, 443, 8080 | 3 |
| [2606:4700:99e5:2aeb:f514:d78f:2b50:92fa] | 80, 443, 8080 | 3 |
| [2606:4700:17:9332:9396:866f:176f:135e] | 80, 443, 8080 | 3 |
| [2606:4700:99e5:6ed8:eb67:7d0e:aea7:9db2] | 80, 443, 8080 | 3 |
| [2606:4700:9aef:3f2d:b56f:92fc:4884:f614] | 80, 443, 8080 | 3 |
| [2606:4700:99e5:2aeb:f514:d78f:2b50:92fa] | 80, 443, 8080 | 3 |
| [2606:4700:17:9332:9396:866f:176f:135e] | 80, 443, 8080 | 3 |
| [2606:4700:9c66:4f60:d67e:b49c:858c:2a79] | 80, 443, 8080 | 5 |
| [2606:4700:9c66:4f60:d67e:b49c:858c:2a79] | 80, 443, 8080 | 5 |
| [2606:4700:9c66:4f60:d67e:b49c:858c:2a79] | 80, 443, 8080 | 5 |

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
