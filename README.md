# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-01-30 00:24:15 +0330

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
| 198.41.208.218 | 80, 443, 8080 | 50 |
| 198.41.208.218 | 80, 443, 8080 | 50 |
| 198.41.214.11 | 80, 443, 8080 | 51 |
| 198.41.209.132 | 80, 443, 8080 | 51 |
| 198.41.214.11 | 80, 443, 8080 | 51 |
| 198.41.209.132 | 80, 443, 8080 | 51 |
| 172.64.80.136 | 80, 443, 8080 | 52 |
| 172.64.80.136 | 80, 443, 8080 | 52 |
| 141.101.114.110 | 80, 443, 8080 | 53 |
| 141.101.114.110 | 80, 443, 8080 | 53 |
| 104.18.169.146 | 80, 443, 8080 | 130 |
| 104.18.85.181 | 80, 443, 8080 | 131 |
| 104.19.93.57 | 80, 443, 8080 | 133 |
| 104.18.237.18 | 80, 443, 8080 | 138 |
| 104.17.217.24 | 80, 443, 8080 | 142 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:91bc:9d32:21e5:b65:c445:6291] | 80, 443, 8080 | 3 |
| [2606:4700:9a64:e87f:e421:e288:e08d:1939] | 80, 443, 8080 | 3 |
| [2606:4700:9a64:f3da:c527:abd6:64bc:1156] | 80, 443, 8080 | 3 |
| [2606:4700:3055:44ec:6dc:8b7d:fd90:1c97] | 80, 443, 8080 | 3 |
| [2606:4700:91bc:9d32:21e5:b65:c445:6291] | 80, 443, 8080 | 3 |
| [2606:4700:9a64:e87f:e421:e288:e08d:1939] | 80, 443, 8080 | 3 |
| [2606:4700:9a64:f3da:c527:abd6:64bc:1156] | 80, 443, 8080 | 3 |
| [2606:4700:3055:44ec:6dc:8b7d:fd90:1c97] | 80, 443, 8080 | 3 |
| [2606:4700:91bc:9d32:21e5:b65:c445:6291] | 80, 443, 8080 | 3 |
| [2606:4700:9a64:e87f:e421:e288:e08d:1939] | 80, 443, 8080 | 3 |
| [2606:4700:9a64:f3da:c527:abd6:64bc:1156] | 80, 443, 8080 | 3 |
| [2606:4700:3055:44ec:6dc:8b7d:fd90:1c97] | 80, 443, 8080 | 3 |
| [2606:4700:3055:f596:41d7:bdb1:bd13:8b53] | 80, 443, 8080 | 12 |
| [2606:4700:3055:f596:41d7:bdb1:bd13:8b53] | 80, 443, 8080 | 12 |
| [2606:4700:3055:f596:41d7:bdb1:bd13:8b53] | 80, 443, 8080 | 12 |

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
