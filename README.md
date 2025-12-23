# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-24 00:15:13 +0330

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
| 198.41.209.132 | 80, 443, 8080 | 52 |
| 190.93.247.192 | 80, 443, 8080 | 52 |
| 198.41.209.54 | 80, 443, 8080 | 52 |
| 198.41.209.132 | 80, 443, 8080 | 52 |
| 190.93.247.192 | 80, 443, 8080 | 52 |
| 198.41.209.54 | 80, 443, 8080 | 52 |
| 104.16.254.60 | 80, 443, 8080 | 53 |
| 104.17.215.28 | 80, 443, 8080 | 53 |
| 104.16.254.60 | 80, 443, 8080 | 53 |
| 104.17.215.28 | 80, 443, 8080 | 53 |
| 198.41.222.34 | 80, 443, 8080 | 81 |
| 104.19.45.183 | 80, 443, 8080 | 128 |
| 104.17.31.39 | 80, 443, 8080 | 129 |
| 104.18.95.114 | 80, 443, 8080 | 129 |
| 104.19.104.109 | 80, 443, 8080 | 129 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:3038:9e6f:13a5:b28e:a63d:f548] | 80, 443, 8080 | 3 |
| [2606:4700:24:1df:7563:9c6a:2148:fae2] | 80, 443, 8080 | 3 |
| [2606:4700:3038:9e6f:13a5:b28e:a63d:f548] | 80, 443, 8080 | 3 |
| [2606:4700:24:1df:7563:9c6a:2148:fae2] | 80, 443, 8080 | 3 |
| [2606:4700:3038:9e6f:13a5:b28e:a63d:f548] | 80, 443, 8080 | 3 |
| [2606:4700:24:1df:7563:9c6a:2148:fae2] | 80, 443, 8080 | 3 |
| [2606:4700:99eb:b62b:eb48:a3f6:8d1c:a7f4] | 80, 443, 8080 | 9 |
| [2606:4700:99eb:6378:f3b0:6bb0:f9be:a6db] | 80, 443, 8080 | 9 |
| [2606:4700:8de3:5bf9:45b6:18df:4140:3626] | 80, 443, 8080 | 9 |
| [2606:4700:99eb:b62b:eb48:a3f6:8d1c:a7f4] | 80, 443, 8080 | 9 |
| [2606:4700:99eb:6378:f3b0:6bb0:f9be:a6db] | 80, 443, 8080 | 9 |
| [2606:4700:8de3:5bf9:45b6:18df:4140:3626] | 80, 443, 8080 | 9 |
| [2606:4700:99eb:b62b:eb48:a3f6:8d1c:a7f4] | 80, 443, 8080 | 9 |
| [2606:4700:99eb:6378:f3b0:6bb0:f9be:a6db] | 80, 443, 8080 | 9 |
| [2606:4700:8de3:5bf9:45b6:18df:4140:3626] | 80, 443, 8080 | 9 |

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
