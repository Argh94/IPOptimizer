# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-08-20 00:07:40 +0330

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
|----|------------------|--------------|
| 162.159.242.233 | 80, 443, 8080 | 53 |
| 198.41.223.3 | 80, 443, 8080 | 54 |
| 162.159.253.143 | 80, 443, 8080 | 54 |
| 162.159.195.39 | 80, 443, 8080 | 56 |
| 172.67.98.248 | 80, 443, 8080 | 56 |
| 104.17.135.188 | 80, 443, 8080 | 129 |
| 104.16.233.221 | 80, 443, 8080 | 130 |
| 104.16.87.249 | 80, 443, 8080 | 130 |
| 104.18.97.143 | 80, 443, 8080 | 131 |
| 172.67.234.111 | 80, 443, 8080 | 133 |
| 172.67.233.79 | 80, 443, 8080 | 133 |
| 172.67.147.107 | 80, 443, 8080 | 133 |
| 104.16.167.120 | 80, 443, 8080 | 136 |
| 198.41.209.23 | 80, 443, 8080 | 146 |
| 172.67.171.52 | 80, 443, 8080 | 157 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|----|------------------|--------------|
| [2606:4700:8de5:c125:9b57:22ac:b3c:f074] | 80, 443, 8080 | 3 |
| [2606:4700:839c:b832:e8df:47e6:92b1:ad02] | 80, 443, 8080 | 3 |
| [2606:4700:9adc:5de:11df:2bd2:42fb:a46c] | 80, 443, 8080 | 3 |
| [2606:4700:9762:2421:9dc7:c0a2:bf92:cb77] | 80, 443, 8080 | 3 |
| [2606:4700:8de5:c125:9b57:22ac:b3c:f074] | 80, 443, 8080 | 3 |
| [2606:4700:839c:b832:e8df:47e6:92b1:ad02] | 80, 443, 8080 | 3 |
| [2606:4700:9adc:5de:11df:2bd2:42fb:a46c] | 80, 443, 8080 | 3 |
| [2606:4700:9762:2421:9dc7:c0a2:bf92:cb77] | 80, 443, 8080 | 3 |
| [2606:4700:8de5:c125:9b57:22ac:b3c:f074] | 80, 443, 8080 | 3 |
| [2606:4700:839c:b832:e8df:47e6:92b1:ad02] | 80, 443, 8080 | 3 |
| [2606:4700:9adc:5de:11df:2bd2:42fb:a46c] | 80, 443, 8080 | 3 |
| [2606:4700:9762:2421:9dc7:c0a2:bf92:cb77] | 80, 443, 8080 | 3 |
| [2606:4700:310c:5f:4dc4:1eda:a20e:ce66] | 80, 443, 8080 | 4 |
| [2606:4700:310c:5f:4dc4:1eda:a20e:ce66] | 80, 443, 8080 | 4 |
| [2606:4700:310c:5f:4dc4:1eda:a20e:ce66] | 80, 443, 8080 | 4 |

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
