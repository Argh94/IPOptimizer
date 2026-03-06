# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-06 10:42:27 +0330

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
| 198.41.208.63 | 80, 443, 8080 | 52 |
| 198.41.209.10 | 80, 443, 8080 | 52 |
| 198.41.209.8 | 80, 443, 8080 | 52 |
| 198.41.208.22 | 80, 443, 8080 | 52 |
| 198.41.208.70 | 80, 443, 8080 | 52 |
| 198.41.208.63 | 80, 443, 8080 | 52 |
| 198.41.209.10 | 80, 443, 8080 | 52 |
| 198.41.209.8 | 80, 443, 8080 | 52 |
| 198.41.208.22 | 80, 443, 8080 | 52 |
| 198.41.208.70 | 80, 443, 8080 | 52 |
| 104.18.63.22 | 80, 443, 8080 | 135 |
| 104.16.173.44 | 80, 443, 8080 | 136 |
| 104.19.3.179 | 80, 443, 8080 | 141 |
| 104.19.64.206 | 80, 443, 8080 | 143 |
| 104.18.102.182 | 80, 443, 8080 | 150 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:3018:c9b7:9841:1a7c:4060:925c] | 80, 443, 8080 | 1 |
| [2606:4700:9645:fe0a:5430:d27c:c055:ae07] | 80, 443, 8080 | 1 |
| [2606:4700:99e3:e4d1:7ce7:af33:a307:7768] | 80, 443, 8080 | 1 |
| [2606:4700:9645:5713:13ae:1062:7473:d44f] | 80, 443, 8080 | 1 |
| [2606:4700:8d96:3fcd:b85b:c41b:d090:f3f7] | 80, 443, 8080 | 1 |
| [2606:4700:3018:c9b7:9841:1a7c:4060:925c] | 80, 443, 8080 | 1 |
| [2606:4700:9645:fe0a:5430:d27c:c055:ae07] | 80, 443, 8080 | 1 |
| [2606:4700:99e3:e4d1:7ce7:af33:a307:7768] | 80, 443, 8080 | 1 |
| [2606:4700:9645:5713:13ae:1062:7473:d44f] | 80, 443, 8080 | 1 |
| [2606:4700:8d96:3fcd:b85b:c41b:d090:f3f7] | 80, 443, 8080 | 1 |
| [2606:4700:3018:c9b7:9841:1a7c:4060:925c] | 80, 443, 8080 | 1 |
| [2606:4700:9645:fe0a:5430:d27c:c055:ae07] | 80, 443, 8080 | 1 |
| [2606:4700:99e3:e4d1:7ce7:af33:a307:7768] | 80, 443, 8080 | 1 |
| [2606:4700:9645:5713:13ae:1062:7473:d44f] | 80, 443, 8080 | 1 |
| [2606:4700:8d96:3fcd:b85b:c41b:d090:f3f7] | 80, 443, 8080 | 1 |

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
