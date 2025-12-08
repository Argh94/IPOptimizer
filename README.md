# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-09 00:16:40 +0330

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
| 198.41.208.41 | 80, 443, 8080 | 52 |
| 198.41.209.47 | 80, 443, 8080 | 52 |
| 198.41.209.6 | 80, 443, 8080 | 52 |
| 198.41.208.41 | 80, 443, 8080 | 52 |
| 198.41.209.47 | 80, 443, 8080 | 52 |
| 198.41.209.6 | 80, 443, 8080 | 52 |
| 172.64.90.211 | 80, 443, 8080 | 54 |
| 198.41.214.216 | 80, 443, 8080 | 54 |
| 172.64.90.211 | 80, 443, 8080 | 54 |
| 198.41.214.216 | 80, 443, 8080 | 54 |
| 198.41.222.51 | 80, 443, 8080 | 73 |
| 104.16.144.205 | 80, 443, 8080 | 128 |
| 104.19.196.17 | 80, 443, 8080 | 129 |
| 104.18.189.104 | 80, 443, 8080 | 130 |
| 104.17.251.240 | 80, 443, 8080 | 130 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9ad3:df8c:d396:9e4a:ce6d:283] | 80, 443, 8080 | 3 |
| [2606:4700:8ded:d283:ef80:c44:905c:6085] | 80, 443, 8080 | 3 |
| [2606:4700:23:2d84:4121:deae:b403:5018] | 80, 443, 8080 | 3 |
| [2606:4700:9ad3:df8c:d396:9e4a:ce6d:283] | 80, 443, 8080 | 3 |
| [2606:4700:8ded:d283:ef80:c44:905c:6085] | 80, 443, 8080 | 3 |
| [2606:4700:23:2d84:4121:deae:b403:5018] | 80, 443, 8080 | 3 |
| [2606:4700:9ad3:df8c:d396:9e4a:ce6d:283] | 80, 443, 8080 | 3 |
| [2606:4700:8ded:d283:ef80:c44:905c:6085] | 80, 443, 8080 | 3 |
| [2606:4700:23:2d84:4121:deae:b403:5018] | 80, 443, 8080 | 3 |
| [2606:4700:9a64:bcf9:2ae5:a411:372e:f4c0] | 80, 443, 8080 | 4 |
| [2606:4700:9a64:9182:199d:6357:a02b:6cc8] | 80, 443, 8080 | 4 |
| [2606:4700:9a64:bcf9:2ae5:a411:372e:f4c0] | 80, 443, 8080 | 4 |
| [2606:4700:9a64:9182:199d:6357:a02b:6cc8] | 80, 443, 8080 | 4 |
| [2606:4700:9a64:bcf9:2ae5:a411:372e:f4c0] | 80, 443, 8080 | 4 |
| [2606:4700:9a64:9182:199d:6357:a02b:6cc8] | 80, 443, 8080 | 4 |

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
