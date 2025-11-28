# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-11-29 00:12:12 +0330

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
| 190.93.247.45 | 80, 443, 8080 | 54 |
| 190.93.247.45 | 80, 443, 8080 | 54 |
| 198.41.208.152 | 80, 443, 8080 | 55 |
| 198.41.208.152 | 80, 443, 8080 | 55 |
| 198.41.209.156 | 80, 443, 8080 | 56 |
| 198.41.208.54 | 80, 443, 8080 | 56 |
| 198.41.209.156 | 80, 443, 8080 | 56 |
| 198.41.208.54 | 80, 443, 8080 | 56 |
| 141.101.122.237 | 80, 443, 8080 | 60 |
| 141.101.122.237 | 80, 443, 8080 | 60 |
| 162.159.36.99 | 80, 443, 8080 | 73 |
| 104.16.176.190 | 80, 443, 8080 | 128 |
| 104.17.193.87 | 80, 443, 8080 | 129 |
| 104.19.175.159 | 80, 443, 8080 | 129 |
| 104.17.217.171 | 80, 443, 8080 | 130 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:91b3:9dcb:ff0b:2a73:b42b:30c6] | 80, 443, 8080 | 3 |
| [2606:4700:8dd7:6d3a:ae82:3848:5830:c202] | 80, 443, 8080 | 3 |
| [2606:4700:9a6b:13ad:96fe:6c3d:dc66:cb62] | 80, 443, 8080 | 3 |
| [2606:4700:91b3:59da:4ea:a5a0:ea11:4d2d] | 80, 443, 8080 | 3 |
| [2606:4700:8dd7:6cb5:fbb6:1a36:a0a8:97f0] | 80, 443, 8080 | 3 |
| [2606:4700:91b3:9dcb:ff0b:2a73:b42b:30c6] | 80, 443, 8080 | 3 |
| [2606:4700:8dd7:6d3a:ae82:3848:5830:c202] | 80, 443, 8080 | 3 |
| [2606:4700:9a6b:13ad:96fe:6c3d:dc66:cb62] | 80, 443, 8080 | 3 |
| [2606:4700:91b3:59da:4ea:a5a0:ea11:4d2d] | 80, 443, 8080 | 3 |
| [2606:4700:8dd7:6cb5:fbb6:1a36:a0a8:97f0] | 80, 443, 8080 | 3 |
| [2606:4700:91b3:9dcb:ff0b:2a73:b42b:30c6] | 80, 443, 8080 | 3 |
| [2606:4700:8dd7:6d3a:ae82:3848:5830:c202] | 80, 443, 8080 | 3 |
| [2606:4700:9a6b:13ad:96fe:6c3d:dc66:cb62] | 80, 443, 8080 | 3 |
| [2606:4700:91b3:59da:4ea:a5a0:ea11:4d2d] | 80, 443, 8080 | 3 |
| [2606:4700:8dd7:6cb5:fbb6:1a36:a0a8:97f0] | 80, 443, 8080 | 3 |

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
