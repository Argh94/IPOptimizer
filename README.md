# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-04-12 11:18:56 +0330

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
| 198.41.209.51 | 80, 443, 8080 | 54 |
| 198.41.208.154 | 80, 443, 8080 | 54 |
| 198.41.209.51 | 80, 443, 8080 | 54 |
| 198.41.208.154 | 80, 443, 8080 | 54 |
| 104.17.160.126 | 80, 443, 8080 | 161 |
| 104.24.196.11 | 80, 443, 8080 | 165 |
| 104.25.106.225 | 80, 443, 8080 | 171 |
| 104.27.113.12 | 80, 443, 8080 | 174 |
| 104.27.80.163 | 80, 443, 8080 | 176 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:964a:b249:4c49:2bae:e635:1c3b] | 80, 443, 8080 | 3 |
| [2606:4700:9aec:582f:837f:4dc4:df7b:bc0f] | 80, 443, 8080 | 3 |
| [2606:4700:964a:aed6:aa72:ab80:d5ea:f074] | 80, 443, 8080 | 3 |
| [2606:4700:90da:5606:bd65:a806:2fea:57af] | 80, 443, 8080 | 3 |
| [2606:4700:9aec:4669:e570:20ac:fa67:24a5] | 80, 443, 8080 | 3 |
| [2606:4700:964a:b249:4c49:2bae:e635:1c3b] | 80, 443, 8080 | 3 |
| [2606:4700:9aec:582f:837f:4dc4:df7b:bc0f] | 80, 443, 8080 | 3 |
| [2606:4700:964a:aed6:aa72:ab80:d5ea:f074] | 80, 443, 8080 | 3 |
| [2606:4700:90da:5606:bd65:a806:2fea:57af] | 80, 443, 8080 | 3 |
| [2606:4700:9aec:4669:e570:20ac:fa67:24a5] | 80, 443, 8080 | 3 |
| [2606:4700:964a:b249:4c49:2bae:e635:1c3b] | 80, 443, 8080 | 3 |
| [2606:4700:9aec:582f:837f:4dc4:df7b:bc0f] | 80, 443, 8080 | 3 |
| [2606:4700:964a:aed6:aa72:ab80:d5ea:f074] | 80, 443, 8080 | 3 |
| [2606:4700:90da:5606:bd65:a806:2fea:57af] | 80, 443, 8080 | 3 |
| [2606:4700:9aec:4669:e570:20ac:fa67:24a5] | 80, 443, 8080 | 3 |

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
