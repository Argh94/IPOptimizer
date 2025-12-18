# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-19 00:13:44 +0330

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
| 198.41.208.112 | 80, 443, 8080 | 51 |
| 198.41.208.112 | 80, 443, 8080 | 51 |
| 198.41.209.8 | 80, 443, 8080 | 52 |
| 198.41.208.134 | 80, 443, 8080 | 52 |
| 198.41.208.120 | 80, 443, 8080 | 52 |
| 198.41.209.8 | 80, 443, 8080 | 52 |
| 198.41.208.134 | 80, 443, 8080 | 52 |
| 198.41.208.120 | 80, 443, 8080 | 52 |
| 198.41.208.234 | 80, 443, 8080 | 53 |
| 198.41.208.234 | 80, 443, 8080 | 53 |
| 162.159.36.189 | 80, 443, 8080 | 75 |
| 104.19.166.109 | 80, 443, 8080 | 127 |
| 104.16.142.211 | 80, 443, 8080 | 128 |
| 104.16.69.29 | 80, 443, 8080 | 128 |
| 104.19.94.214 | 80, 443, 8080 | 128 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:a:e26d:5ff9:94bb:d60e:4d64] | 80, 443, 8080 | 3 |
| [2606:4700:a:e26d:5ff9:94bb:d60e:4d64] | 80, 443, 8080 | 3 |
| [2606:4700:a:e26d:5ff9:94bb:d60e:4d64] | 80, 443, 8080 | 3 |
| [2606:4700:8d9b:82d1:cd88:4f3c:d990:3797] | 80, 443, 8080 | 9 |
| [2606:4700:8399:e041:659d:8685:7bc3:1f47] | 80, 443, 8080 | 9 |
| [2606:4700:8d9b:a314:b8b1:6ab6:7f59:fcdd] | 80, 443, 8080 | 9 |
| [2606:4700:8d9b:82d1:cd88:4f3c:d990:3797] | 80, 443, 8080 | 9 |
| [2606:4700:8399:e041:659d:8685:7bc3:1f47] | 80, 443, 8080 | 9 |
| [2606:4700:8d9b:a314:b8b1:6ab6:7f59:fcdd] | 80, 443, 8080 | 9 |
| [2606:4700:8d9b:82d1:cd88:4f3c:d990:3797] | 80, 443, 8080 | 9 |
| [2606:4700:8399:e041:659d:8685:7bc3:1f47] | 80, 443, 8080 | 9 |
| [2606:4700:8d9b:a314:b8b1:6ab6:7f59:fcdd] | 80, 443, 8080 | 9 |
| [2606:4700:9adf:845e:c896:e88c:b768:ffb] | 80, 443, 8080 | 11 |
| [2606:4700:9adf:845e:c896:e88c:b768:ffb] | 80, 443, 8080 | 11 |
| [2606:4700:9adf:845e:c896:e88c:b768:ffb] | 80, 443, 8080 | 11 |

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
