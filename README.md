# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-11-06 00:14:48 +0330

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
| 104.17.102.43 | 80, 443, 8080 | 38 |
| 104.18.87.140 | 80, 443, 8080 | 42 |
| 198.41.209.186 | 80, 443, 8080 | 51 |
| 198.41.208.133 | 80, 443, 8080 | 52 |
| 104.17.104.229 | 80, 443, 8080 | 53 |
| 198.41.215.116 | 80, 443, 8080 | 55 |
| 172.67.117.201 | 80, 443, 8080 | 56 |
| 141.101.113.10 | 80, 443, 8080 | 56 |
| 162.159.36.40 | 80, 443, 8080 | 78 |
| 162.159.36.32 | 80, 443, 8080 | 85 |
| 162.159.46.181 | 80, 443, 8080 | 89 |
| 104.19.75.249 | 80, 443, 8080 | 128 |
| 104.18.81.251 | 80, 443, 8080 | 128 |
| 172.67.163.116 | 80, 443, 8080 | 142 |
| 172.67.211.252 | 80, 443, 8080 | 143 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9a99:9ccd:8161:3196:b6ea:fb56] | 80, 443, 8080 | 3 |
| [2606:4700:9b0b:4919:bc15:1453:284c:c903] | 80, 443, 8080 | 3 |
| [2606:4700:9a99:f8c5:b331:79e5:9947:5f01] | 80, 443, 8080 | 3 |
| [2606:4700:8ded:9692:3b0b:42f8:b8fb:18dc] | 80, 443, 8080 | 3 |
| [2606:4700:440c:2778:6bcd:34e6:f8eb:5dc9] | 80, 443, 8080 | 3 |
| [2606:4700:9a99:9ccd:8161:3196:b6ea:fb56] | 80, 443, 8080 | 3 |
| [2606:4700:9b0b:4919:bc15:1453:284c:c903] | 80, 443, 8080 | 3 |
| [2606:4700:9a99:f8c5:b331:79e5:9947:5f01] | 80, 443, 8080 | 3 |
| [2606:4700:8ded:9692:3b0b:42f8:b8fb:18dc] | 80, 443, 8080 | 3 |
| [2606:4700:440c:2778:6bcd:34e6:f8eb:5dc9] | 80, 443, 8080 | 3 |
| [2606:4700:9a99:9ccd:8161:3196:b6ea:fb56] | 80, 443, 8080 | 3 |
| [2606:4700:9b0b:4919:bc15:1453:284c:c903] | 80, 443, 8080 | 3 |
| [2606:4700:9a99:f8c5:b331:79e5:9947:5f01] | 80, 443, 8080 | 3 |
| [2606:4700:8ded:9692:3b0b:42f8:b8fb:18dc] | 80, 443, 8080 | 3 |
| [2606:4700:440c:2778:6bcd:34e6:f8eb:5dc9] | 80, 443, 8080 | 3 |

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
