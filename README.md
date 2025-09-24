# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-25 00:10:11 +0330

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
| 198.41.208.41 | 80, 443, 8080 | 51 |
| 162.159.248.175 | 80, 443, 8080 | 52 |
| 172.67.112.212 | 80, 443, 8080 | 55 |
| 172.67.115.105 | 80, 443, 8080 | 57 |
| 104.17.23.113 | 80, 443, 8080 | 128 |
| 104.19.40.113 | 80, 443, 8080 | 128 |
| 104.18.158.251 | 80, 443, 8080 | 129 |
| 104.17.167.105 | 80, 443, 8080 | 129 |
| 104.16.232.145 | 80, 443, 8080 | 130 |
| 172.67.172.211 | 80, 443, 8080 | 145 |
| 172.67.240.88 | 80, 443, 8080 | 146 |
| 172.67.221.241 | 80, 443, 8080 | 146 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9b08:8940:af5c:c338:a5cd:ac72] | 80, 443, 8080 | 3 |
| [2606:4700:9a69:7f58:df34:f6f4:7708:83a9] | 80, 443, 8080 | 3 |
| [2606:4700:8ddc:66d7:707c:204:eb1b:34f4] | 80, 443, 8080 | 3 |
| [2606:4700:8ddc:1783:487f:1c6c:a4d6:dc1d] | 80, 443, 8080 | 3 |
| [2606:4700:9b08:ef7d:7470:cd2c:e83c:e6b3] | 80, 443, 8080 | 3 |
| [2606:4700:9b08:8940:af5c:c338:a5cd:ac72] | 80, 443, 8080 | 3 |
| [2606:4700:9a69:7f58:df34:f6f4:7708:83a9] | 80, 443, 8080 | 3 |
| [2606:4700:8ddc:66d7:707c:204:eb1b:34f4] | 80, 443, 8080 | 3 |
| [2606:4700:8ddc:1783:487f:1c6c:a4d6:dc1d] | 80, 443, 8080 | 3 |
| [2606:4700:9b08:ef7d:7470:cd2c:e83c:e6b3] | 80, 443, 8080 | 3 |
| [2606:4700:9b08:8940:af5c:c338:a5cd:ac72] | 80, 443, 8080 | 3 |
| [2606:4700:9a69:7f58:df34:f6f4:7708:83a9] | 80, 443, 8080 | 3 |
| [2606:4700:8ddc:66d7:707c:204:eb1b:34f4] | 80, 443, 8080 | 3 |
| [2606:4700:8ddc:1783:487f:1c6c:a4d6:dc1d] | 80, 443, 8080 | 3 |
| [2606:4700:9b08:ef7d:7470:cd2c:e83c:e6b3] | 80, 443, 8080 | 3 |

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
