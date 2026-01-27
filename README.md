# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-01-27 10:29:48 +0330

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
| 198.41.209.110 | 80, 443, 8080 | 49 |
| 198.41.209.110 | 80, 443, 8080 | 49 |
| 172.64.80.136 | 80, 443, 8080 | 51 |
| 198.41.208.120 | 80, 443, 8080 | 51 |
| 141.101.120.246 | 80, 443, 8080 | 51 |
| 172.64.80.136 | 80, 443, 8080 | 51 |
| 198.41.208.120 | 80, 443, 8080 | 51 |
| 141.101.120.246 | 80, 443, 8080 | 51 |
| 141.101.114.197 | 80, 443, 8080 | 52 |
| 141.101.114.197 | 80, 443, 8080 | 52 |
| 104.19.219.62 | 80, 443, 8080 | 130 |
| 104.17.142.241 | 80, 443, 8080 | 131 |
| 104.19.35.118 | 80, 443, 8080 | 134 |
| 104.18.187.220 | 80, 443, 8080 | 134 |
| 104.17.109.245 | 80, 443, 8080 | 142 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9b0b:fda9:2a12:1148:a5ec:5fcb] | 80, 443, 8080 | 9 |
| [2606:4700:9a63:dea6:b49f:e87f:c335:c4d7] | 80, 443, 8080 | 9 |
| [2606:4700:9a63:1259:83b7:d7e:d028:c31e] | 80, 443, 8080 | 9 |
| [2606:4700:9b0b:fda9:2a12:1148:a5ec:5fcb] | 80, 443, 8080 | 9 |
| [2606:4700:9a63:dea6:b49f:e87f:c335:c4d7] | 80, 443, 8080 | 9 |
| [2606:4700:9a63:1259:83b7:d7e:d028:c31e] | 80, 443, 8080 | 9 |
| [2606:4700:9b0b:fda9:2a12:1148:a5ec:5fcb] | 80, 443, 8080 | 9 |
| [2606:4700:9a63:dea6:b49f:e87f:c335:c4d7] | 80, 443, 8080 | 9 |
| [2606:4700:9a63:1259:83b7:d7e:d028:c31e] | 80, 443, 8080 | 9 |
| [2606:4700:9aea:9f36:ab3e:7dd8:e991:1ab8] | 80, 443, 8080 | 10 |
| [2606:4700:9aea:cc8b:e3e:76bb:e589:30f3] | 80, 443, 8080 | 10 |
| [2606:4700:9aea:9f36:ab3e:7dd8:e991:1ab8] | 80, 443, 8080 | 10 |
| [2606:4700:9aea:cc8b:e3e:76bb:e589:30f3] | 80, 443, 8080 | 10 |
| [2606:4700:9aea:9f36:ab3e:7dd8:e991:1ab8] | 80, 443, 8080 | 10 |
| [2606:4700:9aea:cc8b:e3e:76bb:e589:30f3] | 80, 443, 8080 | 10 |

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
