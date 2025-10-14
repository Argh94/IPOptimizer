# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-15 00:12:29 +0330

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
| 172.64.88.85 | 80, 443, 8080 | 51 |
| 162.159.251.118 | 80, 443, 8080 | 51 |
| 198.41.208.9 | 80, 443, 8080 | 53 |
| 198.41.209.180 | 80, 443, 8080 | 55 |
| 141.101.123.20 | 80, 443, 8080 | 56 |
| 162.159.134.160 | 80, 443, 8080 | 56 |
| 162.159.46.29 | 80, 443, 8080 | 62 |
| 198.41.208.231 | 80, 443, 8080 | 120 |
| 104.17.5.97 | 80, 443, 8080 | 128 |
| 104.16.129.247 | 80, 443, 8080 | 128 |
| 104.19.202.4 | 80, 443, 8080 | 129 |
| 104.19.89.211 | 80, 443, 8080 | 129 |
| 162.159.160.244 | 80, 443, 8080 | 130 |
| 172.67.168.15 | 80, 443, 8080 | 142 |
| 172.67.239.58 | 80, 443, 8080 | 143 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9ae3:be7d:a7ed:1576:1786:1058] | 80, 443, 8080 | 3 |
| [2606:4700:8d90:52b2:ec81:9c0c:a263:548b] | 80, 443, 8080 | 3 |
| [2606:4700:9ae3:be7d:a7ed:1576:1786:1058] | 80, 443, 8080 | 3 |
| [2606:4700:8d90:52b2:ec81:9c0c:a263:548b] | 80, 443, 8080 | 3 |
| [2606:4700:9ae3:be7d:a7ed:1576:1786:1058] | 80, 443, 8080 | 3 |
| [2606:4700:8d90:52b2:ec81:9c0c:a263:548b] | 80, 443, 8080 | 3 |
| [2606:4700:9a67:9b0b:8d04:f648:984:407d] | 80, 443, 8080 | 4 |
| [2606:4700:9a6a:8709:fc2c:acdd:d1c4:7ff9] | 80, 443, 8080 | 4 |
| [2606:4700:8d90:30e1:ef25:687f:d44d:8873] | 80, 443, 8080 | 4 |
| [2606:4700:9a67:9b0b:8d04:f648:984:407d] | 80, 443, 8080 | 4 |
| [2606:4700:9a6a:8709:fc2c:acdd:d1c4:7ff9] | 80, 443, 8080 | 4 |
| [2606:4700:8d90:30e1:ef25:687f:d44d:8873] | 80, 443, 8080 | 4 |
| [2606:4700:9a67:9b0b:8d04:f648:984:407d] | 80, 443, 8080 | 4 |
| [2606:4700:9a6a:8709:fc2c:acdd:d1c4:7ff9] | 80, 443, 8080 | 4 |
| [2606:4700:8d90:30e1:ef25:687f:d44d:8873] | 80, 443, 8080 | 4 |

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
