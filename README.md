# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-14 00:11:32 +0330

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
| 198.41.209.202 | 80, 443, 8080 | 50 |
| 172.64.88.85 | 80, 443, 8080 | 51 |
| 198.41.208.9 | 80, 443, 8080 | 53 |
| 198.41.209.180 | 80, 443, 8080 | 55 |
| 162.159.244.53 | 80, 443, 8080 | 55 |
| 198.41.208.231 | 80, 443, 8080 | 120 |
| 104.19.10.166 | 80, 443, 8080 | 127 |
| 104.17.198.92 | 80, 443, 8080 | 129 |
| 104.19.194.247 | 80, 443, 8080 | 131 |
| 104.16.0.10 | 80, 443, 8080 | 132 |
| 172.67.128.188 | 80, 443, 8080 | 142 |
| 172.67.197.160 | 80, 443, 8080 | 144 |
| 172.67.229.161 | 80, 443, 8080 | 144 |
| 172.67.164.192 | 80, 443, 8080 | 145 |
| 172.67.241.146 | 80, 443, 8080 | 164 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8391:3fd5:8b9f:7353:fe7d:5d49] | 80, 443, 8080 | 3 |
| [2606:4700:440e:9868:5a35:50ca:8e25:2d07] | 80, 443, 8080 | 3 |
| [2606:4700:8391:3fd5:8b9f:7353:fe7d:5d49] | 80, 443, 8080 | 3 |
| [2606:4700:440e:9868:5a35:50ca:8e25:2d07] | 80, 443, 8080 | 3 |
| [2606:4700:8391:3fd5:8b9f:7353:fe7d:5d49] | 80, 443, 8080 | 3 |
| [2606:4700:440e:9868:5a35:50ca:8e25:2d07] | 80, 443, 8080 | 3 |
| [2606:4700:5:36aa:4ab0:136e:8921:8b50] | 80, 443, 8080 | 4 |
| [2606:4700:5:36aa:4ab0:136e:8921:8b50] | 80, 443, 8080 | 4 |
| [2606:4700:5:36aa:4ab0:136e:8921:8b50] | 80, 443, 8080 | 4 |
| [2606:4700:440e:e707:41c3:600c:bcc3:b13f] | 80, 443, 8080 | 13 |
| [2606:4700:138:789f:65f7:8db7:2b31:9f3d] | 80, 443, 8080 | 13 |
| [2606:4700:440e:e707:41c3:600c:bcc3:b13f] | 80, 443, 8080 | 13 |
| [2606:4700:138:789f:65f7:8db7:2b31:9f3d] | 80, 443, 8080 | 13 |
| [2606:4700:440e:e707:41c3:600c:bcc3:b13f] | 80, 443, 8080 | 13 |
| [2606:4700:138:789f:65f7:8db7:2b31:9f3d] | 80, 443, 8080 | 13 |

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
