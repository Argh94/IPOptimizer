# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-05 10:18:19 +0330

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
| 198.41.222.9 | 80, 443, 8080 | 52 |
| 172.67.93.248 | 80, 443, 8080 | 55 |
| 162.159.241.210 | 80, 443, 8080 | 56 |
| 198.41.214.5 | 80, 443, 8080 | 56 |
| 198.41.208.174 | 80, 443, 8080 | 84 |
| 198.41.209.138 | 80, 443, 8080 | 95 |
| 198.41.208.125 | 80, 443, 8080 | 118 |
| 198.41.208.39 | 80, 443, 8080 | 119 |
| 104.17.242.143 | 80, 443, 8080 | 132 |
| 172.67.243.169 | 80, 443, 8080 | 140 |
| 172.67.217.150 | 80, 443, 8080 | 140 |
| 104.19.63.56 | 80, 443, 8080 | 142 |
| 104.21.228.34 | 80, 443, 8080 | 149 |
| 104.21.101.107 | 80, 443, 8080 | 152 |
| 104.24.41.174 | 80, 443, 8080 | 163 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:22:60e:8cbb:204:4526:17f4] | 80, 443, 8080 | 3 |
| [2606:4700:22:60e:8cbb:204:4526:17f4] | 80, 443, 8080 | 3 |
| [2606:4700:22:60e:8cbb:204:4526:17f4] | 80, 443, 8080 | 3 |
| [2606:4700:964b:fb5:c6aa:f74d:5f75:4079] | 80, 443, 8080 | 4 |
| [2606:4700:964b:b6af:47a3:9060:70f2:4bda] | 80, 443, 8080 | 4 |
| [2606:4700:9a9c:3403:d9fe:8dc4:2973:ba63] | 80, 443, 8080 | 4 |
| [2606:4700:964b:fb5:c6aa:f74d:5f75:4079] | 80, 443, 8080 | 4 |
| [2606:4700:964b:b6af:47a3:9060:70f2:4bda] | 80, 443, 8080 | 4 |
| [2606:4700:9a9c:3403:d9fe:8dc4:2973:ba63] | 80, 443, 8080 | 4 |
| [2606:4700:964b:fb5:c6aa:f74d:5f75:4079] | 80, 443, 8080 | 4 |
| [2606:4700:964b:b6af:47a3:9060:70f2:4bda] | 80, 443, 8080 | 4 |
| [2606:4700:9a9c:3403:d9fe:8dc4:2973:ba63] | 80, 443, 8080 | 4 |
| [2606:4700:9a9c:21e1:8036:a5f2:d446:558d] | 80, 443, 8080 | 6 |
| [2606:4700:9a9c:21e1:8036:a5f2:d446:558d] | 80, 443, 8080 | 6 |
| [2606:4700:9a9c:21e1:8036:a5f2:d446:558d] | 80, 443, 8080 | 6 |

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
