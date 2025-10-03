# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-03 10:17:27 +0330

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
| 198.41.208.202 | 80, 443, 8080 | 52 |
| 190.93.246.121 | 80, 443, 8080 | 53 |
| 172.64.95.235 | 80, 443, 8080 | 54 |
| 162.159.253.169 | 80, 443, 8080 | 54 |
| 173.245.49.215 | 80, 443, 8080 | 55 |
| 172.67.81.104 | 80, 443, 8080 | 55 |
| 172.67.91.160 | 80, 443, 8080 | 55 |
| 172.67.64.109 | 80, 443, 8080 | 56 |
| 198.41.223.247 | 80, 443, 8080 | 72 |
| 104.19.187.107 | 80, 443, 8080 | 127 |
| 104.18.187.176 | 80, 443, 8080 | 129 |
| 104.17.211.9 | 80, 443, 8080 | 129 |
| 104.16.100.43 | 80, 443, 8080 | 131 |
| 172.67.218.21 | 80, 443, 8080 | 143 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:90c4:d0a1:a1db:1332:4be1:960c] | 80, 443, 8080 | 3 |
| [2606:4700:90c4:d0a1:a1db:1332:4be1:960c] | 80, 443, 8080 | 3 |
| [2606:4700:90c4:d0a1:a1db:1332:4be1:960c] | 80, 443, 8080 | 3 |
| [2606:4700:8d9d:cc36:5d52:e8a7:7b00:9aff] | 80, 443, 8080 | 4 |
| [2606:4700:8d9d:94a5:534c:361b:18ff:e43d] | 80, 443, 8080 | 4 |
| [2606:4700:8d7d:4cdb:bf6f:8a6f:6208:7e7d] | 80, 443, 8080 | 4 |
| [2606:4700:8d7d:c109:8c4:f13c:87f8:ccbf] | 80, 443, 8080 | 4 |
| [2606:4700:8d9d:cc36:5d52:e8a7:7b00:9aff] | 80, 443, 8080 | 4 |
| [2606:4700:8d9d:94a5:534c:361b:18ff:e43d] | 80, 443, 8080 | 4 |
| [2606:4700:8d7d:4cdb:bf6f:8a6f:6208:7e7d] | 80, 443, 8080 | 4 |
| [2606:4700:8d7d:c109:8c4:f13c:87f8:ccbf] | 80, 443, 8080 | 4 |
| [2606:4700:8d9d:cc36:5d52:e8a7:7b00:9aff] | 80, 443, 8080 | 4 |
| [2606:4700:8d9d:94a5:534c:361b:18ff:e43d] | 80, 443, 8080 | 4 |
| [2606:4700:8d7d:4cdb:bf6f:8a6f:6208:7e7d] | 80, 443, 8080 | 4 |
| [2606:4700:8d7d:c109:8c4:f13c:87f8:ccbf] | 80, 443, 8080 | 4 |

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
