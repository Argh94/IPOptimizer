# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-31 11:20:37 +0330

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
| 198.41.209.39 | 80, 443, 8080 | 99 |
| 104.17.120.215 | 80, 443, 8080 | 133 |
| 104.17.120.215 | 80, 443, 8080 | 133 |
| 104.17.120.215 | 80, 443, 8080 | 133 |
| 104.17.174.222 | 80, 443, 8080 | 141 |
| 104.17.174.222 | 80, 443, 8080 | 141 |
| 104.17.174.222 | 80, 443, 8080 | 141 |
| 104.18.240.238 | 80, 443, 8080 | 147 |
| 104.18.240.238 | 80, 443, 8080 | 147 |
| 104.18.240.238 | 80, 443, 8080 | 147 |
| 104.17.157.169 | 80, 443, 8080 | 148 |
| 104.17.157.169 | 80, 443, 8080 | 148 |
| 104.17.157.169 | 80, 443, 8080 | 148 |
| 162.159.243.75 | 80, 443, 8080 | 149 |
| 162.159.243.75 | 80, 443, 8080 | 149 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:1f:a12d:add6:431a:614a:6d7f] | 80, 443, 8080 | 1 |
| [2606:4700:3025:a021:c69d:dffe:a723:99d0] | 80, 443, 8080 | 1 |
| [2606:4700:9adc:5fb9:60a8:6539:b867:6c09] | 80, 443, 8080 | 1 |
| [2606:4700:16:e6eb:a57b:238:1ebc:a43b] | 80, 443, 8080 | 1 |
| [2606:4700:9adc:c408:b96d:792f:93da:ab95] | 80, 443, 8080 | 1 |
| [2606:4700:1f:a12d:add6:431a:614a:6d7f] | 80, 443, 8080 | 1 |
| [2606:4700:3025:a021:c69d:dffe:a723:99d0] | 80, 443, 8080 | 1 |
| [2606:4700:9adc:5fb9:60a8:6539:b867:6c09] | 80, 443, 8080 | 1 |
| [2606:4700:16:e6eb:a57b:238:1ebc:a43b] | 80, 443, 8080 | 1 |
| [2606:4700:9adc:c408:b96d:792f:93da:ab95] | 80, 443, 8080 | 1 |
| [2606:4700:1f:a12d:add6:431a:614a:6d7f] | 80, 443, 8080 | 1 |
| [2606:4700:3025:a021:c69d:dffe:a723:99d0] | 80, 443, 8080 | 1 |
| [2606:4700:9adc:5fb9:60a8:6539:b867:6c09] | 80, 443, 8080 | 1 |
| [2606:4700:16:e6eb:a57b:238:1ebc:a43b] | 80, 443, 8080 | 1 |
| [2606:4700:9adc:c408:b96d:792f:93da:ab95] | 80, 443, 8080 | 1 |

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
