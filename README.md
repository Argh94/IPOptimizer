# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-09 00:11:54 +0330

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
| 190.93.245.54 | 80, 443, 8080 | 55 |
| 172.67.90.162 | 80, 443, 8080 | 56 |
| 104.18.234.70 | 80, 443, 8080 | 132 |
| 104.18.234.70 | 80, 443, 8080 | 132 |
| 104.17.239.38 | 80, 443, 8080 | 141 |
| 104.17.239.38 | 80, 443, 8080 | 141 |
| 104.18.0.96 | 80, 443, 8080 | 146 |
| 104.18.0.96 | 80, 443, 8080 | 146 |
| 104.19.82.236 | 80, 443, 8080 | 148 |
| 104.19.82.236 | 80, 443, 8080 | 148 |
| 104.16.178.126 | 80, 443, 8080 | 149 |
| 104.16.178.126 | 80, 443, 8080 | 149 |
| 172.67.193.108 | 80, 443, 8080 | 220 |
| 172.67.140.44 | 80, 443, 8080 | 221 |
| 172.67.232.22 | 80, 443, 8080 | 223 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9a6f:eca4:d855:249d:acb:8e81] | 80, 443, 8080 | 3 |
| [2606:4700:8ded:a4a1:70be:3e5e:9e55:2907] | 80, 443, 8080 | 3 |
| [2606:4700:134:d945:7676:b8b1:1025:f2d8] | 80, 443, 8080 | 3 |
| [2606:4700:9ad1:ba72:8913:d784:40d1:be37] | 80, 443, 8080 | 3 |
| [2606:4700:9a6f:eca4:d855:249d:acb:8e81] | 80, 443, 8080 | 3 |
| [2606:4700:8ded:a4a1:70be:3e5e:9e55:2907] | 80, 443, 8080 | 3 |
| [2606:4700:134:d945:7676:b8b1:1025:f2d8] | 80, 443, 8080 | 3 |
| [2606:4700:9ad1:ba72:8913:d784:40d1:be37] | 80, 443, 8080 | 3 |
| [2606:4700:9a6f:eca4:d855:249d:acb:8e81] | 80, 443, 8080 | 3 |
| [2606:4700:8ded:a4a1:70be:3e5e:9e55:2907] | 80, 443, 8080 | 3 |
| [2606:4700:134:d945:7676:b8b1:1025:f2d8] | 80, 443, 8080 | 3 |
| [2606:4700:9ad1:ba72:8913:d784:40d1:be37] | 80, 443, 8080 | 3 |
| [2606:4700:8ded:80d:ab81:67:d8f2:fb4a] | 80, 443, 8080 | 4 |
| [2606:4700:8ded:80d:ab81:67:d8f2:fb4a] | 80, 443, 8080 | 4 |
| [2606:4700:8ded:80d:ab81:67:d8f2:fb4a] | 80, 443, 8080 | 4 |

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
