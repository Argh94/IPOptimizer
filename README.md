# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-01-30 10:43:04 +0330

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
| 198.41.209.252 | 80, 443, 8080 | 50 |
| 198.41.209.186 | 80, 443, 8080 | 50 |
| 198.41.209.214 | 80, 443, 8080 | 50 |
| 198.41.209.165 | 80, 443, 8080 | 50 |
| 198.41.209.252 | 80, 443, 8080 | 50 |
| 198.41.209.186 | 80, 443, 8080 | 50 |
| 198.41.209.214 | 80, 443, 8080 | 50 |
| 198.41.209.165 | 80, 443, 8080 | 50 |
| 198.41.208.59 | 80, 443, 8080 | 51 |
| 198.41.208.59 | 80, 443, 8080 | 51 |
| 104.16.146.192 | 80, 443, 8080 | 132 |
| 104.17.251.21 | 80, 443, 8080 | 133 |
| 104.16.10.137 | 80, 443, 8080 | 140 |
| 104.18.137.136 | 80, 443, 8080 | 143 |
| 104.19.117.180 | 80, 443, 8080 | 145 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9ad7:1b28:5102:b7e1:7a43:5976] | 80, 443, 8080 | 3 |
| [2606:4700:8dd1:f831:b705:91f8:9d1e:3d2e] | 80, 443, 8080 | 3 |
| [2606:4700:9ad7:18f1:ca83:d7db:65a9:b824] | 80, 443, 8080 | 3 |
| [2606:4700:90c6:d95b:4002:8bbf:723:2bab] | 80, 443, 8080 | 3 |
| [2606:4700:90c6:f25a:7a00:d381:967e:891e] | 80, 443, 8080 | 3 |
| [2606:4700:9ad7:1b28:5102:b7e1:7a43:5976] | 80, 443, 8080 | 3 |
| [2606:4700:8dd1:f831:b705:91f8:9d1e:3d2e] | 80, 443, 8080 | 3 |
| [2606:4700:9ad7:18f1:ca83:d7db:65a9:b824] | 80, 443, 8080 | 3 |
| [2606:4700:90c6:d95b:4002:8bbf:723:2bab] | 80, 443, 8080 | 3 |
| [2606:4700:90c6:f25a:7a00:d381:967e:891e] | 80, 443, 8080 | 3 |
| [2606:4700:9ad7:1b28:5102:b7e1:7a43:5976] | 80, 443, 8080 | 3 |
| [2606:4700:8dd1:f831:b705:91f8:9d1e:3d2e] | 80, 443, 8080 | 3 |
| [2606:4700:9ad7:18f1:ca83:d7db:65a9:b824] | 80, 443, 8080 | 3 |
| [2606:4700:90c6:d95b:4002:8bbf:723:2bab] | 80, 443, 8080 | 3 |
| [2606:4700:90c6:f25a:7a00:d381:967e:891e] | 80, 443, 8080 | 3 |

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
