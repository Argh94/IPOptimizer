# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-30 00:16:50 +0330

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
| 198.41.208.63 | 80, 443, 8080 | 51 |
| 172.64.95.70 | 80, 443, 8080 | 51 |
| 190.93.246.188 | 80, 443, 8080 | 51 |
| 198.41.208.63 | 80, 443, 8080 | 51 |
| 172.64.95.70 | 80, 443, 8080 | 51 |
| 190.93.246.188 | 80, 443, 8080 | 51 |
| 198.41.209.6 | 80, 443, 8080 | 52 |
| 141.101.121.4 | 80, 443, 8080 | 52 |
| 198.41.209.6 | 80, 443, 8080 | 52 |
| 141.101.121.4 | 80, 443, 8080 | 52 |
| 104.19.2.88 | 80, 443, 8080 | 132 |
| 104.17.94.209 | 80, 443, 8080 | 134 |
| 104.17.38.174 | 80, 443, 8080 | 143 |
| 104.18.202.17 | 80, 443, 8080 | 153 |
| 104.16.185.243 | 80, 443, 8080 | 155 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:133:52aa:ed0:ee86:25d0:38df] | 80, 443, 8080 | 3 |
| [2606:4700:7:766:1bf8:a817:1fc5:6d4d] | 80, 443, 8080 | 3 |
| [2606:4700:133:52aa:ed0:ee86:25d0:38df] | 80, 443, 8080 | 3 |
| [2606:4700:7:766:1bf8:a817:1fc5:6d4d] | 80, 443, 8080 | 3 |
| [2606:4700:133:52aa:ed0:ee86:25d0:38df] | 80, 443, 8080 | 3 |
| [2606:4700:7:766:1bf8:a817:1fc5:6d4d] | 80, 443, 8080 | 3 |
| [2606:4700:964c:b0a9:3903:e8d1:8b11:c122] | 80, 443, 8080 | 9 |
| [2606:4700:90da:216b:726a:d70b:5dac:92bc] | 80, 443, 8080 | 9 |
| [2606:4700:90da:f460:9e2c:592b:1562:192] | 80, 443, 8080 | 9 |
| [2606:4700:964c:b0a9:3903:e8d1:8b11:c122] | 80, 443, 8080 | 9 |
| [2606:4700:90da:216b:726a:d70b:5dac:92bc] | 80, 443, 8080 | 9 |
| [2606:4700:90da:f460:9e2c:592b:1562:192] | 80, 443, 8080 | 9 |
| [2606:4700:964c:b0a9:3903:e8d1:8b11:c122] | 80, 443, 8080 | 9 |
| [2606:4700:90da:216b:726a:d70b:5dac:92bc] | 80, 443, 8080 | 9 |
| [2606:4700:90da:f460:9e2c:592b:1562:192] | 80, 443, 8080 | 9 |

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
