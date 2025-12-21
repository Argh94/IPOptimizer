# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-22 00:13:16 +0330

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
| 198.41.209.49 | 80, 443, 8080 | 52 |
| 198.41.209.49 | 80, 443, 8080 | 52 |
| 190.93.246.203 | 80, 443, 8080 | 53 |
| 198.41.208.136 | 80, 443, 8080 | 53 |
| 190.93.246.203 | 80, 443, 8080 | 53 |
| 198.41.208.136 | 80, 443, 8080 | 53 |
| 172.64.89.212 | 80, 443, 8080 | 54 |
| 198.41.209.105 | 80, 443, 8080 | 54 |
| 172.64.89.212 | 80, 443, 8080 | 54 |
| 198.41.209.105 | 80, 443, 8080 | 54 |
| 162.159.46.39 | 80, 443, 8080 | 84 |
| 198.41.211.40 | 80, 443, 8080 | 85 |
| 104.17.35.60 | 80, 443, 8080 | 132 |
| 104.18.116.213 | 80, 443, 8080 | 137 |
| 104.18.119.124 | 80, 443, 8080 | 139 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:2c:bdf1:515f:16c0:f8ca:8b61] | 80, 443, 8080 | 4 |
| [2606:4700:2c:7b9f:ee5:7881:ad88:cc69] | 80, 443, 8080 | 4 |
| [2606:4700:2c:bdf1:515f:16c0:f8ca:8b61] | 80, 443, 8080 | 4 |
| [2606:4700:2c:7b9f:ee5:7881:ad88:cc69] | 80, 443, 8080 | 4 |
| [2606:4700:2c:bdf1:515f:16c0:f8ca:8b61] | 80, 443, 8080 | 4 |
| [2606:4700:2c:7b9f:ee5:7881:ad88:cc69] | 80, 443, 8080 | 4 |
| [2606:4700:1c:9e0b:a214:59b2:4308:3a52] | 80, 443, 8080 | 5 |
| [2606:4700:1c:9e0b:a214:59b2:4308:3a52] | 80, 443, 8080 | 5 |
| [2606:4700:1c:9e0b:a214:59b2:4308:3a52] | 80, 443, 8080 | 5 |
| [2606:4700:91b6:3ac7:1e25:8d62:9ba8:18f6] | 80, 443, 8080 | 9 |
| [2606:4700:91b6:3ac7:1e25:8d62:9ba8:18f6] | 80, 443, 8080 | 9 |
| [2606:4700:91b6:3ac7:1e25:8d62:9ba8:18f6] | 80, 443, 8080 | 9 |
| [2606:4700:91b6:9c9e:9be4:6ab2:b7ec:a383] | 80, 443, 8080 | 10 |
| [2606:4700:91b6:9c9e:9be4:6ab2:b7ec:a383] | 80, 443, 8080 | 10 |
| [2606:4700:91b6:9c9e:9be4:6ab2:b7ec:a383] | 80, 443, 8080 | 10 |

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
