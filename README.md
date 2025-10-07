# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-08 00:11:57 +0330

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
| 198.41.209.186 | 80, 443, 8080 | 51 |
| 198.41.208.218 | 80, 443, 8080 | 51 |
| 198.41.209.110 | 80, 443, 8080 | 51 |
| 198.41.209.137 | 80, 443, 8080 | 51 |
| 198.41.208.113 | 80, 443, 8080 | 52 |
| 172.64.83.193 | 80, 443, 8080 | 54 |
| 172.67.74.191 | 80, 443, 8080 | 56 |
| 104.17.207.252 | 80, 443, 8080 | 130 |
| 104.16.31.142 | 80, 443, 8080 | 140 |
| 104.16.219.194 | 80, 443, 8080 | 142 |
| 104.18.237.230 | 80, 443, 8080 | 148 |
| 104.20.3.221 | 80, 443, 8080 | 151 |
| 172.67.203.34 | 80, 443, 8080 | 206 |
| 172.67.197.10 | 80, 443, 8080 | 208 |
| 172.67.233.199 | 80, 443, 8080 | 211 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:90ca:9cbb:b08d:9286:54f1:3ad0] | 80, 443, 8080 | 3 |
| [2606:4700:9c6b:fa9c:5a96:17f5:b33b:889b] | 80, 443, 8080 | 3 |
| [2606:4700:9c6b:df57:54a9:dc8f:92d2:fdf1] | 80, 443, 8080 | 3 |
| [2606:4700:3005:1e5e:5350:9b13:52e4:11ad] | 80, 443, 8080 | 3 |
| [2606:4700:90ca:9cbb:b08d:9286:54f1:3ad0] | 80, 443, 8080 | 3 |
| [2606:4700:9c6b:fa9c:5a96:17f5:b33b:889b] | 80, 443, 8080 | 3 |
| [2606:4700:9c6b:df57:54a9:dc8f:92d2:fdf1] | 80, 443, 8080 | 3 |
| [2606:4700:3005:1e5e:5350:9b13:52e4:11ad] | 80, 443, 8080 | 3 |
| [2606:4700:90ca:9cbb:b08d:9286:54f1:3ad0] | 80, 443, 8080 | 3 |
| [2606:4700:9c6b:fa9c:5a96:17f5:b33b:889b] | 80, 443, 8080 | 3 |
| [2606:4700:9c6b:df57:54a9:dc8f:92d2:fdf1] | 80, 443, 8080 | 3 |
| [2606:4700:3005:1e5e:5350:9b13:52e4:11ad] | 80, 443, 8080 | 3 |
| [2606:4700:3005:60d0:397c:3b75:360d:133d] | 80, 443, 8080 | 4 |
| [2606:4700:3005:60d0:397c:3b75:360d:133d] | 80, 443, 8080 | 4 |
| [2606:4700:3005:60d0:397c:3b75:360d:133d] | 80, 443, 8080 | 4 |

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
