# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-02-26 11:02:17 +0330

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
| 198.41.209.50 | 80, 443, 8080 | 51 |
| 198.41.209.50 | 80, 443, 8080 | 51 |
| 198.41.209.165 | 80, 443, 8080 | 52 |
| 198.41.209.165 | 80, 443, 8080 | 52 |
| 141.101.121.25 | 80, 443, 8080 | 53 |
| 141.101.121.25 | 80, 443, 8080 | 53 |
| 104.16.176.8 | 80, 443, 8080 | 133 |
| 104.17.36.128 | 80, 443, 8080 | 133 |
| 104.17.149.136 | 80, 443, 8080 | 133 |
| 104.19.165.50 | 80, 443, 8080 | 151 |
| 104.18.136.22 | 80, 443, 8080 | 152 |
| 162.159.36.62 | 80, 443, 8080 | 187 |
| 162.159.36.62 | 80, 443, 8080 | 187 |
| 172.67.120.74 | 80, 443, 8080 | 192 |
| 172.67.120.74 | 80, 443, 8080 | 192 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:3025:5178:7c04:49bd:e1a4:90a3] | 80, 443, 8080 | 1 |
| [2606:4700:99e7:9b0:e9dd:3446:cab7:83a2] | 80, 443, 8080 | 1 |
| [2606:4700:8dec:83ce:8480:3f6b:946:2755] | 80, 443, 8080 | 1 |
| [2606:4700:310c:d975:17e6:f684:bcd5:8889] | 80, 443, 8080 | 1 |
| [2606:4700:3025:5178:7c04:49bd:e1a4:90a3] | 80, 443, 8080 | 1 |
| [2606:4700:99e7:9b0:e9dd:3446:cab7:83a2] | 80, 443, 8080 | 1 |
| [2606:4700:8dec:83ce:8480:3f6b:946:2755] | 80, 443, 8080 | 1 |
| [2606:4700:310c:d975:17e6:f684:bcd5:8889] | 80, 443, 8080 | 1 |
| [2606:4700:3025:5178:7c04:49bd:e1a4:90a3] | 80, 443, 8080 | 1 |
| [2606:4700:99e7:9b0:e9dd:3446:cab7:83a2] | 80, 443, 8080 | 1 |
| [2606:4700:8dec:83ce:8480:3f6b:946:2755] | 80, 443, 8080 | 1 |
| [2606:4700:310c:d975:17e6:f684:bcd5:8889] | 80, 443, 8080 | 1 |
| [2606:4700:83b5:a377:fcd:1939:cf7c:7034] | 80, 443, 8080 | 143 |
| [2606:4700:83b5:a377:fcd:1939:cf7c:7034] | 80, 443, 8080 | 143 |
| [2606:4700:83b5:a377:fcd:1939:cf7c:7034] | 80, 443, 8080 | 143 |

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
