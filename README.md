# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-04-03 00:33:25 +0330

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
| 198.41.208.47 | 80, 443, 8080 | 52 |
| 198.41.208.47 | 80, 443, 8080 | 52 |
| 198.41.208.104 | 80, 443, 8080 | 53 |
| 198.41.208.41 | 80, 443, 8080 | 53 |
| 198.41.208.104 | 80, 443, 8080 | 53 |
| 198.41.208.41 | 80, 443, 8080 | 53 |
| 198.41.209.109 | 80, 443, 8080 | 56 |
| 198.41.209.109 | 80, 443, 8080 | 56 |
| 198.41.209.113 | 80, 443, 8080 | 91 |
| 198.41.209.113 | 80, 443, 8080 | 91 |
| 104.18.252.158 | 80, 443, 8080 | 129 |
| 104.17.96.154 | 80, 443, 8080 | 130 |
| 104.18.72.188 | 80, 443, 8080 | 131 |
| 104.18.194.37 | 80, 443, 8080 | 131 |
| 104.16.102.249 | 80, 443, 8080 | 131 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:3028:ed96:6ea6:e11:bde3:510d] | 80, 443, 8080 | 3 |
| [2606:4700:91b3:99c3:a9a4:2ca7:76ca:9c] | 80, 443, 8080 | 3 |
| [2606:4700:91b3:2631:3b29:707a:6261:4d68] | 80, 443, 8080 | 3 |
| [2606:4700:91bf:2c6d:84ee:df56:492f:455f] | 80, 443, 8080 | 3 |
| [2606:4700:3028:ed96:6ea6:e11:bde3:510d] | 80, 443, 8080 | 3 |
| [2606:4700:91b3:99c3:a9a4:2ca7:76ca:9c] | 80, 443, 8080 | 3 |
| [2606:4700:91b3:2631:3b29:707a:6261:4d68] | 80, 443, 8080 | 3 |
| [2606:4700:91bf:2c6d:84ee:df56:492f:455f] | 80, 443, 8080 | 3 |
| [2606:4700:3028:ed96:6ea6:e11:bde3:510d] | 80, 443, 8080 | 3 |
| [2606:4700:91b3:99c3:a9a4:2ca7:76ca:9c] | 80, 443, 8080 | 3 |
| [2606:4700:91b3:2631:3b29:707a:6261:4d68] | 80, 443, 8080 | 3 |
| [2606:4700:91bf:2c6d:84ee:df56:492f:455f] | 80, 443, 8080 | 3 |
| [2606:4700:3028:c5d7:1626:e4e5:a606:f9a9] | 80, 443, 8080 | 13 |
| [2606:4700:3028:c5d7:1626:e4e5:a606:f9a9] | 80, 443, 8080 | 13 |
| [2606:4700:3028:c5d7:1626:e4e5:a606:f9a9] | 80, 443, 8080 | 13 |

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
