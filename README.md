# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-11 00:18:56 +0330

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
| 198.41.209.186 | 80, 443, 8080 | 50 |
| 198.41.209.186 | 80, 443, 8080 | 50 |
| 198.41.209.202 | 80, 443, 8080 | 51 |
| 198.41.209.202 | 80, 443, 8080 | 51 |
| 172.64.95.102 | 80, 443, 8080 | 53 |
| 198.41.209.120 | 80, 443, 8080 | 53 |
| 190.93.246.188 | 80, 443, 8080 | 53 |
| 172.64.95.102 | 80, 443, 8080 | 53 |
| 198.41.209.120 | 80, 443, 8080 | 53 |
| 190.93.246.188 | 80, 443, 8080 | 53 |
| 198.41.222.27 | 80, 443, 8080 | 84 |
| 104.19.19.54 | 80, 443, 8080 | 128 |
| 104.19.95.63 | 80, 443, 8080 | 130 |
| 104.19.118.119 | 80, 443, 8080 | 130 |
| 104.19.13.46 | 80, 443, 8080 | 131 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:90c7:48a0:88d7:9919:8717:e04e] | 80, 443, 8080 | 3 |
| [2606:4700:976d:41ae:9164:8746:95df:bbc7] | 80, 443, 8080 | 3 |
| [2606:4700:54:e993:d318:1455:7ac:1269] | 80, 443, 8080 | 3 |
| [2606:4700:54:587a:5e0e:e05a:da85:28e2] | 80, 443, 8080 | 3 |
| [2606:4700:90c7:48a0:88d7:9919:8717:e04e] | 80, 443, 8080 | 3 |
| [2606:4700:976d:41ae:9164:8746:95df:bbc7] | 80, 443, 8080 | 3 |
| [2606:4700:54:e993:d318:1455:7ac:1269] | 80, 443, 8080 | 3 |
| [2606:4700:54:587a:5e0e:e05a:da85:28e2] | 80, 443, 8080 | 3 |
| [2606:4700:90c7:48a0:88d7:9919:8717:e04e] | 80, 443, 8080 | 3 |
| [2606:4700:976d:41ae:9164:8746:95df:bbc7] | 80, 443, 8080 | 3 |
| [2606:4700:54:e993:d318:1455:7ac:1269] | 80, 443, 8080 | 3 |
| [2606:4700:54:587a:5e0e:e05a:da85:28e2] | 80, 443, 8080 | 3 |
| [2606:4700:90c7:19ba:f6d5:a454:59fa:75a5] | 80, 443, 8080 | 6 |
| [2606:4700:90c7:19ba:f6d5:a454:59fa:75a5] | 80, 443, 8080 | 6 |
| [2606:4700:90c7:19ba:f6d5:a454:59fa:75a5] | 80, 443, 8080 | 6 |

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
