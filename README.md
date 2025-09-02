# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-02 10:21:03 +0330

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
| 198.41.209.214 | 80, 443, 8080 | 51 |
| 198.41.223.21 | 80, 443, 8080 | 52 |
| 162.159.247.187 | 80, 443, 8080 | 53 |
| 172.64.84.137 | 80, 443, 8080 | 53 |
| 172.67.74.2 | 80, 443, 8080 | 55 |
| 172.67.115.104 | 80, 443, 8080 | 55 |
| 162.159.242.159 | 80, 443, 8080 | 56 |
| 162.159.248.72 | 80, 443, 8080 | 56 |
| 172.67.70.97 | 80, 443, 8080 | 56 |
| 172.67.192.228 | 80, 443, 8080 | 130 |
| 104.21.230.158 | 80, 443, 8080 | 146 |
| 104.19.235.51 | 80, 443, 8080 | 146 |
| 104.18.23.152 | 80, 443, 8080 | 147 |
| 104.19.114.42 | 80, 443, 8080 | 149 |
| 104.18.125.185 | 80, 443, 8080 | 151 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:136:7e37:b453:d8c2:bd9f:a67f] | 80, 443, 8080 | 3 |
| [2606:4700:9641:2798:a8f5:4e05:e173:5b4d] | 80, 443, 8080 | 3 |
| [2606:4700:136:7e37:b453:d8c2:bd9f:a67f] | 80, 443, 8080 | 3 |
| [2606:4700:9641:2798:a8f5:4e05:e173:5b4d] | 80, 443, 8080 | 3 |
| [2606:4700:136:7e37:b453:d8c2:bd9f:a67f] | 80, 443, 8080 | 3 |
| [2606:4700:9641:2798:a8f5:4e05:e173:5b4d] | 80, 443, 8080 | 3 |
| [2606:4700:976c:92a9:dd19:f17c:8ecc:617a] | 80, 443, 8080 | 4 |
| [2606:4700:976c:a7aa:bd22:f88b:38:bad1] | 80, 443, 8080 | 4 |
| [2606:4700:91b2:8cab:ab1f:34b9:b920:4448] | 80, 443, 8080 | 4 |
| [2606:4700:976c:92a9:dd19:f17c:8ecc:617a] | 80, 443, 8080 | 4 |
| [2606:4700:976c:a7aa:bd22:f88b:38:bad1] | 80, 443, 8080 | 4 |
| [2606:4700:91b2:8cab:ab1f:34b9:b920:4448] | 80, 443, 8080 | 4 |
| [2606:4700:976c:92a9:dd19:f17c:8ecc:617a] | 80, 443, 8080 | 4 |
| [2606:4700:976c:a7aa:bd22:f88b:38:bad1] | 80, 443, 8080 | 4 |
| [2606:4700:91b2:8cab:ab1f:34b9:b920:4448] | 80, 443, 8080 | 4 |

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
