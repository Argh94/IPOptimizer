# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-04-05 11:07:20 +0330

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
| 198.41.209.120 | 80, 443, 8080 | 52 |
| 198.41.208.203 | 80, 443, 8080 | 52 |
| 198.41.209.137 | 80, 443, 8080 | 52 |
| 198.41.209.105 | 80, 443, 8080 | 52 |
| 198.41.209.165 | 80, 443, 8080 | 52 |
| 198.41.209.120 | 80, 443, 8080 | 52 |
| 198.41.208.203 | 80, 443, 8080 | 52 |
| 198.41.209.137 | 80, 443, 8080 | 52 |
| 198.41.209.105 | 80, 443, 8080 | 52 |
| 198.41.209.165 | 80, 443, 8080 | 52 |
| 104.19.167.104 | 80, 443, 8080 | 133 |
| 104.16.158.113 | 80, 443, 8080 | 133 |
| 104.16.112.67 | 80, 443, 8080 | 141 |
| 104.19.243.122 | 80, 443, 8080 | 142 |
| 104.18.149.117 | 80, 443, 8080 | 143 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9c6d:30a9:849d:7f2e:ed47:9f78] | 80, 443, 8080 | 0 |
| [2606:4700:9c6d:ed7f:f78d:8dba:ec4c:d7a2] | 80, 443, 8080 | 0 |
| [2606:4700:83bd:b637:ea3a:1cf6:e753:d093] | 80, 443, 8080 | 0 |
| [2606:4700:9c6d:30a9:849d:7f2e:ed47:9f78] | 80, 443, 8080 | 0 |
| [2606:4700:9c6d:ed7f:f78d:8dba:ec4c:d7a2] | 80, 443, 8080 | 0 |
| [2606:4700:83bd:b637:ea3a:1cf6:e753:d093] | 80, 443, 8080 | 0 |
| [2606:4700:9c6d:30a9:849d:7f2e:ed47:9f78] | 80, 443, 8080 | 0 |
| [2606:4700:9c6d:ed7f:f78d:8dba:ec4c:d7a2] | 80, 443, 8080 | 0 |
| [2606:4700:83bd:b637:ea3a:1cf6:e753:d093] | 80, 443, 8080 | 0 |
| [2606:4700:300a:8d7f:9531:a9f7:b7e2:5dfa] | 80, 443, 8080 | 1 |
| [2606:4700:9a66:689d:daa:909c:8566:c282] | 80, 443, 8080 | 1 |
| [2606:4700:300a:8d7f:9531:a9f7:b7e2:5dfa] | 80, 443, 8080 | 1 |
| [2606:4700:9a66:689d:daa:909c:8566:c282] | 80, 443, 8080 | 1 |
| [2606:4700:300a:8d7f:9531:a9f7:b7e2:5dfa] | 80, 443, 8080 | 1 |
| [2606:4700:9a66:689d:daa:909c:8566:c282] | 80, 443, 8080 | 1 |

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
