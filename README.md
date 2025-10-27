# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-28 00:11:58 +0330

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
| 172.67.70.52 | 80, 443, 8080 | 56 |
| 172.67.74.206 | 80, 443, 8080 | 56 |
| 104.16.228.251 | 80, 443, 8080 | 130 |
| 104.16.228.251 | 80, 443, 8080 | 130 |
| 104.24.85.43 | 80, 443, 8080 | 148 |
| 104.19.40.210 | 80, 443, 8080 | 148 |
| 104.24.85.43 | 80, 443, 8080 | 148 |
| 104.19.40.210 | 80, 443, 8080 | 148 |
| 172.67.178.108 | 80, 443, 8080 | 148 |
| 172.67.193.6 | 80, 443, 8080 | 148 |
| 172.67.254.167 | 80, 443, 8080 | 149 |
| 104.20.40.171 | 80, 443, 8080 | 150 |
| 104.25.214.200 | 80, 443, 8080 | 150 |
| 104.20.40.171 | 80, 443, 8080 | 150 |
| 104.25.214.200 | 80, 443, 8080 | 150 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:4408:2ee6:51cd:6d31:792a:df1f] | 80, 443, 8080 | 3 |
| [2606:4700:8d79:e40b:64d0:1f2:6bf4:b1d1] | 80, 443, 8080 | 3 |
| [2606:4700:8dd2:7b2d:9ca7:1f27:25af:27b7] | 80, 443, 8080 | 3 |
| [2606:4700:4408:2ee6:51cd:6d31:792a:df1f] | 80, 443, 8080 | 3 |
| [2606:4700:8d79:e40b:64d0:1f2:6bf4:b1d1] | 80, 443, 8080 | 3 |
| [2606:4700:8dd2:7b2d:9ca7:1f27:25af:27b7] | 80, 443, 8080 | 3 |
| [2606:4700:4408:2ee6:51cd:6d31:792a:df1f] | 80, 443, 8080 | 3 |
| [2606:4700:8d79:e40b:64d0:1f2:6bf4:b1d1] | 80, 443, 8080 | 3 |
| [2606:4700:8dd2:7b2d:9ca7:1f27:25af:27b7] | 80, 443, 8080 | 3 |
| [2606:4700:8d98:b55f:2e1c:3b94:9ffa:7598] | 80, 443, 8080 | 4 |
| [2606:4700:8d98:b55f:2e1c:3b94:9ffa:7598] | 80, 443, 8080 | 4 |
| [2606:4700:8d98:b55f:2e1c:3b94:9ffa:7598] | 80, 443, 8080 | 4 |
| [2606:4700:13:8ed2:7029:ff76:33d7:e577] | 80, 443, 8080 | 12 |
| [2606:4700:13:8ed2:7029:ff76:33d7:e577] | 80, 443, 8080 | 12 |
| [2606:4700:13:8ed2:7029:ff76:33d7:e577] | 80, 443, 8080 | 12 |

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
