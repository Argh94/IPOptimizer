# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-09 10:19:48 +0330

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
| 172.67.89.101 | 80, 443, 8080 | 55 |
| 172.67.77.130 | 80, 443, 8080 | 55 |
| 141.101.122.106 | 80, 443, 8080 | 55 |
| 104.19.17.101 | 80, 443, 8080 | 130 |
| 104.16.247.34 | 80, 443, 8080 | 130 |
| 104.19.44.245 | 80, 443, 8080 | 130 |
| 104.19.17.101 | 80, 443, 8080 | 130 |
| 104.16.247.34 | 80, 443, 8080 | 130 |
| 104.19.44.245 | 80, 443, 8080 | 130 |
| 104.19.71.34 | 80, 443, 8080 | 131 |
| 104.19.71.34 | 80, 443, 8080 | 131 |
| 104.17.146.37 | 80, 443, 8080 | 132 |
| 104.17.146.37 | 80, 443, 8080 | 132 |
| 172.67.143.125 | 80, 443, 8080 | 143 |
| 172.67.205.230 | 80, 443, 8080 | 145 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8dde:da90:505c:4bee:bde0:fec2] | 80, 443, 8080 | 3 |
| [2606:4700:90d1:12c7:eb64:532e:6b0d:73d1] | 80, 443, 8080 | 3 |
| [2606:4700:3003:57a9:d458:1d24:6cb9:f73] | 80, 443, 8080 | 3 |
| [2606:4700:8dde:cab0:3649:36d7:8fb2:6bcd] | 80, 443, 8080 | 3 |
| [2606:4700:8dde:da90:505c:4bee:bde0:fec2] | 80, 443, 8080 | 3 |
| [2606:4700:90d1:12c7:eb64:532e:6b0d:73d1] | 80, 443, 8080 | 3 |
| [2606:4700:3003:57a9:d458:1d24:6cb9:f73] | 80, 443, 8080 | 3 |
| [2606:4700:8dde:cab0:3649:36d7:8fb2:6bcd] | 80, 443, 8080 | 3 |
| [2606:4700:8dde:da90:505c:4bee:bde0:fec2] | 80, 443, 8080 | 3 |
| [2606:4700:90d1:12c7:eb64:532e:6b0d:73d1] | 80, 443, 8080 | 3 |
| [2606:4700:3003:57a9:d458:1d24:6cb9:f73] | 80, 443, 8080 | 3 |
| [2606:4700:8dde:cab0:3649:36d7:8fb2:6bcd] | 80, 443, 8080 | 3 |
| [2606:4700:3003:ba74:5759:a0cb:ec0a:79b1] | 80, 443, 8080 | 13 |
| [2606:4700:3003:ba74:5759:a0cb:ec0a:79b1] | 80, 443, 8080 | 13 |
| [2606:4700:3003:ba74:5759:a0cb:ec0a:79b1] | 80, 443, 8080 | 13 |

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
