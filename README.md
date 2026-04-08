# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-04-08 11:28:20 +0330

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
| 198.41.211.184 | 80, 443, 8080 | 76 |
| 198.41.211.184 | 80, 443, 8080 | 76 |
| 198.41.211.184 | 80, 443, 8080 | 76 |
| 104.17.186.85 | 80, 443, 8080 | 141 |
| 104.17.186.85 | 80, 443, 8080 | 141 |
| 104.17.186.85 | 80, 443, 8080 | 141 |
| 104.18.120.28 | 80, 443, 8080 | 150 |
| 104.18.120.28 | 80, 443, 8080 | 150 |
| 104.18.120.28 | 80, 443, 8080 | 150 |
| 104.17.108.29 | 80, 443, 8080 | 152 |
| 104.17.108.29 | 80, 443, 8080 | 152 |
| 104.17.108.29 | 80, 443, 8080 | 152 |
| 104.18.114.253 | 80, 443, 8080 | 154 |
| 104.18.114.253 | 80, 443, 8080 | 154 |
| 104.18.114.253 | 80, 443, 8080 | 154 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:99eb:2a05:8302:eb51:c8b4:4d76] | 80, 443, 8080 | 1 |
| [2606:4700:8dd1:5d89:d791:c1fc:f0ae:1d82] | 80, 443, 8080 | 1 |
| [2606:4700:99eb:6318:1f6f:d685:459a:344e] | 80, 443, 8080 | 1 |
| [2606:4700:2a:debd:d66f:41df:6853:c932] | 80, 443, 8080 | 1 |
| [2606:4700:99eb:2a05:8302:eb51:c8b4:4d76] | 80, 443, 8080 | 1 |
| [2606:4700:8dd1:5d89:d791:c1fc:f0ae:1d82] | 80, 443, 8080 | 1 |
| [2606:4700:99eb:6318:1f6f:d685:459a:344e] | 80, 443, 8080 | 1 |
| [2606:4700:2a:debd:d66f:41df:6853:c932] | 80, 443, 8080 | 1 |
| [2606:4700:99eb:2a05:8302:eb51:c8b4:4d76] | 80, 443, 8080 | 1 |
| [2606:4700:8dd1:5d89:d791:c1fc:f0ae:1d82] | 80, 443, 8080 | 1 |
| [2606:4700:99eb:6318:1f6f:d685:459a:344e] | 80, 443, 8080 | 1 |
| [2606:4700:2a:debd:d66f:41df:6853:c932] | 80, 443, 8080 | 1 |
| [2606:4700:83b3:b0c4:b5d2:6826:7e59:ffee] | 80, 443, 8080 | 244 |
| [2606:4700:83b3:b0c4:b5d2:6826:7e59:ffee] | 80, 443, 8080 | 244 |
| [2606:4700:83b3:b0c4:b5d2:6826:7e59:ffee] | 80, 443, 8080 | 244 |

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
