# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-11-02 00:10:10 +0330

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
| 104.17.223.74 | 80, 443, 8080 | 38 |
| 198.41.209.10 | 80, 443, 8080 | 53 |
| 198.41.209.100 | 80, 443, 8080 | 53 |
| 198.41.208.250 | 80, 443, 8080 | 55 |
| 162.159.235.220 | 80, 443, 8080 | 55 |
| 172.64.66.114 | 80, 443, 8080 | 56 |
| 172.64.93.179 | 80, 443, 8080 | 56 |
| 198.41.211.169 | 80, 443, 8080 | 99 |
| 162.159.46.157 | 80, 443, 8080 | 122 |
| 104.19.216.51 | 80, 443, 8080 | 128 |
| 104.18.185.225 | 80, 443, 8080 | 129 |
| 104.17.242.253 | 80, 443, 8080 | 129 |
| 172.67.186.157 | 80, 443, 8080 | 142 |
| 172.67.131.131 | 80, 443, 8080 | 142 |
| 172.67.187.97 | 80, 443, 8080 | 143 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8dec:e4cf:146e:4876:a7d2:e25a] | 80, 443, 8080 | 3 |
| [2606:4700:9a6f:af56:f8bb:8398:a4d0:646f] | 80, 443, 8080 | 3 |
| [2606:4700:9a6f:54b0:9139:8ab1:daad:8152] | 80, 443, 8080 | 3 |
| [2606:4700:8dec:1844:6802:8899:4445:3858] | 80, 443, 8080 | 3 |
| [2606:4700:976f:7d3c:ad6f:2108:e36:3ff8] | 80, 443, 8080 | 3 |
| [2606:4700:8dec:e4cf:146e:4876:a7d2:e25a] | 80, 443, 8080 | 3 |
| [2606:4700:9a6f:af56:f8bb:8398:a4d0:646f] | 80, 443, 8080 | 3 |
| [2606:4700:9a6f:54b0:9139:8ab1:daad:8152] | 80, 443, 8080 | 3 |
| [2606:4700:8dec:1844:6802:8899:4445:3858] | 80, 443, 8080 | 3 |
| [2606:4700:976f:7d3c:ad6f:2108:e36:3ff8] | 80, 443, 8080 | 3 |
| [2606:4700:8dec:e4cf:146e:4876:a7d2:e25a] | 80, 443, 8080 | 3 |
| [2606:4700:9a6f:af56:f8bb:8398:a4d0:646f] | 80, 443, 8080 | 3 |
| [2606:4700:9a6f:54b0:9139:8ab1:daad:8152] | 80, 443, 8080 | 3 |
| [2606:4700:8dec:1844:6802:8899:4445:3858] | 80, 443, 8080 | 3 |
| [2606:4700:976f:7d3c:ad6f:2108:e36:3ff8] | 80, 443, 8080 | 3 |

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
