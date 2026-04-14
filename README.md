# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-04-15 00:56:18 +0330

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
| 198.41.209.49 | 80, 443, 8080 | 53 |
| 198.41.209.112 | 80, 443, 8080 | 53 |
| 198.41.209.49 | 80, 443, 8080 | 53 |
| 198.41.209.112 | 80, 443, 8080 | 53 |
| 198.41.208.70 | 80, 443, 8080 | 54 |
| 198.41.209.113 | 80, 443, 8080 | 54 |
| 198.41.208.70 | 80, 443, 8080 | 54 |
| 198.41.209.113 | 80, 443, 8080 | 54 |
| 198.41.209.135 | 80, 443, 8080 | 55 |
| 198.41.209.135 | 80, 443, 8080 | 55 |
| 162.159.36.246 | 80, 443, 8080 | 71 |
| 104.16.194.159 | 80, 443, 8080 | 129 |
| 104.19.146.102 | 80, 443, 8080 | 130 |
| 104.18.140.138 | 80, 443, 8080 | 130 |
| 104.16.29.11 | 80, 443, 8080 | 148 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9646:1fbc:5f4c:e78c:942a:7480] | 80, 443, 8080 | 3 |
| [2606:4700:9646:e9b7:baf4:d634:440a:8d95] | 80, 443, 8080 | 3 |
| [2606:4700:9adb:648b:5ff0:ee17:e979:3d1c] | 80, 443, 8080 | 3 |
| [2606:4700:3033:acbf:bb26:e761:1e77:5a5d] | 80, 443, 8080 | 3 |
| [2606:4700:9646:1fbc:5f4c:e78c:942a:7480] | 80, 443, 8080 | 3 |
| [2606:4700:9646:e9b7:baf4:d634:440a:8d95] | 80, 443, 8080 | 3 |
| [2606:4700:9adb:648b:5ff0:ee17:e979:3d1c] | 80, 443, 8080 | 3 |
| [2606:4700:3033:acbf:bb26:e761:1e77:5a5d] | 80, 443, 8080 | 3 |
| [2606:4700:9646:1fbc:5f4c:e78c:942a:7480] | 80, 443, 8080 | 3 |
| [2606:4700:9646:e9b7:baf4:d634:440a:8d95] | 80, 443, 8080 | 3 |
| [2606:4700:9adb:648b:5ff0:ee17:e979:3d1c] | 80, 443, 8080 | 3 |
| [2606:4700:3033:acbf:bb26:e761:1e77:5a5d] | 80, 443, 8080 | 3 |
| [2606:4700:9adb:fffb:6c9:5646:a0c7:dd39] | 80, 443, 8080 | 4 |
| [2606:4700:9adb:fffb:6c9:5646:a0c7:dd39] | 80, 443, 8080 | 4 |
| [2606:4700:9adb:fffb:6c9:5646:a0c7:dd39] | 80, 443, 8080 | 4 |

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
