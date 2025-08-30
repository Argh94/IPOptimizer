# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-08-31 00:05:25 +0330

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
| 198.41.222.9 | 80, 443, 8080 | 52 |
| 198.41.208.73 | 80, 443, 8080 | 54 |
| 172.67.91.31 | 80, 443, 8080 | 56 |
| 172.64.81.210 | 80, 443, 8080 | 56 |
| 141.101.113.199 | 80, 443, 8080 | 56 |
| 172.67.98.56 | 80, 443, 8080 | 57 |
| 198.41.208.15 | 80, 443, 8080 | 60 |
| 190.93.247.46 | 80, 443, 8080 | 99 |
| 104.17.205.84 | 80, 443, 8080 | 127 |
| 104.17.126.1 | 80, 443, 8080 | 129 |
| 162.159.36.134 | 80, 443, 8080 | 129 |
| 104.16.98.61 | 80, 443, 8080 | 129 |
| 104.16.184.213 | 80, 443, 8080 | 130 |
| 172.67.236.24 | 80, 443, 8080 | 131 |
| 162.159.242.159 | 80, 443, 8080 | 134 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8d77:9f3d:bcaa:5cb7:c994:5392] | 80, 443, 8080 | 4 |
| [2606:4700:3055:2218:c4d8:9839:e284:ea2d] | 80, 443, 8080 | 4 |
| [2606:4700:c:91f0:64ef:50ae:b3dc:8524] | 80, 443, 8080 | 4 |
| [2606:4700:8d77:9f3d:bcaa:5cb7:c994:5392] | 80, 443, 8080 | 4 |
| [2606:4700:3055:2218:c4d8:9839:e284:ea2d] | 80, 443, 8080 | 4 |
| [2606:4700:c:91f0:64ef:50ae:b3dc:8524] | 80, 443, 8080 | 4 |
| [2606:4700:8d77:9f3d:bcaa:5cb7:c994:5392] | 80, 443, 8080 | 4 |
| [2606:4700:3055:2218:c4d8:9839:e284:ea2d] | 80, 443, 8080 | 4 |
| [2606:4700:c:91f0:64ef:50ae:b3dc:8524] | 80, 443, 8080 | 4 |
| [2606:4700:3056:57ca:d521:78ae:523a:ca43] | 80, 443, 8080 | 6 |
| [2606:4700:3056:57ca:d521:78ae:523a:ca43] | 80, 443, 8080 | 6 |
| [2606:4700:3056:57ca:d521:78ae:523a:ca43] | 80, 443, 8080 | 6 |
| [2606:4700:9b05:8380:6ea9:371c:d5d1:9f7f] | 80, 443, 8080 | 9 |
| [2606:4700:9b05:8380:6ea9:371c:d5d1:9f7f] | 80, 443, 8080 | 9 |
| [2606:4700:9b05:8380:6ea9:371c:d5d1:9f7f] | 80, 443, 8080 | 9 |

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
