# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-06 00:09:47 +0330

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
| 198.41.208.203 | 80, 443, 8080 | 52 |
| 198.41.209.149 | 80, 443, 8080 | 53 |
| 141.101.121.4 | 80, 443, 8080 | 53 |
| 198.41.211.239 | 80, 443, 8080 | 54 |
| 162.159.255.118 | 80, 443, 8080 | 56 |
| 198.41.209.5 | 80, 443, 8080 | 58 |
| 104.21.226.241 | 80, 443, 8080 | 137 |
| 172.67.225.243 | 80, 443, 8080 | 150 |
| 172.67.251.139 | 80, 443, 8080 | 155 |
| 104.16.120.173 | 80, 443, 8080 | 156 |
| 104.18.193.106 | 80, 443, 8080 | 162 |
| 172.67.201.141 | 80, 443, 8080 | 216 |
| 172.67.242.170 | 80, 443, 8080 | 220 |
| 172.67.130.97 | 80, 443, 8080 | 223 |
| 172.67.252.48 | 80, 443, 8080 | 224 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:3022:30f8:20eb:cc8f:7f4a:a89f] | 80, 443, 8080 | 3 |
| [2606:4700:8de2:27f5:8bc6:7858:216:8452] | 80, 443, 8080 | 3 |
| [2606:4700:3022:30f8:20eb:cc8f:7f4a:a89f] | 80, 443, 8080 | 3 |
| [2606:4700:8de2:27f5:8bc6:7858:216:8452] | 80, 443, 8080 | 3 |
| [2606:4700:3022:30f8:20eb:cc8f:7f4a:a89f] | 80, 443, 8080 | 3 |
| [2606:4700:8de2:27f5:8bc6:7858:216:8452] | 80, 443, 8080 | 3 |
| [2606:4700:138:5913:372c:8f3c:9c59:5d74] | 80, 443, 8080 | 4 |
| [2606:4700:9ad9:d149:4cc0:388:ee8b:346] | 80, 443, 8080 | 4 |
| [2606:4700:14:3104:8bb1:57c5:ce0c:944e] | 80, 443, 8080 | 4 |
| [2606:4700:138:5913:372c:8f3c:9c59:5d74] | 80, 443, 8080 | 4 |
| [2606:4700:9ad9:d149:4cc0:388:ee8b:346] | 80, 443, 8080 | 4 |
| [2606:4700:14:3104:8bb1:57c5:ce0c:944e] | 80, 443, 8080 | 4 |
| [2606:4700:138:5913:372c:8f3c:9c59:5d74] | 80, 443, 8080 | 4 |
| [2606:4700:9ad9:d149:4cc0:388:ee8b:346] | 80, 443, 8080 | 4 |
| [2606:4700:14:3104:8bb1:57c5:ce0c:944e] | 80, 443, 8080 | 4 |

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
