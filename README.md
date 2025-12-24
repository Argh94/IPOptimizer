# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-25 00:14:49 +0330

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
| 198.41.209.112 | 80, 443, 8080 | 51 |
| 198.41.209.137 | 80, 443, 8080 | 51 |
| 198.41.209.112 | 80, 443, 8080 | 51 |
| 198.41.209.137 | 80, 443, 8080 | 51 |
| 198.41.208.197 | 80, 443, 8080 | 52 |
| 198.41.208.197 | 80, 443, 8080 | 52 |
| 104.16.241.215 | 80, 443, 8080 | 55 |
| 104.16.251.33 | 80, 443, 8080 | 55 |
| 104.16.241.215 | 80, 443, 8080 | 55 |
| 104.16.251.33 | 80, 443, 8080 | 55 |
| 104.19.118.170 | 80, 443, 8080 | 131 |
| 104.16.111.200 | 80, 443, 8080 | 131 |
| 104.19.23.172 | 80, 443, 8080 | 139 |
| 162.159.251.172 | 80, 443, 8080 | 139 |
| 104.19.16.31 | 80, 443, 8080 | 159 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:440d:40ed:2e3d:6112:e69f:bcd0] | 80, 443, 8080 | 3 |
| [2606:4700:c:9ffc:9366:5efe:765c:6a45] | 80, 443, 8080 | 3 |
| [2606:4700:440d:40ed:2e3d:6112:e69f:bcd0] | 80, 443, 8080 | 3 |
| [2606:4700:c:9ffc:9366:5efe:765c:6a45] | 80, 443, 8080 | 3 |
| [2606:4700:440d:40ed:2e3d:6112:e69f:bcd0] | 80, 443, 8080 | 3 |
| [2606:4700:c:9ffc:9366:5efe:765c:6a45] | 80, 443, 8080 | 3 |
| [2606:4700:9a9e:ec52:c726:333c:19b9:325e] | 80, 443, 8080 | 9 |
| [2606:4700:9a9e:495e:d5d0:f0ac:7933:1a63] | 80, 443, 8080 | 9 |
| [2606:4700:9a9e:ec52:c726:333c:19b9:325e] | 80, 443, 8080 | 9 |
| [2606:4700:9a9e:495e:d5d0:f0ac:7933:1a63] | 80, 443, 8080 | 9 |
| [2606:4700:9a9e:ec52:c726:333c:19b9:325e] | 80, 443, 8080 | 9 |
| [2606:4700:9a9e:495e:d5d0:f0ac:7933:1a63] | 80, 443, 8080 | 9 |
| [2606:4700:83b2:6e8b:c3e6:d380:d2d3:3282] | 80, 443, 8080 | 139 |
| [2606:4700:83b2:6e8b:c3e6:d380:d2d3:3282] | 80, 443, 8080 | 139 |
| [2606:4700:83b2:6e8b:c3e6:d380:d2d3:3282] | 80, 443, 8080 | 139 |

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
