# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-05 00:06:47 +0330

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
| 198.41.222.9 | 80, 443, 8080 | 52 |
| 162.159.251.18 | 80, 443, 8080 | 55 |
| 172.67.123.124 | 80, 443, 8080 | 56 |
| 198.41.208.174 | 80, 443, 8080 | 84 |
| 198.41.209.138 | 80, 443, 8080 | 95 |
| 198.41.208.125 | 80, 443, 8080 | 118 |
| 198.41.208.39 | 80, 443, 8080 | 119 |
| 104.19.10.122 | 80, 443, 8080 | 128 |
| 104.18.211.29 | 80, 443, 8080 | 128 |
| 104.17.43.109 | 80, 443, 8080 | 129 |
| 104.18.91.147 | 80, 443, 8080 | 129 |
| 104.18.71.197 | 80, 443, 8080 | 130 |
| 172.67.137.187 | 80, 443, 8080 | 130 |
| 172.67.248.34 | 80, 443, 8080 | 139 |
| 172.67.165.106 | 80, 443, 8080 | 142 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:976a:4680:543f:2b05:9da2:81ff] | 80, 443, 8080 | 3 |
| [2606:4700:9aeb:cd44:159:b926:b97f:4424] | 80, 443, 8080 | 3 |
| [2606:4700:3020:c784:4135:4a88:a622:f6fe] | 80, 443, 8080 | 3 |
| [2606:4700:9ad0:9698:fc9b:ed05:be86:727f] | 80, 443, 8080 | 3 |
| [2606:4700:976a:4680:543f:2b05:9da2:81ff] | 80, 443, 8080 | 3 |
| [2606:4700:9aeb:cd44:159:b926:b97f:4424] | 80, 443, 8080 | 3 |
| [2606:4700:3020:c784:4135:4a88:a622:f6fe] | 80, 443, 8080 | 3 |
| [2606:4700:9ad0:9698:fc9b:ed05:be86:727f] | 80, 443, 8080 | 3 |
| [2606:4700:976a:4680:543f:2b05:9da2:81ff] | 80, 443, 8080 | 3 |
| [2606:4700:9aeb:cd44:159:b926:b97f:4424] | 80, 443, 8080 | 3 |
| [2606:4700:3020:c784:4135:4a88:a622:f6fe] | 80, 443, 8080 | 3 |
| [2606:4700:9ad0:9698:fc9b:ed05:be86:727f] | 80, 443, 8080 | 3 |
| [2606:4700:3020:64b3:4d7c:2a49:ef0c:a9ea] | 80, 443, 8080 | 4 |
| [2606:4700:3020:64b3:4d7c:2a49:ef0c:a9ea] | 80, 443, 8080 | 4 |
| [2606:4700:3020:64b3:4d7c:2a49:ef0c:a9ea] | 80, 443, 8080 | 4 |

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
