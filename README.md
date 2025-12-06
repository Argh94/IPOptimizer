# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-07 00:11:59 +0330

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
| 104.17.215.28 | 80, 443, 8080 | 53 |
| 104.17.215.28 | 80, 443, 8080 | 53 |
| 190.93.246.111 | 80, 443, 8080 | 54 |
| 190.93.246.148 | 80, 443, 8080 | 54 |
| 190.93.246.111 | 80, 443, 8080 | 54 |
| 190.93.246.148 | 80, 443, 8080 | 54 |
| 104.16.254.60 | 80, 443, 8080 | 55 |
| 104.17.101.42 | 80, 443, 8080 | 55 |
| 104.16.254.60 | 80, 443, 8080 | 55 |
| 104.17.101.42 | 80, 443, 8080 | 55 |
| 198.41.222.138 | 80, 443, 8080 | 70 |
| 198.41.211.242 | 80, 443, 8080 | 77 |
| 162.159.36.120 | 80, 443, 8080 | 86 |
| 104.16.185.205 | 80, 443, 8080 | 129 |
| 104.17.179.201 | 80, 443, 8080 | 131 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9ad0:db25:6658:146e:1d38:9550] | 80, 443, 8080 | 3 |
| [2606:4700:8d79:7151:d5e0:82a1:8b5e:621c] | 80, 443, 8080 | 3 |
| [2606:4700:8d79:ccef:5be:84e4:efff:237a] | 80, 443, 8080 | 3 |
| [2606:4700:9ad0:5c1d:319:f3c8:5d07:ba59] | 80, 443, 8080 | 3 |
| [2606:4700:9b07:6f76:4d38:ba5a:7775:1396] | 80, 443, 8080 | 3 |
| [2606:4700:9ad0:db25:6658:146e:1d38:9550] | 80, 443, 8080 | 3 |
| [2606:4700:8d79:7151:d5e0:82a1:8b5e:621c] | 80, 443, 8080 | 3 |
| [2606:4700:8d79:ccef:5be:84e4:efff:237a] | 80, 443, 8080 | 3 |
| [2606:4700:9ad0:5c1d:319:f3c8:5d07:ba59] | 80, 443, 8080 | 3 |
| [2606:4700:9b07:6f76:4d38:ba5a:7775:1396] | 80, 443, 8080 | 3 |
| [2606:4700:9ad0:db25:6658:146e:1d38:9550] | 80, 443, 8080 | 3 |
| [2606:4700:8d79:7151:d5e0:82a1:8b5e:621c] | 80, 443, 8080 | 3 |
| [2606:4700:8d79:ccef:5be:84e4:efff:237a] | 80, 443, 8080 | 3 |
| [2606:4700:9ad0:5c1d:319:f3c8:5d07:ba59] | 80, 443, 8080 | 3 |
| [2606:4700:9b07:6f76:4d38:ba5a:7775:1396] | 80, 443, 8080 | 3 |

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
