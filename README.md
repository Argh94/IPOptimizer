# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-04-02 00:39:46 +0330

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
| 198.41.208.104 | 80, 443, 8080 | 53 |
| 198.41.208.104 | 80, 443, 8080 | 53 |
| 198.41.208.250 | 80, 443, 8080 | 55 |
| 198.41.208.250 | 80, 443, 8080 | 55 |
| 198.41.209.167 | 80, 443, 8080 | 56 |
| 198.41.209.167 | 80, 443, 8080 | 56 |
| 198.41.208.234 | 80, 443, 8080 | 60 |
| 198.41.208.234 | 80, 443, 8080 | 60 |
| 198.41.209.113 | 80, 443, 8080 | 91 |
| 198.41.209.113 | 80, 443, 8080 | 91 |
| 104.16.202.200 | 80, 443, 8080 | 130 |
| 104.18.95.96 | 80, 443, 8080 | 130 |
| 104.17.191.173 | 80, 443, 8080 | 132 |
| 104.16.0.76 | 80, 443, 8080 | 140 |
| 104.17.49.89 | 80, 443, 8080 | 144 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:100:471b:dacb:dfd:a865:e83c] | 80, 443, 8080 | 0 |
| [2606:4700:100:471b:dacb:dfd:a865:e83c] | 80, 443, 8080 | 0 |
| [2606:4700:100:471b:dacb:dfd:a865:e83c] | 80, 443, 8080 | 0 |
| [2606:4700:9ad6:4419:77e6:5269:d810:631f] | 80, 443, 8080 | 1 |
| [2606:4700:2b:ab0d:28ff:56e5:25ee:1946] | 80, 443, 8080 | 1 |
| [2606:4700:9ad6:4419:77e6:5269:d810:631f] | 80, 443, 8080 | 1 |
| [2606:4700:2b:ab0d:28ff:56e5:25ee:1946] | 80, 443, 8080 | 1 |
| [2606:4700:9ad6:4419:77e6:5269:d810:631f] | 80, 443, 8080 | 1 |
| [2606:4700:2b:ab0d:28ff:56e5:25ee:1946] | 80, 443, 8080 | 1 |
| [2606:4700:83ba:a5af:cc52:53b7:39df:20fe] | 80, 443, 8080 | 246 |
| [2606:4700:83ba:a5af:cc52:53b7:39df:20fe] | 80, 443, 8080 | 246 |
| [2606:4700:83ba:a5af:cc52:53b7:39df:20fe] | 80, 443, 8080 | 246 |
| [2606:4700:83ba:906e:e393:709f:9ce4:4c6c] | 80, 443, 8080 | 251 |
| [2606:4700:83ba:906e:e393:709f:9ce4:4c6c] | 80, 443, 8080 | 251 |
| [2606:4700:83ba:906e:e393:709f:9ce4:4c6c] | 80, 443, 8080 | 251 |

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
