# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-20 00:10:49 +0330

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
| 198.41.209.186 | 80, 443, 8080 | 51 |
| 198.41.208.186 | 80, 443, 8080 | 51 |
| 198.41.208.218 | 80, 443, 8080 | 51 |
| 198.41.208.112 | 80, 443, 8080 | 52 |
| 198.41.208.41 | 80, 443, 8080 | 52 |
| 162.159.138.143 | 80, 443, 8080 | 55 |
| 172.67.87.128 | 80, 443, 8080 | 55 |
| 172.67.102.227 | 80, 443, 8080 | 57 |
| 162.159.36.27 | 80, 443, 8080 | 75 |
| 104.16.235.104 | 80, 443, 8080 | 130 |
| 104.19.88.191 | 80, 443, 8080 | 131 |
| 104.17.193.79 | 80, 443, 8080 | 132 |
| 104.16.254.90 | 80, 443, 8080 | 133 |
| 172.67.198.235 | 80, 443, 8080 | 144 |
| 172.67.193.189 | 80, 443, 8080 | 145 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:99e3:d47f:453f:3f0d:207d:d557] | 80, 443, 8080 | 3 |
| [2606:4700:99e3:277d:69a1:9d0:da72:1ba7] | 80, 443, 8080 | 3 |
| [2606:4700:3018:b44b:6ac1:5299:ac12:6653] | 80, 443, 8080 | 3 |
| [2606:4700:3018:dcf1:2c71:3f4e:b04b:bb28] | 80, 443, 8080 | 3 |
| [2606:4700:3030:122b:811d:dcaa:aa0e:2f2e] | 80, 443, 8080 | 3 |
| [2606:4700:99e3:d47f:453f:3f0d:207d:d557] | 80, 443, 8080 | 3 |
| [2606:4700:99e3:277d:69a1:9d0:da72:1ba7] | 80, 443, 8080 | 3 |
| [2606:4700:3018:b44b:6ac1:5299:ac12:6653] | 80, 443, 8080 | 3 |
| [2606:4700:3018:dcf1:2c71:3f4e:b04b:bb28] | 80, 443, 8080 | 3 |
| [2606:4700:3030:122b:811d:dcaa:aa0e:2f2e] | 80, 443, 8080 | 3 |
| [2606:4700:99e3:d47f:453f:3f0d:207d:d557] | 80, 443, 8080 | 3 |
| [2606:4700:99e3:277d:69a1:9d0:da72:1ba7] | 80, 443, 8080 | 3 |
| [2606:4700:3018:b44b:6ac1:5299:ac12:6653] | 80, 443, 8080 | 3 |
| [2606:4700:3018:dcf1:2c71:3f4e:b04b:bb28] | 80, 443, 8080 | 3 |
| [2606:4700:3030:122b:811d:dcaa:aa0e:2f2e] | 80, 443, 8080 | 3 |

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
