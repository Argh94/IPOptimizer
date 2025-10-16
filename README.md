# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-17 00:12:18 +0330

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
| 198.41.208.218 | 80, 443, 8080 | 49 |
| 198.41.209.186 | 80, 443, 8080 | 49 |
| 198.41.209.105 | 80, 443, 8080 | 49 |
| 198.41.209.214 | 80, 443, 8080 | 49 |
| 198.41.208.202 | 80, 443, 8080 | 50 |
| 172.64.93.118 | 80, 443, 8080 | 55 |
| 172.67.86.142 | 80, 443, 8080 | 55 |
| 162.159.46.233 | 80, 443, 8080 | 83 |
| 104.18.178.79 | 80, 443, 8080 | 129 |
| 104.17.109.199 | 80, 443, 8080 | 129 |
| 104.19.33.18 | 80, 443, 8080 | 132 |
| 104.16.100.43 | 80, 443, 8080 | 135 |
| 172.67.162.132 | 80, 443, 8080 | 143 |
| 172.67.152.98 | 80, 443, 8080 | 143 |
| 172.67.129.167 | 80, 443, 8080 | 143 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9ad3:2c85:676f:1b46:7889:e618] | 80, 443, 8080 | 3 |
| [2606:4700:9ad3:2c85:676f:1b46:7889:e618] | 80, 443, 8080 | 3 |
| [2606:4700:9ad3:2c85:676f:1b46:7889:e618] | 80, 443, 8080 | 3 |
| [2606:4700:8d77:a9d6:e68f:826f:9eb4:46b4] | 80, 443, 8080 | 4 |
| [2606:4700:8d77:a9d6:e68f:826f:9eb4:46b4] | 80, 443, 8080 | 4 |
| [2606:4700:8d77:a9d6:e68f:826f:9eb4:46b4] | 80, 443, 8080 | 4 |
| [2606:4700:4409:7143:abf6:a87:f4e6:ff24] | 80, 443, 8080 | 13 |
| [2606:4700:4409:b4f2:719c:d6db:5c41:47c7] | 80, 443, 8080 | 13 |
| [2606:4700:4409:7143:abf6:a87:f4e6:ff24] | 80, 443, 8080 | 13 |
| [2606:4700:4409:b4f2:719c:d6db:5c41:47c7] | 80, 443, 8080 | 13 |
| [2606:4700:4409:7143:abf6:a87:f4e6:ff24] | 80, 443, 8080 | 13 |
| [2606:4700:4409:b4f2:719c:d6db:5c41:47c7] | 80, 443, 8080 | 13 |
| [2606:4700:83b0:4040:452f:5733:178c:55a5] | 80, 443, 8080 | 159 |
| [2606:4700:83b0:4040:452f:5733:178c:55a5] | 80, 443, 8080 | 159 |
| [2606:4700:83b0:4040:452f:5733:178c:55a5] | 80, 443, 8080 | 159 |

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
