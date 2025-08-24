# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-08-25 00:07:53 +0330

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
| 172.64.94.214 | 80, 443, 8080 | 53 |
| 141.101.123.102 | 80, 443, 8080 | 54 |
| 162.159.253.7 | 80, 443, 8080 | 54 |
| 162.159.247.184 | 80, 443, 8080 | 54 |
| 141.101.115.156 | 80, 443, 8080 | 55 |
| 104.17.203.185 | 80, 443, 8080 | 127 |
| 104.17.234.214 | 80, 443, 8080 | 129 |
| 104.19.56.162 | 80, 443, 8080 | 130 |
| 172.67.240.182 | 80, 443, 8080 | 130 |
| 172.67.176.163 | 80, 443, 8080 | 130 |
| 104.18.76.157 | 80, 443, 8080 | 131 |
| 172.67.134.153 | 80, 443, 8080 | 131 |
| 172.67.167.136 | 80, 443, 8080 | 131 |
| 172.67.175.170 | 80, 443, 8080 | 131 |
| 104.19.100.77 | 80, 443, 8080 | 139 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:91b5:5dae:d77c:f869:d3bf:f342] | 80, 443, 8080 | 4 |
| [2606:4700:91b5:6d20:810:7d7d:cd9:4638] | 80, 443, 8080 | 4 |
| [2606:4700:9c6a:a4d9:947b:eac4:d76d:6f30] | 80, 443, 8080 | 4 |
| [2606:4700:8de5:46d8:ab75:3c69:bee0:fc03] | 80, 443, 8080 | 4 |
| [2606:4700:976d:84a8:93d2:a351:4dfa:cc61] | 80, 443, 8080 | 4 |
| [2606:4700:91b5:5dae:d77c:f869:d3bf:f342] | 80, 443, 8080 | 4 |
| [2606:4700:91b5:6d20:810:7d7d:cd9:4638] | 80, 443, 8080 | 4 |
| [2606:4700:9c6a:a4d9:947b:eac4:d76d:6f30] | 80, 443, 8080 | 4 |
| [2606:4700:8de5:46d8:ab75:3c69:bee0:fc03] | 80, 443, 8080 | 4 |
| [2606:4700:976d:84a8:93d2:a351:4dfa:cc61] | 80, 443, 8080 | 4 |
| [2606:4700:91b5:5dae:d77c:f869:d3bf:f342] | 80, 443, 8080 | 4 |
| [2606:4700:91b5:6d20:810:7d7d:cd9:4638] | 80, 443, 8080 | 4 |
| [2606:4700:9c6a:a4d9:947b:eac4:d76d:6f30] | 80, 443, 8080 | 4 |
| [2606:4700:8de5:46d8:ab75:3c69:bee0:fc03] | 80, 443, 8080 | 4 |
| [2606:4700:976d:84a8:93d2:a351:4dfa:cc61] | 80, 443, 8080 | 4 |

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
