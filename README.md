# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-26 00:10:51 +0330

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
| 198.41.208.197 | 80, 443, 8080 | 52 |
| 190.93.245.40 | 80, 443, 8080 | 56 |
| 172.67.110.237 | 80, 443, 8080 | 56 |
| 162.159.46.194 | 80, 443, 8080 | 56 |
| 104.19.167.17 | 80, 443, 8080 | 128 |
| 104.19.222.205 | 80, 443, 8080 | 129 |
| 104.16.156.162 | 80, 443, 8080 | 129 |
| 104.18.242.30 | 80, 443, 8080 | 129 |
| 104.18.71.255 | 80, 443, 8080 | 131 |
| 172.67.227.181 | 80, 443, 8080 | 143 |
| 172.67.153.195 | 80, 443, 8080 | 145 |
| 172.67.176.75 | 80, 443, 8080 | 145 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8de4:f13c:369b:8cf1:471:9c65] | 80, 443, 8080 | 3 |
| [2606:4700:99ef:8d5d:602a:9413:ebf7:681a] | 80, 443, 8080 | 3 |
| [2606:4700:8de4:f13c:369b:8cf1:471:9c65] | 80, 443, 8080 | 3 |
| [2606:4700:99ef:8d5d:602a:9413:ebf7:681a] | 80, 443, 8080 | 3 |
| [2606:4700:8de4:f13c:369b:8cf1:471:9c65] | 80, 443, 8080 | 3 |
| [2606:4700:99ef:8d5d:602a:9413:ebf7:681a] | 80, 443, 8080 | 3 |
| [2606:4700:8de4:2ef8:b5ad:7bf7:b998:6316] | 80, 443, 8080 | 4 |
| [2606:4700:99ef:92c9:2ceb:e241:b8e5:f4bd] | 80, 443, 8080 | 4 |
| [2606:4700:9a9c:d0e6:8cb2:4201:1fc5:a92d] | 80, 443, 8080 | 4 |
| [2606:4700:8de4:2ef8:b5ad:7bf7:b998:6316] | 80, 443, 8080 | 4 |
| [2606:4700:99ef:92c9:2ceb:e241:b8e5:f4bd] | 80, 443, 8080 | 4 |
| [2606:4700:9a9c:d0e6:8cb2:4201:1fc5:a92d] | 80, 443, 8080 | 4 |
| [2606:4700:8de4:2ef8:b5ad:7bf7:b998:6316] | 80, 443, 8080 | 4 |
| [2606:4700:99ef:92c9:2ceb:e241:b8e5:f4bd] | 80, 443, 8080 | 4 |
| [2606:4700:9a9c:d0e6:8cb2:4201:1fc5:a92d] | 80, 443, 8080 | 4 |

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
