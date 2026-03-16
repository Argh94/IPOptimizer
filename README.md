# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-17 00:37:04 +0330

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
| 198.41.209.156 | 80, 443, 8080 | 53 |
| 198.41.209.156 | 80, 443, 8080 | 53 |
| 198.41.209.166 | 80, 443, 8080 | 55 |
| 198.41.209.166 | 80, 443, 8080 | 55 |
| 198.41.208.42 | 80, 443, 8080 | 56 |
| 198.41.208.42 | 80, 443, 8080 | 56 |
| 198.41.208.66 | 80, 443, 8080 | 58 |
| 198.41.208.66 | 80, 443, 8080 | 58 |
| 198.41.208.210 | 80, 443, 8080 | 59 |
| 198.41.208.210 | 80, 443, 8080 | 59 |
| 162.159.36.229 | 80, 443, 8080 | 97 |
| 104.18.86.136 | 80, 443, 8080 | 129 |
| 104.19.57.161 | 80, 443, 8080 | 130 |
| 104.17.66.229 | 80, 443, 8080 | 130 |
| 104.19.83.49 | 80, 443, 8080 | 145 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:23:3683:1dc5:3f86:713c:6e4] | 80, 443, 8080 | 3 |
| [2606:4700:8d9b:a778:d24d:d4e5:6950:1580] | 80, 443, 8080 | 3 |
| [2606:4700:23:3297:4651:eb4a:3d6f:2bd3] | 80, 443, 8080 | 3 |
| [2606:4700:9b07:c512:4efc:bac8:15e5:58c3] | 80, 443, 8080 | 3 |
| [2606:4700:8d9b:6adc:c05:4299:f50:283d] | 80, 443, 8080 | 3 |
| [2606:4700:23:3683:1dc5:3f86:713c:6e4] | 80, 443, 8080 | 3 |
| [2606:4700:8d9b:a778:d24d:d4e5:6950:1580] | 80, 443, 8080 | 3 |
| [2606:4700:23:3297:4651:eb4a:3d6f:2bd3] | 80, 443, 8080 | 3 |
| [2606:4700:9b07:c512:4efc:bac8:15e5:58c3] | 80, 443, 8080 | 3 |
| [2606:4700:8d9b:6adc:c05:4299:f50:283d] | 80, 443, 8080 | 3 |
| [2606:4700:23:3683:1dc5:3f86:713c:6e4] | 80, 443, 8080 | 3 |
| [2606:4700:8d9b:a778:d24d:d4e5:6950:1580] | 80, 443, 8080 | 3 |
| [2606:4700:23:3297:4651:eb4a:3d6f:2bd3] | 80, 443, 8080 | 3 |
| [2606:4700:9b07:c512:4efc:bac8:15e5:58c3] | 80, 443, 8080 | 3 |
| [2606:4700:8d9b:6adc:c05:4299:f50:283d] | 80, 443, 8080 | 3 |

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
