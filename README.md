# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-29 10:22:06 +0330

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
| 198.41.209.149 | 80, 443, 8080 | 51 |
| 162.159.255.54 | 80, 443, 8080 | 52 |
| 198.41.208.133 | 80, 443, 8080 | 54 |
| 198.41.208.119 | 80, 443, 8080 | 54 |
| 190.93.245.178 | 80, 443, 8080 | 54 |
| 172.67.107.86 | 80, 443, 8080 | 56 |
| 172.67.112.39 | 80, 443, 8080 | 56 |
| 162.159.242.164 | 80, 443, 8080 | 56 |
| 104.16.82.54 | 80, 443, 8080 | 128 |
| 104.17.40.172 | 80, 443, 8080 | 128 |
| 104.17.221.243 | 80, 443, 8080 | 128 |
| 104.19.14.120 | 80, 443, 8080 | 128 |
| 104.16.211.84 | 80, 443, 8080 | 133 |
| 172.67.137.245 | 80, 443, 8080 | 142 |
| 172.67.214.37 | 80, 443, 8080 | 145 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9645:9a9b:95a2:35c0:9a1d:47b7] | 80, 443, 8080 | 3 |
| [2606:4700:8d75:c18c:c8e5:2420:835a:dfcb] | 80, 443, 8080 | 3 |
| [2606:4700:8d75:3e3d:10ae:fc14:1ed3:6de9] | 80, 443, 8080 | 3 |
| [2606:4700:9645:9a9b:95a2:35c0:9a1d:47b7] | 80, 443, 8080 | 3 |
| [2606:4700:8d75:c18c:c8e5:2420:835a:dfcb] | 80, 443, 8080 | 3 |
| [2606:4700:8d75:3e3d:10ae:fc14:1ed3:6de9] | 80, 443, 8080 | 3 |
| [2606:4700:9645:9a9b:95a2:35c0:9a1d:47b7] | 80, 443, 8080 | 3 |
| [2606:4700:8d75:c18c:c8e5:2420:835a:dfcb] | 80, 443, 8080 | 3 |
| [2606:4700:8d75:3e3d:10ae:fc14:1ed3:6de9] | 80, 443, 8080 | 3 |
| [2606:4700:1a:16b:7cc5:21f8:1998:5b7a] | 80, 443, 8080 | 4 |
| [2606:4700:1a:42bd:7708:eb35:b1da:8f33] | 80, 443, 8080 | 4 |
| [2606:4700:1a:16b:7cc5:21f8:1998:5b7a] | 80, 443, 8080 | 4 |
| [2606:4700:1a:42bd:7708:eb35:b1da:8f33] | 80, 443, 8080 | 4 |
| [2606:4700:1a:16b:7cc5:21f8:1998:5b7a] | 80, 443, 8080 | 4 |
| [2606:4700:1a:42bd:7708:eb35:b1da:8f33] | 80, 443, 8080 | 4 |

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
