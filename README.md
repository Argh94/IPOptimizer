# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-08-24 00:06:39 +0330

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
| 172.64.94.148 | 80, 443, 8080 | 52 |
| 162.159.240.168 | 80, 443, 8080 | 54 |
| 172.64.94.9 | 80, 443, 8080 | 54 |
| 141.101.115.90 | 80, 443, 8080 | 56 |
| 172.67.121.63 | 80, 443, 8080 | 56 |
| 198.41.209.22 | 80, 443, 8080 | 57 |
| 162.159.236.154 | 80, 443, 8080 | 57 |
| 172.64.67.81 | 80, 443, 8080 | 57 |
| 162.159.136.154 | 80, 443, 8080 | 78 |
| 104.16.252.133 | 80, 443, 8080 | 128 |
| 104.17.37.161 | 80, 443, 8080 | 128 |
| 104.18.212.209 | 80, 443, 8080 | 129 |
| 104.17.36.4 | 80, 443, 8080 | 130 |
| 104.18.84.3 | 80, 443, 8080 | 132 |
| 172.67.196.221 | 80, 443, 8080 | 133 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:440a:5408:31e5:a4a5:fab1:28a4] | 80, 443, 8080 | 3 |
| [2606:4700:d1:98d0:9f8b:ff2f:afd6:17b0] | 80, 443, 8080 | 3 |
| [2606:4700:440a:5408:31e5:a4a5:fab1:28a4] | 80, 443, 8080 | 3 |
| [2606:4700:d1:98d0:9f8b:ff2f:afd6:17b0] | 80, 443, 8080 | 3 |
| [2606:4700:440a:5408:31e5:a4a5:fab1:28a4] | 80, 443, 8080 | 3 |
| [2606:4700:d1:98d0:9f8b:ff2f:afd6:17b0] | 80, 443, 8080 | 3 |
| [2606:4700:9ade:ce62:23d2:99b6:9f45:52e9] | 80, 443, 8080 | 4 |
| [2606:4700:9ade:be21:7fa6:a540:f988:1edf] | 80, 443, 8080 | 4 |
| [2606:4700:d1:1e5e:ce0e:7c49:c46b:32a7] | 80, 443, 8080 | 4 |
| [2606:4700:9ade:ce62:23d2:99b6:9f45:52e9] | 80, 443, 8080 | 4 |
| [2606:4700:9ade:be21:7fa6:a540:f988:1edf] | 80, 443, 8080 | 4 |
| [2606:4700:d1:1e5e:ce0e:7c49:c46b:32a7] | 80, 443, 8080 | 4 |
| [2606:4700:9ade:ce62:23d2:99b6:9f45:52e9] | 80, 443, 8080 | 4 |
| [2606:4700:9ade:be21:7fa6:a540:f988:1edf] | 80, 443, 8080 | 4 |
| [2606:4700:d1:1e5e:ce0e:7c49:c46b:32a7] | 80, 443, 8080 | 4 |

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
