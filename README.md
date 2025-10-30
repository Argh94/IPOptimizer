# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-31 00:12:59 +0330

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
| 104.18.92.218 | 80, 443, 8080 | 39 |
| 104.18.237.65 | 80, 443, 8080 | 41 |
| 104.17.214.31 | 80, 443, 8080 | 41 |
| 104.18.165.134 | 80, 443, 8080 | 42 |
| 104.17.171.97 | 80, 443, 8080 | 43 |
| 104.18.66.78 | 80, 443, 8080 | 127 |
| 104.17.86.243 | 80, 443, 8080 | 128 |
| 104.16.212.83 | 80, 443, 8080 | 128 |
| 104.18.106.221 | 80, 443, 8080 | 128 |
| 104.18.83.208 | 80, 443, 8080 | 129 |
| 172.67.255.139 | 80, 443, 8080 | 129 |
| 172.67.198.86 | 80, 443, 8080 | 129 |
| 172.67.165.68 | 80, 443, 8080 | 142 |
| 172.67.137.37 | 80, 443, 8080 | 143 |
| 172.67.187.106 | 80, 443, 8080 | 144 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9764:d7f4:aa9f:b5a6:c045:e040] | 80, 443, 8080 | 3 |
| [2606:4700:9ae0:1530:cc14:a68c:3103:5d79] | 80, 443, 8080 | 3 |
| [2606:4700:8d70:5f56:c71c:d9c4:6bc5:7f4] | 80, 443, 8080 | 3 |
| [2606:4700:9ae0:8eb4:9ba8:1131:7024:894b] | 80, 443, 8080 | 3 |
| [2606:4700:8caa:7e87:b10c:20c0:a4c7:cc91] | 80, 443, 8080 | 3 |
| [2606:4700:9764:d7f4:aa9f:b5a6:c045:e040] | 80, 443, 8080 | 3 |
| [2606:4700:9ae0:1530:cc14:a68c:3103:5d79] | 80, 443, 8080 | 3 |
| [2606:4700:8d70:5f56:c71c:d9c4:6bc5:7f4] | 80, 443, 8080 | 3 |
| [2606:4700:9ae0:8eb4:9ba8:1131:7024:894b] | 80, 443, 8080 | 3 |
| [2606:4700:8caa:7e87:b10c:20c0:a4c7:cc91] | 80, 443, 8080 | 3 |
| [2606:4700:9764:d7f4:aa9f:b5a6:c045:e040] | 80, 443, 8080 | 3 |
| [2606:4700:9ae0:1530:cc14:a68c:3103:5d79] | 80, 443, 8080 | 3 |
| [2606:4700:8d70:5f56:c71c:d9c4:6bc5:7f4] | 80, 443, 8080 | 3 |
| [2606:4700:9ae0:8eb4:9ba8:1131:7024:894b] | 80, 443, 8080 | 3 |
| [2606:4700:8caa:7e87:b10c:20c0:a4c7:cc91] | 80, 443, 8080 | 3 |

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
