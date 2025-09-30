# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-01 00:11:38 +0330

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
| 198.41.208.215 | 80, 443, 8080 | 52 |
| 141.101.121.4 | 80, 443, 8080 | 53 |
| 198.41.209.10 | 80, 443, 8080 | 54 |
| 198.41.209.149 | 80, 443, 8080 | 54 |
| 162.159.248.175 | 80, 443, 8080 | 54 |
| 198.41.209.87 | 80, 443, 8080 | 54 |
| 162.159.36.217 | 80, 443, 8080 | 68 |
| 104.16.237.97 | 80, 443, 8080 | 129 |
| 104.17.107.155 | 80, 443, 8080 | 129 |
| 104.18.100.225 | 80, 443, 8080 | 129 |
| 104.19.29.225 | 80, 443, 8080 | 141 |
| 172.67.140.24 | 80, 443, 8080 | 142 |
| 172.67.128.5 | 80, 443, 8080 | 142 |
| 172.67.202.85 | 80, 443, 8080 | 142 |
| 172.67.181.51 | 80, 443, 8080 | 142 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9b0e:a43:c8d3:9251:e0b2:1de0] | 80, 443, 8080 | 4 |
| [2606:4700:3056:1e43:17bf:4c9b:f6f7:28b3] | 80, 443, 8080 | 4 |
| [2606:4700:3010:2bcd:a961:a863:386c:7461] | 80, 443, 8080 | 4 |
| [2606:4700:9b0e:afc2:ff95:13:6254:df8d] | 80, 443, 8080 | 4 |
| [2606:4700:9b0e:a43:c8d3:9251:e0b2:1de0] | 80, 443, 8080 | 4 |
| [2606:4700:3056:1e43:17bf:4c9b:f6f7:28b3] | 80, 443, 8080 | 4 |
| [2606:4700:3010:2bcd:a961:a863:386c:7461] | 80, 443, 8080 | 4 |
| [2606:4700:9b0e:afc2:ff95:13:6254:df8d] | 80, 443, 8080 | 4 |
| [2606:4700:9b0e:a43:c8d3:9251:e0b2:1de0] | 80, 443, 8080 | 4 |
| [2606:4700:3056:1e43:17bf:4c9b:f6f7:28b3] | 80, 443, 8080 | 4 |
| [2606:4700:3010:2bcd:a961:a863:386c:7461] | 80, 443, 8080 | 4 |
| [2606:4700:9b0e:afc2:ff95:13:6254:df8d] | 80, 443, 8080 | 4 |
| [2606:4700:3010:76c6:ea9a:4115:13d2:c378] | 80, 443, 8080 | 13 |
| [2606:4700:3010:76c6:ea9a:4115:13d2:c378] | 80, 443, 8080 | 13 |
| [2606:4700:3010:76c6:ea9a:4115:13d2:c378] | 80, 443, 8080 | 13 |

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
