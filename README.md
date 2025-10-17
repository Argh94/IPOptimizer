# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-18 00:11:40 +0330

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
| 198.41.209.210 | 80, 443, 8080 | 50 |
| 172.64.95.71 | 80, 443, 8080 | 52 |
| 162.159.193.22 | 80, 443, 8080 | 56 |
| 172.64.87.107 | 80, 443, 8080 | 56 |
| 104.18.254.221 | 80, 443, 8080 | 129 |
| 104.19.59.153 | 80, 443, 8080 | 129 |
| 104.16.25.168 | 80, 443, 8080 | 132 |
| 104.16.82.120 | 80, 443, 8080 | 133 |
| 172.67.250.126 | 80, 443, 8080 | 143 |
| 172.67.216.62 | 80, 443, 8080 | 145 |
| 172.67.183.92 | 80, 443, 8080 | 145 |
| 104.17.95.64 | 80, 443, 8080 | 173 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:3013:6a3d:2de4:6a8d:cb40:934f] | 80, 443, 8080 | 3 |
| [2606:4700:3013:a9e9:7e58:d6e5:6e1:e4b5] | 80, 443, 8080 | 3 |
| [2606:4700:e:226e:2585:2c12:3ebf:4642] | 80, 443, 8080 | 3 |
| [2606:4700:3015:1663:ce47:d2b7:95a7:b0b7] | 80, 443, 8080 | 3 |
| [2606:4700:3013:6a3d:2de4:6a8d:cb40:934f] | 80, 443, 8080 | 3 |
| [2606:4700:3013:a9e9:7e58:d6e5:6e1:e4b5] | 80, 443, 8080 | 3 |
| [2606:4700:e:226e:2585:2c12:3ebf:4642] | 80, 443, 8080 | 3 |
| [2606:4700:3015:1663:ce47:d2b7:95a7:b0b7] | 80, 443, 8080 | 3 |
| [2606:4700:3013:6a3d:2de4:6a8d:cb40:934f] | 80, 443, 8080 | 3 |
| [2606:4700:3013:a9e9:7e58:d6e5:6e1:e4b5] | 80, 443, 8080 | 3 |
| [2606:4700:e:226e:2585:2c12:3ebf:4642] | 80, 443, 8080 | 3 |
| [2606:4700:3015:1663:ce47:d2b7:95a7:b0b7] | 80, 443, 8080 | 3 |
| [2606:4700:8de4:17dc:974d:8fd2:74d4:3622] | 80, 443, 8080 | 4 |
| [2606:4700:8de4:17dc:974d:8fd2:74d4:3622] | 80, 443, 8080 | 4 |
| [2606:4700:8de4:17dc:974d:8fd2:74d4:3622] | 80, 443, 8080 | 4 |

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
