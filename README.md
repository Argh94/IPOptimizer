# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-04-08 00:53:36 +0330

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
| 104.18.14.244 | 80, 443, 8080 | 130 |
| 104.17.114.208 | 80, 443, 8080 | 130 |
| 104.19.151.145 | 80, 443, 8080 | 130 |
| 104.18.14.244 | 80, 443, 8080 | 130 |
| 104.17.114.208 | 80, 443, 8080 | 130 |
| 104.19.151.145 | 80, 443, 8080 | 130 |
| 104.18.14.244 | 80, 443, 8080 | 130 |
| 104.17.114.208 | 80, 443, 8080 | 130 |
| 104.19.151.145 | 80, 443, 8080 | 130 |
| 104.17.133.82 | 80, 443, 8080 | 131 |
| 104.17.133.82 | 80, 443, 8080 | 131 |
| 104.17.133.82 | 80, 443, 8080 | 131 |
| 104.17.17.43 | 80, 443, 8080 | 132 |
| 104.17.17.43 | 80, 443, 8080 | 132 |
| 104.17.17.43 | 80, 443, 8080 | 132 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8ddf:b199:89f0:d79f:977f:a7ea] | 80, 443, 8080 | 3 |
| [2606:4700:8cab:8d64:ce17:ad03:3357:29f0] | 80, 443, 8080 | 3 |
| [2606:4700:8ddf:fd2e:1796:a5b9:76e5:31b6] | 80, 443, 8080 | 3 |
| [2606:4700:91b7:271f:9d73:e468:c858:4671] | 80, 443, 8080 | 3 |
| [2606:4700:440c:da91:b73f:6bd5:a45c:b7a1] | 80, 443, 8080 | 3 |
| [2606:4700:8ddf:b199:89f0:d79f:977f:a7ea] | 80, 443, 8080 | 3 |
| [2606:4700:8cab:8d64:ce17:ad03:3357:29f0] | 80, 443, 8080 | 3 |
| [2606:4700:8ddf:fd2e:1796:a5b9:76e5:31b6] | 80, 443, 8080 | 3 |
| [2606:4700:91b7:271f:9d73:e468:c858:4671] | 80, 443, 8080 | 3 |
| [2606:4700:440c:da91:b73f:6bd5:a45c:b7a1] | 80, 443, 8080 | 3 |
| [2606:4700:8ddf:b199:89f0:d79f:977f:a7ea] | 80, 443, 8080 | 3 |
| [2606:4700:8cab:8d64:ce17:ad03:3357:29f0] | 80, 443, 8080 | 3 |
| [2606:4700:8ddf:fd2e:1796:a5b9:76e5:31b6] | 80, 443, 8080 | 3 |
| [2606:4700:91b7:271f:9d73:e468:c858:4671] | 80, 443, 8080 | 3 |
| [2606:4700:440c:da91:b73f:6bd5:a45c:b7a1] | 80, 443, 8080 | 3 |

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
