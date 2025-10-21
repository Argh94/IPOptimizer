# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-21 10:19:33 +0330

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
| 198.41.209.63 | 80, 443, 8080 | 55 |
| 190.93.245.158 | 80, 443, 8080 | 55 |
| 190.93.245.40 | 80, 443, 8080 | 55 |
| 190.93.244.113 | 80, 443, 8080 | 55 |
| 190.93.247.139 | 80, 443, 8080 | 56 |
| 172.67.68.168 | 80, 443, 8080 | 56 |
| 198.41.215.26 | 80, 443, 8080 | 57 |
| 198.41.222.232 | 80, 443, 8080 | 68 |
| 198.41.211.97 | 80, 443, 8080 | 70 |
| 104.18.222.34 | 80, 443, 8080 | 128 |
| 104.17.245.140 | 80, 443, 8080 | 131 |
| 104.16.173.243 | 80, 443, 8080 | 132 |
| 172.67.186.218 | 80, 443, 8080 | 150 |
| 172.67.185.197 | 80, 443, 8080 | 161 |
| 162.159.234.165 | 80, 443, 8080 | 218 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:1a:9432:7a0e:db6a:ea10:3e23] | 80, 443, 8080 | 3 |
| [2606:4700:1a:9432:7a0e:db6a:ea10:3e23] | 80, 443, 8080 | 3 |
| [2606:4700:1a:9432:7a0e:db6a:ea10:3e23] | 80, 443, 8080 | 3 |
| [2606:4700:26:35db:26f4:a256:954a:d47d] | 80, 443, 8080 | 12 |
| [2606:4700:26:35db:26f4:a256:954a:d47d] | 80, 443, 8080 | 12 |
| [2606:4700:26:35db:26f4:a256:954a:d47d] | 80, 443, 8080 | 12 |
| [2606:4700:1a:26f2:92c6:7b2:e920:bca7] | 80, 443, 8080 | 13 |
| [2606:4700:1a:26f2:92c6:7b2:e920:bca7] | 80, 443, 8080 | 13 |
| [2606:4700:1a:26f2:92c6:7b2:e920:bca7] | 80, 443, 8080 | 13 |
| [2606:4700:83b0:33cf:4a5b:7521:32c1:1fd9] | 80, 443, 8080 | 145 |
| [2606:4700:83b0:33cf:4a5b:7521:32c1:1fd9] | 80, 443, 8080 | 145 |
| [2606:4700:83b0:33cf:4a5b:7521:32c1:1fd9] | 80, 443, 8080 | 145 |
| [2606:4700:83b0:cc1b:1ecb:d168:f292:e507] | 80, 443, 8080 | 158 |
| [2606:4700:83b0:cc1b:1ecb:d168:f292:e507] | 80, 443, 8080 | 158 |
| [2606:4700:83b0:cc1b:1ecb:d168:f292:e507] | 80, 443, 8080 | 158 |

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
