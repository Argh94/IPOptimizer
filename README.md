# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-22 00:10:16 +0330

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
| 162.159.248.175 | 80, 443, 8080 | 53 |
| 162.159.251.118 | 80, 443, 8080 | 53 |
| 172.64.89.136 | 80, 443, 8080 | 55 |
| 173.245.49.223 | 80, 443, 8080 | 55 |
| 172.64.95.89 | 80, 443, 8080 | 55 |
| 190.93.245.9 | 80, 443, 8080 | 56 |
| 104.17.239.156 | 80, 443, 8080 | 129 |
| 104.16.99.15 | 80, 443, 8080 | 129 |
| 104.17.233.179 | 80, 443, 8080 | 130 |
| 104.19.206.116 | 80, 443, 8080 | 131 |
| 172.67.171.223 | 80, 443, 8080 | 146 |
| 172.67.175.83 | 80, 443, 8080 | 146 |
| 172.67.159.112 | 80, 443, 8080 | 146 |
| 104.19.163.193 | 80, 443, 8080 | 147 |
| 162.159.234.95 | 80, 443, 8080 | 218 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9b00:d273:5c74:1512:53e0:e56f] | 80, 443, 8080 | 3 |
| [2606:4700:9ae9:cddd:d29c:adcb:a7f9:76b7] | 80, 443, 8080 | 3 |
| [2606:4700:9b00:9a4e:9bce:46c1:dda8:4a9d] | 80, 443, 8080 | 3 |
| [2606:4700:9b00:d273:5c74:1512:53e0:e56f] | 80, 443, 8080 | 3 |
| [2606:4700:9ae9:cddd:d29c:adcb:a7f9:76b7] | 80, 443, 8080 | 3 |
| [2606:4700:9b00:9a4e:9bce:46c1:dda8:4a9d] | 80, 443, 8080 | 3 |
| [2606:4700:9b00:d273:5c74:1512:53e0:e56f] | 80, 443, 8080 | 3 |
| [2606:4700:9ae9:cddd:d29c:adcb:a7f9:76b7] | 80, 443, 8080 | 3 |
| [2606:4700:9b00:9a4e:9bce:46c1:dda8:4a9d] | 80, 443, 8080 | 3 |
| [2606:4700:9a99:201d:9017:6a28:76c2:5825] | 80, 443, 8080 | 4 |
| [2606:4700:9a99:e8:f96:e87b:2442:23b4] | 80, 443, 8080 | 4 |
| [2606:4700:9a99:201d:9017:6a28:76c2:5825] | 80, 443, 8080 | 4 |
| [2606:4700:9a99:e8:f96:e87b:2442:23b4] | 80, 443, 8080 | 4 |
| [2606:4700:9a99:201d:9017:6a28:76c2:5825] | 80, 443, 8080 | 4 |
| [2606:4700:9a99:e8:f96:e87b:2442:23b4] | 80, 443, 8080 | 4 |

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
