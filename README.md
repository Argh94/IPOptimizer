# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-21 00:08:46 +0330

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
| 162.159.248.175 | 80, 443, 8080 | 53 |
| 162.159.251.118 | 80, 443, 8080 | 53 |
| 172.64.89.136 | 80, 443, 8080 | 55 |
| 173.245.49.223 | 80, 443, 8080 | 55 |
| 172.64.95.89 | 80, 443, 8080 | 55 |
| 162.159.253.205 | 80, 443, 8080 | 57 |
| 104.19.123.82 | 80, 443, 8080 | 128 |
| 104.16.79.143 | 80, 443, 8080 | 129 |
| 104.16.23.245 | 80, 443, 8080 | 129 |
| 104.19.93.90 | 80, 443, 8080 | 129 |
| 104.19.103.119 | 80, 443, 8080 | 133 |
| 172.67.180.94 | 80, 443, 8080 | 145 |
| 172.67.228.218 | 80, 443, 8080 | 146 |
| 172.67.222.242 | 80, 443, 8080 | 146 |
| 162.159.224.215 | 80, 443, 8080 | 219 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9a62:3263:3f19:f752:1086:872] | 80, 443, 8080 | 3 |
| [2606:4700:9b0f:df1c:6fd5:6d97:7089:c95a] | 80, 443, 8080 | 3 |
| [2606:4700:3010:d93f:169d:82bb:365f:979d] | 80, 443, 8080 | 3 |
| [2606:4700:9a62:3263:3f19:f752:1086:872] | 80, 443, 8080 | 3 |
| [2606:4700:9b0f:df1c:6fd5:6d97:7089:c95a] | 80, 443, 8080 | 3 |
| [2606:4700:3010:d93f:169d:82bb:365f:979d] | 80, 443, 8080 | 3 |
| [2606:4700:9a62:3263:3f19:f752:1086:872] | 80, 443, 8080 | 3 |
| [2606:4700:9b0f:df1c:6fd5:6d97:7089:c95a] | 80, 443, 8080 | 3 |
| [2606:4700:3010:d93f:169d:82bb:365f:979d] | 80, 443, 8080 | 3 |
| [2606:4700:8dd4:c011:b117:bba3:8bc1:745e] | 80, 443, 8080 | 6 |
| [2606:4700:8dd4:c011:b117:bba3:8bc1:745e] | 80, 443, 8080 | 6 |
| [2606:4700:8dd4:c011:b117:bba3:8bc1:745e] | 80, 443, 8080 | 6 |
| [2606:4700:83bf:d073:1f8d:6197:f37f:c368] | 80, 443, 8080 | 173 |
| [2606:4700:83bf:d073:1f8d:6197:f37f:c368] | 80, 443, 8080 | 173 |
| [2606:4700:83bf:d073:1f8d:6197:f37f:c368] | 80, 443, 8080 | 173 |

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
