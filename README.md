# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-11-05 00:14:15 +0330

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
| 172.64.86.59 | 80, 443, 8080 | 42 |
| 198.41.208.203 | 80, 443, 8080 | 51 |
| 198.41.208.169 | 80, 443, 8080 | 56 |
| 162.159.240.21 | 80, 443, 8080 | 56 |
| 104.17.125.70 | 80, 443, 8080 | 128 |
| 104.16.150.216 | 80, 443, 8080 | 128 |
| 141.101.122.48 | 80, 443, 8080 | 128 |
| 104.18.73.20 | 80, 443, 8080 | 131 |
| 104.16.104.156 | 80, 443, 8080 | 132 |
| 172.67.180.189 | 80, 443, 8080 | 143 |
| 172.67.137.199 | 80, 443, 8080 | 144 |
| 172.67.164.11 | 80, 443, 8080 | 145 |
| 104.18.132.239 | 80, 443, 8080 | 160 |
| 172.67.166.142 | 80, 443, 8080 | 187 |
| 104.19.123.190 | 80, 443, 8080 | 188 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:83be:e86f:9079:ec01:7b0b:efab] | 80, 443, 8080 | 3 |
| [2606:4700:9a6b:1e76:c28:7799:ca28:5933] | 80, 443, 8080 | 3 |
| [2606:4700:8d92:b174:c282:28c2:5c34:f191] | 80, 443, 8080 | 3 |
| [2606:4700:9647:400:41f2:d77a:9a23:d3f5] | 80, 443, 8080 | 3 |
| [2606:4700:8d92:4e76:602a:6a0b:b152:6382] | 80, 443, 8080 | 3 |
| [2606:4700:83be:e86f:9079:ec01:7b0b:efab] | 80, 443, 8080 | 3 |
| [2606:4700:9a6b:1e76:c28:7799:ca28:5933] | 80, 443, 8080 | 3 |
| [2606:4700:8d92:b174:c282:28c2:5c34:f191] | 80, 443, 8080 | 3 |
| [2606:4700:9647:400:41f2:d77a:9a23:d3f5] | 80, 443, 8080 | 3 |
| [2606:4700:8d92:4e76:602a:6a0b:b152:6382] | 80, 443, 8080 | 3 |
| [2606:4700:83be:e86f:9079:ec01:7b0b:efab] | 80, 443, 8080 | 3 |
| [2606:4700:9a6b:1e76:c28:7799:ca28:5933] | 80, 443, 8080 | 3 |
| [2606:4700:8d92:b174:c282:28c2:5c34:f191] | 80, 443, 8080 | 3 |
| [2606:4700:9647:400:41f2:d77a:9a23:d3f5] | 80, 443, 8080 | 3 |
| [2606:4700:8d92:4e76:602a:6a0b:b152:6382] | 80, 443, 8080 | 3 |

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
