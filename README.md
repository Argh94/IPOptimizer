# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-08-29 00:07:55 +0330

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
| 198.41.209.137 | 80, 443, 8080 | 51 |
| 162.159.252.202 | 80, 443, 8080 | 52 |
| 162.159.253.203 | 80, 443, 8080 | 52 |
| 162.159.194.20 | 80, 443, 8080 | 53 |
| 198.41.223.211 | 80, 443, 8080 | 56 |
| 172.64.84.3 | 80, 443, 8080 | 57 |
| 172.67.64.48 | 80, 443, 8080 | 57 |
| 172.67.94.97 | 80, 443, 8080 | 57 |
| 104.17.164.125 | 80, 443, 8080 | 128 |
| 104.18.135.60 | 80, 443, 8080 | 129 |
| 104.18.165.75 | 80, 443, 8080 | 130 |
| 104.16.253.248 | 80, 443, 8080 | 130 |
| 172.67.157.183 | 80, 443, 8080 | 131 |
| 104.18.121.186 | 80, 443, 8080 | 137 |
| 162.159.46.166 | 80, 443, 8080 | 148 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9c69:2c39:89d:29ce:fa50:e149] | 80, 443, 8080 | 3 |
| [2606:4700:8cae:8747:5c2a:fe73:fb33:e741] | 80, 443, 8080 | 3 |
| [2606:4700:9c69:2c39:89d:29ce:fa50:e149] | 80, 443, 8080 | 3 |
| [2606:4700:8cae:8747:5c2a:fe73:fb33:e741] | 80, 443, 8080 | 3 |
| [2606:4700:9c69:2c39:89d:29ce:fa50:e149] | 80, 443, 8080 | 3 |
| [2606:4700:8cae:8747:5c2a:fe73:fb33:e741] | 80, 443, 8080 | 3 |
| [2606:4700:8d98:fca0:5d22:56d:c43c:915] | 80, 443, 8080 | 4 |
| [2606:4700:4409:7143:97dc:1f4f:c7c1:c43a] | 80, 443, 8080 | 4 |
| [2606:4700:4409:20c2:203d:ac7c:ce12:8375] | 80, 443, 8080 | 4 |
| [2606:4700:8d98:fca0:5d22:56d:c43c:915] | 80, 443, 8080 | 4 |
| [2606:4700:4409:7143:97dc:1f4f:c7c1:c43a] | 80, 443, 8080 | 4 |
| [2606:4700:4409:20c2:203d:ac7c:ce12:8375] | 80, 443, 8080 | 4 |
| [2606:4700:8d98:fca0:5d22:56d:c43c:915] | 80, 443, 8080 | 4 |
| [2606:4700:4409:7143:97dc:1f4f:c7c1:c43a] | 80, 443, 8080 | 4 |
| [2606:4700:4409:20c2:203d:ac7c:ce12:8375] | 80, 443, 8080 | 4 |

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
