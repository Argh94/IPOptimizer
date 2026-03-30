# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-30 11:38:08 +0330

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
| 198.41.208.251 | 80, 443, 8080 | 52 |
| 198.41.208.251 | 80, 443, 8080 | 52 |
| 198.41.208.135 | 80, 443, 8080 | 61 |
| 198.41.208.135 | 80, 443, 8080 | 61 |
| 198.41.209.39 | 80, 443, 8080 | 99 |
| 198.41.209.39 | 80, 443, 8080 | 99 |
| 198.41.209.167 | 80, 443, 8080 | 100 |
| 198.41.209.167 | 80, 443, 8080 | 100 |
| 104.17.8.57 | 80, 443, 8080 | 132 |
| 104.19.191.41 | 80, 443, 8080 | 133 |
| 104.17.60.140 | 80, 443, 8080 | 133 |
| 104.19.117.47 | 80, 443, 8080 | 133 |
| 104.16.137.116 | 80, 443, 8080 | 137 |
| 198.41.208.66 | 80, 443, 8080 | 141 |
| 198.41.208.66 | 80, 443, 8080 | 141 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9a93:c1c8:4845:2a8f:3a5a:d6ff] | 80, 443, 8080 | 3 |
| [2606:4700:d0:fc:493f:9297:b8d1:4184] | 80, 443, 8080 | 3 |
| [2606:4700:9a99:561c:b916:847a:9092:429a] | 80, 443, 8080 | 3 |
| [2606:4700:d0:dcf3:13bb:23a8:3633:3256] | 80, 443, 8080 | 3 |
| [2606:4700:9a93:c1c8:4845:2a8f:3a5a:d6ff] | 80, 443, 8080 | 3 |
| [2606:4700:d0:fc:493f:9297:b8d1:4184] | 80, 443, 8080 | 3 |
| [2606:4700:9a99:561c:b916:847a:9092:429a] | 80, 443, 8080 | 3 |
| [2606:4700:d0:dcf3:13bb:23a8:3633:3256] | 80, 443, 8080 | 3 |
| [2606:4700:9a93:c1c8:4845:2a8f:3a5a:d6ff] | 80, 443, 8080 | 3 |
| [2606:4700:d0:fc:493f:9297:b8d1:4184] | 80, 443, 8080 | 3 |
| [2606:4700:9a99:561c:b916:847a:9092:429a] | 80, 443, 8080 | 3 |
| [2606:4700:d0:dcf3:13bb:23a8:3633:3256] | 80, 443, 8080 | 3 |
| [2606:4700:9a99:cb03:fee:fff6:9:1f3f] | 80, 443, 8080 | 5 |
| [2606:4700:9a99:cb03:fee:fff6:9:1f3f] | 80, 443, 8080 | 5 |
| [2606:4700:9a99:cb03:fee:fff6:9:1f3f] | 80, 443, 8080 | 5 |

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
