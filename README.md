# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-13 10:57:13 +0330

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
| 172.64.95.198 | 80, 443, 8080 | 53 |
| 198.41.208.194 | 80, 443, 8080 | 53 |
| 162.159.46.104 | 80, 443, 8080 | 53 |
| 198.41.209.90 | 80, 443, 8080 | 53 |
| 172.64.95.198 | 80, 443, 8080 | 53 |
| 198.41.208.194 | 80, 443, 8080 | 53 |
| 162.159.46.104 | 80, 443, 8080 | 53 |
| 198.41.209.90 | 80, 443, 8080 | 53 |
| 198.41.208.125 | 80, 443, 8080 | 54 |
| 198.41.208.125 | 80, 443, 8080 | 54 |
| 104.18.252.144 | 80, 443, 8080 | 134 |
| 104.17.94.65 | 80, 443, 8080 | 134 |
| 104.18.243.187 | 80, 443, 8080 | 141 |
| 104.18.207.31 | 80, 443, 8080 | 143 |
| 104.16.1.126 | 80, 443, 8080 | 147 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:91b8:2c4f:5a57:20a0:a00d:3100] | 80, 443, 8080 | 1 |
| [2606:4700:91b8:2c4f:5a57:20a0:a00d:3100] | 80, 443, 8080 | 1 |
| [2606:4700:91b8:2c4f:5a57:20a0:a00d:3100] | 80, 443, 8080 | 1 |
| [2606:4700:3037:af88:8545:1880:daa6:49c7] | 80, 443, 8080 | 3 |
| [2606:4700:3037:a34:9e0e:4c25:50bd:79a3] | 80, 443, 8080 | 3 |
| [2606:4700:9aef:7a0:709e:a8d3:67c1:a492] | 80, 443, 8080 | 3 |
| [2606:4700:90c4:e4cb:32f0:5a3b:14a2:4004] | 80, 443, 8080 | 3 |
| [2606:4700:3037:af88:8545:1880:daa6:49c7] | 80, 443, 8080 | 3 |
| [2606:4700:3037:a34:9e0e:4c25:50bd:79a3] | 80, 443, 8080 | 3 |
| [2606:4700:9aef:7a0:709e:a8d3:67c1:a492] | 80, 443, 8080 | 3 |
| [2606:4700:90c4:e4cb:32f0:5a3b:14a2:4004] | 80, 443, 8080 | 3 |
| [2606:4700:3037:af88:8545:1880:daa6:49c7] | 80, 443, 8080 | 3 |
| [2606:4700:3037:a34:9e0e:4c25:50bd:79a3] | 80, 443, 8080 | 3 |
| [2606:4700:9aef:7a0:709e:a8d3:67c1:a492] | 80, 443, 8080 | 3 |
| [2606:4700:90c4:e4cb:32f0:5a3b:14a2:4004] | 80, 443, 8080 | 3 |

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
