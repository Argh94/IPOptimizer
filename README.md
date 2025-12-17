# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-18 00:17:18 +0330

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
| 198.41.208.113 | 80, 443, 8080 | 52 |
| 198.41.208.218 | 80, 443, 8080 | 52 |
| 198.41.209.17 | 80, 443, 8080 | 52 |
| 198.41.208.113 | 80, 443, 8080 | 52 |
| 198.41.208.218 | 80, 443, 8080 | 52 |
| 198.41.209.17 | 80, 443, 8080 | 52 |
| 104.17.215.28 | 80, 443, 8080 | 53 |
| 104.17.215.28 | 80, 443, 8080 | 53 |
| 104.16.153.2 | 80, 443, 8080 | 56 |
| 104.16.153.2 | 80, 443, 8080 | 56 |
| 104.18.108.107 | 80, 443, 8080 | 128 |
| 104.17.251.164 | 80, 443, 8080 | 130 |
| 104.16.187.109 | 80, 443, 8080 | 130 |
| 104.19.63.108 | 80, 443, 8080 | 138 |
| 104.21.235.41 | 80, 443, 8080 | 139 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9aed:f4e0:a5b6:b65e:8c75:2862] | 80, 443, 8080 | 3 |
| [2606:4700:9aed:3f5d:bad3:86ff:ebd1:8f1a] | 80, 443, 8080 | 3 |
| [2606:4700:9c65:79a:df1d:a8ca:f216:833b] | 80, 443, 8080 | 3 |
| [2606:4700:9aed:f4e0:a5b6:b65e:8c75:2862] | 80, 443, 8080 | 3 |
| [2606:4700:9aed:3f5d:bad3:86ff:ebd1:8f1a] | 80, 443, 8080 | 3 |
| [2606:4700:9c65:79a:df1d:a8ca:f216:833b] | 80, 443, 8080 | 3 |
| [2606:4700:9aed:f4e0:a5b6:b65e:8c75:2862] | 80, 443, 8080 | 3 |
| [2606:4700:9aed:3f5d:bad3:86ff:ebd1:8f1a] | 80, 443, 8080 | 3 |
| [2606:4700:9c65:79a:df1d:a8ca:f216:833b] | 80, 443, 8080 | 3 |
| [2606:4700:9c65:2047:7cfc:8289:de92:6ed] | 80, 443, 8080 | 4 |
| [2606:4700:8ca5:cafd:15ab:a79a:8771:7914] | 80, 443, 8080 | 4 |
| [2606:4700:9c65:2047:7cfc:8289:de92:6ed] | 80, 443, 8080 | 4 |
| [2606:4700:8ca5:cafd:15ab:a79a:8771:7914] | 80, 443, 8080 | 4 |
| [2606:4700:9c65:2047:7cfc:8289:de92:6ed] | 80, 443, 8080 | 4 |
| [2606:4700:8ca5:cafd:15ab:a79a:8771:7914] | 80, 443, 8080 | 4 |

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
