# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-04-02 11:16:44 +0330

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
| 198.41.208.47 | 80, 443, 8080 | 52 |
| 198.41.208.47 | 80, 443, 8080 | 52 |
| 198.41.208.104 | 80, 443, 8080 | 53 |
| 198.41.208.104 | 80, 443, 8080 | 53 |
| 198.41.208.250 | 80, 443, 8080 | 55 |
| 198.41.208.250 | 80, 443, 8080 | 55 |
| 198.41.208.234 | 80, 443, 8080 | 60 |
| 198.41.208.234 | 80, 443, 8080 | 60 |
| 162.159.46.150 | 80, 443, 8080 | 71 |
| 198.41.209.113 | 80, 443, 8080 | 91 |
| 198.41.209.113 | 80, 443, 8080 | 91 |
| 104.19.49.203 | 80, 443, 8080 | 133 |
| 104.19.22.169 | 80, 443, 8080 | 134 |
| 104.21.224.30 | 80, 443, 8080 | 142 |
| 104.17.63.186 | 80, 443, 8080 | 143 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:90cc:7d00:a0a1:f8a7:5372:e6a1] | 80, 443, 8080 | 3 |
| [2606:4700:8d7b:8f66:3b52:e323:3e10:632c] | 80, 443, 8080 | 3 |
| [2606:4700:90cc:3d8c:a251:e6b1:187b:717b] | 80, 443, 8080 | 3 |
| [2606:4700:90cc:7d00:a0a1:f8a7:5372:e6a1] | 80, 443, 8080 | 3 |
| [2606:4700:8d7b:8f66:3b52:e323:3e10:632c] | 80, 443, 8080 | 3 |
| [2606:4700:90cc:3d8c:a251:e6b1:187b:717b] | 80, 443, 8080 | 3 |
| [2606:4700:90cc:7d00:a0a1:f8a7:5372:e6a1] | 80, 443, 8080 | 3 |
| [2606:4700:8d7b:8f66:3b52:e323:3e10:632c] | 80, 443, 8080 | 3 |
| [2606:4700:90cc:3d8c:a251:e6b1:187b:717b] | 80, 443, 8080 | 3 |
| [2606:4700:8d7b:a9b7:5c6a:df28:e810:ffaf] | 80, 443, 8080 | 4 |
| [2606:4700:8d99:462c:c639:f281:d7d:2d12] | 80, 443, 8080 | 4 |
| [2606:4700:8d7b:a9b7:5c6a:df28:e810:ffaf] | 80, 443, 8080 | 4 |
| [2606:4700:8d99:462c:c639:f281:d7d:2d12] | 80, 443, 8080 | 4 |
| [2606:4700:8d7b:a9b7:5c6a:df28:e810:ffaf] | 80, 443, 8080 | 4 |
| [2606:4700:8d99:462c:c639:f281:d7d:2d12] | 80, 443, 8080 | 4 |

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
