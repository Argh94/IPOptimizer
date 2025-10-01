# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-01 10:18:55 +0330

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
| 198.41.208.215 | 80, 443, 8080 | 52 |
| 141.101.121.4 | 80, 443, 8080 | 53 |
| 198.41.209.149 | 80, 443, 8080 | 54 |
| 198.41.209.10 | 80, 443, 8080 | 54 |
| 162.159.248.175 | 80, 443, 8080 | 54 |
| 162.159.242.148 | 80, 443, 8080 | 54 |
| 162.159.240.16 | 80, 443, 8080 | 55 |
| 172.67.76.76 | 80, 443, 8080 | 56 |
| 198.41.211.211 | 80, 443, 8080 | 70 |
| 104.18.158.54 | 80, 443, 8080 | 128 |
| 104.17.197.143 | 80, 443, 8080 | 129 |
| 104.17.51.232 | 80, 443, 8080 | 129 |
| 104.19.14.24 | 80, 443, 8080 | 130 |
| 172.67.215.71 | 80, 443, 8080 | 142 |
| 172.67.175.194 | 80, 443, 8080 | 143 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:3011:fbc2:9216:9a75:4c5:5af8] | 80, 443, 8080 | 3 |
| [2606:4700:4408:6391:1287:8866:480d:6bf7] | 80, 443, 8080 | 3 |
| [2606:4700:8d90:9fad:493c:df7e:583e:1a5f] | 80, 443, 8080 | 3 |
| [2606:4700:3011:fbc2:9216:9a75:4c5:5af8] | 80, 443, 8080 | 3 |
| [2606:4700:4408:6391:1287:8866:480d:6bf7] | 80, 443, 8080 | 3 |
| [2606:4700:8d90:9fad:493c:df7e:583e:1a5f] | 80, 443, 8080 | 3 |
| [2606:4700:3011:fbc2:9216:9a75:4c5:5af8] | 80, 443, 8080 | 3 |
| [2606:4700:4408:6391:1287:8866:480d:6bf7] | 80, 443, 8080 | 3 |
| [2606:4700:8d90:9fad:493c:df7e:583e:1a5f] | 80, 443, 8080 | 3 |
| [2606:4700:9a9f:e1bf:4c54:7509:e0d4:9e5] | 80, 443, 8080 | 4 |
| [2606:4700:9a9f:e1bf:4c54:7509:e0d4:9e5] | 80, 443, 8080 | 4 |
| [2606:4700:9a9f:e1bf:4c54:7509:e0d4:9e5] | 80, 443, 8080 | 4 |
| [2606:4700:4408:ed46:5406:758e:4a6d:eefe] | 80, 443, 8080 | 12 |
| [2606:4700:4408:ed46:5406:758e:4a6d:eefe] | 80, 443, 8080 | 12 |
| [2606:4700:4408:ed46:5406:758e:4a6d:eefe] | 80, 443, 8080 | 12 |

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
