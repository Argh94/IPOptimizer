# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-29 00:26:58 +0330

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
| 198.41.208.107 | 80, 443, 8080 | 53 |
| 198.41.208.107 | 80, 443, 8080 | 53 |
| 198.41.208.97 | 80, 443, 8080 | 55 |
| 198.41.208.97 | 80, 443, 8080 | 55 |
| 198.41.209.156 | 80, 443, 8080 | 87 |
| 198.41.209.156 | 80, 443, 8080 | 87 |
| 104.17.96.253 | 80, 443, 8080 | 130 |
| 104.19.92.128 | 80, 443, 8080 | 130 |
| 104.18.247.164 | 80, 443, 8080 | 130 |
| 104.17.138.137 | 80, 443, 8080 | 130 |
| 104.17.74.132 | 80, 443, 8080 | 130 |
| 172.67.120.2 | 80, 443, 8080 | 185 |
| 172.67.120.2 | 80, 443, 8080 | 185 |
| 198.41.208.45 | 80, 443, 8080 | 193 |
| 198.41.208.45 | 80, 443, 8080 | 193 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:90df:c36d:d918:35dc:754:92a9] | 80, 443, 8080 | 1 |
| [2606:4700:2:ca4d:c83d:62ad:fe6c:2721] | 80, 443, 8080 | 1 |
| [2606:4700:90df:617f:737d:43b0:7ea0:5e9] | 80, 443, 8080 | 1 |
| [2606:4700:440f:2b8:913c:eb0b:58fe:b5cd] | 80, 443, 8080 | 1 |
| [2606:4700:440f:7ce4:2383:bbeb:db47:fcd1] | 80, 443, 8080 | 1 |
| [2606:4700:90df:c36d:d918:35dc:754:92a9] | 80, 443, 8080 | 1 |
| [2606:4700:2:ca4d:c83d:62ad:fe6c:2721] | 80, 443, 8080 | 1 |
| [2606:4700:90df:617f:737d:43b0:7ea0:5e9] | 80, 443, 8080 | 1 |
| [2606:4700:440f:2b8:913c:eb0b:58fe:b5cd] | 80, 443, 8080 | 1 |
| [2606:4700:440f:7ce4:2383:bbeb:db47:fcd1] | 80, 443, 8080 | 1 |
| [2606:4700:90df:c36d:d918:35dc:754:92a9] | 80, 443, 8080 | 1 |
| [2606:4700:2:ca4d:c83d:62ad:fe6c:2721] | 80, 443, 8080 | 1 |
| [2606:4700:90df:617f:737d:43b0:7ea0:5e9] | 80, 443, 8080 | 1 |
| [2606:4700:440f:2b8:913c:eb0b:58fe:b5cd] | 80, 443, 8080 | 1 |
| [2606:4700:440f:7ce4:2383:bbeb:db47:fcd1] | 80, 443, 8080 | 1 |

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
