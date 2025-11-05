# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-11-05 10:20:48 +0330

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
| 104.17.57.102 | 80, 443, 8080 | 39 |
| 198.41.209.252 | 80, 443, 8080 | 52 |
| 198.41.209.120 | 80, 443, 8080 | 52 |
| 198.41.208.63 | 80, 443, 8080 | 52 |
| 172.64.85.19 | 80, 443, 8080 | 54 |
| 162.159.247.57 | 80, 443, 8080 | 57 |
| 198.41.211.199 | 80, 443, 8080 | 69 |
| 198.41.222.52 | 80, 443, 8080 | 71 |
| 198.41.223.34 | 80, 443, 8080 | 73 |
| 104.18.173.95 | 80, 443, 8080 | 130 |
| 104.17.174.46 | 80, 443, 8080 | 132 |
| 172.67.210.247 | 80, 443, 8080 | 142 |
| 172.67.136.113 | 80, 443, 8080 | 142 |
| 172.67.171.187 | 80, 443, 8080 | 142 |
| 172.67.192.136 | 80, 443, 8080 | 143 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:20:4810:abee:7ab:2594:c73c] | 80, 443, 8080 | 3 |
| [2606:4700:c:e29c:138b:82dc:77ac:92d7] | 80, 443, 8080 | 3 |
| [2606:4700:3035:93c5:2be3:214b:22fd:1e17] | 80, 443, 8080 | 3 |
| [2606:4700:99e4:9806:241a:f509:d782:9bee] | 80, 443, 8080 | 3 |
| [2606:4700:20:72cf:211c:34ec:1290:db41] | 80, 443, 8080 | 3 |
| [2606:4700:20:4810:abee:7ab:2594:c73c] | 80, 443, 8080 | 3 |
| [2606:4700:c:e29c:138b:82dc:77ac:92d7] | 80, 443, 8080 | 3 |
| [2606:4700:3035:93c5:2be3:214b:22fd:1e17] | 80, 443, 8080 | 3 |
| [2606:4700:99e4:9806:241a:f509:d782:9bee] | 80, 443, 8080 | 3 |
| [2606:4700:20:72cf:211c:34ec:1290:db41] | 80, 443, 8080 | 3 |
| [2606:4700:20:4810:abee:7ab:2594:c73c] | 80, 443, 8080 | 3 |
| [2606:4700:c:e29c:138b:82dc:77ac:92d7] | 80, 443, 8080 | 3 |
| [2606:4700:3035:93c5:2be3:214b:22fd:1e17] | 80, 443, 8080 | 3 |
| [2606:4700:99e4:9806:241a:f509:d782:9bee] | 80, 443, 8080 | 3 |
| [2606:4700:20:72cf:211c:34ec:1290:db41] | 80, 443, 8080 | 3 |

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
