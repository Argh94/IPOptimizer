# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-24 00:12:14 +0330

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
| 172.67.109.26 | 80, 443, 8080 | 55 |
| 172.67.92.33 | 80, 443, 8080 | 55 |
| 162.159.251.131 | 80, 443, 8080 | 56 |
| 162.159.134.219 | 80, 443, 8080 | 57 |
| 104.18.211.48 | 80, 443, 8080 | 127 |
| 104.18.211.48 | 80, 443, 8080 | 127 |
| 104.19.30.31 | 80, 443, 8080 | 128 |
| 104.19.30.31 | 80, 443, 8080 | 128 |
| 104.19.114.52 | 80, 443, 8080 | 129 |
| 104.19.114.52 | 80, 443, 8080 | 129 |
| 104.18.133.16 | 80, 443, 8080 | 130 |
| 104.18.133.16 | 80, 443, 8080 | 130 |
| 104.19.97.122 | 80, 443, 8080 | 131 |
| 104.19.97.122 | 80, 443, 8080 | 131 |
| 172.67.169.0 | 80, 443, 8080 | 146 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9ae1:9e3e:bd75:5ead:a537:b25] | 80, 443, 8080 | 3 |
| [2606:4700:9ae1:c9d3:cd2a:14ac:7155:4084] | 80, 443, 8080 | 3 |
| [2606:4700:90d5:19c0:c9bb:d94e:9948:533e] | 80, 443, 8080 | 3 |
| [2606:4700:9ae1:9e3e:bd75:5ead:a537:b25] | 80, 443, 8080 | 3 |
| [2606:4700:9ae1:c9d3:cd2a:14ac:7155:4084] | 80, 443, 8080 | 3 |
| [2606:4700:90d5:19c0:c9bb:d94e:9948:533e] | 80, 443, 8080 | 3 |
| [2606:4700:9ae1:9e3e:bd75:5ead:a537:b25] | 80, 443, 8080 | 3 |
| [2606:4700:9ae1:c9d3:cd2a:14ac:7155:4084] | 80, 443, 8080 | 3 |
| [2606:4700:90d5:19c0:c9bb:d94e:9948:533e] | 80, 443, 8080 | 3 |
| [2606:4700:9a95:9638:4625:b292:d1f0:b5ad] | 80, 443, 8080 | 4 |
| [2606:4700:99ee:38d7:5ea8:ca60:2a20:5e2e] | 80, 443, 8080 | 4 |
| [2606:4700:9a95:9638:4625:b292:d1f0:b5ad] | 80, 443, 8080 | 4 |
| [2606:4700:99ee:38d7:5ea8:ca60:2a20:5e2e] | 80, 443, 8080 | 4 |
| [2606:4700:9a95:9638:4625:b292:d1f0:b5ad] | 80, 443, 8080 | 4 |
| [2606:4700:99ee:38d7:5ea8:ca60:2a20:5e2e] | 80, 443, 8080 | 4 |

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
