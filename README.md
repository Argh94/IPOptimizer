# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-08-30 00:06:45 +0330

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
| 190.93.246.113 | 80, 443, 8080 | 53 |
| 162.159.137.75 | 80, 443, 8080 | 56 |
| 198.41.208.242 | 80, 443, 8080 | 92 |
| 198.41.209.120 | 80, 443, 8080 | 119 |
| 198.41.208.51 | 80, 443, 8080 | 125 |
| 104.18.81.39 | 80, 443, 8080 | 128 |
| 104.17.108.240 | 80, 443, 8080 | 129 |
| 104.18.222.81 | 80, 443, 8080 | 129 |
| 104.17.55.28 | 80, 443, 8080 | 131 |
| 104.16.192.96 | 80, 443, 8080 | 131 |
| 172.67.237.216 | 80, 443, 8080 | 131 |
| 172.67.216.136 | 80, 443, 8080 | 131 |
| 172.67.164.29 | 80, 443, 8080 | 131 |
| 172.67.254.165 | 80, 443, 8080 | 131 |
| 190.93.245.86 | 80, 443, 8080 | 132 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:4700:cc88:89a6:dc55:c6be:e584] | 80, 443, 8080 | 3 |
| [2606:4700:4700:cc88:89a6:dc55:c6be:e584] | 80, 443, 8080 | 3 |
| [2606:4700:4700:cc88:89a6:dc55:c6be:e584] | 80, 443, 8080 | 3 |
| [2606:4700:3035:bd46:4ce4:ac3f:7173:e060] | 80, 443, 8080 | 4 |
| [2606:4700:4700:175e:914b:e9ca:3b95:3e47] | 80, 443, 8080 | 4 |
| [2606:4700:3035:bd46:4ce4:ac3f:7173:e060] | 80, 443, 8080 | 4 |
| [2606:4700:4700:175e:914b:e9ca:3b95:3e47] | 80, 443, 8080 | 4 |
| [2606:4700:3035:bd46:4ce4:ac3f:7173:e060] | 80, 443, 8080 | 4 |
| [2606:4700:4700:175e:914b:e9ca:3b95:3e47] | 80, 443, 8080 | 4 |
| [2606:4700:83b3:7e37:e9e0:360b:c436:5b7e] | 80, 443, 8080 | 156 |
| [2606:4700:83b3:7e37:e9e0:360b:c436:5b7e] | 80, 443, 8080 | 156 |
| [2606:4700:83b3:7e37:e9e0:360b:c436:5b7e] | 80, 443, 8080 | 156 |
| [2606:4700:83b3:cd75:f505:2864:5ce3:2a8] | 80, 443, 8080 | 165 |
| [2606:4700:83b3:cd75:f505:2864:5ce3:2a8] | 80, 443, 8080 | 165 |
| [2606:4700:83b3:cd75:f505:2864:5ce3:2a8] | 80, 443, 8080 | 165 |

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
