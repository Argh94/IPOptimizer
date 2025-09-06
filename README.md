# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-06 10:14:56 +0330

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
| 172.64.95.112 | 80, 443, 8080 | 52 |
| 172.64.86.244 | 80, 443, 8080 | 52 |
| 190.93.246.121 | 80, 443, 8080 | 52 |
| 162.159.248.156 | 80, 443, 8080 | 53 |
| 172.64.80.218 | 80, 443, 8080 | 53 |
| 198.41.215.56 | 80, 443, 8080 | 55 |
| 172.67.72.170 | 80, 443, 8080 | 55 |
| 172.67.75.225 | 80, 443, 8080 | 56 |
| 172.67.232.156 | 80, 443, 8080 | 132 |
| 172.67.215.241 | 80, 443, 8080 | 137 |
| 104.21.116.55 | 80, 443, 8080 | 157 |
| 104.19.175.63 | 80, 443, 8080 | 159 |
| 104.19.143.198 | 80, 443, 8080 | 163 |
| 162.159.234.212 | 80, 443, 8080 | 167 |
| 104.18.121.122 | 80, 443, 8080 | 175 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:99e0:27c5:2685:20bd:c89c:7773] | 80, 443, 8080 | 3 |
| [2606:4700:99e0:27c5:2685:20bd:c89c:7773] | 80, 443, 8080 | 3 |
| [2606:4700:99e0:27c5:2685:20bd:c89c:7773] | 80, 443, 8080 | 3 |
| [2606:4700:5:4209:2526:299a:39a6:4a8e] | 80, 443, 8080 | 4 |
| [2606:4700:99e0:b27d:2e86:fb9a:3243:302c] | 80, 443, 8080 | 4 |
| [2606:4700:5:4209:2526:299a:39a6:4a8e] | 80, 443, 8080 | 4 |
| [2606:4700:99e0:b27d:2e86:fb9a:3243:302c] | 80, 443, 8080 | 4 |
| [2606:4700:5:4209:2526:299a:39a6:4a8e] | 80, 443, 8080 | 4 |
| [2606:4700:99e0:b27d:2e86:fb9a:3243:302c] | 80, 443, 8080 | 4 |
| [2606:4700:83b3:1200:e3b7:e041:33a0:bb7d] | 80, 443, 8080 | 170 |
| [2606:4700:83b3:a176:98cf:fbb7:1bd0:fa87] | 80, 443, 8080 | 170 |
| [2606:4700:83b3:1200:e3b7:e041:33a0:bb7d] | 80, 443, 8080 | 170 |
| [2606:4700:83b3:a176:98cf:fbb7:1bd0:fa87] | 80, 443, 8080 | 170 |
| [2606:4700:83b3:1200:e3b7:e041:33a0:bb7d] | 80, 443, 8080 | 170 |
| [2606:4700:83b3:a176:98cf:fbb7:1bd0:fa87] | 80, 443, 8080 | 170 |

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
