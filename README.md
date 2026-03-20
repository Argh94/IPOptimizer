# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-21 00:28:43 +0330

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
| 198.41.209.16 | 80, 443, 8080 | 55 |
| 198.41.209.16 | 80, 443, 8080 | 55 |
| 198.41.208.231 | 80, 443, 8080 | 56 |
| 198.41.208.169 | 80, 443, 8080 | 56 |
| 198.41.208.231 | 80, 443, 8080 | 56 |
| 198.41.208.169 | 80, 443, 8080 | 56 |
| 198.41.208.20 | 80, 443, 8080 | 57 |
| 198.41.208.20 | 80, 443, 8080 | 57 |
| 104.18.233.125 | 80, 443, 8080 | 130 |
| 104.19.62.155 | 80, 443, 8080 | 131 |
| 104.18.179.223 | 80, 443, 8080 | 132 |
| 104.19.177.210 | 80, 443, 8080 | 149 |
| 104.16.192.244 | 80, 443, 8080 | 150 |
| 162.159.235.195 | 80, 443, 8080 | 180 |
| 162.159.235.195 | 80, 443, 8080 | 180 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:4:631f:ec8e:27f2:4a4c:dab0] | 80, 443, 8080 | 1 |
| [2606:4700:9646:3ce0:8f7f:36c2:f76f:1a4c] | 80, 443, 8080 | 1 |
| [2606:4700:9b0a:afb:3e98:7639:2123:fc8d] | 80, 443, 8080 | 1 |
| [2606:4700:9a9f:5e4e:d64d:c7ba:1370:e25a] | 80, 443, 8080 | 1 |
| [2606:4700:9646:7b67:2ace:d12b:5d73:7ca8] | 80, 443, 8080 | 1 |
| [2606:4700:4:631f:ec8e:27f2:4a4c:dab0] | 80, 443, 8080 | 1 |
| [2606:4700:9646:3ce0:8f7f:36c2:f76f:1a4c] | 80, 443, 8080 | 1 |
| [2606:4700:9b0a:afb:3e98:7639:2123:fc8d] | 80, 443, 8080 | 1 |
| [2606:4700:9a9f:5e4e:d64d:c7ba:1370:e25a] | 80, 443, 8080 | 1 |
| [2606:4700:9646:7b67:2ace:d12b:5d73:7ca8] | 80, 443, 8080 | 1 |
| [2606:4700:4:631f:ec8e:27f2:4a4c:dab0] | 80, 443, 8080 | 1 |
| [2606:4700:9646:3ce0:8f7f:36c2:f76f:1a4c] | 80, 443, 8080 | 1 |
| [2606:4700:9b0a:afb:3e98:7639:2123:fc8d] | 80, 443, 8080 | 1 |
| [2606:4700:9a9f:5e4e:d64d:c7ba:1370:e25a] | 80, 443, 8080 | 1 |
| [2606:4700:9646:7b67:2ace:d12b:5d73:7ca8] | 80, 443, 8080 | 1 |

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
