# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-28 10:23:12 +0330

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
| 198.41.208.203 | 80, 443, 8080 | 50 |
| 198.41.208.203 | 80, 443, 8080 | 50 |
| 198.41.209.120 | 80, 443, 8080 | 51 |
| 198.41.209.252 | 80, 443, 8080 | 51 |
| 198.41.209.120 | 80, 443, 8080 | 51 |
| 198.41.209.252 | 80, 443, 8080 | 51 |
| 172.64.80.149 | 80, 443, 8080 | 53 |
| 172.64.80.149 | 80, 443, 8080 | 53 |
| 104.16.254.60 | 80, 443, 8080 | 55 |
| 104.16.254.60 | 80, 443, 8080 | 55 |
| 104.17.140.162 | 80, 443, 8080 | 129 |
| 104.16.182.122 | 80, 443, 8080 | 131 |
| 104.19.121.124 | 80, 443, 8080 | 132 |
| 104.17.201.185 | 80, 443, 8080 | 133 |
| 104.19.174.231 | 80, 443, 8080 | 133 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9641:118b:2118:efb9:bb17:176d] | 80, 443, 8080 | 8 |
| [2606:4700:8d97:6eb8:130e:40b:388b:c43a] | 80, 443, 8080 | 8 |
| [2606:4700:9c65:8eaf:3305:bde4:29b:f286] | 80, 443, 8080 | 8 |
| [2606:4700:9641:118b:2118:efb9:bb17:176d] | 80, 443, 8080 | 8 |
| [2606:4700:8d97:6eb8:130e:40b:388b:c43a] | 80, 443, 8080 | 8 |
| [2606:4700:9c65:8eaf:3305:bde4:29b:f286] | 80, 443, 8080 | 8 |
| [2606:4700:9641:118b:2118:efb9:bb17:176d] | 80, 443, 8080 | 8 |
| [2606:4700:8d97:6eb8:130e:40b:388b:c43a] | 80, 443, 8080 | 8 |
| [2606:4700:9c65:8eaf:3305:bde4:29b:f286] | 80, 443, 8080 | 8 |
| [2606:4700:9c65:3320:dc79:3f55:8bf2:cf76] | 80, 443, 8080 | 9 |
| [2606:4700:8d97:7c69:525d:b1e:bc70:b91a] | 80, 443, 8080 | 9 |
| [2606:4700:9c65:3320:dc79:3f55:8bf2:cf76] | 80, 443, 8080 | 9 |
| [2606:4700:8d97:7c69:525d:b1e:bc70:b91a] | 80, 443, 8080 | 9 |
| [2606:4700:9c65:3320:dc79:3f55:8bf2:cf76] | 80, 443, 8080 | 9 |
| [2606:4700:8d97:7c69:525d:b1e:bc70:b91a] | 80, 443, 8080 | 9 |

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
