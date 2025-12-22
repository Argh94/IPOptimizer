# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-23 00:15:35 +0330

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
| 198.41.208.133 | 80, 443, 8080 | 51 |
| 198.41.208.133 | 80, 443, 8080 | 51 |
| 198.41.209.170 | 80, 443, 8080 | 52 |
| 198.41.208.217 | 80, 443, 8080 | 52 |
| 198.41.209.157 | 80, 443, 8080 | 52 |
| 198.41.209.110 | 80, 443, 8080 | 52 |
| 198.41.209.170 | 80, 443, 8080 | 52 |
| 198.41.208.217 | 80, 443, 8080 | 52 |
| 198.41.209.157 | 80, 443, 8080 | 52 |
| 198.41.209.110 | 80, 443, 8080 | 52 |
| 104.19.206.236 | 80, 443, 8080 | 128 |
| 104.19.32.56 | 80, 443, 8080 | 128 |
| 104.19.152.39 | 80, 443, 8080 | 129 |
| 104.17.199.234 | 80, 443, 8080 | 129 |
| 104.16.100.180 | 80, 443, 8080 | 132 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:1e:a3d2:587d:d72b:da8f:880d] | 80, 443, 8080 | 3 |
| [2606:4700:1e:a3d2:587d:d72b:da8f:880d] | 80, 443, 8080 | 3 |
| [2606:4700:1e:a3d2:587d:d72b:da8f:880d] | 80, 443, 8080 | 3 |
| [2606:4700:91b0:2191:270c:2b02:ed49:fcd1] | 80, 443, 8080 | 8 |
| [2606:4700:91b0:1d15:f9c1:1bb0:e663:c5ee] | 80, 443, 8080 | 8 |
| [2606:4700:964c:7062:688b:6e1:5cf4:a37f] | 80, 443, 8080 | 8 |
| [2606:4700:8395:c60:313:70e5:50c4:deaa] | 80, 443, 8080 | 8 |
| [2606:4700:91b0:2191:270c:2b02:ed49:fcd1] | 80, 443, 8080 | 8 |
| [2606:4700:91b0:1d15:f9c1:1bb0:e663:c5ee] | 80, 443, 8080 | 8 |
| [2606:4700:964c:7062:688b:6e1:5cf4:a37f] | 80, 443, 8080 | 8 |
| [2606:4700:8395:c60:313:70e5:50c4:deaa] | 80, 443, 8080 | 8 |
| [2606:4700:91b0:2191:270c:2b02:ed49:fcd1] | 80, 443, 8080 | 8 |
| [2606:4700:91b0:1d15:f9c1:1bb0:e663:c5ee] | 80, 443, 8080 | 8 |
| [2606:4700:964c:7062:688b:6e1:5cf4:a37f] | 80, 443, 8080 | 8 |
| [2606:4700:8395:c60:313:70e5:50c4:deaa] | 80, 443, 8080 | 8 |

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
