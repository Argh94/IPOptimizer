# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-04-01 11:30:25 +0330

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
| 198.41.209.49 | 80, 443, 8080 | 51 |
| 198.41.209.49 | 80, 443, 8080 | 51 |
| 162.159.137.147 | 80, 443, 8080 | 53 |
| 162.159.137.147 | 80, 443, 8080 | 53 |
| 162.159.137.206 | 80, 443, 8080 | 54 |
| 162.159.137.206 | 80, 443, 8080 | 54 |
| 198.41.209.73 | 80, 443, 8080 | 59 |
| 198.41.209.73 | 80, 443, 8080 | 59 |
| 198.41.208.66 | 80, 443, 8080 | 62 |
| 198.41.208.66 | 80, 443, 8080 | 62 |
| 104.18.4.83 | 80, 443, 8080 | 130 |
| 104.16.104.200 | 80, 443, 8080 | 133 |
| 104.17.107.178 | 80, 443, 8080 | 134 |
| 104.16.17.95 | 80, 443, 8080 | 136 |
| 104.19.239.220 | 80, 443, 8080 | 136 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9765:1c78:553a:65e7:d223:cded] | 80, 443, 8080 | 3 |
| [2606:4700:131:ff5e:60a2:c49d:7045:e537] | 80, 443, 8080 | 3 |
| [2606:4700:8ddf:3f05:5d22:fc51:1526:45d5] | 80, 443, 8080 | 3 |
| [2606:4700:8ddf:569:b5a5:2157:9c49:8aaa] | 80, 443, 8080 | 3 |
| [2606:4700:9765:1c78:553a:65e7:d223:cded] | 80, 443, 8080 | 3 |
| [2606:4700:131:ff5e:60a2:c49d:7045:e537] | 80, 443, 8080 | 3 |
| [2606:4700:8ddf:3f05:5d22:fc51:1526:45d5] | 80, 443, 8080 | 3 |
| [2606:4700:8ddf:569:b5a5:2157:9c49:8aaa] | 80, 443, 8080 | 3 |
| [2606:4700:9765:1c78:553a:65e7:d223:cded] | 80, 443, 8080 | 3 |
| [2606:4700:131:ff5e:60a2:c49d:7045:e537] | 80, 443, 8080 | 3 |
| [2606:4700:8ddf:3f05:5d22:fc51:1526:45d5] | 80, 443, 8080 | 3 |
| [2606:4700:8ddf:569:b5a5:2157:9c49:8aaa] | 80, 443, 8080 | 3 |
| [2606:4700:131:39a6:d910:3bdc:a1:4ac6] | 80, 443, 8080 | 13 |
| [2606:4700:131:39a6:d910:3bdc:a1:4ac6] | 80, 443, 8080 | 13 |
| [2606:4700:131:39a6:d910:3bdc:a1:4ac6] | 80, 443, 8080 | 13 |

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
