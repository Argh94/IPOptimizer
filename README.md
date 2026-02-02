# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-02-02 11:02:44 +0330

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
| 198.41.208.186 | 80, 443, 8080 | 50 |
| 198.41.209.110 | 80, 443, 8080 | 50 |
| 198.41.208.186 | 80, 443, 8080 | 50 |
| 198.41.209.110 | 80, 443, 8080 | 50 |
| 190.93.245.133 | 80, 443, 8080 | 51 |
| 190.93.245.133 | 80, 443, 8080 | 51 |
| 141.101.114.227 | 80, 443, 8080 | 52 |
| 141.101.114.227 | 80, 443, 8080 | 52 |
| 190.93.246.207 | 80, 443, 8080 | 54 |
| 190.93.246.207 | 80, 443, 8080 | 54 |
| 104.17.235.220 | 80, 443, 8080 | 129 |
| 104.19.213.222 | 80, 443, 8080 | 131 |
| 104.18.192.155 | 80, 443, 8080 | 131 |
| 104.19.15.8 | 80, 443, 8080 | 133 |
| 104.16.87.84 | 80, 443, 8080 | 134 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9761:8dde:1cb9:9c46:de8f:4926] | 80, 443, 8080 | 3 |
| [2606:4700:3029:b8a1:b9e1:c5a:d3e5:5a37] | 80, 443, 8080 | 3 |
| [2606:4700:91ba:e618:87b6:87f0:550b:addd] | 80, 443, 8080 | 3 |
| [2606:4700:91ba:1c45:aed6:f6d:6317:b3b0] | 80, 443, 8080 | 3 |
| [2606:4700:3029:9f70:26be:1074:49a9:c339] | 80, 443, 8080 | 3 |
| [2606:4700:9761:8dde:1cb9:9c46:de8f:4926] | 80, 443, 8080 | 3 |
| [2606:4700:3029:b8a1:b9e1:c5a:d3e5:5a37] | 80, 443, 8080 | 3 |
| [2606:4700:91ba:e618:87b6:87f0:550b:addd] | 80, 443, 8080 | 3 |
| [2606:4700:91ba:1c45:aed6:f6d:6317:b3b0] | 80, 443, 8080 | 3 |
| [2606:4700:3029:9f70:26be:1074:49a9:c339] | 80, 443, 8080 | 3 |
| [2606:4700:9761:8dde:1cb9:9c46:de8f:4926] | 80, 443, 8080 | 3 |
| [2606:4700:3029:b8a1:b9e1:c5a:d3e5:5a37] | 80, 443, 8080 | 3 |
| [2606:4700:91ba:e618:87b6:87f0:550b:addd] | 80, 443, 8080 | 3 |
| [2606:4700:91ba:1c45:aed6:f6d:6317:b3b0] | 80, 443, 8080 | 3 |
| [2606:4700:3029:9f70:26be:1074:49a9:c339] | 80, 443, 8080 | 3 |

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
