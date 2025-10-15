# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-16 00:13:03 +0330

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
| 141.101.120.246 | 80, 443, 8080 | 51 |
| 198.41.209.120 | 80, 443, 8080 | 51 |
| 141.101.120.187 | 80, 443, 8080 | 52 |
| 172.64.95.71 | 80, 443, 8080 | 52 |
| 172.64.87.213 | 80, 443, 8080 | 52 |
| 172.64.78.51 | 80, 443, 8080 | 55 |
| 172.67.75.56 | 80, 443, 8080 | 56 |
| 162.159.235.13 | 80, 443, 8080 | 56 |
| 172.64.92.174 | 80, 443, 8080 | 56 |
| 198.41.211.135 | 80, 443, 8080 | 69 |
| 104.18.190.150 | 80, 443, 8080 | 130 |
| 104.19.82.213 | 80, 443, 8080 | 131 |
| 104.16.160.112 | 80, 443, 8080 | 132 |
| 104.19.216.99 | 80, 443, 8080 | 134 |
| 172.67.157.196 | 80, 443, 8080 | 144 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9c6f:bfd:6876:2ec5:d7dc:d7e0] | 80, 443, 8080 | 3 |
| [2606:4700:12:4237:358:49cf:5c0d:d2c8] | 80, 443, 8080 | 3 |
| [2606:4700:9c6f:bfd:6876:2ec5:d7dc:d7e0] | 80, 443, 8080 | 3 |
| [2606:4700:12:4237:358:49cf:5c0d:d2c8] | 80, 443, 8080 | 3 |
| [2606:4700:9c6f:bfd:6876:2ec5:d7dc:d7e0] | 80, 443, 8080 | 3 |
| [2606:4700:12:4237:358:49cf:5c0d:d2c8] | 80, 443, 8080 | 3 |
| [2606:4700:8ca9:8a8:6a0a:fa1a:9eff:7c37] | 80, 443, 8080 | 4 |
| [2606:4700:8ca9:8a8:6a0a:fa1a:9eff:7c37] | 80, 443, 8080 | 4 |
| [2606:4700:8ca9:8a8:6a0a:fa1a:9eff:7c37] | 80, 443, 8080 | 4 |
| [2606:4700:83b2:dd2c:ec79:bbb8:606c:ba44] | 80, 443, 8080 | 146 |
| [2606:4700:83b2:dd2c:ec79:bbb8:606c:ba44] | 80, 443, 8080 | 146 |
| [2606:4700:83b2:dd2c:ec79:bbb8:606c:ba44] | 80, 443, 8080 | 146 |
| [2606:4700:83b2:e7b1:5f6c:f28a:d49c:1ae9] | 80, 443, 8080 | 155 |
| [2606:4700:83b2:e7b1:5f6c:f28a:d49c:1ae9] | 80, 443, 8080 | 155 |
| [2606:4700:83b2:e7b1:5f6c:f28a:d49c:1ae9] | 80, 443, 8080 | 155 |

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
