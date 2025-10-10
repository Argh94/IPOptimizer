# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-10 10:19:29 +0330

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
| 172.64.90.176 | 80, 443, 8080 | 55 |
| 172.64.82.145 | 80, 443, 8080 | 56 |
| 104.19.59.13 | 80, 443, 8080 | 129 |
| 172.64.92.231 | 80, 443, 8080 | 129 |
| 104.19.59.13 | 80, 443, 8080 | 129 |
| 172.64.92.231 | 80, 443, 8080 | 129 |
| 104.19.123.25 | 80, 443, 8080 | 130 |
| 104.19.160.88 | 80, 443, 8080 | 130 |
| 104.19.123.25 | 80, 443, 8080 | 130 |
| 104.19.160.88 | 80, 443, 8080 | 130 |
| 104.16.70.248 | 80, 443, 8080 | 131 |
| 104.16.70.248 | 80, 443, 8080 | 131 |
| 172.67.139.215 | 80, 443, 8080 | 142 |
| 172.67.195.12 | 80, 443, 8080 | 142 |
| 172.67.146.17 | 80, 443, 8080 | 144 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8d74:45d1:fad2:8a58:90b3:e7c5] | 80, 443, 8080 | 3 |
| [2606:4700:8d74:45d1:fad2:8a58:90b3:e7c5] | 80, 443, 8080 | 3 |
| [2606:4700:8d74:45d1:fad2:8a58:90b3:e7c5] | 80, 443, 8080 | 3 |
| [2606:4700:8396:841:4e01:366c:f66e:c77b] | 80, 443, 8080 | 4 |
| [2606:4700:8396:841:4e01:366c:f66e:c77b] | 80, 443, 8080 | 4 |
| [2606:4700:8396:841:4e01:366c:f66e:c77b] | 80, 443, 8080 | 4 |
| [2606:4700:4408:9b6a:8654:9e3d:ebd1:39ae] | 80, 443, 8080 | 13 |
| [2606:4700:4408:9b6a:8654:9e3d:ebd1:39ae] | 80, 443, 8080 | 13 |
| [2606:4700:4408:9b6a:8654:9e3d:ebd1:39ae] | 80, 443, 8080 | 13 |
| [2606:4700:83b0:7186:43c1:86f3:7bc7:66a2] | 80, 443, 8080 | 156 |
| [2606:4700:83b0:7186:43c1:86f3:7bc7:66a2] | 80, 443, 8080 | 156 |
| [2606:4700:83b0:7186:43c1:86f3:7bc7:66a2] | 80, 443, 8080 | 156 |
| [2606:4700:83b0:a031:9b2f:c6eb:e49c:fb58] | 80, 443, 8080 | 166 |
| [2606:4700:83b0:a031:9b2f:c6eb:e49c:fb58] | 80, 443, 8080 | 166 |
| [2606:4700:83b0:a031:9b2f:c6eb:e49c:fb58] | 80, 443, 8080 | 166 |

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
