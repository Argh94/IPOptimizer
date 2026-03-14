# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-15 00:24:00 +0330

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
| 198.41.208.7 | 80, 443, 8080 | 53 |
| 141.101.121.25 | 80, 443, 8080 | 53 |
| 198.41.208.7 | 80, 443, 8080 | 53 |
| 141.101.121.25 | 80, 443, 8080 | 53 |
| 198.41.209.224 | 80, 443, 8080 | 54 |
| 141.101.122.116 | 80, 443, 8080 | 54 |
| 198.41.209.224 | 80, 443, 8080 | 54 |
| 141.101.122.116 | 80, 443, 8080 | 54 |
| 198.41.209.124 | 80, 443, 8080 | 56 |
| 198.41.209.124 | 80, 443, 8080 | 56 |
| 162.159.36.30 | 80, 443, 8080 | 64 |
| 162.159.46.189 | 80, 443, 8080 | 86 |
| 104.17.251.38 | 80, 443, 8080 | 130 |
| 141.101.122.224 | 80, 443, 8080 | 131 |
| 104.17.8.105 | 80, 443, 8080 | 133 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8d7a:d9a8:4cf6:5ed6:e4e:c1f] | 80, 443, 8080 | 1 |
| [2606:4700:8d7a:e351:3622:e14c:db9e:9fd1] | 80, 443, 8080 | 1 |
| [2606:4700:9a90:3628:d42c:1d1:b6:ba5f] | 80, 443, 8080 | 1 |
| [2606:4700:0:b625:ed38:4865:16e9:5e2d] | 80, 443, 8080 | 1 |
| [2606:4700:90c3:ae38:e11c:c135:a2ed:560] | 80, 443, 8080 | 1 |
| [2606:4700:8d7a:d9a8:4cf6:5ed6:e4e:c1f] | 80, 443, 8080 | 1 |
| [2606:4700:8d7a:e351:3622:e14c:db9e:9fd1] | 80, 443, 8080 | 1 |
| [2606:4700:9a90:3628:d42c:1d1:b6:ba5f] | 80, 443, 8080 | 1 |
| [2606:4700:0:b625:ed38:4865:16e9:5e2d] | 80, 443, 8080 | 1 |
| [2606:4700:90c3:ae38:e11c:c135:a2ed:560] | 80, 443, 8080 | 1 |
| [2606:4700:8d7a:d9a8:4cf6:5ed6:e4e:c1f] | 80, 443, 8080 | 1 |
| [2606:4700:8d7a:e351:3622:e14c:db9e:9fd1] | 80, 443, 8080 | 1 |
| [2606:4700:9a90:3628:d42c:1d1:b6:ba5f] | 80, 443, 8080 | 1 |
| [2606:4700:0:b625:ed38:4865:16e9:5e2d] | 80, 443, 8080 | 1 |
| [2606:4700:90c3:ae38:e11c:c135:a2ed:560] | 80, 443, 8080 | 1 |

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
