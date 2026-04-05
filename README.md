# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-04-06 00:29:12 +0330

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
| 198.41.209.120 | 80, 443, 8080 | 52 |
| 198.41.208.203 | 80, 443, 8080 | 52 |
| 198.41.209.137 | 80, 443, 8080 | 52 |
| 198.41.209.105 | 80, 443, 8080 | 52 |
| 198.41.209.165 | 80, 443, 8080 | 52 |
| 198.41.209.120 | 80, 443, 8080 | 52 |
| 198.41.208.203 | 80, 443, 8080 | 52 |
| 198.41.209.137 | 80, 443, 8080 | 52 |
| 198.41.209.105 | 80, 443, 8080 | 52 |
| 198.41.209.165 | 80, 443, 8080 | 52 |
| 104.18.139.142 | 80, 443, 8080 | 130 |
| 104.19.160.4 | 80, 443, 8080 | 131 |
| 104.16.235.206 | 80, 443, 8080 | 131 |
| 104.18.249.177 | 80, 443, 8080 | 137 |
| 104.18.135.177 | 80, 443, 8080 | 148 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8398:1af2:ec2a:eeed:bc55:9a40] | 80, 443, 8080 | 0 |
| [2606:4700:8398:1af2:ec2a:eeed:bc55:9a40] | 80, 443, 8080 | 0 |
| [2606:4700:8398:1af2:ec2a:eeed:bc55:9a40] | 80, 443, 8080 | 0 |
| [2606:4700:9a60:f7e5:481d:d8ba:359:c6c1] | 80, 443, 8080 | 1 |
| [2606:4700:13b:4f85:6e28:e70c:9b2:f951] | 80, 443, 8080 | 1 |
| [2606:4700:90c4:e103:5646:9108:df14:1861] | 80, 443, 8080 | 1 |
| [2606:4700:9a60:9bc:1cb2:579e:431d:b1f6] | 80, 443, 8080 | 1 |
| [2606:4700:9a60:f7e5:481d:d8ba:359:c6c1] | 80, 443, 8080 | 1 |
| [2606:4700:13b:4f85:6e28:e70c:9b2:f951] | 80, 443, 8080 | 1 |
| [2606:4700:90c4:e103:5646:9108:df14:1861] | 80, 443, 8080 | 1 |
| [2606:4700:9a60:9bc:1cb2:579e:431d:b1f6] | 80, 443, 8080 | 1 |
| [2606:4700:9a60:f7e5:481d:d8ba:359:c6c1] | 80, 443, 8080 | 1 |
| [2606:4700:13b:4f85:6e28:e70c:9b2:f951] | 80, 443, 8080 | 1 |
| [2606:4700:90c4:e103:5646:9108:df14:1861] | 80, 443, 8080 | 1 |
| [2606:4700:9a60:9bc:1cb2:579e:431d:b1f6] | 80, 443, 8080 | 1 |

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
