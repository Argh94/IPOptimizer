# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-03 00:16:20 +0330

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
| 198.41.208.218 | 80, 443, 8080 | 50 |
| 198.41.208.218 | 80, 443, 8080 | 50 |
| 198.41.208.112 | 80, 443, 8080 | 51 |
| 198.41.208.133 | 80, 443, 8080 | 51 |
| 198.41.208.57 | 80, 443, 8080 | 51 |
| 198.41.208.112 | 80, 443, 8080 | 51 |
| 198.41.208.133 | 80, 443, 8080 | 51 |
| 198.41.208.57 | 80, 443, 8080 | 51 |
| 198.41.208.213 | 80, 443, 8080 | 52 |
| 198.41.208.213 | 80, 443, 8080 | 52 |
| 162.159.46.159 | 80, 443, 8080 | 93 |
| 104.16.3.244 | 80, 443, 8080 | 127 |
| 104.16.181.138 | 80, 443, 8080 | 129 |
| 104.19.72.247 | 80, 443, 8080 | 129 |
| 104.19.30.23 | 80, 443, 8080 | 132 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:83bd:5aa9:1213:e852:bfee:4f98] | 80, 443, 8080 | 3 |
| [2606:4700:8dd0:d5f4:aef6:f975:68f0:f23b] | 80, 443, 8080 | 3 |
| [2606:4700:3014:a02:6ca1:447f:4a0d:8855] | 80, 443, 8080 | 3 |
| [2606:4700:8dd0:addb:f6e3:a438:2cfc:63df] | 80, 443, 8080 | 3 |
| [2606:4700:4406:ef5b:b3ac:7e8:4376:fd21] | 80, 443, 8080 | 3 |
| [2606:4700:83bd:5aa9:1213:e852:bfee:4f98] | 80, 443, 8080 | 3 |
| [2606:4700:8dd0:d5f4:aef6:f975:68f0:f23b] | 80, 443, 8080 | 3 |
| [2606:4700:3014:a02:6ca1:447f:4a0d:8855] | 80, 443, 8080 | 3 |
| [2606:4700:8dd0:addb:f6e3:a438:2cfc:63df] | 80, 443, 8080 | 3 |
| [2606:4700:4406:ef5b:b3ac:7e8:4376:fd21] | 80, 443, 8080 | 3 |
| [2606:4700:83bd:5aa9:1213:e852:bfee:4f98] | 80, 443, 8080 | 3 |
| [2606:4700:8dd0:d5f4:aef6:f975:68f0:f23b] | 80, 443, 8080 | 3 |
| [2606:4700:3014:a02:6ca1:447f:4a0d:8855] | 80, 443, 8080 | 3 |
| [2606:4700:8dd0:addb:f6e3:a438:2cfc:63df] | 80, 443, 8080 | 3 |
| [2606:4700:4406:ef5b:b3ac:7e8:4376:fd21] | 80, 443, 8080 | 3 |

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
