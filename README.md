# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-08 10:26:42 +0330

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
| 198.41.208.113 | 80, 443, 8080 | 51 |
| 198.41.208.113 | 80, 443, 8080 | 51 |
| 198.41.208.63 | 80, 443, 8080 | 52 |
| 198.41.209.162 | 80, 443, 8080 | 52 |
| 190.93.246.188 | 80, 443, 8080 | 52 |
| 198.41.208.112 | 80, 443, 8080 | 52 |
| 198.41.208.63 | 80, 443, 8080 | 52 |
| 198.41.209.162 | 80, 443, 8080 | 52 |
| 190.93.246.188 | 80, 443, 8080 | 52 |
| 198.41.208.112 | 80, 443, 8080 | 52 |
| 104.17.254.232 | 80, 443, 8080 | 131 |
| 104.17.148.40 | 80, 443, 8080 | 133 |
| 104.19.24.57 | 80, 443, 8080 | 158 |
| 104.25.181.8 | 80, 443, 8080 | 159 |
| 104.17.192.130 | 80, 443, 8080 | 161 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9a94:cb50:edbc:947d:4ccc:a39d] | 80, 443, 8080 | 3 |
| [2606:4700:3031:2f15:1fb7:f18a:a6f5:6732] | 80, 443, 8080 | 3 |
| [2606:4700:9b04:3230:97e6:f61d:a33e:8013] | 80, 443, 8080 | 3 |
| [2606:4700:27:1a13:b3d3:5433:7303:3e9a] | 80, 443, 8080 | 3 |
| [2606:4700:9a94:5706:95ff:2163:2f61:64c8] | 80, 443, 8080 | 3 |
| [2606:4700:9a94:cb50:edbc:947d:4ccc:a39d] | 80, 443, 8080 | 3 |
| [2606:4700:3031:2f15:1fb7:f18a:a6f5:6732] | 80, 443, 8080 | 3 |
| [2606:4700:9b04:3230:97e6:f61d:a33e:8013] | 80, 443, 8080 | 3 |
| [2606:4700:27:1a13:b3d3:5433:7303:3e9a] | 80, 443, 8080 | 3 |
| [2606:4700:9a94:5706:95ff:2163:2f61:64c8] | 80, 443, 8080 | 3 |
| [2606:4700:9a94:cb50:edbc:947d:4ccc:a39d] | 80, 443, 8080 | 3 |
| [2606:4700:3031:2f15:1fb7:f18a:a6f5:6732] | 80, 443, 8080 | 3 |
| [2606:4700:9b04:3230:97e6:f61d:a33e:8013] | 80, 443, 8080 | 3 |
| [2606:4700:27:1a13:b3d3:5433:7303:3e9a] | 80, 443, 8080 | 3 |
| [2606:4700:9a94:5706:95ff:2163:2f61:64c8] | 80, 443, 8080 | 3 |

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
