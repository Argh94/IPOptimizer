# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-01-31 10:33:24 +0330

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
| 198.41.209.110 | 80, 443, 8080 | 50 |
| 198.41.209.110 | 80, 443, 8080 | 50 |
| 172.64.88.212 | 80, 443, 8080 | 51 |
| 190.93.245.133 | 80, 443, 8080 | 51 |
| 172.64.88.212 | 80, 443, 8080 | 51 |
| 190.93.245.133 | 80, 443, 8080 | 51 |
| 198.41.211.157 | 80, 443, 8080 | 52 |
| 190.93.245.6 | 80, 443, 8080 | 52 |
| 198.41.211.157 | 80, 443, 8080 | 52 |
| 190.93.245.6 | 80, 443, 8080 | 52 |
| 104.19.198.161 | 80, 443, 8080 | 131 |
| 104.19.8.21 | 80, 443, 8080 | 132 |
| 104.19.170.35 | 80, 443, 8080 | 133 |
| 104.19.170.77 | 80, 443, 8080 | 138 |
| 104.18.81.102 | 80, 443, 8080 | 148 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9a96:4c6c:2fb9:6fe0:9f8c:e3e6] | 80, 443, 8080 | 3 |
| [2606:4700:9a96:6620:95ee:736f:3cf5:868b] | 80, 443, 8080 | 3 |
| [2606:4700:1e:a98e:9d6d:b039:788c:c878] | 80, 443, 8080 | 3 |
| [2606:4700:9adb:c2e0:5f8b:3e23:ecae:6662] | 80, 443, 8080 | 3 |
| [2606:4700:20:6fa2:dd44:6ab3:8fe6:7a5b] | 80, 443, 8080 | 3 |
| [2606:4700:9a96:4c6c:2fb9:6fe0:9f8c:e3e6] | 80, 443, 8080 | 3 |
| [2606:4700:9a96:6620:95ee:736f:3cf5:868b] | 80, 443, 8080 | 3 |
| [2606:4700:1e:a98e:9d6d:b039:788c:c878] | 80, 443, 8080 | 3 |
| [2606:4700:9adb:c2e0:5f8b:3e23:ecae:6662] | 80, 443, 8080 | 3 |
| [2606:4700:20:6fa2:dd44:6ab3:8fe6:7a5b] | 80, 443, 8080 | 3 |
| [2606:4700:9a96:4c6c:2fb9:6fe0:9f8c:e3e6] | 80, 443, 8080 | 3 |
| [2606:4700:9a96:6620:95ee:736f:3cf5:868b] | 80, 443, 8080 | 3 |
| [2606:4700:1e:a98e:9d6d:b039:788c:c878] | 80, 443, 8080 | 3 |
| [2606:4700:9adb:c2e0:5f8b:3e23:ecae:6662] | 80, 443, 8080 | 3 |
| [2606:4700:20:6fa2:dd44:6ab3:8fe6:7a5b] | 80, 443, 8080 | 3 |

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
