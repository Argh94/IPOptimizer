# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-29 11:03:19 +0330

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
| 198.41.209.49 | 80, 443, 8080 | 51 |
| 198.41.209.49 | 80, 443, 8080 | 51 |
| 198.41.208.251 | 80, 443, 8080 | 52 |
| 198.41.208.251 | 80, 443, 8080 | 52 |
| 198.41.208.107 | 80, 443, 8080 | 53 |
| 198.41.208.107 | 80, 443, 8080 | 53 |
| 198.41.208.97 | 80, 443, 8080 | 55 |
| 198.41.208.97 | 80, 443, 8080 | 55 |
| 104.19.34.37 | 80, 443, 8080 | 132 |
| 104.18.230.72 | 80, 443, 8080 | 133 |
| 104.17.36.220 | 80, 443, 8080 | 133 |
| 104.17.178.166 | 80, 443, 8080 | 134 |
| 104.17.213.232 | 80, 443, 8080 | 151 |
| 198.41.208.45 | 80, 443, 8080 | 193 |
| 198.41.208.45 | 80, 443, 8080 | 193 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:4409:46a5:4d6d:3d00:93fe:10a4] | 80, 443, 8080 | 1 |
| [2606:4700:16:12a2:517c:7adf:7da5:450f] | 80, 443, 8080 | 1 |
| [2606:4700:976c:38d9:6a6c:a90e:9b4c:ce45] | 80, 443, 8080 | 1 |
| [2606:4700:4409:e70:983d:194:d375:fd48] | 80, 443, 8080 | 1 |
| [2606:4700:16:deae:f37c:301:9b6e:1040] | 80, 443, 8080 | 1 |
| [2606:4700:4409:46a5:4d6d:3d00:93fe:10a4] | 80, 443, 8080 | 1 |
| [2606:4700:16:12a2:517c:7adf:7da5:450f] | 80, 443, 8080 | 1 |
| [2606:4700:976c:38d9:6a6c:a90e:9b4c:ce45] | 80, 443, 8080 | 1 |
| [2606:4700:4409:e70:983d:194:d375:fd48] | 80, 443, 8080 | 1 |
| [2606:4700:16:deae:f37c:301:9b6e:1040] | 80, 443, 8080 | 1 |
| [2606:4700:4409:46a5:4d6d:3d00:93fe:10a4] | 80, 443, 8080 | 1 |
| [2606:4700:16:12a2:517c:7adf:7da5:450f] | 80, 443, 8080 | 1 |
| [2606:4700:976c:38d9:6a6c:a90e:9b4c:ce45] | 80, 443, 8080 | 1 |
| [2606:4700:4409:e70:983d:194:d375:fd48] | 80, 443, 8080 | 1 |
| [2606:4700:16:deae:f37c:301:9b6e:1040] | 80, 443, 8080 | 1 |

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
