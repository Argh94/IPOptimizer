# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-11-03 00:10:18 +0330

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
| 104.17.150.16 | 80, 443, 8080 | 38 |
| 198.41.208.113 | 80, 443, 8080 | 51 |
| 190.93.245.204 | 80, 443, 8080 | 54 |
| 172.67.109.246 | 80, 443, 8080 | 55 |
| 172.67.108.226 | 80, 443, 8080 | 56 |
| 162.159.46.95 | 80, 443, 8080 | 81 |
| 198.41.223.179 | 80, 443, 8080 | 92 |
| 104.17.115.141 | 80, 443, 8080 | 128 |
| 104.16.0.129 | 80, 443, 8080 | 129 |
| 104.17.37.20 | 80, 443, 8080 | 132 |
| 172.67.152.235 | 80, 443, 8080 | 142 |
| 172.67.166.194 | 80, 443, 8080 | 143 |
| 172.67.148.152 | 80, 443, 8080 | 143 |
| 141.101.114.226 | 80, 443, 8080 | 173 |
| 104.21.70.243 | 80, 443, 8080 | 192 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8d74:50b4:f802:a24:aee6:df60] | 80, 443, 8080 | 3 |
| [2606:4700:8d74:23d5:4b77:ee3:3a59:7036] | 80, 443, 8080 | 3 |
| [2606:4700:91b8:c08:9092:244c:466f:8ef0] | 80, 443, 8080 | 3 |
| [2606:4700:3:e317:b053:a84c:7dd5:c051] | 80, 443, 8080 | 3 |
| [2606:4700:8d74:50b4:f802:a24:aee6:df60] | 80, 443, 8080 | 3 |
| [2606:4700:8d74:23d5:4b77:ee3:3a59:7036] | 80, 443, 8080 | 3 |
| [2606:4700:91b8:c08:9092:244c:466f:8ef0] | 80, 443, 8080 | 3 |
| [2606:4700:3:e317:b053:a84c:7dd5:c051] | 80, 443, 8080 | 3 |
| [2606:4700:8d74:50b4:f802:a24:aee6:df60] | 80, 443, 8080 | 3 |
| [2606:4700:8d74:23d5:4b77:ee3:3a59:7036] | 80, 443, 8080 | 3 |
| [2606:4700:91b8:c08:9092:244c:466f:8ef0] | 80, 443, 8080 | 3 |
| [2606:4700:3:e317:b053:a84c:7dd5:c051] | 80, 443, 8080 | 3 |
| [2606:4700:3038:af44:b6ae:701c:1d12:feee] | 80, 443, 8080 | 12 |
| [2606:4700:3038:af44:b6ae:701c:1d12:feee] | 80, 443, 8080 | 12 |
| [2606:4700:3038:af44:b6ae:701c:1d12:feee] | 80, 443, 8080 | 12 |

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
