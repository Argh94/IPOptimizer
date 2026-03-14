# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-14 10:41:18 +0330

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
| 198.41.209.132 | 80, 443, 8080 | 52 |
| 198.41.208.186 | 80, 443, 8080 | 52 |
| 198.41.209.132 | 80, 443, 8080 | 52 |
| 198.41.208.186 | 80, 443, 8080 | 52 |
| 162.159.194.251 | 80, 443, 8080 | 55 |
| 162.159.194.251 | 80, 443, 8080 | 55 |
| 198.41.208.151 | 80, 443, 8080 | 57 |
| 141.101.114.221 | 80, 443, 8080 | 57 |
| 198.41.208.151 | 80, 443, 8080 | 57 |
| 141.101.114.221 | 80, 443, 8080 | 57 |
| 104.18.4.139 | 80, 443, 8080 | 132 |
| 104.16.143.71 | 80, 443, 8080 | 133 |
| 104.18.232.87 | 80, 443, 8080 | 134 |
| 104.19.74.9 | 80, 443, 8080 | 142 |
| 104.16.178.137 | 80, 443, 8080 | 159 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:16:d4b8:74c3:f8a3:d3fd:3e96] | 80, 443, 8080 | 1 |
| [2606:4700:16:4e3a:2117:e860:f4d1:1403] | 80, 443, 8080 | 1 |
| [2606:4700:8cac:81e0:638a:ad1b:92ce:bc56] | 80, 443, 8080 | 1 |
| [2606:4700:5:1147:bf56:e77a:529b:ebb4] | 80, 443, 8080 | 1 |
| [2606:4700:8dd6:54a:9f29:845:d633:dd51] | 80, 443, 8080 | 1 |
| [2606:4700:16:d4b8:74c3:f8a3:d3fd:3e96] | 80, 443, 8080 | 1 |
| [2606:4700:16:4e3a:2117:e860:f4d1:1403] | 80, 443, 8080 | 1 |
| [2606:4700:8cac:81e0:638a:ad1b:92ce:bc56] | 80, 443, 8080 | 1 |
| [2606:4700:5:1147:bf56:e77a:529b:ebb4] | 80, 443, 8080 | 1 |
| [2606:4700:8dd6:54a:9f29:845:d633:dd51] | 80, 443, 8080 | 1 |
| [2606:4700:16:d4b8:74c3:f8a3:d3fd:3e96] | 80, 443, 8080 | 1 |
| [2606:4700:16:4e3a:2117:e860:f4d1:1403] | 80, 443, 8080 | 1 |
| [2606:4700:8cac:81e0:638a:ad1b:92ce:bc56] | 80, 443, 8080 | 1 |
| [2606:4700:5:1147:bf56:e77a:529b:ebb4] | 80, 443, 8080 | 1 |
| [2606:4700:8dd6:54a:9f29:845:d633:dd51] | 80, 443, 8080 | 1 |

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
