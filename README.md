# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-08 10:18:33 +0330

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
| 198.41.209.186 | 80, 443, 8080 | 51 |
| 198.41.208.218 | 80, 443, 8080 | 51 |
| 198.41.209.110 | 80, 443, 8080 | 51 |
| 198.41.209.137 | 80, 443, 8080 | 51 |
| 198.41.208.113 | 80, 443, 8080 | 52 |
| 172.67.97.37 | 80, 443, 8080 | 55 |
| 172.67.99.15 | 80, 443, 8080 | 55 |
| 172.67.92.31 | 80, 443, 8080 | 55 |
| 198.41.222.71 | 80, 443, 8080 | 92 |
| 104.19.222.11 | 80, 443, 8080 | 147 |
| 104.17.134.183 | 80, 443, 8080 | 151 |
| 104.16.15.221 | 80, 443, 8080 | 158 |
| 104.19.244.231 | 80, 443, 8080 | 158 |
| 172.67.249.193 | 80, 443, 8080 | 210 |
| 172.67.184.98 | 80, 443, 8080 | 214 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8deb:a72f:59:153e:d270:3f36] | 80, 443, 8080 | 3 |
| [2606:4700:8deb:a72f:59:153e:d270:3f36] | 80, 443, 8080 | 3 |
| [2606:4700:8deb:a72f:59:153e:d270:3f36] | 80, 443, 8080 | 3 |
| [2606:4700:9aec:59cc:5ea5:be70:1824:200d] | 80, 443, 8080 | 4 |
| [2606:4700:8de0:2e4c:3a98:89ef:5598:c6cf] | 80, 443, 8080 | 4 |
| [2606:4700:9aec:59cc:5ea5:be70:1824:200d] | 80, 443, 8080 | 4 |
| [2606:4700:8de0:2e4c:3a98:89ef:5598:c6cf] | 80, 443, 8080 | 4 |
| [2606:4700:9aec:59cc:5ea5:be70:1824:200d] | 80, 443, 8080 | 4 |
| [2606:4700:8de0:2e4c:3a98:89ef:5598:c6cf] | 80, 443, 8080 | 4 |
| [2606:4700:3003:d7b8:25de:34ce:cb50:dc6c] | 80, 443, 8080 | 13 |
| [2606:4700:3003:29b5:3f74:a6a:e317:6eb9] | 80, 443, 8080 | 13 |
| [2606:4700:3003:d7b8:25de:34ce:cb50:dc6c] | 80, 443, 8080 | 13 |
| [2606:4700:3003:29b5:3f74:a6a:e317:6eb9] | 80, 443, 8080 | 13 |
| [2606:4700:3003:d7b8:25de:34ce:cb50:dc6c] | 80, 443, 8080 | 13 |
| [2606:4700:3003:29b5:3f74:a6a:e317:6eb9] | 80, 443, 8080 | 13 |

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
