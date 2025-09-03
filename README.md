# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-03 10:17:16 +0330

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
| 198.41.209.110 | 80, 443, 8080 | 51 |
| 198.41.208.41 | 80, 443, 8080 | 51 |
| 198.41.208.218 | 80, 443, 8080 | 52 |
| 172.67.91.240 | 80, 443, 8080 | 56 |
| 172.67.112.3 | 80, 443, 8080 | 56 |
| 198.41.209.180 | 80, 443, 8080 | 57 |
| 198.41.208.31 | 80, 443, 8080 | 57 |
| 104.19.33.107 | 80, 443, 8080 | 130 |
| 172.67.224.82 | 80, 443, 8080 | 130 |
| 104.18.210.179 | 80, 443, 8080 | 135 |
| 172.67.255.35 | 80, 443, 8080 | 135 |
| 172.67.176.231 | 80, 443, 8080 | 136 |
| 104.21.229.221 | 80, 443, 8080 | 147 |
| 104.18.118.140 | 80, 443, 8080 | 148 |
| 162.159.36.13 | 80, 443, 8080 | 150 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:13a:d102:bd03:5cf:a2a4:c1d3] | 80, 443, 8080 | 3 |
| [2606:4700:13a:3745:be63:539a:d00d:86a8] | 80, 443, 8080 | 3 |
| [2606:4700:9762:886:46c9:87b7:82a1:bebe] | 80, 443, 8080 | 3 |
| [2606:4700:99e7:fb19:4632:60fd:9b63:7ea8] | 80, 443, 8080 | 3 |
| [2606:4700:13a:d102:bd03:5cf:a2a4:c1d3] | 80, 443, 8080 | 3 |
| [2606:4700:13a:3745:be63:539a:d00d:86a8] | 80, 443, 8080 | 3 |
| [2606:4700:9762:886:46c9:87b7:82a1:bebe] | 80, 443, 8080 | 3 |
| [2606:4700:99e7:fb19:4632:60fd:9b63:7ea8] | 80, 443, 8080 | 3 |
| [2606:4700:13a:d102:bd03:5cf:a2a4:c1d3] | 80, 443, 8080 | 3 |
| [2606:4700:13a:3745:be63:539a:d00d:86a8] | 80, 443, 8080 | 3 |
| [2606:4700:9762:886:46c9:87b7:82a1:bebe] | 80, 443, 8080 | 3 |
| [2606:4700:99e7:fb19:4632:60fd:9b63:7ea8] | 80, 443, 8080 | 3 |
| [2606:4700:83b1:6577:8045:4633:35b2:babf] | 80, 443, 8080 | 181 |
| [2606:4700:83b1:6577:8045:4633:35b2:babf] | 80, 443, 8080 | 181 |
| [2606:4700:83b1:6577:8045:4633:35b2:babf] | 80, 443, 8080 | 181 |

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
