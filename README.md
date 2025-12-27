# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-28 00:14:05 +0330

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
| 198.41.208.203 | 80, 443, 8080 | 50 |
| 198.41.208.203 | 80, 443, 8080 | 50 |
| 198.41.209.120 | 80, 443, 8080 | 51 |
| 198.41.209.120 | 80, 443, 8080 | 51 |
| 198.41.209.112 | 80, 443, 8080 | 52 |
| 198.41.209.112 | 80, 443, 8080 | 52 |
| 172.64.80.149 | 80, 443, 8080 | 53 |
| 172.64.80.149 | 80, 443, 8080 | 53 |
| 104.16.254.60 | 80, 443, 8080 | 55 |
| 104.16.254.60 | 80, 443, 8080 | 55 |
| 198.41.222.228 | 80, 443, 8080 | 79 |
| 104.16.102.82 | 80, 443, 8080 | 133 |
| 162.159.254.112 | 80, 443, 8080 | 142 |
| 104.19.52.177 | 80, 443, 8080 | 149 |
| 104.18.16.45 | 80, 443, 8080 | 150 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:139:2432:ecd9:8da4:5fa5:48cf] | 80, 443, 8080 | 3 |
| [2606:4700:139:2432:ecd9:8da4:5fa5:48cf] | 80, 443, 8080 | 3 |
| [2606:4700:139:2432:ecd9:8da4:5fa5:48cf] | 80, 443, 8080 | 3 |
| [2606:4700:8394:d735:eac2:a91e:c76a:6346] | 80, 443, 8080 | 8 |
| [2606:4700:8d7c:1c5c:723b:b73c:94b1:a398] | 80, 443, 8080 | 8 |
| [2606:4700:8394:8d2b:1bf1:4d79:aabf:43a3] | 80, 443, 8080 | 8 |
| [2606:4700:9b0f:f0f2:2b69:fc8a:16dd:f6ed] | 80, 443, 8080 | 8 |
| [2606:4700:8394:d735:eac2:a91e:c76a:6346] | 80, 443, 8080 | 8 |
| [2606:4700:8d7c:1c5c:723b:b73c:94b1:a398] | 80, 443, 8080 | 8 |
| [2606:4700:8394:8d2b:1bf1:4d79:aabf:43a3] | 80, 443, 8080 | 8 |
| [2606:4700:9b0f:f0f2:2b69:fc8a:16dd:f6ed] | 80, 443, 8080 | 8 |
| [2606:4700:8394:d735:eac2:a91e:c76a:6346] | 80, 443, 8080 | 8 |
| [2606:4700:8d7c:1c5c:723b:b73c:94b1:a398] | 80, 443, 8080 | 8 |
| [2606:4700:8394:8d2b:1bf1:4d79:aabf:43a3] | 80, 443, 8080 | 8 |
| [2606:4700:9b0f:f0f2:2b69:fc8a:16dd:f6ed] | 80, 443, 8080 | 8 |

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
