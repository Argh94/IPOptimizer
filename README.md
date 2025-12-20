# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-21 00:12:28 +0330

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
| 172.67.157.148 | 80, 443, 8080 | 52 |
| 198.41.209.47 | 80, 443, 8080 | 52 |
| 172.67.157.148 | 80, 443, 8080 | 52 |
| 198.41.209.47 | 80, 443, 8080 | 52 |
| 198.41.209.157 | 80, 443, 8080 | 54 |
| 172.64.89.212 | 80, 443, 8080 | 54 |
| 198.41.209.105 | 80, 443, 8080 | 54 |
| 198.41.209.157 | 80, 443, 8080 | 54 |
| 172.64.89.212 | 80, 443, 8080 | 54 |
| 198.41.209.105 | 80, 443, 8080 | 54 |
| 198.41.211.33 | 80, 443, 8080 | 74 |
| 104.18.67.26 | 80, 443, 8080 | 127 |
| 104.19.86.189 | 80, 443, 8080 | 128 |
| 104.19.160.2 | 80, 443, 8080 | 129 |
| 104.18.188.96 | 80, 443, 8080 | 149 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:3029:adba:53dc:ff2d:c877:7c90] | 80, 443, 8080 | 3 |
| [2606:4700:3029:e2bc:3a3e:a337:85bc:ddc4] | 80, 443, 8080 | 3 |
| [2606:4700:130:dadc:ec47:f8af:74f9:ba33] | 80, 443, 8080 | 3 |
| [2606:4700:3029:adba:53dc:ff2d:c877:7c90] | 80, 443, 8080 | 3 |
| [2606:4700:3029:e2bc:3a3e:a337:85bc:ddc4] | 80, 443, 8080 | 3 |
| [2606:4700:130:dadc:ec47:f8af:74f9:ba33] | 80, 443, 8080 | 3 |
| [2606:4700:3029:adba:53dc:ff2d:c877:7c90] | 80, 443, 8080 | 3 |
| [2606:4700:3029:e2bc:3a3e:a337:85bc:ddc4] | 80, 443, 8080 | 3 |
| [2606:4700:130:dadc:ec47:f8af:74f9:ba33] | 80, 443, 8080 | 3 |
| [2606:4700:8ddf:c76f:7442:5f61:814e:a5d1] | 80, 443, 8080 | 9 |
| [2606:4700:8ddf:42b3:2904:4f69:7ab5:eba6] | 80, 443, 8080 | 9 |
| [2606:4700:8ddf:c76f:7442:5f61:814e:a5d1] | 80, 443, 8080 | 9 |
| [2606:4700:8ddf:42b3:2904:4f69:7ab5:eba6] | 80, 443, 8080 | 9 |
| [2606:4700:8ddf:c76f:7442:5f61:814e:a5d1] | 80, 443, 8080 | 9 |
| [2606:4700:8ddf:42b3:2904:4f69:7ab5:eba6] | 80, 443, 8080 | 9 |

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
