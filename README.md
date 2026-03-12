# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-12 10:57:56 +0330

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
| 162.159.251.118 | 80, 443, 8080 | 54 |
| 162.159.36.235 | 80, 443, 8080 | 54 |
| 162.159.251.118 | 80, 443, 8080 | 54 |
| 162.159.36.235 | 80, 443, 8080 | 54 |
| 198.41.223.93 | 80, 443, 8080 | 70 |
| 198.41.222.137 | 80, 443, 8080 | 84 |
| 104.18.216.150 | 80, 443, 8080 | 134 |
| 104.18.154.127 | 80, 443, 8080 | 141 |
| 104.19.175.197 | 80, 443, 8080 | 143 |
| 172.67.195.106 | 80, 443, 8080 | 197 |
| 172.67.195.106 | 80, 443, 8080 | 197 |
| 162.159.130.104 | 80, 443, 8080 | 198 |
| 162.159.134.88 | 80, 443, 8080 | 198 |
| 162.159.130.104 | 80, 443, 8080 | 198 |
| 162.159.134.88 | 80, 443, 8080 | 198 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:99e3:e8a:30f4:6ef2:ab4e:1ea5] | 80, 443, 8080 | 3 |
| [2606:4700:9a69:1935:9674:9ee1:6ff:550] | 80, 443, 8080 | 3 |
| [2606:4700:3012:73eb:77f2:b407:83a6:1012] | 80, 443, 8080 | 3 |
| [2606:4700:99e3:f401:13a:ec32:18b6:f22e] | 80, 443, 8080 | 3 |
| [2606:4700:9a69:9107:ef44:ed61:3c97:d67c] | 80, 443, 8080 | 3 |
| [2606:4700:99e3:e8a:30f4:6ef2:ab4e:1ea5] | 80, 443, 8080 | 3 |
| [2606:4700:9a69:1935:9674:9ee1:6ff:550] | 80, 443, 8080 | 3 |
| [2606:4700:3012:73eb:77f2:b407:83a6:1012] | 80, 443, 8080 | 3 |
| [2606:4700:99e3:f401:13a:ec32:18b6:f22e] | 80, 443, 8080 | 3 |
| [2606:4700:9a69:9107:ef44:ed61:3c97:d67c] | 80, 443, 8080 | 3 |
| [2606:4700:99e3:e8a:30f4:6ef2:ab4e:1ea5] | 80, 443, 8080 | 3 |
| [2606:4700:9a69:1935:9674:9ee1:6ff:550] | 80, 443, 8080 | 3 |
| [2606:4700:3012:73eb:77f2:b407:83a6:1012] | 80, 443, 8080 | 3 |
| [2606:4700:99e3:f401:13a:ec32:18b6:f22e] | 80, 443, 8080 | 3 |
| [2606:4700:9a69:9107:ef44:ed61:3c97:d67c] | 80, 443, 8080 | 3 |

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
