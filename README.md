# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-11-07 10:21:16 +0330

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
| 104.17.24.125 | 80, 443, 8080 | 41 |
| 162.159.253.165 | 80, 443, 8080 | 54 |
| 141.101.123.168 | 80, 443, 8080 | 54 |
| 172.64.80.117 | 80, 443, 8080 | 54 |
| 198.41.209.162 | 80, 443, 8080 | 54 |
| 198.41.215.116 | 80, 443, 8080 | 55 |
| 172.67.117.201 | 80, 443, 8080 | 56 |
| 141.101.113.10 | 80, 443, 8080 | 56 |
| 198.41.223.234 | 80, 443, 8080 | 77 |
| 104.18.200.161 | 80, 443, 8080 | 128 |
| 198.41.214.58 | 80, 443, 8080 | 130 |
| 104.16.3.5 | 80, 443, 8080 | 131 |
| 104.19.121.121 | 80, 443, 8080 | 131 |
| 172.67.163.116 | 80, 443, 8080 | 142 |
| 172.67.211.252 | 80, 443, 8080 | 143 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:90d6:6934:46ea:3975:e2b7:9913] | 80, 443, 8080 | 3 |
| [2606:4700:90d1:7388:68fc:4fdd:3ca6:6dba] | 80, 443, 8080 | 3 |
| [2606:4700:90d6:17d:c0f1:5d0e:95bb:5a1] | 80, 443, 8080 | 3 |
| [2606:4700:90c4:6e44:c28c:fc41:2927:2ef4] | 80, 443, 8080 | 3 |
| [2606:4700:90d6:6934:46ea:3975:e2b7:9913] | 80, 443, 8080 | 3 |
| [2606:4700:90d1:7388:68fc:4fdd:3ca6:6dba] | 80, 443, 8080 | 3 |
| [2606:4700:90d6:17d:c0f1:5d0e:95bb:5a1] | 80, 443, 8080 | 3 |
| [2606:4700:90c4:6e44:c28c:fc41:2927:2ef4] | 80, 443, 8080 | 3 |
| [2606:4700:90d6:6934:46ea:3975:e2b7:9913] | 80, 443, 8080 | 3 |
| [2606:4700:90d1:7388:68fc:4fdd:3ca6:6dba] | 80, 443, 8080 | 3 |
| [2606:4700:90d6:17d:c0f1:5d0e:95bb:5a1] | 80, 443, 8080 | 3 |
| [2606:4700:90c4:6e44:c28c:fc41:2927:2ef4] | 80, 443, 8080 | 3 |
| [2606:4700:4407:5c02:f01e:45e5:9319:e931] | 80, 443, 8080 | 16 |
| [2606:4700:4407:5c02:f01e:45e5:9319:e931] | 80, 443, 8080 | 16 |
| [2606:4700:4407:5c02:f01e:45e5:9319:e931] | 80, 443, 8080 | 16 |

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
