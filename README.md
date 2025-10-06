# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-07 00:12:25 +0330

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
| 198.41.209.186 | 80, 443, 8080 | 51 |
| 198.41.208.218 | 80, 443, 8080 | 51 |
| 198.41.209.110 | 80, 443, 8080 | 51 |
| 198.41.209.137 | 80, 443, 8080 | 51 |
| 198.41.208.113 | 80, 443, 8080 | 52 |
| 172.67.126.71 | 80, 443, 8080 | 55 |
| 172.64.82.255 | 80, 443, 8080 | 55 |
| 198.41.223.91 | 80, 443, 8080 | 81 |
| 104.18.124.116 | 80, 443, 8080 | 137 |
| 104.17.162.216 | 80, 443, 8080 | 147 |
| 104.19.193.49 | 80, 443, 8080 | 147 |
| 104.16.195.29 | 80, 443, 8080 | 148 |
| 172.67.176.48 | 80, 443, 8080 | 208 |
| 172.67.224.148 | 80, 443, 8080 | 209 |
| 172.67.183.130 | 80, 443, 8080 | 209 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8ddf:4eea:52c0:4bb2:6fca:439c] | 80, 443, 8080 | 3 |
| [2606:4700:8d9d:575b:607b:b363:cfef:1f89] | 80, 443, 8080 | 3 |
| [2606:4700:90d6:d191:e57c:faab:8048:853f] | 80, 443, 8080 | 3 |
| [2606:4700:8ddf:12c2:8273:2aa1:9a2e:d2d1] | 80, 443, 8080 | 3 |
| [2606:4700:8ddf:4eea:52c0:4bb2:6fca:439c] | 80, 443, 8080 | 3 |
| [2606:4700:8d9d:575b:607b:b363:cfef:1f89] | 80, 443, 8080 | 3 |
| [2606:4700:90d6:d191:e57c:faab:8048:853f] | 80, 443, 8080 | 3 |
| [2606:4700:8ddf:12c2:8273:2aa1:9a2e:d2d1] | 80, 443, 8080 | 3 |
| [2606:4700:8ddf:4eea:52c0:4bb2:6fca:439c] | 80, 443, 8080 | 3 |
| [2606:4700:8d9d:575b:607b:b363:cfef:1f89] | 80, 443, 8080 | 3 |
| [2606:4700:90d6:d191:e57c:faab:8048:853f] | 80, 443, 8080 | 3 |
| [2606:4700:8ddf:12c2:8273:2aa1:9a2e:d2d1] | 80, 443, 8080 | 3 |
| [2606:4700:9c6f:da4b:f7f1:2917:fa34:b702] | 80, 443, 8080 | 4 |
| [2606:4700:9c6f:da4b:f7f1:2917:fa34:b702] | 80, 443, 8080 | 4 |
| [2606:4700:9c6f:da4b:f7f1:2917:fa34:b702] | 80, 443, 8080 | 4 |

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
