# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-08-20 10:21:48 +0330

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
|----|------------------|--------------|
| 162.159.242.233 | 80, 443, 8080 | 53 |
| 198.41.223.3 | 80, 443, 8080 | 54 |
| 162.159.253.143 | 80, 443, 8080 | 54 |
| 172.64.87.245 | 80, 443, 8080 | 56 |
| 172.67.85.37 | 80, 443, 8080 | 56 |
| 172.67.92.93 | 80, 443, 8080 | 56 |
| 162.159.136.185 | 80, 443, 8080 | 56 |
| 172.67.240.85 | 80, 443, 8080 | 132 |
| 104.17.60.52 | 80, 443, 8080 | 141 |
| 198.41.209.23 | 80, 443, 8080 | 146 |
| 162.159.254.90 | 80, 443, 8080 | 148 |
| 104.27.121.140 | 80, 443, 8080 | 150 |
| 104.16.94.187 | 80, 443, 8080 | 152 |
| 172.67.171.52 | 80, 443, 8080 | 157 |
| 104.18.140.146 | 80, 443, 8080 | 157 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|----|------------------|--------------|
| [2606:4700:9645:91e3:b442:b60c:39a9:1017] | 80, 443, 8080 | 3 |
| [2606:4700:d:673c:292d:5a6:e9c9:25b9] | 80, 443, 8080 | 3 |
| [2606:4700:9645:91e3:b442:b60c:39a9:1017] | 80, 443, 8080 | 3 |
| [2606:4700:d:673c:292d:5a6:e9c9:25b9] | 80, 443, 8080 | 3 |
| [2606:4700:9645:91e3:b442:b60c:39a9:1017] | 80, 443, 8080 | 3 |
| [2606:4700:d:673c:292d:5a6:e9c9:25b9] | 80, 443, 8080 | 3 |
| [2606:4700:9ad5:209d:1ec7:743:b35a:6a6c] | 80, 443, 8080 | 4 |
| [2606:4700:8d75:9ab5:e9b2:b339:4806:2547] | 80, 443, 8080 | 4 |
| [2606:4700:9645:e0f2:2791:8f6d:2a32:d800] | 80, 443, 8080 | 4 |
| [2606:4700:9ad5:209d:1ec7:743:b35a:6a6c] | 80, 443, 8080 | 4 |
| [2606:4700:8d75:9ab5:e9b2:b339:4806:2547] | 80, 443, 8080 | 4 |
| [2606:4700:9645:e0f2:2791:8f6d:2a32:d800] | 80, 443, 8080 | 4 |
| [2606:4700:9ad5:209d:1ec7:743:b35a:6a6c] | 80, 443, 8080 | 4 |
| [2606:4700:8d75:9ab5:e9b2:b339:4806:2547] | 80, 443, 8080 | 4 |
| [2606:4700:9645:e0f2:2791:8f6d:2a32:d800] | 80, 443, 8080 | 4 |

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
