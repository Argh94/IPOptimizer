# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-11-03 10:22:11 +0330

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
| 104.17.117.98 | 80, 443, 8080 | 39 |
| 104.17.144.107 | 80, 443, 8080 | 39 |
| 162.159.46.134 | 80, 443, 8080 | 53 |
| 172.67.125.29 | 80, 443, 8080 | 56 |
| 172.64.91.158 | 80, 443, 8080 | 56 |
| 198.41.222.213 | 80, 443, 8080 | 71 |
| 198.41.223.147 | 80, 443, 8080 | 74 |
| 104.19.145.136 | 80, 443, 8080 | 129 |
| 104.19.115.88 | 80, 443, 8080 | 131 |
| 104.16.218.10 | 80, 443, 8080 | 134 |
| 172.67.232.9 | 80, 443, 8080 | 143 |
| 172.67.162.200 | 80, 443, 8080 | 143 |
| 104.16.205.99 | 80, 443, 8080 | 197 |
| 104.16.216.124 | 80, 443, 8080 | 199 |
| 162.159.237.156 | 80, 443, 8080 | 232 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:90d6:e2f1:186a:6e92:6867:bf39] | 80, 443, 8080 | 3 |
| [2606:4700:9ad9:8540:9d68:a5b3:38e:9be2] | 80, 443, 8080 | 3 |
| [2606:4700:9ad9:9128:d689:b3c3:8fba:4bcd] | 80, 443, 8080 | 3 |
| [2606:4700:91b3:3a3d:8ce0:e15f:7bca:275] | 80, 443, 8080 | 3 |
| [2606:4700:90d6:e2f1:186a:6e92:6867:bf39] | 80, 443, 8080 | 3 |
| [2606:4700:9ad9:8540:9d68:a5b3:38e:9be2] | 80, 443, 8080 | 3 |
| [2606:4700:9ad9:9128:d689:b3c3:8fba:4bcd] | 80, 443, 8080 | 3 |
| [2606:4700:91b3:3a3d:8ce0:e15f:7bca:275] | 80, 443, 8080 | 3 |
| [2606:4700:90d6:e2f1:186a:6e92:6867:bf39] | 80, 443, 8080 | 3 |
| [2606:4700:9ad9:8540:9d68:a5b3:38e:9be2] | 80, 443, 8080 | 3 |
| [2606:4700:9ad9:9128:d689:b3c3:8fba:4bcd] | 80, 443, 8080 | 3 |
| [2606:4700:91b3:3a3d:8ce0:e15f:7bca:275] | 80, 443, 8080 | 3 |
| [2606:4700:11:49c8:44bd:6e63:df65:c7ba] | 80, 443, 8080 | 12 |
| [2606:4700:11:49c8:44bd:6e63:df65:c7ba] | 80, 443, 8080 | 12 |
| [2606:4700:11:49c8:44bd:6e63:df65:c7ba] | 80, 443, 8080 | 12 |

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
