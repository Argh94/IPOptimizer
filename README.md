# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-17 10:25:27 +0330

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
| 198.41.209.110 | 80, 443, 8080 | 50 |
| 198.41.209.110 | 80, 443, 8080 | 50 |
| 198.41.209.120 | 80, 443, 8080 | 51 |
| 198.41.209.112 | 80, 443, 8080 | 51 |
| 198.41.208.41 | 80, 443, 8080 | 51 |
| 198.41.209.202 | 80, 443, 8080 | 51 |
| 198.41.209.120 | 80, 443, 8080 | 51 |
| 198.41.209.112 | 80, 443, 8080 | 51 |
| 198.41.208.41 | 80, 443, 8080 | 51 |
| 198.41.209.202 | 80, 443, 8080 | 51 |
| 104.19.126.160 | 80, 443, 8080 | 130 |
| 104.19.149.116 | 80, 443, 8080 | 131 |
| 104.16.194.122 | 80, 443, 8080 | 131 |
| 104.16.192.22 | 80, 443, 8080 | 131 |
| 104.17.3.138 | 80, 443, 8080 | 133 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:17:9e1a:18e9:367a:121f:5940] | 80, 443, 8080 | 3 |
| [2606:4700:90c2:b1b9:61e9:d5e0:1069:d581] | 80, 443, 8080 | 3 |
| [2606:4700:9760:36f0:6ef8:56c0:d7ba:e832] | 80, 443, 8080 | 3 |
| [2606:4700:9a6e:ec48:4722:a73a:a276:8231] | 80, 443, 8080 | 3 |
| [2606:4700:17:9e1a:18e9:367a:121f:5940] | 80, 443, 8080 | 3 |
| [2606:4700:90c2:b1b9:61e9:d5e0:1069:d581] | 80, 443, 8080 | 3 |
| [2606:4700:9760:36f0:6ef8:56c0:d7ba:e832] | 80, 443, 8080 | 3 |
| [2606:4700:9a6e:ec48:4722:a73a:a276:8231] | 80, 443, 8080 | 3 |
| [2606:4700:17:9e1a:18e9:367a:121f:5940] | 80, 443, 8080 | 3 |
| [2606:4700:90c2:b1b9:61e9:d5e0:1069:d581] | 80, 443, 8080 | 3 |
| [2606:4700:9760:36f0:6ef8:56c0:d7ba:e832] | 80, 443, 8080 | 3 |
| [2606:4700:9a6e:ec48:4722:a73a:a276:8231] | 80, 443, 8080 | 3 |
| [2606:4700:90c2:6d92:e539:8501:b457:ddfd] | 80, 443, 8080 | 4 |
| [2606:4700:90c2:6d92:e539:8501:b457:ddfd] | 80, 443, 8080 | 4 |
| [2606:4700:90c2:6d92:e539:8501:b457:ddfd] | 80, 443, 8080 | 4 |

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
