# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-10 10:43:12 +0330

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
| 198.41.209.110 | 80, 443, 8080 | 51 |
| 198.41.208.22 | 80, 443, 8080 | 51 |
| 198.41.209.110 | 80, 443, 8080 | 51 |
| 198.41.208.22 | 80, 443, 8080 | 51 |
| 198.41.208.63 | 80, 443, 8080 | 52 |
| 198.41.209.214 | 80, 443, 8080 | 52 |
| 198.41.208.59 | 80, 443, 8080 | 52 |
| 198.41.208.63 | 80, 443, 8080 | 52 |
| 198.41.209.214 | 80, 443, 8080 | 52 |
| 198.41.208.59 | 80, 443, 8080 | 52 |
| 198.41.211.47 | 80, 443, 8080 | 76 |
| 162.159.36.239 | 80, 443, 8080 | 79 |
| 104.17.33.182 | 80, 443, 8080 | 133 |
| 104.17.84.152 | 80, 443, 8080 | 133 |
| 104.16.88.148 | 80, 443, 8080 | 133 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:3015:8317:64d:3333:c570:8da6] | 80, 443, 8080 | 1 |
| [2606:4700:964d:5a77:7275:5487:ee45:b367] | 80, 443, 8080 | 1 |
| [2606:4700:9a61:75e4:e145:d939:2d52:1f4] | 80, 443, 8080 | 1 |
| [2606:4700:3015:8317:64d:3333:c570:8da6] | 80, 443, 8080 | 1 |
| [2606:4700:964d:5a77:7275:5487:ee45:b367] | 80, 443, 8080 | 1 |
| [2606:4700:9a61:75e4:e145:d939:2d52:1f4] | 80, 443, 8080 | 1 |
| [2606:4700:3015:8317:64d:3333:c570:8da6] | 80, 443, 8080 | 1 |
| [2606:4700:964d:5a77:7275:5487:ee45:b367] | 80, 443, 8080 | 1 |
| [2606:4700:9a61:75e4:e145:d939:2d52:1f4] | 80, 443, 8080 | 1 |
| [2606:4700:9647:dcb7:bcf3:5b81:a028:9f9d] | 80, 443, 8080 | 3 |
| [2606:4700:9647:dcb7:bcf3:5b81:a028:9f9d] | 80, 443, 8080 | 3 |
| [2606:4700:9647:dcb7:bcf3:5b81:a028:9f9d] | 80, 443, 8080 | 3 |
| [2606:4700:8d79:9a43:86d3:f6cf:7ea0:a8d5] | 80, 443, 8080 | 7 |
| [2606:4700:8d79:9a43:86d3:f6cf:7ea0:a8d5] | 80, 443, 8080 | 7 |
| [2606:4700:8d79:9a43:86d3:f6cf:7ea0:a8d5] | 80, 443, 8080 | 7 |

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
