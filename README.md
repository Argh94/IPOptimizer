# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-08-27 00:08:13 +0330

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
| 198.41.209.105 | 80, 443, 8080 | 51 |
| 198.41.209.162 | 80, 443, 8080 | 51 |
| 198.41.208.208 | 80, 443, 8080 | 51 |
| 198.41.209.210 | 80, 443, 8080 | 53 |
| 172.64.89.23 | 80, 443, 8080 | 56 |
| 198.41.208.92 | 80, 443, 8080 | 68 |
| 104.16.23.96 | 80, 443, 8080 | 128 |
| 104.19.160.14 | 80, 443, 8080 | 129 |
| 104.17.41.23 | 80, 443, 8080 | 131 |
| 172.67.181.131 | 80, 443, 8080 | 131 |
| 172.67.245.21 | 80, 443, 8080 | 131 |
| 172.67.195.99 | 80, 443, 8080 | 131 |
| 172.67.243.80 | 80, 443, 8080 | 132 |
| 104.19.39.73 | 80, 443, 8080 | 141 |
| 104.17.215.20 | 80, 443, 8080 | 147 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:91b4:5b8a:3623:37fa:d266:ad88] | 80, 443, 8080 | 3 |
| [2606:4700:91b4:7586:7067:a1ec:6449:b548] | 80, 443, 8080 | 3 |
| [2606:4700:91b4:5b8a:3623:37fa:d266:ad88] | 80, 443, 8080 | 3 |
| [2606:4700:91b4:7586:7067:a1ec:6449:b548] | 80, 443, 8080 | 3 |
| [2606:4700:91b4:5b8a:3623:37fa:d266:ad88] | 80, 443, 8080 | 3 |
| [2606:4700:91b4:7586:7067:a1ec:6449:b548] | 80, 443, 8080 | 3 |
| [2606:4700:16:1b5d:1213:9e54:6628:50d2] | 80, 443, 8080 | 4 |
| [2606:4700:8d93:cdf1:7004:cf14:e6a0:5b4c] | 80, 443, 8080 | 4 |
| [2606:4700:16:1b5d:1213:9e54:6628:50d2] | 80, 443, 8080 | 4 |
| [2606:4700:8d93:cdf1:7004:cf14:e6a0:5b4c] | 80, 443, 8080 | 4 |
| [2606:4700:16:1b5d:1213:9e54:6628:50d2] | 80, 443, 8080 | 4 |
| [2606:4700:8d93:cdf1:7004:cf14:e6a0:5b4c] | 80, 443, 8080 | 4 |
| [2606:4700:9ad5:6faf:5006:95c6:5670:6c9c] | 80, 443, 8080 | 5 |
| [2606:4700:9ad5:6faf:5006:95c6:5670:6c9c] | 80, 443, 8080 | 5 |
| [2606:4700:9ad5:6faf:5006:95c6:5670:6c9c] | 80, 443, 8080 | 5 |

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
