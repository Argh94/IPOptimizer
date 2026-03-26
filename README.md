# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-26 11:11:52 +0330

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
| 104.19.49.83 | 80, 443, 8080 | 134 |
| 104.17.49.235 | 80, 443, 8080 | 134 |
| 104.17.213.230 | 80, 443, 8080 | 134 |
| 104.19.49.83 | 80, 443, 8080 | 134 |
| 104.17.49.235 | 80, 443, 8080 | 134 |
| 104.17.213.230 | 80, 443, 8080 | 134 |
| 104.19.49.83 | 80, 443, 8080 | 134 |
| 104.17.49.235 | 80, 443, 8080 | 134 |
| 104.17.213.230 | 80, 443, 8080 | 134 |
| 104.18.2.147 | 80, 443, 8080 | 135 |
| 104.18.2.147 | 80, 443, 8080 | 135 |
| 104.18.2.147 | 80, 443, 8080 | 135 |
| 104.18.254.185 | 80, 443, 8080 | 142 |
| 104.18.254.185 | 80, 443, 8080 | 142 |
| 104.18.254.185 | 80, 443, 8080 | 142 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:4403:8e1f:a8b7:a4df:1da3:c3bd] | 80, 443, 8080 | 3 |
| [2606:4700:4403:1fc5:2e57:7a22:dcc3:6f5e] | 80, 443, 8080 | 3 |
| [2606:4700:4403:8e1f:a8b7:a4df:1da3:c3bd] | 80, 443, 8080 | 3 |
| [2606:4700:4403:1fc5:2e57:7a22:dcc3:6f5e] | 80, 443, 8080 | 3 |
| [2606:4700:4403:8e1f:a8b7:a4df:1da3:c3bd] | 80, 443, 8080 | 3 |
| [2606:4700:4403:1fc5:2e57:7a22:dcc3:6f5e] | 80, 443, 8080 | 3 |
| [2606:4700:1f:a720:5a51:fdc7:c479:14a9] | 80, 443, 8080 | 13 |
| [2606:4700:440d:9283:d472:ad7d:c26d:1754] | 80, 443, 8080 | 13 |
| [2606:4700:440d:f9a:fef3:10f5:8352:cf3] | 80, 443, 8080 | 13 |
| [2606:4700:1f:a720:5a51:fdc7:c479:14a9] | 80, 443, 8080 | 13 |
| [2606:4700:440d:9283:d472:ad7d:c26d:1754] | 80, 443, 8080 | 13 |
| [2606:4700:440d:f9a:fef3:10f5:8352:cf3] | 80, 443, 8080 | 13 |
| [2606:4700:1f:a720:5a51:fdc7:c479:14a9] | 80, 443, 8080 | 13 |
| [2606:4700:440d:9283:d472:ad7d:c26d:1754] | 80, 443, 8080 | 13 |
| [2606:4700:440d:f9a:fef3:10f5:8352:cf3] | 80, 443, 8080 | 13 |

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
