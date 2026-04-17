# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-04-18 00:40:44 +0330

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
| 198.41.208.28 | 80, 443, 8080 | 56 |
| 198.41.208.28 | 80, 443, 8080 | 56 |
| 198.41.209.57 | 80, 443, 8080 | 62 |
| 198.41.209.57 | 80, 443, 8080 | 62 |
| 104.16.1.160 | 80, 443, 8080 | 135 |
| 104.16.186.45 | 80, 443, 8080 | 152 |
| 104.16.120.64 | 80, 443, 8080 | 153 |
| 104.27.79.237 | 80, 443, 8080 | 156 |
| 104.19.181.147 | 80, 443, 8080 | 160 |
| 162.159.160.4 | 80, 443, 8080 | 187 |
| 162.159.160.4 | 80, 443, 8080 | 187 |
| 172.67.127.0 | 80, 443, 8080 | 197 |
| 172.67.127.0 | 80, 443, 8080 | 197 |
| 172.67.119.204 | 80, 443, 8080 | 200 |
| 172.67.119.204 | 80, 443, 8080 | 200 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:90dc:364f:8d13:7ffe:5ecc:73a0] | 80, 443, 8080 | 1 |
| [2606:4700:90dc:364f:8d13:7ffe:5ecc:73a0] | 80, 443, 8080 | 1 |
| [2606:4700:90dc:364f:8d13:7ffe:5ecc:73a0] | 80, 443, 8080 | 1 |
| [2606:4700:9644:3cc8:b48d:511f:290b:e92b] | 80, 443, 8080 | 3 |
| [2606:4700:9c62:d0fb:ba43:9a6b:f62a:d45b] | 80, 443, 8080 | 3 |
| [2606:4700:9c62:d3d6:1df1:1830:7c91:3dc2] | 80, 443, 8080 | 3 |
| [2606:4700:9aeb:eb20:31af:fd56:9c3a:9150] | 80, 443, 8080 | 3 |
| [2606:4700:9644:3cc8:b48d:511f:290b:e92b] | 80, 443, 8080 | 3 |
| [2606:4700:9c62:d0fb:ba43:9a6b:f62a:d45b] | 80, 443, 8080 | 3 |
| [2606:4700:9c62:d3d6:1df1:1830:7c91:3dc2] | 80, 443, 8080 | 3 |
| [2606:4700:9aeb:eb20:31af:fd56:9c3a:9150] | 80, 443, 8080 | 3 |
| [2606:4700:9644:3cc8:b48d:511f:290b:e92b] | 80, 443, 8080 | 3 |
| [2606:4700:9c62:d0fb:ba43:9a6b:f62a:d45b] | 80, 443, 8080 | 3 |
| [2606:4700:9c62:d3d6:1df1:1830:7c91:3dc2] | 80, 443, 8080 | 3 |
| [2606:4700:9aeb:eb20:31af:fd56:9c3a:9150] | 80, 443, 8080 | 3 |

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
