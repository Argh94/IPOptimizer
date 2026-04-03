# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-04-03 11:13:01 +0330

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
| 198.41.209.214 | 80, 443, 8080 | 52 |
| 198.41.209.214 | 80, 443, 8080 | 52 |
| 198.41.208.104 | 80, 443, 8080 | 53 |
| 198.41.208.41 | 80, 443, 8080 | 53 |
| 198.41.208.104 | 80, 443, 8080 | 53 |
| 198.41.208.41 | 80, 443, 8080 | 53 |
| 198.41.209.109 | 80, 443, 8080 | 56 |
| 198.41.209.109 | 80, 443, 8080 | 56 |
| 198.41.209.113 | 80, 443, 8080 | 91 |
| 198.41.209.113 | 80, 443, 8080 | 91 |
| 104.18.199.217 | 80, 443, 8080 | 131 |
| 104.17.107.209 | 80, 443, 8080 | 137 |
| 104.17.153.124 | 80, 443, 8080 | 144 |
| 104.17.21.201 | 80, 443, 8080 | 144 |
| 104.16.6.116 | 80, 443, 8080 | 147 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:964e:502c:2510:9577:3235:e05] | 80, 443, 8080 | 3 |
| [2606:4700:4407:2f0d:d817:834a:2680:4e34] | 80, 443, 8080 | 3 |
| [2606:4700:99e8:2b68:c15b:54c9:85fe:a8bc] | 80, 443, 8080 | 3 |
| [2606:4700:964e:502c:2510:9577:3235:e05] | 80, 443, 8080 | 3 |
| [2606:4700:4407:2f0d:d817:834a:2680:4e34] | 80, 443, 8080 | 3 |
| [2606:4700:99e8:2b68:c15b:54c9:85fe:a8bc] | 80, 443, 8080 | 3 |
| [2606:4700:964e:502c:2510:9577:3235:e05] | 80, 443, 8080 | 3 |
| [2606:4700:4407:2f0d:d817:834a:2680:4e34] | 80, 443, 8080 | 3 |
| [2606:4700:99e8:2b68:c15b:54c9:85fe:a8bc] | 80, 443, 8080 | 3 |
| [2606:4700:99e8:6e94:8073:fd1a:8e3c:4a2d] | 80, 443, 8080 | 4 |
| [2606:4700:99e8:6e94:8073:fd1a:8e3c:4a2d] | 80, 443, 8080 | 4 |
| [2606:4700:99e8:6e94:8073:fd1a:8e3c:4a2d] | 80, 443, 8080 | 4 |
| [2606:4700:4407:a915:16c3:c70a:6ff:bf57] | 80, 443, 8080 | 5 |
| [2606:4700:4407:a915:16c3:c70a:6ff:bf57] | 80, 443, 8080 | 5 |
| [2606:4700:4407:a915:16c3:c70a:6ff:bf57] | 80, 443, 8080 | 5 |

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
