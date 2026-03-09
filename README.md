# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-09 11:02:59 +0330

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
| 198.41.208.229 | 80, 443, 8080 | 52 |
| 198.41.208.134 | 80, 443, 8080 | 52 |
| 198.41.208.229 | 80, 443, 8080 | 52 |
| 198.41.208.134 | 80, 443, 8080 | 52 |
| 162.159.36.39 | 80, 443, 8080 | 53 |
| 162.159.235.32 | 80, 443, 8080 | 53 |
| 162.159.36.39 | 80, 443, 8080 | 53 |
| 162.159.235.32 | 80, 443, 8080 | 53 |
| 162.159.236.220 | 80, 443, 8080 | 55 |
| 162.159.236.220 | 80, 443, 8080 | 55 |
| 104.17.247.106 | 80, 443, 8080 | 133 |
| 172.64.72.92 | 80, 443, 8080 | 134 |
| 104.17.5.226 | 80, 443, 8080 | 134 |
| 104.16.162.41 | 80, 443, 8080 | 134 |
| 104.16.96.84 | 80, 443, 8080 | 140 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:99ed:e99:5dbd:84ed:2d15:f1f9] | 80, 443, 8080 | 1 |
| [2606:4700:8d77:e64f:d866:c9b8:b3cf:69df] | 80, 443, 8080 | 1 |
| [2606:4700:99ed:781a:2b31:64f2:57d0:c4ac] | 80, 443, 8080 | 1 |
| [2606:4700:8ca3:c468:d67f:450c:f97a:282c] | 80, 443, 8080 | 1 |
| [2606:4700:99ed:e99:5dbd:84ed:2d15:f1f9] | 80, 443, 8080 | 1 |
| [2606:4700:8d77:e64f:d866:c9b8:b3cf:69df] | 80, 443, 8080 | 1 |
| [2606:4700:99ed:781a:2b31:64f2:57d0:c4ac] | 80, 443, 8080 | 1 |
| [2606:4700:8ca3:c468:d67f:450c:f97a:282c] | 80, 443, 8080 | 1 |
| [2606:4700:99ed:e99:5dbd:84ed:2d15:f1f9] | 80, 443, 8080 | 1 |
| [2606:4700:8d77:e64f:d866:c9b8:b3cf:69df] | 80, 443, 8080 | 1 |
| [2606:4700:99ed:781a:2b31:64f2:57d0:c4ac] | 80, 443, 8080 | 1 |
| [2606:4700:8ca3:c468:d67f:450c:f97a:282c] | 80, 443, 8080 | 1 |
| [2606:4700:839e:20da:4cf8:591d:beae:8ea9] | 80, 443, 8080 | 3 |
| [2606:4700:839e:20da:4cf8:591d:beae:8ea9] | 80, 443, 8080 | 3 |
| [2606:4700:839e:20da:4cf8:591d:beae:8ea9] | 80, 443, 8080 | 3 |

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
