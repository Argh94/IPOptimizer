# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-13 10:21:03 +0330

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
| 198.41.209.149 | 80, 443, 8080 | 51 |
| 198.41.208.119 | 80, 443, 8080 | 51 |
| 198.41.209.71 | 80, 443, 8080 | 53 |
| 198.41.209.180 | 80, 443, 8080 | 55 |
| 172.67.86.200 | 80, 443, 8080 | 55 |
| 172.67.91.1 | 80, 443, 8080 | 56 |
| 172.67.66.228 | 80, 443, 8080 | 56 |
| 162.159.46.91 | 80, 443, 8080 | 65 |
| 198.41.223.141 | 80, 443, 8080 | 87 |
| 162.159.236.238 | 80, 443, 8080 | 129 |
| 104.19.76.235 | 80, 443, 8080 | 130 |
| 104.18.146.227 | 80, 443, 8080 | 133 |
| 172.67.194.188 | 80, 443, 8080 | 144 |
| 172.67.191.122 | 80, 443, 8080 | 144 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9a91:aa01:3ffe:2019:6004:beeb] | 80, 443, 8080 | 3 |
| [2606:4700:2b:6b7b:e1d8:7069:179f:8f56] | 80, 443, 8080 | 3 |
| [2606:4700:9a91:aa01:3ffe:2019:6004:beeb] | 80, 443, 8080 | 3 |
| [2606:4700:2b:6b7b:e1d8:7069:179f:8f56] | 80, 443, 8080 | 3 |
| [2606:4700:9a91:aa01:3ffe:2019:6004:beeb] | 80, 443, 8080 | 3 |
| [2606:4700:2b:6b7b:e1d8:7069:179f:8f56] | 80, 443, 8080 | 3 |
| [2606:4700:9a91:8e8b:2788:35b5:bd7a:a10f] | 80, 443, 8080 | 4 |
| [2606:4700:9a91:8e8b:2788:35b5:bd7a:a10f] | 80, 443, 8080 | 4 |
| [2606:4700:9a91:8e8b:2788:35b5:bd7a:a10f] | 80, 443, 8080 | 4 |
| [2606:4700:2b:c7b7:469b:caf7:d4c:e24a] | 80, 443, 8080 | 13 |
| [2606:4700:2b:c7b7:469b:caf7:d4c:e24a] | 80, 443, 8080 | 13 |
| [2606:4700:2b:c7b7:469b:caf7:d4c:e24a] | 80, 443, 8080 | 13 |
| [2606:4700:83b5:54a7:3d32:d29:e0d0:2225] | 80, 443, 8080 | 147 |
| [2606:4700:83b5:54a7:3d32:d29:e0d0:2225] | 80, 443, 8080 | 147 |
| [2606:4700:83b5:54a7:3d32:d29:e0d0:2225] | 80, 443, 8080 | 147 |

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
