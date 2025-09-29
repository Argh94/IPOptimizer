# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-30 00:10:37 +0330

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
| 172.67.120.77 | 80, 443, 8080 | 54 |
| 141.101.113.2 | 80, 443, 8080 | 55 |
| 172.67.72.87 | 80, 443, 8080 | 55 |
| 104.19.94.118 | 80, 443, 8080 | 128 |
| 104.19.94.118 | 80, 443, 8080 | 128 |
| 104.19.103.197 | 80, 443, 8080 | 129 |
| 104.19.145.183 | 80, 443, 8080 | 129 |
| 104.18.193.37 | 80, 443, 8080 | 129 |
| 104.17.199.176 | 80, 443, 8080 | 129 |
| 104.19.103.197 | 80, 443, 8080 | 129 |
| 104.19.145.183 | 80, 443, 8080 | 129 |
| 104.18.193.37 | 80, 443, 8080 | 129 |
| 104.17.199.176 | 80, 443, 8080 | 129 |
| 172.67.153.70 | 80, 443, 8080 | 143 |
| 172.67.139.200 | 80, 443, 8080 | 143 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:3029:c3e9:e26c:c927:5a46:a323] | 80, 443, 8080 | 3 |
| [2606:4700:9c62:e666:7c5:e10b:f25c:6a83] | 80, 443, 8080 | 3 |
| [2606:4700:9c62:3bfe:704a:fdfa:3124:303e] | 80, 443, 8080 | 3 |
| [2606:4700:3029:c3e9:e26c:c927:5a46:a323] | 80, 443, 8080 | 3 |
| [2606:4700:9c62:e666:7c5:e10b:f25c:6a83] | 80, 443, 8080 | 3 |
| [2606:4700:9c62:3bfe:704a:fdfa:3124:303e] | 80, 443, 8080 | 3 |
| [2606:4700:3029:c3e9:e26c:c927:5a46:a323] | 80, 443, 8080 | 3 |
| [2606:4700:9c62:e666:7c5:e10b:f25c:6a83] | 80, 443, 8080 | 3 |
| [2606:4700:9c62:3bfe:704a:fdfa:3124:303e] | 80, 443, 8080 | 3 |
| [2606:4700:22:af81:4d7f:7d4c:17e1:18f0] | 80, 443, 8080 | 12 |
| [2606:4700:3032:b6e5:6803:5ea7:9554:a25d] | 80, 443, 8080 | 12 |
| [2606:4700:22:af81:4d7f:7d4c:17e1:18f0] | 80, 443, 8080 | 12 |
| [2606:4700:3032:b6e5:6803:5ea7:9554:a25d] | 80, 443, 8080 | 12 |
| [2606:4700:22:af81:4d7f:7d4c:17e1:18f0] | 80, 443, 8080 | 12 |
| [2606:4700:3032:b6e5:6803:5ea7:9554:a25d] | 80, 443, 8080 | 12 |

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
