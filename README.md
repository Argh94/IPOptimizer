# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-01-20 10:31:05 +0330

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
| 198.41.208.113 | 80, 443, 8080 | 50 |
| 198.41.208.113 | 80, 443, 8080 | 50 |
| 198.41.209.100 | 80, 443, 8080 | 51 |
| 198.41.209.149 | 80, 443, 8080 | 51 |
| 198.41.209.100 | 80, 443, 8080 | 51 |
| 198.41.209.149 | 80, 443, 8080 | 51 |
| 172.64.83.34 | 80, 443, 8080 | 52 |
| 172.64.87.104 | 80, 443, 8080 | 52 |
| 172.64.83.34 | 80, 443, 8080 | 52 |
| 172.64.87.104 | 80, 443, 8080 | 52 |
| 162.159.129.78 | 80, 443, 8080 | 141 |
| 104.18.20.245 | 80, 443, 8080 | 149 |
| 104.19.102.27 | 80, 443, 8080 | 149 |
| 104.19.164.101 | 80, 443, 8080 | 153 |
| 104.24.212.206 | 80, 443, 8080 | 154 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:3027:4080:afb3:46e6:5f26:f590] | 80, 443, 8080 | 3 |
| [2606:4700:3027:4080:afb3:46e6:5f26:f590] | 80, 443, 8080 | 3 |
| [2606:4700:3027:4080:afb3:46e6:5f26:f590] | 80, 443, 8080 | 3 |
| [2606:4700:27:43cb:13e7:d4e7:24df:b010] | 80, 443, 8080 | 4 |
| [2606:4700:27:43cb:13e7:d4e7:24df:b010] | 80, 443, 8080 | 4 |
| [2606:4700:27:43cb:13e7:d4e7:24df:b010] | 80, 443, 8080 | 4 |
| [2606:4700:839a:67f3:2dd7:54d0:3c0a:9819] | 80, 443, 8080 | 8 |
| [2606:4700:839a:67f3:2dd7:54d0:3c0a:9819] | 80, 443, 8080 | 8 |
| [2606:4700:839a:67f3:2dd7:54d0:3c0a:9819] | 80, 443, 8080 | 8 |
| [2606:4700:8dee:7670:e39c:9a91:ba00:ed74] | 80, 443, 8080 | 9 |
| [2606:4700:839a:f012:9ab6:6d22:61fc:65b9] | 80, 443, 8080 | 9 |
| [2606:4700:8dee:7670:e39c:9a91:ba00:ed74] | 80, 443, 8080 | 9 |
| [2606:4700:839a:f012:9ab6:6d22:61fc:65b9] | 80, 443, 8080 | 9 |
| [2606:4700:8dee:7670:e39c:9a91:ba00:ed74] | 80, 443, 8080 | 9 |
| [2606:4700:839a:f012:9ab6:6d22:61fc:65b9] | 80, 443, 8080 | 9 |

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
