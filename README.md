# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-04-07 11:25:36 +0330

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
| 198.41.223.15 | 80, 443, 8080 | 85 |
| 198.41.223.15 | 80, 443, 8080 | 85 |
| 198.41.223.15 | 80, 443, 8080 | 85 |
| 104.17.76.63 | 80, 443, 8080 | 135 |
| 104.17.76.63 | 80, 443, 8080 | 135 |
| 104.17.76.63 | 80, 443, 8080 | 135 |
| 104.16.9.23 | 80, 443, 8080 | 143 |
| 104.16.9.23 | 80, 443, 8080 | 143 |
| 104.16.9.23 | 80, 443, 8080 | 143 |
| 104.17.5.37 | 80, 443, 8080 | 152 |
| 104.17.5.37 | 80, 443, 8080 | 152 |
| 104.17.5.37 | 80, 443, 8080 | 152 |
| 104.17.31.81 | 80, 443, 8080 | 155 |
| 104.17.31.81 | 80, 443, 8080 | 155 |
| 104.17.31.81 | 80, 443, 8080 | 155 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8d70:5013:b77a:4279:7817:f508] | 80, 443, 8080 | 0 |
| [2606:4700:9ae8:960a:3eaf:c19d:f4d2:7e6e] | 80, 443, 8080 | 0 |
| [2606:4700:8d70:5013:b77a:4279:7817:f508] | 80, 443, 8080 | 0 |
| [2606:4700:9ae8:960a:3eaf:c19d:f4d2:7e6e] | 80, 443, 8080 | 0 |
| [2606:4700:8d70:5013:b77a:4279:7817:f508] | 80, 443, 8080 | 0 |
| [2606:4700:9ae8:960a:3eaf:c19d:f4d2:7e6e] | 80, 443, 8080 | 0 |
| [2606:4700:21:ab90:2555:b4a4:7e1e:e3c1] | 80, 443, 8080 | 1 |
| [2606:4700:9767:249d:c55d:9e45:bef7:7cf5] | 80, 443, 8080 | 1 |
| [2606:4700:9767:eff5:ef1f:b588:daa9:fe6c] | 80, 443, 8080 | 1 |
| [2606:4700:21:ab90:2555:b4a4:7e1e:e3c1] | 80, 443, 8080 | 1 |
| [2606:4700:9767:249d:c55d:9e45:bef7:7cf5] | 80, 443, 8080 | 1 |
| [2606:4700:9767:eff5:ef1f:b588:daa9:fe6c] | 80, 443, 8080 | 1 |
| [2606:4700:21:ab90:2555:b4a4:7e1e:e3c1] | 80, 443, 8080 | 1 |
| [2606:4700:9767:249d:c55d:9e45:bef7:7cf5] | 80, 443, 8080 | 1 |
| [2606:4700:9767:eff5:ef1f:b588:daa9:fe6c] | 80, 443, 8080 | 1 |

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
