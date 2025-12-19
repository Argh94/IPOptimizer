# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-19 10:23:33 +0330

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
| 198.41.208.112 | 80, 443, 8080 | 51 |
| 198.41.208.112 | 80, 443, 8080 | 51 |
| 198.41.209.8 | 80, 443, 8080 | 52 |
| 198.41.208.134 | 80, 443, 8080 | 52 |
| 198.41.209.165 | 80, 443, 8080 | 52 |
| 198.41.209.8 | 80, 443, 8080 | 52 |
| 198.41.208.134 | 80, 443, 8080 | 52 |
| 198.41.209.165 | 80, 443, 8080 | 52 |
| 198.41.208.234 | 80, 443, 8080 | 53 |
| 198.41.208.234 | 80, 443, 8080 | 53 |
| 104.18.84.124 | 80, 443, 8080 | 130 |
| 104.19.126.15 | 80, 443, 8080 | 130 |
| 104.17.181.81 | 80, 443, 8080 | 132 |
| 104.17.225.4 | 80, 443, 8080 | 151 |
| 104.18.113.53 | 80, 443, 8080 | 161 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:90c5:223d:d4f3:db4b:8425:80ea] | 80, 443, 8080 | 8 |
| [2606:4700:90c5:223d:d4f3:db4b:8425:80ea] | 80, 443, 8080 | 8 |
| [2606:4700:90c5:223d:d4f3:db4b:8425:80ea] | 80, 443, 8080 | 8 |
| [2606:4700:8de5:2c13:71ce:565c:be9c:9092] | 80, 443, 8080 | 9 |
| [2606:4700:91ba:4297:c508:c914:2bdc:3808] | 80, 443, 8080 | 9 |
| [2606:4700:8de5:2c13:71ce:565c:be9c:9092] | 80, 443, 8080 | 9 |
| [2606:4700:91ba:4297:c508:c914:2bdc:3808] | 80, 443, 8080 | 9 |
| [2606:4700:8de5:2c13:71ce:565c:be9c:9092] | 80, 443, 8080 | 9 |
| [2606:4700:91ba:4297:c508:c914:2bdc:3808] | 80, 443, 8080 | 9 |
| [2606:4700:90c5:31f1:7c8d:d6db:ca0f:6914] | 80, 443, 8080 | 10 |
| [2606:4700:90c5:31f1:7c8d:d6db:ca0f:6914] | 80, 443, 8080 | 10 |
| [2606:4700:90c5:31f1:7c8d:d6db:ca0f:6914] | 80, 443, 8080 | 10 |
| [2606:4700:91ba:596b:6b1d:901:aed7:9d10] | 80, 443, 8080 | 11 |
| [2606:4700:91ba:596b:6b1d:901:aed7:9d10] | 80, 443, 8080 | 11 |
| [2606:4700:91ba:596b:6b1d:901:aed7:9d10] | 80, 443, 8080 | 11 |

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
