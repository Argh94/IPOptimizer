# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-02-28 00:24:35 +0330

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
| 104.17.2.247 | 80, 443, 8080 | 130 |
| 104.19.203.193 | 80, 443, 8080 | 132 |
| 104.18.122.167 | 80, 443, 8080 | 140 |
| 104.18.208.235 | 80, 443, 8080 | 146 |
| 104.17.139.145 | 80, 443, 8080 | 147 |
| 162.159.242.164 | 80, 443, 8080 | 180 |
| 162.159.242.164 | 80, 443, 8080 | 180 |
| 172.67.243.43 | 80, 443, 8080 | 181 |
| 172.67.243.43 | 80, 443, 8080 | 181 |
| 172.67.237.108 | 80, 443, 8080 | 182 |
| 172.67.237.108 | 80, 443, 8080 | 182 |
| 172.64.80.238 | 80, 443, 8080 | 183 |
| 172.64.80.238 | 80, 443, 8080 | 183 |
| 172.67.65.105 | 80, 443, 8080 | 193 |
| 172.67.65.105 | 80, 443, 8080 | 193 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:3037:95f6:c4c6:5969:3f1f:2013] | 80, 443, 8080 | 1 |
| [2606:4700:3027:1aeb:c513:9293:59d9:2b16] | 80, 443, 8080 | 1 |
| [2606:4700:9b02:74bc:a98:1eda:4c12:7256] | 80, 443, 8080 | 1 |
| [2606:4700:9b02:bff6:e48d:b428:9ee9:a267] | 80, 443, 8080 | 1 |
| [2606:4700:9adc:6468:431f:e979:8fb2:cea9] | 80, 443, 8080 | 1 |
| [2606:4700:3037:95f6:c4c6:5969:3f1f:2013] | 80, 443, 8080 | 1 |
| [2606:4700:3027:1aeb:c513:9293:59d9:2b16] | 80, 443, 8080 | 1 |
| [2606:4700:9b02:74bc:a98:1eda:4c12:7256] | 80, 443, 8080 | 1 |
| [2606:4700:9b02:bff6:e48d:b428:9ee9:a267] | 80, 443, 8080 | 1 |
| [2606:4700:9adc:6468:431f:e979:8fb2:cea9] | 80, 443, 8080 | 1 |
| [2606:4700:3037:95f6:c4c6:5969:3f1f:2013] | 80, 443, 8080 | 1 |
| [2606:4700:3027:1aeb:c513:9293:59d9:2b16] | 80, 443, 8080 | 1 |
| [2606:4700:9b02:74bc:a98:1eda:4c12:7256] | 80, 443, 8080 | 1 |
| [2606:4700:9b02:bff6:e48d:b428:9ee9:a267] | 80, 443, 8080 | 1 |
| [2606:4700:9adc:6468:431f:e979:8fb2:cea9] | 80, 443, 8080 | 1 |

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
