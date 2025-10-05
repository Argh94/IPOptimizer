# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-05 10:14:49 +0330

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
| 198.41.208.112 | 80, 443, 8080 | 52 |
| 162.159.244.91 | 80, 443, 8080 | 54 |
| 190.93.246.121 | 80, 443, 8080 | 55 |
| 173.245.49.215 | 80, 443, 8080 | 55 |
| 172.64.95.235 | 80, 443, 8080 | 55 |
| 172.67.93.147 | 80, 443, 8080 | 55 |
| 172.67.105.5 | 80, 443, 8080 | 55 |
| 190.93.246.121 | 80, 443, 8080 | 128 |
| 104.19.7.200 | 80, 443, 8080 | 128 |
| 104.17.225.140 | 80, 443, 8080 | 128 |
| 104.16.182.212 | 80, 443, 8080 | 129 |
| 104.19.118.30 | 80, 443, 8080 | 129 |
| 172.67.157.172 | 80, 443, 8080 | 219 |
| 172.67.200.20 | 80, 443, 8080 | 224 |
| 172.67.167.170 | 80, 443, 8080 | 225 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9a91:f7a9:d4e4:74d6:f414:158e] | 80, 443, 8080 | 3 |
| [2606:4700:8d78:7850:9585:cb7d:a37f:a028] | 80, 443, 8080 | 3 |
| [2606:4700:9640:5237:94ba:6b8b:ab87:49f9] | 80, 443, 8080 | 3 |
| [2606:4700:8cac:2fc3:70b:7315:d74d:dff7] | 80, 443, 8080 | 3 |
| [2606:4700:9a91:f7a9:d4e4:74d6:f414:158e] | 80, 443, 8080 | 3 |
| [2606:4700:8d78:7850:9585:cb7d:a37f:a028] | 80, 443, 8080 | 3 |
| [2606:4700:9640:5237:94ba:6b8b:ab87:49f9] | 80, 443, 8080 | 3 |
| [2606:4700:8cac:2fc3:70b:7315:d74d:dff7] | 80, 443, 8080 | 3 |
| [2606:4700:9a91:f7a9:d4e4:74d6:f414:158e] | 80, 443, 8080 | 3 |
| [2606:4700:8d78:7850:9585:cb7d:a37f:a028] | 80, 443, 8080 | 3 |
| [2606:4700:9640:5237:94ba:6b8b:ab87:49f9] | 80, 443, 8080 | 3 |
| [2606:4700:8cac:2fc3:70b:7315:d74d:dff7] | 80, 443, 8080 | 3 |
| [2606:4700:9a91:9642:53fc:4b47:8300:d2b0] | 80, 443, 8080 | 4 |
| [2606:4700:9a91:9642:53fc:4b47:8300:d2b0] | 80, 443, 8080 | 4 |
| [2606:4700:9a91:9642:53fc:4b47:8300:d2b0] | 80, 443, 8080 | 4 |

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
