# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-02-28 10:31:43 +0330

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
| 104.21.227.5 | 80, 443, 8080 | 143 |
| 104.17.87.179 | 80, 443, 8080 | 149 |
| 104.17.248.42 | 80, 443, 8080 | 149 |
| 104.25.113.180 | 80, 443, 8080 | 154 |
| 104.18.72.104 | 80, 443, 8080 | 175 |
| 162.159.243.172 | 80, 443, 8080 | 179 |
| 172.67.98.193 | 80, 443, 8080 | 179 |
| 172.67.119.211 | 80, 443, 8080 | 179 |
| 162.159.243.172 | 80, 443, 8080 | 179 |
| 172.67.98.193 | 80, 443, 8080 | 179 |
| 172.67.119.211 | 80, 443, 8080 | 179 |
| 172.67.88.71 | 80, 443, 8080 | 181 |
| 172.67.88.71 | 80, 443, 8080 | 181 |
| 172.67.253.153 | 80, 443, 8080 | 182 |
| 172.67.253.153 | 80, 443, 8080 | 182 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9c6b:d1bc:bc6d:d5e3:bbd5:7998] | 80, 443, 8080 | 3 |
| [2606:4700:9c6b:f2e3:d42f:cdfc:fead:8a8e] | 80, 443, 8080 | 3 |
| [2606:4700:9649:7793:79da:891f:bcb:1322] | 80, 443, 8080 | 3 |
| [2606:4700:9649:c0c8:2d69:6a2c:55a:4768] | 80, 443, 8080 | 3 |
| [2606:4700:8d9c:b8ac:d96a:cbd6:bd5c:7862] | 80, 443, 8080 | 3 |
| [2606:4700:9c6b:d1bc:bc6d:d5e3:bbd5:7998] | 80, 443, 8080 | 3 |
| [2606:4700:9c6b:f2e3:d42f:cdfc:fead:8a8e] | 80, 443, 8080 | 3 |
| [2606:4700:9649:7793:79da:891f:bcb:1322] | 80, 443, 8080 | 3 |
| [2606:4700:9649:c0c8:2d69:6a2c:55a:4768] | 80, 443, 8080 | 3 |
| [2606:4700:8d9c:b8ac:d96a:cbd6:bd5c:7862] | 80, 443, 8080 | 3 |
| [2606:4700:9c6b:d1bc:bc6d:d5e3:bbd5:7998] | 80, 443, 8080 | 3 |
| [2606:4700:9c6b:f2e3:d42f:cdfc:fead:8a8e] | 80, 443, 8080 | 3 |
| [2606:4700:9649:7793:79da:891f:bcb:1322] | 80, 443, 8080 | 3 |
| [2606:4700:9649:c0c8:2d69:6a2c:55a:4768] | 80, 443, 8080 | 3 |
| [2606:4700:8d9c:b8ac:d96a:cbd6:bd5c:7862] | 80, 443, 8080 | 3 |

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
