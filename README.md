# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-27 00:10:54 +0330

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
| 172.67.109.141 | 80, 443, 8080 | 55 |
| 172.67.105.205 | 80, 443, 8080 | 55 |
| 198.41.222.165 | 80, 443, 8080 | 74 |
| 198.41.222.165 | 80, 443, 8080 | 74 |
| 104.17.229.166 | 80, 443, 8080 | 127 |
| 104.17.229.166 | 80, 443, 8080 | 127 |
| 104.16.244.189 | 80, 443, 8080 | 128 |
| 104.16.244.189 | 80, 443, 8080 | 128 |
| 104.16.181.80 | 80, 443, 8080 | 129 |
| 104.19.174.68 | 80, 443, 8080 | 129 |
| 104.16.181.80 | 80, 443, 8080 | 129 |
| 104.19.174.68 | 80, 443, 8080 | 129 |
| 172.67.252.26 | 80, 443, 8080 | 145 |
| 172.67.236.101 | 80, 443, 8080 | 145 |
| 172.67.195.149 | 80, 443, 8080 | 146 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9a90:2007:60ae:7ee2:38fd:3fff] | 80, 443, 8080 | 3 |
| [2606:4700:8397:b3dc:5e7d:2b19:dc63:83a4] | 80, 443, 8080 | 3 |
| [2606:4700:9a90:5b0a:2b88:69c2:7100:5061] | 80, 443, 8080 | 3 |
| [2606:4700:9a90:2007:60ae:7ee2:38fd:3fff] | 80, 443, 8080 | 3 |
| [2606:4700:8397:b3dc:5e7d:2b19:dc63:83a4] | 80, 443, 8080 | 3 |
| [2606:4700:9a90:5b0a:2b88:69c2:7100:5061] | 80, 443, 8080 | 3 |
| [2606:4700:9a90:2007:60ae:7ee2:38fd:3fff] | 80, 443, 8080 | 3 |
| [2606:4700:8397:b3dc:5e7d:2b19:dc63:83a4] | 80, 443, 8080 | 3 |
| [2606:4700:9a90:5b0a:2b88:69c2:7100:5061] | 80, 443, 8080 | 3 |
| [2606:4700:8397:8c68:d391:9cb2:89a2:9e7] | 80, 443, 8080 | 4 |
| [2606:4700:8397:8c68:d391:9cb2:89a2:9e7] | 80, 443, 8080 | 4 |
| [2606:4700:8397:8c68:d391:9cb2:89a2:9e7] | 80, 443, 8080 | 4 |
| [2606:4700:4700:93f5:7a37:ceaf:b6e3:81a9] | 80, 443, 8080 | 13 |
| [2606:4700:4700:93f5:7a37:ceaf:b6e3:81a9] | 80, 443, 8080 | 13 |
| [2606:4700:4700:93f5:7a37:ceaf:b6e3:81a9] | 80, 443, 8080 | 13 |

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
