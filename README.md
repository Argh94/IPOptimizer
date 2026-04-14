# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-04-14 11:40:20 +0330

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
| 198.41.208.112 | 80, 443, 8080 | 53 |
| 198.41.208.112 | 80, 443, 8080 | 53 |
| 198.41.208.143 | 80, 443, 8080 | 56 |
| 198.41.208.53 | 80, 443, 8080 | 56 |
| 198.41.208.143 | 80, 443, 8080 | 56 |
| 198.41.208.53 | 80, 443, 8080 | 56 |
| 104.25.127.123 | 80, 443, 8080 | 155 |
| 104.20.17.97 | 80, 443, 8080 | 156 |
| 162.159.237.191 | 80, 443, 8080 | 156 |
| 104.27.80.98 | 80, 443, 8080 | 160 |
| 104.21.71.79 | 80, 443, 8080 | 164 |
| 141.101.115.169 | 80, 443, 8080 | 182 |
| 172.67.117.197 | 80, 443, 8080 | 182 |
| 141.101.115.169 | 80, 443, 8080 | 182 |
| 172.67.117.197 | 80, 443, 8080 | 182 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9768:c2f0:6e0c:fddd:1325:4dad] | 80, 443, 8080 | 0 |
| [2606:4700:9768:c2f0:6e0c:fddd:1325:4dad] | 80, 443, 8080 | 0 |
| [2606:4700:9768:c2f0:6e0c:fddd:1325:4dad] | 80, 443, 8080 | 0 |
| [2606:4700:9768:6653:51d0:85ef:77a7:a9b5] | 80, 443, 8080 | 1 |
| [2606:4700:8de0:e8f2:3d6c:9790:51e1:9830] | 80, 443, 8080 | 1 |
| [2606:4700:8ca0:5593:b0ba:484:353e:c22e] | 80, 443, 8080 | 1 |
| [2606:4700:8ca0:22f4:c3a1:b14b:c1db:993e] | 80, 443, 8080 | 1 |
| [2606:4700:9768:6653:51d0:85ef:77a7:a9b5] | 80, 443, 8080 | 1 |
| [2606:4700:8de0:e8f2:3d6c:9790:51e1:9830] | 80, 443, 8080 | 1 |
| [2606:4700:8ca0:5593:b0ba:484:353e:c22e] | 80, 443, 8080 | 1 |
| [2606:4700:8ca0:22f4:c3a1:b14b:c1db:993e] | 80, 443, 8080 | 1 |
| [2606:4700:9768:6653:51d0:85ef:77a7:a9b5] | 80, 443, 8080 | 1 |
| [2606:4700:8de0:e8f2:3d6c:9790:51e1:9830] | 80, 443, 8080 | 1 |
| [2606:4700:8ca0:5593:b0ba:484:353e:c22e] | 80, 443, 8080 | 1 |
| [2606:4700:8ca0:22f4:c3a1:b14b:c1db:993e] | 80, 443, 8080 | 1 |

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
