# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-28 10:21:52 +0330

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
| 162.159.255.54 | 80, 443, 8080 | 52 |
| 190.93.246.137 | 80, 443, 8080 | 55 |
| 172.67.76.9 | 80, 443, 8080 | 55 |
| 162.159.245.57 | 80, 443, 8080 | 55 |
| 172.64.69.183 | 80, 443, 8080 | 56 |
| 172.67.92.253 | 80, 443, 8080 | 57 |
| 198.41.223.15 | 80, 443, 8080 | 71 |
| 198.41.223.5 | 80, 443, 8080 | 84 |
| 104.16.223.39 | 80, 443, 8080 | 128 |
| 104.16.31.74 | 80, 443, 8080 | 129 |
| 104.16.75.155 | 80, 443, 8080 | 129 |
| 172.67.207.2 | 80, 443, 8080 | 151 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:90c1:afbf:736d:3b8d:5e5d:a98d] | 80, 443, 8080 | 3 |
| [2606:4700:9647:7a76:5ffd:5ad6:4442:5a11] | 80, 443, 8080 | 3 |
| [2606:4700:4402:fb61:da6:bf1f:d570:a048] | 80, 443, 8080 | 3 |
| [2606:4700:90c1:afbf:736d:3b8d:5e5d:a98d] | 80, 443, 8080 | 3 |
| [2606:4700:9647:7a76:5ffd:5ad6:4442:5a11] | 80, 443, 8080 | 3 |
| [2606:4700:4402:fb61:da6:bf1f:d570:a048] | 80, 443, 8080 | 3 |
| [2606:4700:90c1:afbf:736d:3b8d:5e5d:a98d] | 80, 443, 8080 | 3 |
| [2606:4700:9647:7a76:5ffd:5ad6:4442:5a11] | 80, 443, 8080 | 3 |
| [2606:4700:4402:fb61:da6:bf1f:d570:a048] | 80, 443, 8080 | 3 |
| [2606:4700:8d93:51fc:6c18:87c3:b7c7:7941] | 80, 443, 8080 | 4 |
| [2606:4700:8d93:51fc:6c18:87c3:b7c7:7941] | 80, 443, 8080 | 4 |
| [2606:4700:8d93:51fc:6c18:87c3:b7c7:7941] | 80, 443, 8080 | 4 |
| [2606:4700:4402:1344:c203:d4df:fee1:cfd5] | 80, 443, 8080 | 12 |
| [2606:4700:4402:1344:c203:d4df:fee1:cfd5] | 80, 443, 8080 | 12 |
| [2606:4700:4402:1344:c203:d4df:fee1:cfd5] | 80, 443, 8080 | 12 |

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
