# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-04 10:23:51 +0330

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
| 198.41.208.218 | 80, 443, 8080 | 51 |
| 198.41.208.218 | 80, 443, 8080 | 51 |
| 198.41.208.203 | 80, 443, 8080 | 52 |
| 190.93.245.41 | 80, 443, 8080 | 52 |
| 198.41.208.203 | 80, 443, 8080 | 52 |
| 190.93.245.41 | 80, 443, 8080 | 52 |
| 104.16.245.77 | 80, 443, 8080 | 56 |
| 104.16.245.77 | 80, 443, 8080 | 56 |
| 104.16.251.33 | 80, 443, 8080 | 57 |
| 104.16.251.33 | 80, 443, 8080 | 57 |
| 198.41.223.184 | 80, 443, 8080 | 79 |
| 198.41.223.111 | 80, 443, 8080 | 91 |
| 104.18.109.143 | 80, 443, 8080 | 129 |
| 104.17.237.219 | 80, 443, 8080 | 130 |
| 104.17.60.104 | 80, 443, 8080 | 130 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8d9d:ff75:c95d:811a:6890:cd10] | 80, 443, 8080 | 3 |
| [2606:4700:90d3:daa2:ee99:56b4:2f1f:8e6a] | 80, 443, 8080 | 3 |
| [2606:4700:90d3:d95d:dc5b:d338:dfd2:80ac] | 80, 443, 8080 | 3 |
| [2606:4700:8d99:9bef:1b20:3fb8:71e3:ef03] | 80, 443, 8080 | 3 |
| [2606:4700:964d:7efb:ad03:8371:e5be:7981] | 80, 443, 8080 | 3 |
| [2606:4700:8d9d:ff75:c95d:811a:6890:cd10] | 80, 443, 8080 | 3 |
| [2606:4700:90d3:daa2:ee99:56b4:2f1f:8e6a] | 80, 443, 8080 | 3 |
| [2606:4700:90d3:d95d:dc5b:d338:dfd2:80ac] | 80, 443, 8080 | 3 |
| [2606:4700:8d99:9bef:1b20:3fb8:71e3:ef03] | 80, 443, 8080 | 3 |
| [2606:4700:964d:7efb:ad03:8371:e5be:7981] | 80, 443, 8080 | 3 |
| [2606:4700:8d9d:ff75:c95d:811a:6890:cd10] | 80, 443, 8080 | 3 |
| [2606:4700:90d3:daa2:ee99:56b4:2f1f:8e6a] | 80, 443, 8080 | 3 |
| [2606:4700:90d3:d95d:dc5b:d338:dfd2:80ac] | 80, 443, 8080 | 3 |
| [2606:4700:8d99:9bef:1b20:3fb8:71e3:ef03] | 80, 443, 8080 | 3 |
| [2606:4700:964d:7efb:ad03:8371:e5be:7981] | 80, 443, 8080 | 3 |

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
