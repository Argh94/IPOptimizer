# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-05 00:28:08 +0330

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
| 198.41.208.59 | 80, 443, 8080 | 52 |
| 198.41.208.114 | 80, 443, 8080 | 52 |
| 198.41.208.229 | 80, 443, 8080 | 52 |
| 198.41.208.59 | 80, 443, 8080 | 52 |
| 198.41.208.114 | 80, 443, 8080 | 52 |
| 172.64.93.6 | 80, 443, 8080 | 53 |
| 172.64.93.6 | 80, 443, 8080 | 53 |
| 141.101.121.51 | 80, 443, 8080 | 56 |
| 141.101.121.51 | 80, 443, 8080 | 56 |
| 104.18.70.89 | 80, 443, 8080 | 130 |
| 104.16.120.26 | 80, 443, 8080 | 138 |
| 104.17.134.146 | 80, 443, 8080 | 138 |
| 104.18.113.86 | 80, 443, 8080 | 141 |
| 104.17.118.106 | 80, 443, 8080 | 147 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8ca3:2bbd:bc09:53f6:82eb:4fd2] | 80, 443, 8080 | 1 |
| [2606:4700:d:f465:b67b:734a:af01:b787] | 80, 443, 8080 | 1 |
| [2606:4700:99e5:41eb:793a:4e95:3180:43e2] | 80, 443, 8080 | 1 |
| [2606:4700:131:49bb:e939:951:d20b:74b] | 80, 443, 8080 | 1 |
| [2606:4700:d1:b405:2f37:6d98:4ab7:c499] | 80, 443, 8080 | 1 |
| [2606:4700:8ca3:2bbd:bc09:53f6:82eb:4fd2] | 80, 443, 8080 | 1 |
| [2606:4700:d:f465:b67b:734a:af01:b787] | 80, 443, 8080 | 1 |
| [2606:4700:99e5:41eb:793a:4e95:3180:43e2] | 80, 443, 8080 | 1 |
| [2606:4700:131:49bb:e939:951:d20b:74b] | 80, 443, 8080 | 1 |
| [2606:4700:d1:b405:2f37:6d98:4ab7:c499] | 80, 443, 8080 | 1 |
| [2606:4700:8ca3:2bbd:bc09:53f6:82eb:4fd2] | 80, 443, 8080 | 1 |
| [2606:4700:d:f465:b67b:734a:af01:b787] | 80, 443, 8080 | 1 |
| [2606:4700:99e5:41eb:793a:4e95:3180:43e2] | 80, 443, 8080 | 1 |
| [2606:4700:131:49bb:e939:951:d20b:74b] | 80, 443, 8080 | 1 |
| [2606:4700:d1:b405:2f37:6d98:4ab7:c499] | 80, 443, 8080 | 1 |

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
