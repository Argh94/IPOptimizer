# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-22 10:20:52 +0330

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
| 141.101.120.175 | 80, 443, 8080 | 56 |
| 162.159.244.183 | 80, 443, 8080 | 56 |
| 172.67.105.248 | 80, 443, 8080 | 57 |
| 198.41.222.123 | 80, 443, 8080 | 70 |
| 198.41.222.123 | 80, 443, 8080 | 70 |
| 104.16.179.47 | 80, 443, 8080 | 128 |
| 104.16.179.47 | 80, 443, 8080 | 128 |
| 104.17.8.187 | 80, 443, 8080 | 129 |
| 104.17.8.187 | 80, 443, 8080 | 129 |
| 104.18.168.188 | 80, 443, 8080 | 130 |
| 104.18.168.188 | 80, 443, 8080 | 130 |
| 104.18.150.73 | 80, 443, 8080 | 139 |
| 104.18.150.73 | 80, 443, 8080 | 139 |
| 172.67.149.249 | 80, 443, 8080 | 144 |
| 172.67.216.168 | 80, 443, 8080 | 144 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:99e8:4969:9d2a:df40:15de:4207] | 80, 443, 8080 | 3 |
| [2606:4700:8391:3d7a:f0ff:ac13:4992:f0d8] | 80, 443, 8080 | 3 |
| [2606:4700:90c1:58c1:3fe0:c5b1:94cf:f725] | 80, 443, 8080 | 3 |
| [2606:4700:90c1:9cc9:e1b:5938:ed87:368c] | 80, 443, 8080 | 3 |
| [2606:4700:99e8:4969:9d2a:df40:15de:4207] | 80, 443, 8080 | 3 |
| [2606:4700:8391:3d7a:f0ff:ac13:4992:f0d8] | 80, 443, 8080 | 3 |
| [2606:4700:90c1:58c1:3fe0:c5b1:94cf:f725] | 80, 443, 8080 | 3 |
| [2606:4700:90c1:9cc9:e1b:5938:ed87:368c] | 80, 443, 8080 | 3 |
| [2606:4700:99e8:4969:9d2a:df40:15de:4207] | 80, 443, 8080 | 3 |
| [2606:4700:8391:3d7a:f0ff:ac13:4992:f0d8] | 80, 443, 8080 | 3 |
| [2606:4700:90c1:58c1:3fe0:c5b1:94cf:f725] | 80, 443, 8080 | 3 |
| [2606:4700:90c1:9cc9:e1b:5938:ed87:368c] | 80, 443, 8080 | 3 |
| [2606:4700:8391:9679:2a34:f9a6:3b6f:9afa] | 80, 443, 8080 | 4 |
| [2606:4700:8391:9679:2a34:f9a6:3b6f:9afa] | 80, 443, 8080 | 4 |
| [2606:4700:8391:9679:2a34:f9a6:3b6f:9afa] | 80, 443, 8080 | 4 |

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
