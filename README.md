# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-06 00:15:08 +0330

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
| 198.41.209.110 | 80, 443, 8080 | 52 |
| 198.41.209.110 | 80, 443, 8080 | 52 |
| 198.41.208.63 | 80, 443, 8080 | 53 |
| 198.41.208.63 | 80, 443, 8080 | 53 |
| 198.41.209.139 | 80, 443, 8080 | 54 |
| 198.41.209.139 | 80, 443, 8080 | 54 |
| 104.16.245.77 | 80, 443, 8080 | 55 |
| 198.41.209.130 | 80, 443, 8080 | 55 |
| 104.16.245.77 | 80, 443, 8080 | 55 |
| 198.41.209.130 | 80, 443, 8080 | 55 |
| 162.159.46.26 | 80, 443, 8080 | 76 |
| 104.16.0.129 | 80, 443, 8080 | 129 |
| 104.16.100.180 | 80, 443, 8080 | 130 |
| 104.21.232.129 | 80, 443, 8080 | 151 |
| 104.27.40.100 | 80, 443, 8080 | 157 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8d7a:7bfe:c6fb:5788:50bb:1777] | 80, 443, 8080 | 3 |
| [2606:4700:5c:cae1:af40:b2fa:f32f:62d0] | 80, 443, 8080 | 3 |
| [2606:4700:8ca2:2598:66a1:bde3:c910:815a] | 80, 443, 8080 | 3 |
| [2606:4700:8de1:45aa:472a:2635:38bf:a717] | 80, 443, 8080 | 3 |
| [2606:4700:8d7a:7bfe:c6fb:5788:50bb:1777] | 80, 443, 8080 | 3 |
| [2606:4700:5c:cae1:af40:b2fa:f32f:62d0] | 80, 443, 8080 | 3 |
| [2606:4700:8ca2:2598:66a1:bde3:c910:815a] | 80, 443, 8080 | 3 |
| [2606:4700:8de1:45aa:472a:2635:38bf:a717] | 80, 443, 8080 | 3 |
| [2606:4700:8d7a:7bfe:c6fb:5788:50bb:1777] | 80, 443, 8080 | 3 |
| [2606:4700:5c:cae1:af40:b2fa:f32f:62d0] | 80, 443, 8080 | 3 |
| [2606:4700:8ca2:2598:66a1:bde3:c910:815a] | 80, 443, 8080 | 3 |
| [2606:4700:8de1:45aa:472a:2635:38bf:a717] | 80, 443, 8080 | 3 |
| [2606:4700:8de1:cafd:f2f8:9a84:2ce3:5865] | 80, 443, 8080 | 4 |
| [2606:4700:8de1:cafd:f2f8:9a84:2ce3:5865] | 80, 443, 8080 | 4 |
| [2606:4700:8de1:cafd:f2f8:9a84:2ce3:5865] | 80, 443, 8080 | 4 |

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
