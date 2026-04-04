# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-04-05 00:28:46 +0330

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
| 198.41.209.167 | 80, 443, 8080 | 54 |
| 198.41.209.167 | 80, 443, 8080 | 54 |
| 162.159.36.23 | 80, 443, 8080 | 74 |
| 104.17.116.64 | 80, 443, 8080 | 131 |
| 104.18.167.38 | 80, 443, 8080 | 131 |
| 104.18.252.218 | 80, 443, 8080 | 134 |
| 104.25.76.166 | 80, 443, 8080 | 154 |
| 172.67.92.249 | 80, 443, 8080 | 184 |
| 172.67.92.249 | 80, 443, 8080 | 184 |
| 172.67.235.29 | 80, 443, 8080 | 195 |
| 172.67.235.29 | 80, 443, 8080 | 195 |
| 198.41.209.113 | 80, 443, 8080 | 200 |
| 198.41.209.113 | 80, 443, 8080 | 200 |
| 172.64.94.155 | 80, 443, 8080 | 201 |
| 172.64.94.155 | 80, 443, 8080 | 201 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:839d:efdf:47e8:784a:285f:7070] | 80, 443, 8080 | 1 |
| [2606:4700:90d7:aadb:7b8d:3062:cce3:8b59] | 80, 443, 8080 | 1 |
| [2606:4700:9a64:d6c2:d52a:f3f:eb00:f299] | 80, 443, 8080 | 1 |
| [2606:4700:839d:efdf:47e8:784a:285f:7070] | 80, 443, 8080 | 1 |
| [2606:4700:90d7:aadb:7b8d:3062:cce3:8b59] | 80, 443, 8080 | 1 |
| [2606:4700:9a64:d6c2:d52a:f3f:eb00:f299] | 80, 443, 8080 | 1 |
| [2606:4700:839d:efdf:47e8:784a:285f:7070] | 80, 443, 8080 | 1 |
| [2606:4700:90d7:aadb:7b8d:3062:cce3:8b59] | 80, 443, 8080 | 1 |
| [2606:4700:9a64:d6c2:d52a:f3f:eb00:f299] | 80, 443, 8080 | 1 |
| [2606:4700:91b5:cd4d:d394:17a9:f7a8:de03] | 80, 443, 8080 | 3 |
| [2606:4700:9c6f:acd:ad58:2f64:86ff:967d] | 80, 443, 8080 | 3 |
| [2606:4700:91b5:cd4d:d394:17a9:f7a8:de03] | 80, 443, 8080 | 3 |
| [2606:4700:9c6f:acd:ad58:2f64:86ff:967d] | 80, 443, 8080 | 3 |
| [2606:4700:91b5:cd4d:d394:17a9:f7a8:de03] | 80, 443, 8080 | 3 |
| [2606:4700:9c6f:acd:ad58:2f64:86ff:967d] | 80, 443, 8080 | 3 |

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
