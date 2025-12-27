# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-27 10:22:43 +0330

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
| 198.41.209.137 | 80, 443, 8080 | 50 |
| 198.41.208.120 | 80, 443, 8080 | 50 |
| 198.41.209.105 | 80, 443, 8080 | 50 |
| 198.41.209.137 | 80, 443, 8080 | 50 |
| 198.41.208.120 | 80, 443, 8080 | 50 |
| 198.41.209.105 | 80, 443, 8080 | 50 |
| 198.41.209.41 | 80, 443, 8080 | 51 |
| 198.41.209.41 | 80, 443, 8080 | 51 |
| 190.93.246.121 | 80, 443, 8080 | 52 |
| 190.93.246.121 | 80, 443, 8080 | 52 |
| 104.16.136.32 | 80, 443, 8080 | 132 |
| 104.16.20.71 | 80, 443, 8080 | 133 |
| 104.19.222.240 | 80, 443, 8080 | 133 |
| 104.18.94.135 | 80, 443, 8080 | 133 |
| 104.18.229.187 | 80, 443, 8080 | 134 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9ae4:5485:e8bc:161e:d51:81a] | 80, 443, 8080 | 8 |
| [2606:4700:91be:49fd:3759:9ed7:a130:94d2] | 80, 443, 8080 | 8 |
| [2606:4700:9ae4:c7b0:3312:1695:d15c:1ec4] | 80, 443, 8080 | 8 |
| [2606:4700:9ae4:5485:e8bc:161e:d51:81a] | 80, 443, 8080 | 8 |
| [2606:4700:91be:49fd:3759:9ed7:a130:94d2] | 80, 443, 8080 | 8 |
| [2606:4700:9ae4:c7b0:3312:1695:d15c:1ec4] | 80, 443, 8080 | 8 |
| [2606:4700:9ae4:5485:e8bc:161e:d51:81a] | 80, 443, 8080 | 8 |
| [2606:4700:91be:49fd:3759:9ed7:a130:94d2] | 80, 443, 8080 | 8 |
| [2606:4700:9ae4:c7b0:3312:1695:d15c:1ec4] | 80, 443, 8080 | 8 |
| [2606:4700:91be:1794:59bf:98f2:7b75:7444] | 80, 443, 8080 | 9 |
| [2606:4700:9b06:6ef5:ea2f:1054:7b92:19e0] | 80, 443, 8080 | 9 |
| [2606:4700:91be:1794:59bf:98f2:7b75:7444] | 80, 443, 8080 | 9 |
| [2606:4700:9b06:6ef5:ea2f:1054:7b92:19e0] | 80, 443, 8080 | 9 |
| [2606:4700:91be:1794:59bf:98f2:7b75:7444] | 80, 443, 8080 | 9 |
| [2606:4700:9b06:6ef5:ea2f:1054:7b92:19e0] | 80, 443, 8080 | 9 |

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
