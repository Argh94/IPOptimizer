# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-22 00:14:07 +0330

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
| 104.17.202.209 | 80, 443, 8080 | 127 |
| 104.17.202.209 | 80, 443, 8080 | 127 |
| 104.17.204.195 | 80, 443, 8080 | 128 |
| 104.17.249.26 | 80, 443, 8080 | 128 |
| 104.17.204.195 | 80, 443, 8080 | 128 |
| 104.17.249.26 | 80, 443, 8080 | 128 |
| 104.18.93.201 | 80, 443, 8080 | 129 |
| 104.17.27.24 | 80, 443, 8080 | 129 |
| 104.18.93.201 | 80, 443, 8080 | 129 |
| 104.17.27.24 | 80, 443, 8080 | 129 |
| 172.67.133.90 | 80, 443, 8080 | 155 |
| 172.67.207.50 | 80, 443, 8080 | 155 |
| 172.67.239.198 | 80, 443, 8080 | 156 |
| 172.67.140.140 | 80, 443, 8080 | 156 |
| 172.67.243.102 | 80, 443, 8080 | 158 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9a94:5806:e4b6:9a3:5ed2:22a2] | 80, 443, 8080 | 3 |
| [2606:4700:9a94:5806:e4b6:9a3:5ed2:22a2] | 80, 443, 8080 | 3 |
| [2606:4700:9a94:5806:e4b6:9a3:5ed2:22a2] | 80, 443, 8080 | 3 |
| [2606:4700:9b0d:4db4:e549:e737:b7d8:7913] | 80, 443, 8080 | 4 |
| [2606:4700:9a94:1a3a:a1d1:3a34:b712:de0c] | 80, 443, 8080 | 4 |
| [2606:4700:90d2:d5f0:d6e5:cb5e:9508:7e5c] | 80, 443, 8080 | 4 |
| [2606:4700:9b0d:4db4:e549:e737:b7d8:7913] | 80, 443, 8080 | 4 |
| [2606:4700:9a94:1a3a:a1d1:3a34:b712:de0c] | 80, 443, 8080 | 4 |
| [2606:4700:90d2:d5f0:d6e5:cb5e:9508:7e5c] | 80, 443, 8080 | 4 |
| [2606:4700:9b0d:4db4:e549:e737:b7d8:7913] | 80, 443, 8080 | 4 |
| [2606:4700:9a94:1a3a:a1d1:3a34:b712:de0c] | 80, 443, 8080 | 4 |
| [2606:4700:90d2:d5f0:d6e5:cb5e:9508:7e5c] | 80, 443, 8080 | 4 |
| [2606:4700:8d9b:35d8:97b1:ac18:3cbe:35e5] | 80, 443, 8080 | 5 |
| [2606:4700:8d9b:35d8:97b1:ac18:3cbe:35e5] | 80, 443, 8080 | 5 |
| [2606:4700:8d9b:35d8:97b1:ac18:3cbe:35e5] | 80, 443, 8080 | 5 |

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
