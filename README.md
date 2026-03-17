# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-18 00:36:29 +0330

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
| 198.41.209.193 | 80, 443, 8080 | 54 |
| 198.41.209.199 | 80, 443, 8080 | 54 |
| 198.41.209.193 | 80, 443, 8080 | 54 |
| 198.41.209.199 | 80, 443, 8080 | 54 |
| 198.41.208.127 | 80, 443, 8080 | 55 |
| 198.41.208.127 | 80, 443, 8080 | 55 |
| 198.41.208.85 | 80, 443, 8080 | 57 |
| 198.41.208.85 | 80, 443, 8080 | 57 |
| 198.41.208.50 | 80, 443, 8080 | 58 |
| 198.41.208.50 | 80, 443, 8080 | 58 |
| 162.159.36.220 | 80, 443, 8080 | 66 |
| 104.17.186.197 | 80, 443, 8080 | 130 |
| 104.17.145.143 | 80, 443, 8080 | 130 |
| 104.16.83.35 | 80, 443, 8080 | 131 |
| 141.101.114.193 | 80, 443, 8080 | 140 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:91be:cdae:2ebf:efd:abba:5fde] | 80, 443, 8080 | 3 |
| [2606:4700:3020:b6a1:6666:550e:7a06:550f] | 80, 443, 8080 | 3 |
| [2606:4700:91be:c416:7bee:9b32:b6d5:c5df] | 80, 443, 8080 | 3 |
| [2606:4700:9760:40ef:60bf:98cb:7a15:6ae8] | 80, 443, 8080 | 3 |
| [2606:4700:9760:1957:747c:d2ce:8bf9:1dd2] | 80, 443, 8080 | 3 |
| [2606:4700:91be:cdae:2ebf:efd:abba:5fde] | 80, 443, 8080 | 3 |
| [2606:4700:3020:b6a1:6666:550e:7a06:550f] | 80, 443, 8080 | 3 |
| [2606:4700:91be:c416:7bee:9b32:b6d5:c5df] | 80, 443, 8080 | 3 |
| [2606:4700:9760:40ef:60bf:98cb:7a15:6ae8] | 80, 443, 8080 | 3 |
| [2606:4700:9760:1957:747c:d2ce:8bf9:1dd2] | 80, 443, 8080 | 3 |
| [2606:4700:91be:cdae:2ebf:efd:abba:5fde] | 80, 443, 8080 | 3 |
| [2606:4700:3020:b6a1:6666:550e:7a06:550f] | 80, 443, 8080 | 3 |
| [2606:4700:91be:c416:7bee:9b32:b6d5:c5df] | 80, 443, 8080 | 3 |
| [2606:4700:9760:40ef:60bf:98cb:7a15:6ae8] | 80, 443, 8080 | 3 |
| [2606:4700:9760:1957:747c:d2ce:8bf9:1dd2] | 80, 443, 8080 | 3 |

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
