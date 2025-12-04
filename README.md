# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-05 00:17:14 +0330

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
| 198.41.208.218 | 80, 443, 8080 | 51 |
| 198.41.208.218 | 80, 443, 8080 | 51 |
| 162.159.46.104 | 80, 443, 8080 | 53 |
| 162.159.46.104 | 80, 443, 8080 | 53 |
| 172.64.87.104 | 80, 443, 8080 | 54 |
| 172.64.87.104 | 80, 443, 8080 | 54 |
| 104.16.241.215 | 80, 443, 8080 | 55 |
| 104.16.241.215 | 80, 443, 8080 | 55 |
| 141.101.121.33 | 80, 443, 8080 | 56 |
| 141.101.121.33 | 80, 443, 8080 | 56 |
| 104.16.189.56 | 80, 443, 8080 | 127 |
| 104.18.90.29 | 80, 443, 8080 | 128 |
| 104.17.58.48 | 80, 443, 8080 | 129 |
| 104.17.81.219 | 80, 443, 8080 | 129 |
| 104.16.101.20 | 80, 443, 8080 | 129 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:440c:516d:7f01:aa0a:a069:14db] | 80, 443, 8080 | 3 |
| [2606:4700:13b:b01e:2aa2:a639:1d6e:97e4] | 80, 443, 8080 | 3 |
| [2606:4700:310c:e068:cd85:c929:e5d9:4942] | 80, 443, 8080 | 3 |
| [2606:4700:440c:683a:dfd2:5ca6:4ac7:b7b7] | 80, 443, 8080 | 3 |
| [2606:4700:99ef:d262:1fc7:ea27:5ec1:7a71] | 80, 443, 8080 | 3 |
| [2606:4700:440c:516d:7f01:aa0a:a069:14db] | 80, 443, 8080 | 3 |
| [2606:4700:13b:b01e:2aa2:a639:1d6e:97e4] | 80, 443, 8080 | 3 |
| [2606:4700:310c:e068:cd85:c929:e5d9:4942] | 80, 443, 8080 | 3 |
| [2606:4700:440c:683a:dfd2:5ca6:4ac7:b7b7] | 80, 443, 8080 | 3 |
| [2606:4700:99ef:d262:1fc7:ea27:5ec1:7a71] | 80, 443, 8080 | 3 |
| [2606:4700:440c:516d:7f01:aa0a:a069:14db] | 80, 443, 8080 | 3 |
| [2606:4700:13b:b01e:2aa2:a639:1d6e:97e4] | 80, 443, 8080 | 3 |
| [2606:4700:310c:e068:cd85:c929:e5d9:4942] | 80, 443, 8080 | 3 |
| [2606:4700:440c:683a:dfd2:5ca6:4ac7:b7b7] | 80, 443, 8080 | 3 |
| [2606:4700:99ef:d262:1fc7:ea27:5ec1:7a71] | 80, 443, 8080 | 3 |

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
