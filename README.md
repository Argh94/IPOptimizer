# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-02-01 00:19:47 +0330

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
| 198.41.208.119 | 80, 443, 8080 | 51 |
| 172.64.82.74 | 80, 443, 8080 | 51 |
| 198.41.208.119 | 80, 443, 8080 | 51 |
| 172.64.82.74 | 80, 443, 8080 | 51 |
| 162.159.242.183 | 80, 443, 8080 | 52 |
| 172.64.84.134 | 80, 443, 8080 | 52 |
| 162.159.242.183 | 80, 443, 8080 | 52 |
| 172.64.84.134 | 80, 443, 8080 | 52 |
| 141.101.115.234 | 80, 443, 8080 | 53 |
| 141.101.115.234 | 80, 443, 8080 | 53 |
| 104.19.49.116 | 80, 443, 8080 | 130 |
| 104.18.11.121 | 80, 443, 8080 | 130 |
| 104.17.146.99 | 80, 443, 8080 | 130 |
| 162.159.249.1 | 80, 443, 8080 | 142 |
| 104.16.1.126 | 80, 443, 8080 | 153 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9646:6773:3ae8:289b:f97a:1d37] | 80, 443, 8080 | 3 |
| [2606:4700:90cf:e3db:1ffa:905d:a765:b20d] | 80, 443, 8080 | 3 |
| [2606:4700:9646:6e51:b3b0:7144:251:79ae] | 80, 443, 8080 | 3 |
| [2606:4700:9646:6773:3ae8:289b:f97a:1d37] | 80, 443, 8080 | 3 |
| [2606:4700:90cf:e3db:1ffa:905d:a765:b20d] | 80, 443, 8080 | 3 |
| [2606:4700:9646:6e51:b3b0:7144:251:79ae] | 80, 443, 8080 | 3 |
| [2606:4700:9646:6773:3ae8:289b:f97a:1d37] | 80, 443, 8080 | 3 |
| [2606:4700:90cf:e3db:1ffa:905d:a765:b20d] | 80, 443, 8080 | 3 |
| [2606:4700:9646:6e51:b3b0:7144:251:79ae] | 80, 443, 8080 | 3 |
| [2606:4700:8d95:a62a:8e2a:e75c:6a76:3e57] | 80, 443, 8080 | 4 |
| [2606:4700:90ce:47d9:9215:d127:5c02:b797] | 80, 443, 8080 | 4 |
| [2606:4700:8d95:a62a:8e2a:e75c:6a76:3e57] | 80, 443, 8080 | 4 |
| [2606:4700:90ce:47d9:9215:d127:5c02:b797] | 80, 443, 8080 | 4 |
| [2606:4700:8d95:a62a:8e2a:e75c:6a76:3e57] | 80, 443, 8080 | 4 |
| [2606:4700:90ce:47d9:9215:d127:5c02:b797] | 80, 443, 8080 | 4 |

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
