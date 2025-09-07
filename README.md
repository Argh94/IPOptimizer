# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-07 10:15:09 +0330

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
| 162.159.248.151 | 80, 443, 8080 | 52 |
| 141.101.114.166 | 80, 443, 8080 | 52 |
| 162.159.241.246 | 80, 443, 8080 | 52 |
| 162.159.236.188 | 80, 443, 8080 | 52 |
| 141.101.115.46 | 80, 443, 8080 | 52 |
| 172.67.94.246 | 80, 443, 8080 | 55 |
| 162.159.244.217 | 80, 443, 8080 | 56 |
| 172.64.86.231 | 80, 443, 8080 | 56 |
| 104.19.104.13 | 80, 443, 8080 | 131 |
| 172.67.165.201 | 80, 443, 8080 | 132 |
| 104.21.231.41 | 80, 443, 8080 | 138 |
| 104.17.43.21 | 80, 443, 8080 | 146 |
| 162.159.244.254 | 80, 443, 8080 | 148 |
| 104.19.38.196 | 80, 443, 8080 | 149 |
| 162.159.234.92 | 80, 443, 8080 | 219 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:90cd:7855:c44b:2128:bc05:496d] | 80, 443, 8080 | 3 |
| [2606:4700:9b05:1ac2:e828:d55c:814a:f43d] | 80, 443, 8080 | 3 |
| [2606:4700:9640:f16a:e0e1:408f:1a88:8208] | 80, 443, 8080 | 3 |
| [2606:4700:90cd:7855:c44b:2128:bc05:496d] | 80, 443, 8080 | 3 |
| [2606:4700:9b05:1ac2:e828:d55c:814a:f43d] | 80, 443, 8080 | 3 |
| [2606:4700:9640:f16a:e0e1:408f:1a88:8208] | 80, 443, 8080 | 3 |
| [2606:4700:90cd:7855:c44b:2128:bc05:496d] | 80, 443, 8080 | 3 |
| [2606:4700:9b05:1ac2:e828:d55c:814a:f43d] | 80, 443, 8080 | 3 |
| [2606:4700:9640:f16a:e0e1:408f:1a88:8208] | 80, 443, 8080 | 3 |
| [2606:4700:90cd:54c3:c2c9:7faa:bc53:acb7] | 80, 443, 8080 | 4 |
| [2606:4700:26:981e:2188:26e1:2634:9b7d] | 80, 443, 8080 | 4 |
| [2606:4700:90cd:54c3:c2c9:7faa:bc53:acb7] | 80, 443, 8080 | 4 |
| [2606:4700:26:981e:2188:26e1:2634:9b7d] | 80, 443, 8080 | 4 |
| [2606:4700:90cd:54c3:c2c9:7faa:bc53:acb7] | 80, 443, 8080 | 4 |
| [2606:4700:26:981e:2188:26e1:2634:9b7d] | 80, 443, 8080 | 4 |

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
