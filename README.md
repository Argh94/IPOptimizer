# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-01-28 10:29:40 +0330

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
| 162.159.252.202 | 80, 443, 8080 | 51 |
| 172.64.84.134 | 80, 443, 8080 | 51 |
| 198.41.208.57 | 80, 443, 8080 | 51 |
| 198.41.209.71 | 80, 443, 8080 | 51 |
| 162.159.252.202 | 80, 443, 8080 | 51 |
| 172.64.84.134 | 80, 443, 8080 | 51 |
| 198.41.208.57 | 80, 443, 8080 | 51 |
| 198.41.209.71 | 80, 443, 8080 | 51 |
| 198.41.223.9 | 80, 443, 8080 | 79 |
| 162.159.36.200 | 80, 443, 8080 | 87 |
| 104.16.216.24 | 80, 443, 8080 | 134 |
| 104.18.13.170 | 80, 443, 8080 | 136 |
| 104.16.0.253 | 80, 443, 8080 | 149 |
| 141.101.113.219 | 80, 443, 8080 | 180 |
| 141.101.113.219 | 80, 443, 8080 | 180 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:4403:9ecd:24be:691a:81e8:2cec] | 80, 443, 8080 | 3 |
| [2606:4700:3015:9fc0:53f5:10f8:215e:5976] | 80, 443, 8080 | 3 |
| [2606:4700:4403:cdf4:d04e:6248:d665:de79] | 80, 443, 8080 | 3 |
| [2606:4700:4403:9ecd:24be:691a:81e8:2cec] | 80, 443, 8080 | 3 |
| [2606:4700:3015:9fc0:53f5:10f8:215e:5976] | 80, 443, 8080 | 3 |
| [2606:4700:4403:cdf4:d04e:6248:d665:de79] | 80, 443, 8080 | 3 |
| [2606:4700:4403:9ecd:24be:691a:81e8:2cec] | 80, 443, 8080 | 3 |
| [2606:4700:3015:9fc0:53f5:10f8:215e:5976] | 80, 443, 8080 | 3 |
| [2606:4700:4403:cdf4:d04e:6248:d665:de79] | 80, 443, 8080 | 3 |
| [2606:4700:3015:46a3:7354:caa5:e931:2ece] | 80, 443, 8080 | 4 |
| [2606:4700:3015:46a3:7354:caa5:e931:2ece] | 80, 443, 8080 | 4 |
| [2606:4700:3015:46a3:7354:caa5:e931:2ece] | 80, 443, 8080 | 4 |
| [2606:4700:9a60:7134:7585:b4df:b6d4:f4c3] | 80, 443, 8080 | 8 |
| [2606:4700:9a60:7134:7585:b4df:b6d4:f4c3] | 80, 443, 8080 | 8 |
| [2606:4700:9a60:7134:7585:b4df:b6d4:f4c3] | 80, 443, 8080 | 8 |

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
