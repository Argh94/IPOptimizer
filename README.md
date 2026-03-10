# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-11 00:28:41 +0330

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
| 104.17.169.206 | 80, 443, 8080 | 129 |
| 104.17.66.140 | 80, 443, 8080 | 130 |
| 104.17.193.84 | 80, 443, 8080 | 130 |
| 104.19.22.24 | 80, 443, 8080 | 130 |
| 104.17.163.111 | 80, 443, 8080 | 131 |
| 172.67.255.89 | 80, 443, 8080 | 179 |
| 172.67.187.231 | 80, 443, 8080 | 179 |
| 172.67.255.89 | 80, 443, 8080 | 179 |
| 172.67.187.231 | 80, 443, 8080 | 179 |
| 172.64.78.25 | 80, 443, 8080 | 180 |
| 172.67.245.92 | 80, 443, 8080 | 180 |
| 172.67.88.37 | 80, 443, 8080 | 180 |
| 172.64.78.25 | 80, 443, 8080 | 180 |
| 172.67.245.92 | 80, 443, 8080 | 180 |
| 172.67.88.37 | 80, 443, 8080 | 180 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8d74:c340:1629:1b3a:5a86:109c] | 80, 443, 8080 | 1 |
| [2606:4700:99e7:76b9:11d4:d691:47ca:8975] | 80, 443, 8080 | 1 |
| [2606:4700:4401:3f52:45c2:6100:d3fd:5a86] | 80, 443, 8080 | 1 |
| [2606:4700:99e5:69f4:4da5:5b90:53fd:1b6d] | 80, 443, 8080 | 1 |
| [2606:4700:9ad7:5f4e:46fa:e02d:beb7:b338] | 80, 443, 8080 | 1 |
| [2606:4700:8d74:c340:1629:1b3a:5a86:109c] | 80, 443, 8080 | 1 |
| [2606:4700:99e7:76b9:11d4:d691:47ca:8975] | 80, 443, 8080 | 1 |
| [2606:4700:4401:3f52:45c2:6100:d3fd:5a86] | 80, 443, 8080 | 1 |
| [2606:4700:99e5:69f4:4da5:5b90:53fd:1b6d] | 80, 443, 8080 | 1 |
| [2606:4700:9ad7:5f4e:46fa:e02d:beb7:b338] | 80, 443, 8080 | 1 |
| [2606:4700:8d74:c340:1629:1b3a:5a86:109c] | 80, 443, 8080 | 1 |
| [2606:4700:99e7:76b9:11d4:d691:47ca:8975] | 80, 443, 8080 | 1 |
| [2606:4700:4401:3f52:45c2:6100:d3fd:5a86] | 80, 443, 8080 | 1 |
| [2606:4700:99e5:69f4:4da5:5b90:53fd:1b6d] | 80, 443, 8080 | 1 |
| [2606:4700:9ad7:5f4e:46fa:e02d:beb7:b338] | 80, 443, 8080 | 1 |

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
