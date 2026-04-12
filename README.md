# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-04-13 00:32:38 +0330

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
| 198.41.208.119 | 80, 443, 8080 | 53 |
| 198.41.208.212 | 80, 443, 8080 | 53 |
| 198.41.208.119 | 80, 443, 8080 | 53 |
| 198.41.208.212 | 80, 443, 8080 | 53 |
| 198.41.209.78 | 80, 443, 8080 | 54 |
| 198.41.209.149 | 80, 443, 8080 | 54 |
| 198.41.209.78 | 80, 443, 8080 | 54 |
| 198.41.209.149 | 80, 443, 8080 | 54 |
| 198.41.208.104 | 80, 443, 8080 | 56 |
| 198.41.208.104 | 80, 443, 8080 | 56 |
| 162.159.46.96 | 80, 443, 8080 | 73 |
| 104.17.170.122 | 80, 443, 8080 | 131 |
| 104.25.235.230 | 80, 443, 8080 | 152 |
| 104.24.253.228 | 80, 443, 8080 | 156 |
| 104.18.11.177 | 80, 443, 8080 | 163 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:130:d7dd:783f:d535:9fd2:6436] | 80, 443, 8080 | 3 |
| [2606:4700:c:2a5a:26c0:14a9:5d72:b676] | 80, 443, 8080 | 3 |
| [2606:4700:9ad6:3b2f:4233:786f:c:40e7] | 80, 443, 8080 | 3 |
| [2606:4700:130:d7dd:783f:d535:9fd2:6436] | 80, 443, 8080 | 3 |
| [2606:4700:c:2a5a:26c0:14a9:5d72:b676] | 80, 443, 8080 | 3 |
| [2606:4700:9ad6:3b2f:4233:786f:c:40e7] | 80, 443, 8080 | 3 |
| [2606:4700:130:d7dd:783f:d535:9fd2:6436] | 80, 443, 8080 | 3 |
| [2606:4700:c:2a5a:26c0:14a9:5d72:b676] | 80, 443, 8080 | 3 |
| [2606:4700:9ad6:3b2f:4233:786f:c:40e7] | 80, 443, 8080 | 3 |
| [2606:4700:83b1:1a50:12cb:44e9:cdb1:271e] | 80, 443, 8080 | 261 |
| [2606:4700:83b1:1a50:12cb:44e9:cdb1:271e] | 80, 443, 8080 | 261 |
| [2606:4700:83b1:1a50:12cb:44e9:cdb1:271e] | 80, 443, 8080 | 261 |
| [2606:4700:83b1:a355:95f9:914d:ec39:878] | 80, 443, 8080 | 262 |
| [2606:4700:83b1:a355:95f9:914d:ec39:878] | 80, 443, 8080 | 262 |
| [2606:4700:83b1:a355:95f9:914d:ec39:878] | 80, 443, 8080 | 262 |

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
