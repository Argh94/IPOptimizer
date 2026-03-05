# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-05 10:54:48 +0330

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
| 198.41.208.196 | 80, 443, 8080 | 53 |
| 172.64.68.254 | 80, 443, 8080 | 53 |
| 198.41.208.196 | 80, 443, 8080 | 53 |
| 172.64.68.254 | 80, 443, 8080 | 53 |
| 162.159.252.102 | 80, 443, 8080 | 54 |
| 198.41.208.233 | 80, 443, 8080 | 54 |
| 162.159.252.102 | 80, 443, 8080 | 54 |
| 198.41.208.233 | 80, 443, 8080 | 54 |
| 104.19.31.114 | 80, 443, 8080 | 133 |
| 104.19.190.229 | 80, 443, 8080 | 133 |
| 104.18.89.176 | 80, 443, 8080 | 134 |
| 104.18.148.93 | 80, 443, 8080 | 134 |
| 104.19.78.27 | 80, 443, 8080 | 148 |
| 162.159.138.36 | 80, 443, 8080 | 199 |
| 162.159.138.36 | 80, 443, 8080 | 199 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:99eb:a395:bcc3:d752:14d6:2854] | 80, 443, 8080 | 3 |
| [2606:4700:8392:f39e:f6ca:fcc:56de:b6d6] | 80, 443, 8080 | 3 |
| [2606:4700:8392:35a:9850:ec2a:95ca:9bf9] | 80, 443, 8080 | 3 |
| [2606:4700:1:6fa9:3e35:28b6:ab56:9f09] | 80, 443, 8080 | 3 |
| [2606:4700:1:9a97:b9ee:6601:fb3a:3655] | 80, 443, 8080 | 3 |
| [2606:4700:99eb:a395:bcc3:d752:14d6:2854] | 80, 443, 8080 | 3 |
| [2606:4700:8392:f39e:f6ca:fcc:56de:b6d6] | 80, 443, 8080 | 3 |
| [2606:4700:8392:35a:9850:ec2a:95ca:9bf9] | 80, 443, 8080 | 3 |
| [2606:4700:1:6fa9:3e35:28b6:ab56:9f09] | 80, 443, 8080 | 3 |
| [2606:4700:1:9a97:b9ee:6601:fb3a:3655] | 80, 443, 8080 | 3 |
| [2606:4700:99eb:a395:bcc3:d752:14d6:2854] | 80, 443, 8080 | 3 |
| [2606:4700:8392:f39e:f6ca:fcc:56de:b6d6] | 80, 443, 8080 | 3 |
| [2606:4700:8392:35a:9850:ec2a:95ca:9bf9] | 80, 443, 8080 | 3 |
| [2606:4700:1:6fa9:3e35:28b6:ab56:9f09] | 80, 443, 8080 | 3 |
| [2606:4700:1:9a97:b9ee:6601:fb3a:3655] | 80, 443, 8080 | 3 |

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
