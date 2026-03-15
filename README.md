# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-16 00:25:06 +0330

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
| 198.41.208.229 | 80, 443, 8080 | 52 |
| 198.41.208.229 | 80, 443, 8080 | 52 |
| 198.41.208.46 | 80, 443, 8080 | 54 |
| 198.41.208.251 | 80, 443, 8080 | 54 |
| 198.41.208.46 | 80, 443, 8080 | 54 |
| 198.41.208.251 | 80, 443, 8080 | 54 |
| 198.41.209.187 | 80, 443, 8080 | 55 |
| 198.41.209.187 | 80, 443, 8080 | 55 |
| 198.41.209.111 | 80, 443, 8080 | 56 |
| 198.41.209.111 | 80, 443, 8080 | 56 |
| 162.159.46.149 | 80, 443, 8080 | 64 |
| 198.41.211.5 | 80, 443, 8080 | 79 |
| 104.17.66.19 | 80, 443, 8080 | 131 |
| 104.16.114.5 | 80, 443, 8080 | 139 |
| 162.159.251.208 | 80, 443, 8080 | 143 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9765:c938:e005:32e5:bd5a:a0d2] | 80, 443, 8080 | 1 |
| [2606:4700:9a97:1e43:d635:1f3b:8b28:6558] | 80, 443, 8080 | 1 |
| [2606:4700:9a97:2129:7b41:84eb:a2f4:5d21] | 80, 443, 8080 | 1 |
| [2606:4700:9765:d6f7:7ec8:2bec:1754:6278] | 80, 443, 8080 | 1 |
| [2606:4700:91b8:7abb:42d5:9311:bb93:9f70] | 80, 443, 8080 | 1 |
| [2606:4700:9765:c938:e005:32e5:bd5a:a0d2] | 80, 443, 8080 | 1 |
| [2606:4700:9a97:1e43:d635:1f3b:8b28:6558] | 80, 443, 8080 | 1 |
| [2606:4700:9a97:2129:7b41:84eb:a2f4:5d21] | 80, 443, 8080 | 1 |
| [2606:4700:9765:d6f7:7ec8:2bec:1754:6278] | 80, 443, 8080 | 1 |
| [2606:4700:91b8:7abb:42d5:9311:bb93:9f70] | 80, 443, 8080 | 1 |
| [2606:4700:9765:c938:e005:32e5:bd5a:a0d2] | 80, 443, 8080 | 1 |
| [2606:4700:9a97:1e43:d635:1f3b:8b28:6558] | 80, 443, 8080 | 1 |
| [2606:4700:9a97:2129:7b41:84eb:a2f4:5d21] | 80, 443, 8080 | 1 |
| [2606:4700:9765:d6f7:7ec8:2bec:1754:6278] | 80, 443, 8080 | 1 |
| [2606:4700:91b8:7abb:42d5:9311:bb93:9f70] | 80, 443, 8080 | 1 |

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
