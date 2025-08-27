# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-08-28 00:08:19 +0330

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
| 172.64.68.47 | 80, 443, 8080 | 53 |
| 172.64.95.220 | 80, 443, 8080 | 53 |
| 162.159.133.38 | 80, 443, 8080 | 56 |
| 198.41.208.216 | 80, 443, 8080 | 61 |
| 198.41.208.232 | 80, 443, 8080 | 62 |
| 172.64.91.45 | 80, 443, 8080 | 129 |
| 104.17.114.254 | 80, 443, 8080 | 130 |
| 104.18.150.195 | 80, 443, 8080 | 130 |
| 172.67.135.223 | 80, 443, 8080 | 130 |
| 104.18.234.126 | 80, 443, 8080 | 131 |
| 172.67.207.167 | 80, 443, 8080 | 131 |
| 172.67.244.12 | 80, 443, 8080 | 131 |
| 172.67.211.208 | 80, 443, 8080 | 131 |
| 104.16.0.41 | 80, 443, 8080 | 146 |
| 172.67.169.196 | 80, 443, 8080 | 156 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:d0:1f59:c232:56a8:58b1:592f] | 80, 443, 8080 | 3 |
| [2606:4700:d0:c5d4:86ed:9c0b:3822:3f] | 80, 443, 8080 | 3 |
| [2606:4700:8de2:d979:885e:e76:e29a:b3ea] | 80, 443, 8080 | 3 |
| [2606:4700:138:8656:2706:bd39:93e6:1784] | 80, 443, 8080 | 3 |
| [2606:4700:138:d342:e37a:5409:93fb:4808] | 80, 443, 8080 | 3 |
| [2606:4700:d0:1f59:c232:56a8:58b1:592f] | 80, 443, 8080 | 3 |
| [2606:4700:d0:c5d4:86ed:9c0b:3822:3f] | 80, 443, 8080 | 3 |
| [2606:4700:8de2:d979:885e:e76:e29a:b3ea] | 80, 443, 8080 | 3 |
| [2606:4700:138:8656:2706:bd39:93e6:1784] | 80, 443, 8080 | 3 |
| [2606:4700:138:d342:e37a:5409:93fb:4808] | 80, 443, 8080 | 3 |
| [2606:4700:d0:1f59:c232:56a8:58b1:592f] | 80, 443, 8080 | 3 |
| [2606:4700:d0:c5d4:86ed:9c0b:3822:3f] | 80, 443, 8080 | 3 |
| [2606:4700:8de2:d979:885e:e76:e29a:b3ea] | 80, 443, 8080 | 3 |
| [2606:4700:138:8656:2706:bd39:93e6:1784] | 80, 443, 8080 | 3 |
| [2606:4700:138:d342:e37a:5409:93fb:4808] | 80, 443, 8080 | 3 |

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
