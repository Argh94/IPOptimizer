# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-03 00:31:16 +0330

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
| 198.41.222.58 | 80, 443, 8080 | 53 |
| 198.41.222.58 | 80, 443, 8080 | 53 |
| 162.159.235.32 | 80, 443, 8080 | 54 |
| 162.159.235.32 | 80, 443, 8080 | 54 |
| 162.159.235.120 | 80, 443, 8080 | 56 |
| 162.159.235.120 | 80, 443, 8080 | 56 |
| 104.16.242.109 | 80, 443, 8080 | 130 |
| 104.18.210.162 | 80, 443, 8080 | 130 |
| 104.17.227.196 | 80, 443, 8080 | 131 |
| 104.17.181.16 | 80, 443, 8080 | 132 |
| 104.18.203.248 | 80, 443, 8080 | 136 |
| 172.64.80.202 | 80, 443, 8080 | 174 |
| 172.64.80.202 | 80, 443, 8080 | 174 |
| 172.67.210.88 | 80, 443, 8080 | 177 |
| 172.67.210.88 | 80, 443, 8080 | 177 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8391:e69:f705:320c:fde1:f0d7] | 80, 443, 8080 | 3 |
| [2606:4700:6:2467:7280:1df8:83be:86bb] | 80, 443, 8080 | 3 |
| [2606:4700:8391:ed1d:1ba0:b57:24fe:960b] | 80, 443, 8080 | 3 |
| [2606:4700:8ca5:5a3c:fdd9:9d07:aaf1:e2a4] | 80, 443, 8080 | 3 |
| [2606:4700:8392:47fa:c8a8:b51e:1fa4:6908] | 80, 443, 8080 | 3 |
| [2606:4700:8391:e69:f705:320c:fde1:f0d7] | 80, 443, 8080 | 3 |
| [2606:4700:6:2467:7280:1df8:83be:86bb] | 80, 443, 8080 | 3 |
| [2606:4700:8391:ed1d:1ba0:b57:24fe:960b] | 80, 443, 8080 | 3 |
| [2606:4700:8ca5:5a3c:fdd9:9d07:aaf1:e2a4] | 80, 443, 8080 | 3 |
| [2606:4700:8392:47fa:c8a8:b51e:1fa4:6908] | 80, 443, 8080 | 3 |
| [2606:4700:8391:e69:f705:320c:fde1:f0d7] | 80, 443, 8080 | 3 |
| [2606:4700:6:2467:7280:1df8:83be:86bb] | 80, 443, 8080 | 3 |
| [2606:4700:8391:ed1d:1ba0:b57:24fe:960b] | 80, 443, 8080 | 3 |
| [2606:4700:8ca5:5a3c:fdd9:9d07:aaf1:e2a4] | 80, 443, 8080 | 3 |
| [2606:4700:8392:47fa:c8a8:b51e:1fa4:6908] | 80, 443, 8080 | 3 |

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
