# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-09 10:20:19 +0330

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
| 141.101.120.86 | 80, 443, 8080 | 52 |
| 198.41.208.208 | 80, 443, 8080 | 52 |
| 162.159.252.186 | 80, 443, 8080 | 52 |
| 190.93.247.220 | 80, 443, 8080 | 53 |
| 162.159.246.181 | 80, 443, 8080 | 53 |
| 172.67.104.48 | 80, 443, 8080 | 56 |
| 172.67.93.33 | 80, 443, 8080 | 56 |
| 104.18.80.191 | 80, 443, 8080 | 129 |
| 104.17.194.40 | 80, 443, 8080 | 130 |
| 104.19.98.117 | 80, 443, 8080 | 131 |
| 104.18.240.158 | 80, 443, 8080 | 132 |
| 172.67.232.99 | 80, 443, 8080 | 132 |
| 104.19.74.102 | 80, 443, 8080 | 133 |
| 172.67.172.184 | 80, 443, 8080 | 133 |
| 172.67.217.238 | 80, 443, 8080 | 133 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:99ea:9329:6d84:c37c:72fe:5ed1] | 80, 443, 8080 | 3 |
| [2606:4700:99ea:9329:6d84:c37c:72fe:5ed1] | 80, 443, 8080 | 3 |
| [2606:4700:99ea:9329:6d84:c37c:72fe:5ed1] | 80, 443, 8080 | 3 |
| [2606:4700:440e:fed:900:64e5:9e76:2e20] | 80, 443, 8080 | 4 |
| [2606:4700:440e:e2f2:6808:3ca8:7081:9e79] | 80, 443, 8080 | 4 |
| [2606:4700:440e:fed:900:64e5:9e76:2e20] | 80, 443, 8080 | 4 |
| [2606:4700:440e:e2f2:6808:3ca8:7081:9e79] | 80, 443, 8080 | 4 |
| [2606:4700:440e:fed:900:64e5:9e76:2e20] | 80, 443, 8080 | 4 |
| [2606:4700:440e:e2f2:6808:3ca8:7081:9e79] | 80, 443, 8080 | 4 |
| [2606:4700:83b2:52ae:8c57:be48:33cd:fcbc] | 80, 443, 8080 | 173 |
| [2606:4700:83b2:52ae:8c57:be48:33cd:fcbc] | 80, 443, 8080 | 173 |
| [2606:4700:83b2:52ae:8c57:be48:33cd:fcbc] | 80, 443, 8080 | 173 |
| [2606:4700:83b2:a0a2:d738:263d:35b9:968b] | 80, 443, 8080 | 174 |
| [2606:4700:83b2:a0a2:d738:263d:35b9:968b] | 80, 443, 8080 | 174 |
| [2606:4700:83b2:a0a2:d738:263d:35b9:968b] | 80, 443, 8080 | 174 |

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
