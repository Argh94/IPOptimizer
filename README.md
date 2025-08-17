# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-08-18 00:09:42 +0330

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
|----|------------------|--------------|
| 162.159.246.97 | 80, 443, 8080 | 56 |
| 141.101.123.0 | 80, 443, 8080 | 57 |
| 162.159.238.107 | 80, 443, 8080 | 64 |
| 104.18.89.139 | 80, 443, 8080 | 129 |
| 104.16.86.174 | 80, 443, 8080 | 129 |
| 104.18.89.139 | 80, 443, 8080 | 129 |
| 104.16.86.174 | 80, 443, 8080 | 129 |
| 104.19.73.79 | 80, 443, 8080 | 130 |
| 104.19.73.79 | 80, 443, 8080 | 130 |
| 172.67.169.219 | 80, 443, 8080 | 130 |
| 172.67.225.99 | 80, 443, 8080 | 131 |
| 104.16.131.204 | 80, 443, 8080 | 143 |
| 104.16.131.204 | 80, 443, 8080 | 143 |
| 104.16.0.228 | 80, 443, 8080 | 163 |
| 104.16.0.228 | 80, 443, 8080 | 163 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|----|------------------|--------------|
| [2606:4700:3001:5b63:fc68:23ab:a676:321] | 80, 443, 8080 | 3 |
| [2606:4700:3001:5b63:fc68:23ab:a676:321] | 80, 443, 8080 | 3 |
| [2606:4700:3001:5b63:fc68:23ab:a676:321] | 80, 443, 8080 | 3 |
| [2606:4700:8ca9:35ba:15ed:bfde:825a:f863] | 80, 443, 8080 | 4 |
| [2606:4700:8ca9:35ba:15ed:bfde:825a:f863] | 80, 443, 8080 | 4 |
| [2606:4700:8ca9:35ba:15ed:bfde:825a:f863] | 80, 443, 8080 | 4 |
| [2606:4700:83b6:baed:a0c2:13e8:ddf8:94fa] | 80, 443, 8080 | 149 |
| [2606:4700:83b6:baed:a0c2:13e8:ddf8:94fa] | 80, 443, 8080 | 149 |
| [2606:4700:83b6:baed:a0c2:13e8:ddf8:94fa] | 80, 443, 8080 | 149 |
| [2606:4700:83b6:3478:6792:e299:db07:18d] | 80, 443, 8080 | 152 |
| [2606:4700:83b6:3478:6792:e299:db07:18d] | 80, 443, 8080 | 152 |
| [2606:4700:83b6:3478:6792:e299:db07:18d] | 80, 443, 8080 | 152 |
| [2606:4700:83b9:b61c:a905:5c95:6859:bce9] | 80, 443, 8080 | 160 |
| [2606:4700:83b9:b61c:a905:5c95:6859:bce9] | 80, 443, 8080 | 160 |
| [2606:4700:83b9:b61c:a905:5c95:6859:bce9] | 80, 443, 8080 | 160 |

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
