# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-22 10:20:18 +0330

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
| 198.41.209.202 | 80, 443, 8080 | 52 |
| 162.159.248.175 | 80, 443, 8080 | 53 |
| 162.159.251.118 | 80, 443, 8080 | 53 |
| 172.64.89.136 | 80, 443, 8080 | 55 |
| 172.64.95.89 | 80, 443, 8080 | 55 |
| 162.159.195.207 | 80, 443, 8080 | 57 |
| 162.159.245.107 | 80, 443, 8080 | 58 |
| 172.67.66.47 | 80, 443, 8080 | 59 |
| 104.17.119.4 | 80, 443, 8080 | 128 |
| 104.18.179.245 | 80, 443, 8080 | 128 |
| 104.17.246.149 | 80, 443, 8080 | 130 |
| 104.16.176.8 | 80, 443, 8080 | 130 |
| 104.18.85.190 | 80, 443, 8080 | 131 |
| 172.67.143.236 | 80, 443, 8080 | 146 |
| 172.67.150.85 | 80, 443, 8080 | 146 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:91b8:df4a:5d26:6e8b:37f2:ca01] | 80, 443, 8080 | 3 |
| [2606:4700:90c0:61e3:618c:eb2d:f6f7:8cac] | 80, 443, 8080 | 3 |
| [2606:4700:90c2:d362:e96f:3f52:2848:314b] | 80, 443, 8080 | 3 |
| [2606:4700:91b8:df4a:5d26:6e8b:37f2:ca01] | 80, 443, 8080 | 3 |
| [2606:4700:90c0:61e3:618c:eb2d:f6f7:8cac] | 80, 443, 8080 | 3 |
| [2606:4700:90c2:d362:e96f:3f52:2848:314b] | 80, 443, 8080 | 3 |
| [2606:4700:91b8:df4a:5d26:6e8b:37f2:ca01] | 80, 443, 8080 | 3 |
| [2606:4700:90c0:61e3:618c:eb2d:f6f7:8cac] | 80, 443, 8080 | 3 |
| [2606:4700:90c2:d362:e96f:3f52:2848:314b] | 80, 443, 8080 | 3 |
| [2606:4700:3006:d710:1c3a:55a8:5c7f:9f31] | 80, 443, 8080 | 12 |
| [2606:4700:3006:d710:1c3a:55a8:5c7f:9f31] | 80, 443, 8080 | 12 |
| [2606:4700:3006:d710:1c3a:55a8:5c7f:9f31] | 80, 443, 8080 | 12 |
| [2606:4700:83bf:367a:dae8:5214:f1d7:638c] | 80, 443, 8080 | 170 |
| [2606:4700:83bf:367a:dae8:5214:f1d7:638c] | 80, 443, 8080 | 170 |
| [2606:4700:83bf:367a:dae8:5214:f1d7:638c] | 80, 443, 8080 | 170 |

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
