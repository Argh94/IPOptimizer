# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-11-01 10:16:21 +0330

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
| 104.17.60.203 | 80, 443, 8080 | 38 |
| 198.41.208.218 | 80, 443, 8080 | 51 |
| 104.17.214.31 | 80, 443, 8080 | 52 |
| 198.41.209.210 | 80, 443, 8080 | 52 |
| 104.17.186.104 | 80, 443, 8080 | 55 |
| 172.64.90.240 | 80, 443, 8080 | 55 |
| 172.64.82.193 | 80, 443, 8080 | 55 |
| 172.64.86.16 | 80, 443, 8080 | 55 |
| 172.67.104.22 | 80, 443, 8080 | 56 |
| 104.18.156.6 | 80, 443, 8080 | 128 |
| 104.17.169.178 | 80, 443, 8080 | 128 |
| 104.18.3.253 | 80, 443, 8080 | 129 |
| 104.17.113.121 | 80, 443, 8080 | 130 |
| 104.16.31.215 | 80, 443, 8080 | 130 |
| 162.159.234.199 | 80, 443, 8080 | 216 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:135:39e9:5afa:ac85:ddce:bbb] | 80, 443, 8080 | 3 |
| [2606:4700:8d96:a847:97bb:9148:de03:83d7] | 80, 443, 8080 | 3 |
| [2606:4700:8caa:85f1:56:ea39:bb38:a6a6] | 80, 443, 8080 | 3 |
| [2606:4700:8ca8:77e0:f709:34b7:7d3d:d200] | 80, 443, 8080 | 3 |
| [2606:4700:8ca8:5e13:be89:cbfd:ce4a:2f32] | 80, 443, 8080 | 3 |
| [2606:4700:135:39e9:5afa:ac85:ddce:bbb] | 80, 443, 8080 | 3 |
| [2606:4700:8d96:a847:97bb:9148:de03:83d7] | 80, 443, 8080 | 3 |
| [2606:4700:8caa:85f1:56:ea39:bb38:a6a6] | 80, 443, 8080 | 3 |
| [2606:4700:8ca8:77e0:f709:34b7:7d3d:d200] | 80, 443, 8080 | 3 |
| [2606:4700:8ca8:5e13:be89:cbfd:ce4a:2f32] | 80, 443, 8080 | 3 |
| [2606:4700:135:39e9:5afa:ac85:ddce:bbb] | 80, 443, 8080 | 3 |
| [2606:4700:8d96:a847:97bb:9148:de03:83d7] | 80, 443, 8080 | 3 |
| [2606:4700:8caa:85f1:56:ea39:bb38:a6a6] | 80, 443, 8080 | 3 |
| [2606:4700:8ca8:77e0:f709:34b7:7d3d:d200] | 80, 443, 8080 | 3 |
| [2606:4700:8ca8:5e13:be89:cbfd:ce4a:2f32] | 80, 443, 8080 | 3 |

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
