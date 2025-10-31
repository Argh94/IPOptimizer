# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-11-01 00:10:54 +0330

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
| 104.17.24.234 | 80, 443, 8080 | 38 |
| 104.18.154.223 | 80, 443, 8080 | 42 |
| 104.17.218.116 | 80, 443, 8080 | 47 |
| 104.16.5.111 | 80, 443, 8080 | 49 |
| 104.17.154.76 | 80, 443, 8080 | 53 |
| 162.159.247.128 | 80, 443, 8080 | 55 |
| 198.41.209.193 | 80, 443, 8080 | 56 |
| 198.41.211.113 | 80, 443, 8080 | 77 |
| 198.41.223.23 | 80, 443, 8080 | 83 |
| 198.41.222.88 | 80, 443, 8080 | 91 |
| 104.18.110.122 | 80, 443, 8080 | 128 |
| 104.18.154.190 | 80, 443, 8080 | 128 |
| 172.67.144.220 | 80, 443, 8080 | 143 |
| 172.67.178.97 | 80, 443, 8080 | 145 |
| 172.64.72.169 | 80, 443, 8080 | 240 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8d90:5bda:e765:edc2:b137:9789] | 80, 443, 8080 | 3 |
| [2606:4700:964d:f8b9:973c:fd5c:77d5:714c] | 80, 443, 8080 | 3 |
| [2606:4700:91bd:3975:f0e0:db81:b6a1:3f3b] | 80, 443, 8080 | 3 |
| [2606:4700:91bd:bdcc:899b:b151:74bb:43f] | 80, 443, 8080 | 3 |
| [2606:4700:8d90:5bda:e765:edc2:b137:9789] | 80, 443, 8080 | 3 |
| [2606:4700:964d:f8b9:973c:fd5c:77d5:714c] | 80, 443, 8080 | 3 |
| [2606:4700:91bd:3975:f0e0:db81:b6a1:3f3b] | 80, 443, 8080 | 3 |
| [2606:4700:91bd:bdcc:899b:b151:74bb:43f] | 80, 443, 8080 | 3 |
| [2606:4700:8d90:5bda:e765:edc2:b137:9789] | 80, 443, 8080 | 3 |
| [2606:4700:964d:f8b9:973c:fd5c:77d5:714c] | 80, 443, 8080 | 3 |
| [2606:4700:91bd:3975:f0e0:db81:b6a1:3f3b] | 80, 443, 8080 | 3 |
| [2606:4700:91bd:bdcc:899b:b151:74bb:43f] | 80, 443, 8080 | 3 |
| [2606:4700:3027:8ed5:62ba:a215:64cd:a4b4] | 80, 443, 8080 | 12 |
| [2606:4700:3027:8ed5:62ba:a215:64cd:a4b4] | 80, 443, 8080 | 12 |
| [2606:4700:3027:8ed5:62ba:a215:64cd:a4b4] | 80, 443, 8080 | 12 |

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
