# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-17 11:05:09 +0330

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
| 198.41.208.147 | 80, 443, 8080 | 85 |
| 198.41.208.147 | 80, 443, 8080 | 85 |
| 104.19.210.236 | 80, 443, 8080 | 133 |
| 104.17.51.222 | 80, 443, 8080 | 133 |
| 104.19.189.105 | 80, 443, 8080 | 141 |
| 104.19.6.222 | 80, 443, 8080 | 141 |
| 104.16.87.47 | 80, 443, 8080 | 144 |
| 198.41.209.51 | 80, 443, 8080 | 148 |
| 198.41.209.51 | 80, 443, 8080 | 148 |
| 162.159.232.203 | 80, 443, 8080 | 181 |
| 162.159.232.203 | 80, 443, 8080 | 181 |
| 172.67.113.234 | 80, 443, 8080 | 182 |
| 172.67.113.234 | 80, 443, 8080 | 182 |
| 198.41.208.2 | 80, 443, 8080 | 189 |
| 198.41.208.2 | 80, 443, 8080 | 189 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9762:b374:6126:a94a:b37f:d55e] | 80, 443, 8080 | 1 |
| [2606:4700:3026:f572:2881:8986:d9bc:f336] | 80, 443, 8080 | 1 |
| [2606:4700:440d:e3f6:fe5:ccea:b418:be66] | 80, 443, 8080 | 1 |
| [2606:4700:3026:6a89:3b43:8cea:b852:2eb4] | 80, 443, 8080 | 1 |
| [2606:4700:9762:b374:6126:a94a:b37f:d55e] | 80, 443, 8080 | 1 |
| [2606:4700:3026:f572:2881:8986:d9bc:f336] | 80, 443, 8080 | 1 |
| [2606:4700:440d:e3f6:fe5:ccea:b418:be66] | 80, 443, 8080 | 1 |
| [2606:4700:3026:6a89:3b43:8cea:b852:2eb4] | 80, 443, 8080 | 1 |
| [2606:4700:9762:b374:6126:a94a:b37f:d55e] | 80, 443, 8080 | 1 |
| [2606:4700:3026:f572:2881:8986:d9bc:f336] | 80, 443, 8080 | 1 |
| [2606:4700:440d:e3f6:fe5:ccea:b418:be66] | 80, 443, 8080 | 1 |
| [2606:4700:3026:6a89:3b43:8cea:b852:2eb4] | 80, 443, 8080 | 1 |
| [2606:4700:3004:3b73:39bf:d594:82e0:c694] | 80, 443, 8080 | 2 |
| [2606:4700:3004:3b73:39bf:d594:82e0:c694] | 80, 443, 8080 | 2 |
| [2606:4700:3004:3b73:39bf:d594:82e0:c694] | 80, 443, 8080 | 2 |

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
