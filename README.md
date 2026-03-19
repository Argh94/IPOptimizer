# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-19 11:00:30 +0330

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
| 198.41.209.48 | 80, 443, 8080 | 70 |
| 198.41.209.48 | 80, 443, 8080 | 70 |
| 198.41.211.208 | 80, 443, 8080 | 82 |
| 198.41.208.88 | 80, 443, 8080 | 123 |
| 198.41.208.88 | 80, 443, 8080 | 123 |
| 104.19.96.40 | 80, 443, 8080 | 133 |
| 104.17.90.104 | 80, 443, 8080 | 133 |
| 104.19.101.88 | 80, 443, 8080 | 134 |
| 104.16.190.208 | 80, 443, 8080 | 134 |
| 172.67.89.235 | 80, 443, 8080 | 186 |
| 172.67.89.235 | 80, 443, 8080 | 186 |
| 198.41.209.212 | 80, 443, 8080 | 188 |
| 198.41.209.212 | 80, 443, 8080 | 188 |
| 162.159.160.146 | 80, 443, 8080 | 192 |
| 162.159.160.146 | 80, 443, 8080 | 192 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:10f:d39a:31b6:4091:dff8:c6a3] | 80, 443, 8080 | 0 |
| [2606:4700:10f:d39a:31b6:4091:dff8:c6a3] | 80, 443, 8080 | 0 |
| [2606:4700:10f:d39a:31b6:4091:dff8:c6a3] | 80, 443, 8080 | 0 |
| [2606:4700:9c60:36f0:7071:7007:6580:b745] | 80, 443, 8080 | 1 |
| [2606:4700:9768:e41c:f598:e15e:8199:a476] | 80, 443, 8080 | 1 |
| [2606:4700:9768:9457:1462:3b16:b8e1:2dbb] | 80, 443, 8080 | 1 |
| [2606:4700:9c60:36f0:7071:7007:6580:b745] | 80, 443, 8080 | 1 |
| [2606:4700:9768:e41c:f598:e15e:8199:a476] | 80, 443, 8080 | 1 |
| [2606:4700:9768:9457:1462:3b16:b8e1:2dbb] | 80, 443, 8080 | 1 |
| [2606:4700:9c60:36f0:7071:7007:6580:b745] | 80, 443, 8080 | 1 |
| [2606:4700:9768:e41c:f598:e15e:8199:a476] | 80, 443, 8080 | 1 |
| [2606:4700:9768:9457:1462:3b16:b8e1:2dbb] | 80, 443, 8080 | 1 |
| [2606:4700:3002:7d7d:26bd:23d5:b49c:9ac1] | 80, 443, 8080 | 3 |
| [2606:4700:3002:7d7d:26bd:23d5:b49c:9ac1] | 80, 443, 8080 | 3 |
| [2606:4700:3002:7d7d:26bd:23d5:b49c:9ac1] | 80, 443, 8080 | 3 |

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
