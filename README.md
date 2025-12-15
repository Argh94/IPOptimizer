# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-15 10:27:07 +0330

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
| 198.41.209.94 | 80, 443, 8080 | 52 |
| 198.41.209.94 | 80, 443, 8080 | 52 |
| 198.41.209.41 | 80, 443, 8080 | 53 |
| 198.41.209.41 | 80, 443, 8080 | 53 |
| 198.41.209.87 | 80, 443, 8080 | 54 |
| 198.41.209.87 | 80, 443, 8080 | 54 |
| 198.41.208.119 | 80, 443, 8080 | 55 |
| 198.41.208.212 | 80, 443, 8080 | 55 |
| 198.41.208.119 | 80, 443, 8080 | 55 |
| 198.41.208.212 | 80, 443, 8080 | 55 |
| 198.41.211.17 | 80, 443, 8080 | 69 |
| 162.159.46.151 | 80, 443, 8080 | 81 |
| 104.17.20.1 | 80, 443, 8080 | 131 |
| 104.18.179.112 | 80, 443, 8080 | 133 |
| 104.19.80.239 | 80, 443, 8080 | 133 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8d74:f253:e023:c1a1:8f15:f51] | 80, 443, 8080 | 3 |
| [2606:4700:83bf:3adb:bbf2:5f9d:71b6:ff2a] | 80, 443, 8080 | 3 |
| [2606:4700:9a98:84b8:e9b0:82e0:d5cf:3b38] | 80, 443, 8080 | 3 |
| [2606:4700:9a66:f9f9:d7a1:e6f6:9e28:baf0] | 80, 443, 8080 | 3 |
| [2606:4700:8d74:f253:e023:c1a1:8f15:f51] | 80, 443, 8080 | 3 |
| [2606:4700:83bf:3adb:bbf2:5f9d:71b6:ff2a] | 80, 443, 8080 | 3 |
| [2606:4700:9a98:84b8:e9b0:82e0:d5cf:3b38] | 80, 443, 8080 | 3 |
| [2606:4700:9a66:f9f9:d7a1:e6f6:9e28:baf0] | 80, 443, 8080 | 3 |
| [2606:4700:8d74:f253:e023:c1a1:8f15:f51] | 80, 443, 8080 | 3 |
| [2606:4700:83bf:3adb:bbf2:5f9d:71b6:ff2a] | 80, 443, 8080 | 3 |
| [2606:4700:9a98:84b8:e9b0:82e0:d5cf:3b38] | 80, 443, 8080 | 3 |
| [2606:4700:9a66:f9f9:d7a1:e6f6:9e28:baf0] | 80, 443, 8080 | 3 |
| [2606:4700:8d74:b7a1:34c8:d10e:7449:ef6] | 80, 443, 8080 | 5 |
| [2606:4700:8d74:b7a1:34c8:d10e:7449:ef6] | 80, 443, 8080 | 5 |
| [2606:4700:8d74:b7a1:34c8:d10e:7449:ef6] | 80, 443, 8080 | 5 |

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
