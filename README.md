# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-11 00:07:42 +0330

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
| 141.101.115.46 | 80, 443, 8080 | 52 |
| 162.159.248.175 | 80, 443, 8080 | 53 |
| 198.41.209.139 | 80, 443, 8080 | 54 |
| 198.41.209.51 | 80, 443, 8080 | 55 |
| 172.67.103.177 | 80, 443, 8080 | 55 |
| 172.64.85.143 | 80, 443, 8080 | 55 |
| 172.67.112.72 | 80, 443, 8080 | 56 |
| 172.67.69.208 | 80, 443, 8080 | 56 |
| 198.41.208.66 | 80, 443, 8080 | 60 |
| 104.19.4.110 | 80, 443, 8080 | 128 |
| 104.19.68.23 | 80, 443, 8080 | 129 |
| 104.17.216.76 | 80, 443, 8080 | 129 |
| 104.21.234.5 | 80, 443, 8080 | 138 |
| 172.67.189.23 | 80, 443, 8080 | 145 |
| 162.159.234.255 | 80, 443, 8080 | 155 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:2d:9467:9fbc:749a:d2eb:b2cd] | 80, 443, 8080 | 3 |
| [2606:4700:8d73:6444:ee86:2c6e:1c6c:fdc7] | 80, 443, 8080 | 3 |
| [2606:4700:2d:9a03:9b0e:ccdd:72a0:81e5] | 80, 443, 8080 | 3 |
| [2606:4700:2d:9467:9fbc:749a:d2eb:b2cd] | 80, 443, 8080 | 3 |
| [2606:4700:8d73:6444:ee86:2c6e:1c6c:fdc7] | 80, 443, 8080 | 3 |
| [2606:4700:2d:9a03:9b0e:ccdd:72a0:81e5] | 80, 443, 8080 | 3 |
| [2606:4700:2d:9467:9fbc:749a:d2eb:b2cd] | 80, 443, 8080 | 3 |
| [2606:4700:8d73:6444:ee86:2c6e:1c6c:fdc7] | 80, 443, 8080 | 3 |
| [2606:4700:2d:9a03:9b0e:ccdd:72a0:81e5] | 80, 443, 8080 | 3 |
| [2606:4700:8dee:4e3:3b0b:6602:db5b:64fe] | 80, 443, 8080 | 4 |
| [2606:4700:8d73:9aa4:932b:d928:f25:2c25] | 80, 443, 8080 | 4 |
| [2606:4700:8dee:4e3:3b0b:6602:db5b:64fe] | 80, 443, 8080 | 4 |
| [2606:4700:8d73:9aa4:932b:d928:f25:2c25] | 80, 443, 8080 | 4 |
| [2606:4700:8dee:4e3:3b0b:6602:db5b:64fe] | 80, 443, 8080 | 4 |
| [2606:4700:8d73:9aa4:932b:d928:f25:2c25] | 80, 443, 8080 | 4 |

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
