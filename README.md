# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-27 00:11:43 +0330

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
| 198.41.208.119 | 80, 443, 8080 | 52 |
| 198.41.208.202 | 80, 443, 8080 | 52 |
| 162.159.255.54 | 80, 443, 8080 | 54 |
| 198.41.208.133 | 80, 443, 8080 | 55 |
| 190.93.246.137 | 80, 443, 8080 | 55 |
| 141.101.115.24 | 80, 443, 8080 | 56 |
| 172.64.91.21 | 80, 443, 8080 | 57 |
| 104.16.141.155 | 80, 443, 8080 | 129 |
| 104.19.126.144 | 80, 443, 8080 | 129 |
| 104.18.69.61 | 80, 443, 8080 | 130 |
| 104.17.176.243 | 80, 443, 8080 | 131 |
| 104.16.228.81 | 80, 443, 8080 | 140 |
| 172.67.165.31 | 80, 443, 8080 | 143 |
| 172.67.192.237 | 80, 443, 8080 | 144 |
| 162.159.237.2 | 80, 443, 8080 | 232 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:99eb:18a9:b6e1:af9b:e3d1:2244] | 80, 443, 8080 | 3 |
| [2606:4700:99eb:ab7f:4ba0:35ef:403:1a8a] | 80, 443, 8080 | 3 |
| [2606:4700:99eb:18a9:b6e1:af9b:e3d1:2244] | 80, 443, 8080 | 3 |
| [2606:4700:99eb:ab7f:4ba0:35ef:403:1a8a] | 80, 443, 8080 | 3 |
| [2606:4700:99eb:18a9:b6e1:af9b:e3d1:2244] | 80, 443, 8080 | 3 |
| [2606:4700:99eb:ab7f:4ba0:35ef:403:1a8a] | 80, 443, 8080 | 3 |
| [2606:4700:9a9d:5917:8104:c591:aac3:22c0] | 80, 443, 8080 | 4 |
| [2606:4700:24:ffd6:cf11:ca4f:3232:30a8] | 80, 443, 8080 | 4 |
| [2606:4700:9a6f:9ea6:fba3:dccf:83a5:c849] | 80, 443, 8080 | 4 |
| [2606:4700:9a9d:5917:8104:c591:aac3:22c0] | 80, 443, 8080 | 4 |
| [2606:4700:24:ffd6:cf11:ca4f:3232:30a8] | 80, 443, 8080 | 4 |
| [2606:4700:9a6f:9ea6:fba3:dccf:83a5:c849] | 80, 443, 8080 | 4 |
| [2606:4700:9a9d:5917:8104:c591:aac3:22c0] | 80, 443, 8080 | 4 |
| [2606:4700:24:ffd6:cf11:ca4f:3232:30a8] | 80, 443, 8080 | 4 |
| [2606:4700:9a6f:9ea6:fba3:dccf:83a5:c849] | 80, 443, 8080 | 4 |

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
