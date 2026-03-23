# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-23 11:13:56 +0330

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
| 162.159.36.2 | 80, 443, 8080 | 91 |
| 162.159.36.2 | 80, 443, 8080 | 91 |
| 162.159.36.2 | 80, 443, 8080 | 91 |
| 104.17.52.119 | 80, 443, 8080 | 133 |
| 104.16.146.30 | 80, 443, 8080 | 133 |
| 104.19.205.59 | 80, 443, 8080 | 133 |
| 104.17.52.119 | 80, 443, 8080 | 133 |
| 104.16.146.30 | 80, 443, 8080 | 133 |
| 104.19.205.59 | 80, 443, 8080 | 133 |
| 104.17.52.119 | 80, 443, 8080 | 133 |
| 104.16.146.30 | 80, 443, 8080 | 133 |
| 104.19.205.59 | 80, 443, 8080 | 133 |
| 104.17.146.250 | 80, 443, 8080 | 134 |
| 104.17.146.250 | 80, 443, 8080 | 134 |
| 104.17.146.250 | 80, 443, 8080 | 134 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8dd5:ebc:e446:b61f:9a3d:1dea] | 80, 443, 8080 | 3 |
| [2606:4700:8dd5:7a0c:2bc0:a803:d98d:5524] | 80, 443, 8080 | 3 |
| [2606:4700:9ad2:5fe:15b8:66e6:aa3a:1b5d] | 80, 443, 8080 | 3 |
| [2606:4700:8393:8a7:4963:3d0b:2a89:5b7c] | 80, 443, 8080 | 3 |
| [2606:4700:8dd5:ebc:e446:b61f:9a3d:1dea] | 80, 443, 8080 | 3 |
| [2606:4700:8dd5:7a0c:2bc0:a803:d98d:5524] | 80, 443, 8080 | 3 |
| [2606:4700:9ad2:5fe:15b8:66e6:aa3a:1b5d] | 80, 443, 8080 | 3 |
| [2606:4700:8393:8a7:4963:3d0b:2a89:5b7c] | 80, 443, 8080 | 3 |
| [2606:4700:8dd5:ebc:e446:b61f:9a3d:1dea] | 80, 443, 8080 | 3 |
| [2606:4700:8dd5:7a0c:2bc0:a803:d98d:5524] | 80, 443, 8080 | 3 |
| [2606:4700:9ad2:5fe:15b8:66e6:aa3a:1b5d] | 80, 443, 8080 | 3 |
| [2606:4700:8393:8a7:4963:3d0b:2a89:5b7c] | 80, 443, 8080 | 3 |
| [2606:4700:9ad2:667e:f229:f5ec:7767:4f7b] | 80, 443, 8080 | 4 |
| [2606:4700:9ad2:667e:f229:f5ec:7767:4f7b] | 80, 443, 8080 | 4 |
| [2606:4700:9ad2:667e:f229:f5ec:7767:4f7b] | 80, 443, 8080 | 4 |

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
