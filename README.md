# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-04-10 00:41:21 +0330

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
| 198.41.208.146 | 80, 443, 8080 | 55 |
| 198.41.209.211 | 80, 443, 8080 | 55 |
| 198.41.208.212 | 80, 443, 8080 | 55 |
| 198.41.209.9 | 80, 443, 8080 | 55 |
| 198.41.208.146 | 80, 443, 8080 | 55 |
| 198.41.209.211 | 80, 443, 8080 | 55 |
| 198.41.208.212 | 80, 443, 8080 | 55 |
| 198.41.209.9 | 80, 443, 8080 | 55 |
| 198.41.208.137 | 80, 443, 8080 | 56 |
| 198.41.208.137 | 80, 443, 8080 | 56 |
| 162.159.46.212 | 80, 443, 8080 | 88 |
| 104.17.116.45 | 80, 443, 8080 | 130 |
| 104.19.93.152 | 80, 443, 8080 | 130 |
| 104.21.234.194 | 80, 443, 8080 | 141 |
| 104.16.112.142 | 80, 443, 8080 | 150 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8d73:9a72:e31e:b35:3120:3ce3] | 80, 443, 8080 | 1 |
| [2606:4700:8de3:17f9:f901:4212:a8e6:b090] | 80, 443, 8080 | 1 |
| [2606:4700:3032:2e54:1fc5:6868:b7ec:eac2] | 80, 443, 8080 | 1 |
| [2606:4700:3039:6f6e:b984:437:f96d:4d90] | 80, 443, 8080 | 1 |
| [2606:4700:3039:def6:ffd9:f94:5592:47a8] | 80, 443, 8080 | 1 |
| [2606:4700:8d73:9a72:e31e:b35:3120:3ce3] | 80, 443, 8080 | 1 |
| [2606:4700:8de3:17f9:f901:4212:a8e6:b090] | 80, 443, 8080 | 1 |
| [2606:4700:3032:2e54:1fc5:6868:b7ec:eac2] | 80, 443, 8080 | 1 |
| [2606:4700:3039:6f6e:b984:437:f96d:4d90] | 80, 443, 8080 | 1 |
| [2606:4700:3039:def6:ffd9:f94:5592:47a8] | 80, 443, 8080 | 1 |
| [2606:4700:8d73:9a72:e31e:b35:3120:3ce3] | 80, 443, 8080 | 1 |
| [2606:4700:8de3:17f9:f901:4212:a8e6:b090] | 80, 443, 8080 | 1 |
| [2606:4700:3032:2e54:1fc5:6868:b7ec:eac2] | 80, 443, 8080 | 1 |
| [2606:4700:3039:6f6e:b984:437:f96d:4d90] | 80, 443, 8080 | 1 |
| [2606:4700:3039:def6:ffd9:f94:5592:47a8] | 80, 443, 8080 | 1 |

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
