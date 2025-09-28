# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-29 00:09:43 +0330

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
| 198.41.209.202 | 80, 443, 8080 | 51 |
| 172.64.89.136 | 80, 443, 8080 | 54 |
| 172.67.91.236 | 80, 443, 8080 | 55 |
| 190.93.245.137 | 80, 443, 8080 | 55 |
| 198.41.222.194 | 80, 443, 8080 | 63 |
| 104.19.113.245 | 80, 443, 8080 | 129 |
| 104.19.125.73 | 80, 443, 8080 | 129 |
| 104.16.217.91 | 80, 443, 8080 | 130 |
| 104.17.17.166 | 80, 443, 8080 | 131 |
| 172.67.134.157 | 80, 443, 8080 | 145 |
| 172.67.254.181 | 80, 443, 8080 | 146 |
| 162.159.239.236 | 80, 443, 8080 | 218 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9c68:dc5b:7694:7b55:bc51:a706] | 80, 443, 8080 | 3 |
| [2606:4700:9c60:d698:23bc:d798:3478:b17b] | 80, 443, 8080 | 3 |
| [2606:4700:9c68:dc5b:7694:7b55:bc51:a706] | 80, 443, 8080 | 3 |
| [2606:4700:9c60:d698:23bc:d798:3478:b17b] | 80, 443, 8080 | 3 |
| [2606:4700:9c68:dc5b:7694:7b55:bc51:a706] | 80, 443, 8080 | 3 |
| [2606:4700:9c60:d698:23bc:d798:3478:b17b] | 80, 443, 8080 | 3 |
| [2606:4700:9c60:dd6e:24eb:1946:fd6c:6244] | 80, 443, 8080 | 4 |
| [2606:4700:99e7:6873:44a9:1075:bcba:1ed3] | 80, 443, 8080 | 4 |
| [2606:4700:4406:4873:ffa8:d6a2:fb01:6297] | 80, 443, 8080 | 4 |
| [2606:4700:9c60:dd6e:24eb:1946:fd6c:6244] | 80, 443, 8080 | 4 |
| [2606:4700:99e7:6873:44a9:1075:bcba:1ed3] | 80, 443, 8080 | 4 |
| [2606:4700:4406:4873:ffa8:d6a2:fb01:6297] | 80, 443, 8080 | 4 |
| [2606:4700:9c60:dd6e:24eb:1946:fd6c:6244] | 80, 443, 8080 | 4 |
| [2606:4700:99e7:6873:44a9:1075:bcba:1ed3] | 80, 443, 8080 | 4 |
| [2606:4700:4406:4873:ffa8:d6a2:fb01:6297] | 80, 443, 8080 | 4 |

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
