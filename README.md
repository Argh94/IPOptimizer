# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-24 10:18:57 +0330

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
| 190.93.245.40 | 80, 443, 8080 | 54 |
| 198.41.209.63 | 80, 443, 8080 | 54 |
| 141.101.113.68 | 80, 443, 8080 | 56 |
| 162.159.138.131 | 80, 443, 8080 | 56 |
| 198.41.209.135 | 80, 443, 8080 | 57 |
| 104.17.37.20 | 80, 443, 8080 | 130 |
| 104.16.101.86 | 80, 443, 8080 | 130 |
| 104.17.52.127 | 80, 443, 8080 | 130 |
| 104.17.117.117 | 80, 443, 8080 | 131 |
| 104.16.215.16 | 80, 443, 8080 | 132 |
| 172.67.233.40 | 80, 443, 8080 | 142 |
| 172.67.193.78 | 80, 443, 8080 | 145 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9aee:775a:30a8:44c4:ebfe:19eb] | 80, 443, 8080 | 3 |
| [2606:4700:22:8832:452f:c4af:7d48:aa2] | 80, 443, 8080 | 3 |
| [2606:4700:9aee:7e20:5630:ccbf:ca26:195b] | 80, 443, 8080 | 3 |
| [2606:4700:9aea:a6d2:521e:5f00:3394:877a] | 80, 443, 8080 | 3 |
| [2606:4700:9aea:3f4a:323e:3123:1067:371d] | 80, 443, 8080 | 3 |
| [2606:4700:9aee:775a:30a8:44c4:ebfe:19eb] | 80, 443, 8080 | 3 |
| [2606:4700:22:8832:452f:c4af:7d48:aa2] | 80, 443, 8080 | 3 |
| [2606:4700:9aee:7e20:5630:ccbf:ca26:195b] | 80, 443, 8080 | 3 |
| [2606:4700:9aea:a6d2:521e:5f00:3394:877a] | 80, 443, 8080 | 3 |
| [2606:4700:9aea:3f4a:323e:3123:1067:371d] | 80, 443, 8080 | 3 |
| [2606:4700:9aee:775a:30a8:44c4:ebfe:19eb] | 80, 443, 8080 | 3 |
| [2606:4700:22:8832:452f:c4af:7d48:aa2] | 80, 443, 8080 | 3 |
| [2606:4700:9aee:7e20:5630:ccbf:ca26:195b] | 80, 443, 8080 | 3 |
| [2606:4700:9aea:a6d2:521e:5f00:3394:877a] | 80, 443, 8080 | 3 |
| [2606:4700:9aea:3f4a:323e:3123:1067:371d] | 80, 443, 8080 | 3 |

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
