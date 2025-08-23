# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-08-23 10:17:31 +0330

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
| 162.159.235.254 | 80, 443, 8080 | 52 |
| 162.159.248.248 | 80, 443, 8080 | 52 |
| 172.64.85.155 | 80, 443, 8080 | 52 |
| 198.41.208.176 | 80, 443, 8080 | 56 |
| 198.41.209.0 | 80, 443, 8080 | 56 |
| 162.159.138.146 | 80, 443, 8080 | 58 |
| 162.159.209.27 | 80, 443, 8080 | 63 |
| 172.67.159.17 | 80, 443, 8080 | 133 |
| 172.67.185.10 | 80, 443, 8080 | 133 |
| 172.67.230.215 | 80, 443, 8080 | 134 |
| 104.19.81.209 | 80, 443, 8080 | 135 |
| 104.16.124.74 | 80, 443, 8080 | 139 |
| 104.17.137.252 | 80, 443, 8080 | 139 |
| 104.18.22.64 | 80, 443, 8080 | 148 |
| 104.18.117.13 | 80, 443, 8080 | 148 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:99e1:8c29:23bd:de65:9119:1d45] | 80, 443, 8080 | 3 |
| [2606:4700:8d7d:7d65:cd7:2442:5f10:3a9] | 80, 443, 8080 | 3 |
| [2606:4700:138:a6f:29e6:7c8d:9fd4:8568] | 80, 443, 8080 | 3 |
| [2606:4700:99e1:8c29:23bd:de65:9119:1d45] | 80, 443, 8080 | 3 |
| [2606:4700:8d7d:7d65:cd7:2442:5f10:3a9] | 80, 443, 8080 | 3 |
| [2606:4700:138:a6f:29e6:7c8d:9fd4:8568] | 80, 443, 8080 | 3 |
| [2606:4700:99e1:8c29:23bd:de65:9119:1d45] | 80, 443, 8080 | 3 |
| [2606:4700:8d7d:7d65:cd7:2442:5f10:3a9] | 80, 443, 8080 | 3 |
| [2606:4700:138:a6f:29e6:7c8d:9fd4:8568] | 80, 443, 8080 | 3 |
| [2606:4700:8d7d:90f3:d7d:3e5e:efb9:d57] | 80, 443, 8080 | 4 |
| [2606:4700:d:5b3b:72b3:bcf2:f591:9cbc] | 80, 443, 8080 | 4 |
| [2606:4700:8d7d:90f3:d7d:3e5e:efb9:d57] | 80, 443, 8080 | 4 |
| [2606:4700:d:5b3b:72b3:bcf2:f591:9cbc] | 80, 443, 8080 | 4 |
| [2606:4700:8d7d:90f3:d7d:3e5e:efb9:d57] | 80, 443, 8080 | 4 |
| [2606:4700:d:5b3b:72b3:bcf2:f591:9cbc] | 80, 443, 8080 | 4 |

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
