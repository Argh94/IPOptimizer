# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-08-22 00:09:09 +0330

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
| 172.64.94.9 | 80, 443, 8080 | 50 |
| 162.159.248.151 | 80, 443, 8080 | 51 |
| 141.101.115.46 | 80, 443, 8080 | 51 |
| 198.41.208.176 | 80, 443, 8080 | 56 |
| 198.41.209.0 | 80, 443, 8080 | 56 |
| 172.64.93.149 | 80, 443, 8080 | 56 |
| 172.67.87.74 | 80, 443, 8080 | 56 |
| 172.67.126.198 | 80, 443, 8080 | 57 |
| 172.67.192.76 | 80, 443, 8080 | 133 |
| 172.67.234.122 | 80, 443, 8080 | 134 |
| 104.18.113.213 | 80, 443, 8080 | 140 |
| 104.19.80.165 | 80, 443, 8080 | 142 |
| 162.159.241.134 | 80, 443, 8080 | 147 |
| 104.21.236.77 | 80, 443, 8080 | 151 |
| 104.21.51.98 | 80, 443, 8080 | 154 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|----|------------------|--------------|
| [2606:4700:8d78:dbcc:a8f1:bc12:dc87:22ae] | 80, 443, 8080 | 3 |
| [2606:4700:8d79:15c7:4049:3189:1e39:6027] | 80, 443, 8080 | 3 |
| [2606:4700:8dec:d525:9cbf:cb67:74ed:a77d] | 80, 443, 8080 | 3 |
| [2606:4700:8d78:dbcc:a8f1:bc12:dc87:22ae] | 80, 443, 8080 | 3 |
| [2606:4700:8d79:15c7:4049:3189:1e39:6027] | 80, 443, 8080 | 3 |
| [2606:4700:8dec:d525:9cbf:cb67:74ed:a77d] | 80, 443, 8080 | 3 |
| [2606:4700:8d78:dbcc:a8f1:bc12:dc87:22ae] | 80, 443, 8080 | 3 |
| [2606:4700:8d79:15c7:4049:3189:1e39:6027] | 80, 443, 8080 | 3 |
| [2606:4700:8dec:d525:9cbf:cb67:74ed:a77d] | 80, 443, 8080 | 3 |
| [2606:4700:8dec:e045:543e:c0a8:ecc0:a68c] | 80, 443, 8080 | 4 |
| [2606:4700:28:b103:7251:a761:9407:986b] | 80, 443, 8080 | 4 |
| [2606:4700:8dec:e045:543e:c0a8:ecc0:a68c] | 80, 443, 8080 | 4 |
| [2606:4700:28:b103:7251:a761:9407:986b] | 80, 443, 8080 | 4 |
| [2606:4700:8dec:e045:543e:c0a8:ecc0:a68c] | 80, 443, 8080 | 4 |
| [2606:4700:28:b103:7251:a761:9407:986b] | 80, 443, 8080 | 4 |

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
