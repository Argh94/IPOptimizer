# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-16 10:18:59 +0330

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
| 141.101.120.246 | 80, 443, 8080 | 51 |
| 198.41.209.120 | 80, 443, 8080 | 51 |
| 141.101.120.187 | 80, 443, 8080 | 52 |
| 172.64.95.71 | 80, 443, 8080 | 52 |
| 172.64.87.213 | 80, 443, 8080 | 52 |
| 172.67.123.71 | 80, 443, 8080 | 55 |
| 172.64.84.254 | 80, 443, 8080 | 55 |
| 198.41.222.205 | 80, 443, 8080 | 80 |
| 104.18.198.8 | 80, 443, 8080 | 129 |
| 104.18.149.118 | 80, 443, 8080 | 130 |
| 104.16.142.201 | 80, 443, 8080 | 131 |
| 104.17.40.88 | 80, 443, 8080 | 131 |
| 172.67.171.134 | 80, 443, 8080 | 143 |
| 172.67.143.45 | 80, 443, 8080 | 144 |
| 172.67.206.59 | 80, 443, 8080 | 146 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8396:3aa2:256e:67d5:b777:2c21] | 80, 443, 8080 | 3 |
| [2606:4700:8d9b:6f7:e7c:106f:356f:8fb7] | 80, 443, 8080 | 3 |
| [2606:4700:9a68:7e1a:9b91:dc02:4958:3ed6] | 80, 443, 8080 | 3 |
| [2606:4700:8396:3aa2:256e:67d5:b777:2c21] | 80, 443, 8080 | 3 |
| [2606:4700:8d9b:6f7:e7c:106f:356f:8fb7] | 80, 443, 8080 | 3 |
| [2606:4700:9a68:7e1a:9b91:dc02:4958:3ed6] | 80, 443, 8080 | 3 |
| [2606:4700:8396:3aa2:256e:67d5:b777:2c21] | 80, 443, 8080 | 3 |
| [2606:4700:8d9b:6f7:e7c:106f:356f:8fb7] | 80, 443, 8080 | 3 |
| [2606:4700:9a68:7e1a:9b91:dc02:4958:3ed6] | 80, 443, 8080 | 3 |
| [2606:4700:9a68:f1cb:c573:5c30:a876:afb3] | 80, 443, 8080 | 4 |
| [2606:4700:8396:c00f:4d5c:215a:6b7:1d88] | 80, 443, 8080 | 4 |
| [2606:4700:9a68:f1cb:c573:5c30:a876:afb3] | 80, 443, 8080 | 4 |
| [2606:4700:8396:c00f:4d5c:215a:6b7:1d88] | 80, 443, 8080 | 4 |
| [2606:4700:9a68:f1cb:c573:5c30:a876:afb3] | 80, 443, 8080 | 4 |
| [2606:4700:8396:c00f:4d5c:215a:6b7:1d88] | 80, 443, 8080 | 4 |

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
