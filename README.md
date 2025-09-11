# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-12 00:04:31 +0330

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
| 198.41.208.182 | 80, 443, 8080 | 51 |
| 198.41.208.172 | 80, 443, 8080 | 52 |
| 141.101.122.148 | 80, 443, 8080 | 52 |
| 162.159.251.118 | 80, 443, 8080 | 53 |
| 172.64.82.119 | 80, 443, 8080 | 56 |
| 162.159.248.151 | 80, 443, 8080 | 57 |
| 198.41.208.69 | 80, 443, 8080 | 57 |
| 198.41.208.158 | 80, 443, 8080 | 97 |
| 104.19.25.116 | 80, 443, 8080 | 130 |
| 104.17.177.44 | 80, 443, 8080 | 130 |
| 104.16.143.82 | 80, 443, 8080 | 130 |
| 104.18.106.37 | 80, 443, 8080 | 131 |
| 104.16.21.176 | 80, 443, 8080 | 140 |
| 172.67.189.114 | 80, 443, 8080 | 147 |
| 172.67.139.216 | 80, 443, 8080 | 148 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:90d8:3cb0:aa54:5321:908a:706b] | 80, 443, 8080 | 3 |
| [2606:4700:90d8:3cb0:aa54:5321:908a:706b] | 80, 443, 8080 | 3 |
| [2606:4700:90d8:3cb0:aa54:5321:908a:706b] | 80, 443, 8080 | 3 |
| [2606:4700:9ad0:3711:bf48:daf3:237c:ff2] | 80, 443, 8080 | 4 |
| [2606:4700:8393:f7e3:c2e9:44db:7d25:7f8d] | 80, 443, 8080 | 4 |
| [2606:4700:90d8:7951:96c:c430:7d0a:dbae] | 80, 443, 8080 | 4 |
| [2606:4700:9ad0:805d:4fc:7672:8b2e:3161] | 80, 443, 8080 | 4 |
| [2606:4700:9ad0:3711:bf48:daf3:237c:ff2] | 80, 443, 8080 | 4 |
| [2606:4700:8393:f7e3:c2e9:44db:7d25:7f8d] | 80, 443, 8080 | 4 |
| [2606:4700:90d8:7951:96c:c430:7d0a:dbae] | 80, 443, 8080 | 4 |
| [2606:4700:9ad0:805d:4fc:7672:8b2e:3161] | 80, 443, 8080 | 4 |
| [2606:4700:9ad0:3711:bf48:daf3:237c:ff2] | 80, 443, 8080 | 4 |
| [2606:4700:8393:f7e3:c2e9:44db:7d25:7f8d] | 80, 443, 8080 | 4 |
| [2606:4700:90d8:7951:96c:c430:7d0a:dbae] | 80, 443, 8080 | 4 |
| [2606:4700:9ad0:805d:4fc:7672:8b2e:3161] | 80, 443, 8080 | 4 |

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
