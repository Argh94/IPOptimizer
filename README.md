# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-01 10:38:37 +0330

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
| 162.159.46.228 | 80, 443, 8080 | 53 |
| 162.159.46.228 | 80, 443, 8080 | 53 |
| 162.159.245.105 | 80, 443, 8080 | 55 |
| 162.159.245.105 | 80, 443, 8080 | 55 |
| 198.41.223.34 | 80, 443, 8080 | 56 |
| 198.41.223.34 | 80, 443, 8080 | 56 |
| 104.19.38.150 | 80, 443, 8080 | 134 |
| 104.16.111.215 | 80, 443, 8080 | 141 |
| 104.19.134.141 | 80, 443, 8080 | 153 |
| 104.24.34.128 | 80, 443, 8080 | 154 |
| 104.19.13.238 | 80, 443, 8080 | 156 |
| 172.67.116.155 | 80, 443, 8080 | 177 |
| 172.67.116.155 | 80, 443, 8080 | 177 |
| 172.67.249.232 | 80, 443, 8080 | 178 |
| 172.67.249.232 | 80, 443, 8080 | 178 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9ad7:b86c:d856:c768:6da3:e6da] | 80, 443, 8080 | 3 |
| [2606:4700:9769:acdd:5ee6:97a9:54c9:5971] | 80, 443, 8080 | 3 |
| [2606:4700:8dec:d90:6fcc:2e10:1677:f5bc] | 80, 443, 8080 | 3 |
| [2606:4700:9c65:4bed:6327:8886:d660:dd34] | 80, 443, 8080 | 3 |
| [2606:4700:9c6d:e1ce:d620:d238:2427:a25c] | 80, 443, 8080 | 3 |
| [2606:4700:9ad7:b86c:d856:c768:6da3:e6da] | 80, 443, 8080 | 3 |
| [2606:4700:9769:acdd:5ee6:97a9:54c9:5971] | 80, 443, 8080 | 3 |
| [2606:4700:8dec:d90:6fcc:2e10:1677:f5bc] | 80, 443, 8080 | 3 |
| [2606:4700:9c65:4bed:6327:8886:d660:dd34] | 80, 443, 8080 | 3 |
| [2606:4700:9c6d:e1ce:d620:d238:2427:a25c] | 80, 443, 8080 | 3 |
| [2606:4700:9ad7:b86c:d856:c768:6da3:e6da] | 80, 443, 8080 | 3 |
| [2606:4700:9769:acdd:5ee6:97a9:54c9:5971] | 80, 443, 8080 | 3 |
| [2606:4700:8dec:d90:6fcc:2e10:1677:f5bc] | 80, 443, 8080 | 3 |
| [2606:4700:9c65:4bed:6327:8886:d660:dd34] | 80, 443, 8080 | 3 |
| [2606:4700:9c6d:e1ce:d620:d238:2427:a25c] | 80, 443, 8080 | 3 |

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
