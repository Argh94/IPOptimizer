# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-02 00:11:49 +0330

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
| 198.41.209.202 | 80, 443, 8080 | 53 |
| 198.41.209.149 | 80, 443, 8080 | 54 |
| 198.41.209.10 | 80, 443, 8080 | 54 |
| 162.159.248.175 | 80, 443, 8080 | 54 |
| 162.159.254.21 | 80, 443, 8080 | 54 |
| 173.245.49.215 | 80, 443, 8080 | 55 |
| 198.41.211.118 | 80, 443, 8080 | 55 |
| 172.67.69.159 | 80, 443, 8080 | 56 |
| 198.41.223.44 | 80, 443, 8080 | 95 |
| 104.16.228.54 | 80, 443, 8080 | 128 |
| 104.19.99.234 | 80, 443, 8080 | 131 |
| 173.245.49.221 | 80, 443, 8080 | 131 |
| 172.64.85.49 | 80, 443, 8080 | 132 |
| 172.67.209.169 | 80, 443, 8080 | 142 |
| 172.67.189.208 | 80, 443, 8080 | 142 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:3029:2d38:c504:d99e:f739:9269] | 80, 443, 8080 | 3 |
| [2606:4700:9a6f:322e:4369:70ea:be60:27a2] | 80, 443, 8080 | 3 |
| [2606:4700:16:9eec:e518:ed48:c660:3b2e] | 80, 443, 8080 | 3 |
| [2606:4700:3029:2d38:c504:d99e:f739:9269] | 80, 443, 8080 | 3 |
| [2606:4700:9a6f:322e:4369:70ea:be60:27a2] | 80, 443, 8080 | 3 |
| [2606:4700:16:9eec:e518:ed48:c660:3b2e] | 80, 443, 8080 | 3 |
| [2606:4700:3029:2d38:c504:d99e:f739:9269] | 80, 443, 8080 | 3 |
| [2606:4700:9a6f:322e:4369:70ea:be60:27a2] | 80, 443, 8080 | 3 |
| [2606:4700:16:9eec:e518:ed48:c660:3b2e] | 80, 443, 8080 | 3 |
| [2606:4700:300b:9c11:9b45:7522:5d71:cc97] | 80, 443, 8080 | 4 |
| [2606:4700:300b:9c11:9b45:7522:5d71:cc97] | 80, 443, 8080 | 4 |
| [2606:4700:300b:9c11:9b45:7522:5d71:cc97] | 80, 443, 8080 | 4 |
| [2606:4700:16:6fc:4531:c85d:bf6d:d7c7] | 80, 443, 8080 | 12 |
| [2606:4700:16:6fc:4531:c85d:bf6d:d7c7] | 80, 443, 8080 | 12 |
| [2606:4700:16:6fc:4531:c85d:bf6d:d7c7] | 80, 443, 8080 | 12 |

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
