# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-30 10:19:47 +0330

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
| 141.101.114.187 | 80, 443, 8080 | 54 |
| 172.67.67.5 | 80, 443, 8080 | 61 |
| 172.67.74.253 | 80, 443, 8080 | 62 |
| 172.64.88.114 | 80, 443, 8080 | 63 |
| 162.159.46.247 | 80, 443, 8080 | 64 |
| 162.159.36.73 | 80, 443, 8080 | 64 |
| 162.159.46.247 | 80, 443, 8080 | 64 |
| 162.159.36.73 | 80, 443, 8080 | 64 |
| 104.17.26.10 | 80, 443, 8080 | 129 |
| 104.17.26.10 | 80, 443, 8080 | 129 |
| 104.18.146.237 | 80, 443, 8080 | 130 |
| 104.19.31.150 | 80, 443, 8080 | 130 |
| 104.18.146.237 | 80, 443, 8080 | 130 |
| 104.19.31.150 | 80, 443, 8080 | 130 |
| 172.64.79.160 | 80, 443, 8080 | 219 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8393:38d9:833d:3b67:9802:bc16] | 80, 443, 8080 | 3 |
| [2606:4700:8dec:d79c:9e37:2c8b:22b5:2258] | 80, 443, 8080 | 3 |
| [2606:4700:8393:38d9:833d:3b67:9802:bc16] | 80, 443, 8080 | 3 |
| [2606:4700:8dec:d79c:9e37:2c8b:22b5:2258] | 80, 443, 8080 | 3 |
| [2606:4700:8393:38d9:833d:3b67:9802:bc16] | 80, 443, 8080 | 3 |
| [2606:4700:8dec:d79c:9e37:2c8b:22b5:2258] | 80, 443, 8080 | 3 |
| [2606:4700:9c6d:673d:2a3b:41a5:e5db:82c5] | 80, 443, 8080 | 4 |
| [2606:4700:8393:c84b:ac9d:365b:d153:2461] | 80, 443, 8080 | 4 |
| [2606:4700:9c6d:673d:2a3b:41a5:e5db:82c5] | 80, 443, 8080 | 4 |
| [2606:4700:8393:c84b:ac9d:365b:d153:2461] | 80, 443, 8080 | 4 |
| [2606:4700:9c6d:673d:2a3b:41a5:e5db:82c5] | 80, 443, 8080 | 4 |
| [2606:4700:8393:c84b:ac9d:365b:d153:2461] | 80, 443, 8080 | 4 |
| [2606:4700:3013:2fff:7fd2:3e65:520a:88fa] | 80, 443, 8080 | 13 |
| [2606:4700:3013:2fff:7fd2:3e65:520a:88fa] | 80, 443, 8080 | 13 |
| [2606:4700:3013:2fff:7fd2:3e65:520a:88fa] | 80, 443, 8080 | 13 |

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
