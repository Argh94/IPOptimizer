# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-20 20:47:32 +0330

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
| 198.41.208.202 | 80, 443, 8080 | 51 |
| 198.41.209.149 | 80, 443, 8080 | 52 |
| 198.41.209.100 | 80, 443, 8080 | 52 |
| 198.41.209.243 | 80, 443, 8080 | 54 |
| 162.159.253.53 | 80, 443, 8080 | 56 |
| 162.159.153.250 | 80, 443, 8080 | 57 |
| 104.17.51.251 | 80, 443, 8080 | 128 |
| 104.16.148.132 | 80, 443, 8080 | 132 |
| 104.19.103.119 | 80, 443, 8080 | 133 |
| 104.16.12.12 | 80, 443, 8080 | 138 |
| 172.67.167.124 | 80, 443, 8080 | 146 |
| 172.67.186.88 | 80, 443, 8080 | 146 |
| 104.17.75.214 | 80, 443, 8080 | 150 |
| 172.67.155.153 | 80, 443, 8080 | 162 |
| 172.67.153.88 | 80, 443, 8080 | 163 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:90cb:d82a:18b0:538f:7fb:c3f0] | 80, 443, 8080 | 3 |
| [2606:4700:8dd7:ff95:36ad:b9d6:ba73:d4e6] | 80, 443, 8080 | 3 |
| [2606:4700:90cb:d82a:18b0:538f:7fb:c3f0] | 80, 443, 8080 | 3 |
| [2606:4700:8dd7:ff95:36ad:b9d6:ba73:d4e6] | 80, 443, 8080 | 3 |
| [2606:4700:90cb:d82a:18b0:538f:7fb:c3f0] | 80, 443, 8080 | 3 |
| [2606:4700:8dd7:ff95:36ad:b9d6:ba73:d4e6] | 80, 443, 8080 | 3 |
| [2606:4700:8d9a:d275:cd87:b461:d302:a223] | 80, 443, 8080 | 4 |
| [2606:4700:90d6:f9f5:1f96:efb4:d9ca:41e] | 80, 443, 8080 | 4 |
| [2606:4700:90cb:3bb9:12aa:157:128c:58a0] | 80, 443, 8080 | 4 |
| [2606:4700:8d9a:d275:cd87:b461:d302:a223] | 80, 443, 8080 | 4 |
| [2606:4700:90d6:f9f5:1f96:efb4:d9ca:41e] | 80, 443, 8080 | 4 |
| [2606:4700:90cb:3bb9:12aa:157:128c:58a0] | 80, 443, 8080 | 4 |
| [2606:4700:8d9a:d275:cd87:b461:d302:a223] | 80, 443, 8080 | 4 |
| [2606:4700:90d6:f9f5:1f96:efb4:d9ca:41e] | 80, 443, 8080 | 4 |
| [2606:4700:90cb:3bb9:12aa:157:128c:58a0] | 80, 443, 8080 | 4 |

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
