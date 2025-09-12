# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-12 10:17:57 +0330

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
| 198.41.208.203 | 80, 443, 8080 | 51 |
| 198.41.208.218 | 80, 443, 8080 | 51 |
| 198.41.208.182 | 80, 443, 8080 | 51 |
| 141.101.122.148 | 80, 443, 8080 | 52 |
| 141.101.114.166 | 80, 443, 8080 | 53 |
| 162.159.236.133 | 80, 443, 8080 | 54 |
| 172.67.71.245 | 80, 443, 8080 | 55 |
| 141.101.113.117 | 80, 443, 8080 | 55 |
| 172.64.90.245 | 80, 443, 8080 | 56 |
| 104.18.106.188 | 80, 443, 8080 | 129 |
| 104.19.196.68 | 80, 443, 8080 | 129 |
| 104.16.172.211 | 80, 443, 8080 | 131 |
| 104.17.20.1 | 80, 443, 8080 | 131 |
| 104.18.105.124 | 80, 443, 8080 | 132 |
| 172.67.241.211 | 80, 443, 8080 | 147 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:3036:cbd6:7db1:d1f:8f9f:8685] | 80, 443, 8080 | 3 |
| [2606:4700:9a61:4bc5:1815:4acf:f1b0:48cc] | 80, 443, 8080 | 3 |
| [2606:4700:3108:e212:30a4:1dc1:233f:63ab] | 80, 443, 8080 | 3 |
| [2606:4700:3036:cbd6:7db1:d1f:8f9f:8685] | 80, 443, 8080 | 3 |
| [2606:4700:9a61:4bc5:1815:4acf:f1b0:48cc] | 80, 443, 8080 | 3 |
| [2606:4700:3108:e212:30a4:1dc1:233f:63ab] | 80, 443, 8080 | 3 |
| [2606:4700:3036:cbd6:7db1:d1f:8f9f:8685] | 80, 443, 8080 | 3 |
| [2606:4700:9a61:4bc5:1815:4acf:f1b0:48cc] | 80, 443, 8080 | 3 |
| [2606:4700:3108:e212:30a4:1dc1:233f:63ab] | 80, 443, 8080 | 3 |
| [2606:4700:3036:8e18:e3af:c09e:abb8:606f] | 80, 443, 8080 | 4 |
| [2606:4700:8dd5:d6ea:5dd7:d773:c780:9d47] | 80, 443, 8080 | 4 |
| [2606:4700:3036:8e18:e3af:c09e:abb8:606f] | 80, 443, 8080 | 4 |
| [2606:4700:8dd5:d6ea:5dd7:d773:c780:9d47] | 80, 443, 8080 | 4 |
| [2606:4700:3036:8e18:e3af:c09e:abb8:606f] | 80, 443, 8080 | 4 |
| [2606:4700:8dd5:d6ea:5dd7:d773:c780:9d47] | 80, 443, 8080 | 4 |

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
