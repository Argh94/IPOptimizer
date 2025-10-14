# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-14 10:18:30 +0330

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
| 198.41.209.202 | 80, 443, 8080 | 50 |
| 172.64.88.85 | 80, 443, 8080 | 51 |
| 198.41.208.9 | 80, 443, 8080 | 53 |
| 198.41.209.180 | 80, 443, 8080 | 55 |
| 190.93.245.247 | 80, 443, 8080 | 55 |
| 172.67.105.161 | 80, 443, 8080 | 55 |
| 198.41.208.231 | 80, 443, 8080 | 120 |
| 104.19.10.166 | 80, 443, 8080 | 127 |
| 104.16.216.245 | 80, 443, 8080 | 129 |
| 104.18.73.186 | 80, 443, 8080 | 130 |
| 104.18.83.85 | 80, 443, 8080 | 131 |
| 104.18.150.71 | 80, 443, 8080 | 133 |
| 172.67.237.95 | 80, 443, 8080 | 142 |
| 172.67.139.126 | 80, 443, 8080 | 142 |
| 172.67.209.133 | 80, 443, 8080 | 144 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9c64:165e:8e9a:f21a:1187:a16d] | 80, 443, 8080 | 3 |
| [2606:4700:9b04:7a79:758d:fa32:f781:4c72] | 80, 443, 8080 | 3 |
| [2606:4700:8d72:6b4:1e4e:4fd1:395e:ac6f] | 80, 443, 8080 | 3 |
| [2606:4700:9c64:165e:8e9a:f21a:1187:a16d] | 80, 443, 8080 | 3 |
| [2606:4700:9b04:7a79:758d:fa32:f781:4c72] | 80, 443, 8080 | 3 |
| [2606:4700:8d72:6b4:1e4e:4fd1:395e:ac6f] | 80, 443, 8080 | 3 |
| [2606:4700:9c64:165e:8e9a:f21a:1187:a16d] | 80, 443, 8080 | 3 |
| [2606:4700:9b04:7a79:758d:fa32:f781:4c72] | 80, 443, 8080 | 3 |
| [2606:4700:8d72:6b4:1e4e:4fd1:395e:ac6f] | 80, 443, 8080 | 3 |
| [2606:4700:9c64:915a:db24:cef1:4067:5e24] | 80, 443, 8080 | 4 |
| [2606:4700:9c64:915a:db24:cef1:4067:5e24] | 80, 443, 8080 | 4 |
| [2606:4700:9c64:915a:db24:cef1:4067:5e24] | 80, 443, 8080 | 4 |
| [2606:4700:100:3c72:963e:3b9:5a50:c6b5] | 80, 443, 8080 | 13 |
| [2606:4700:100:3c72:963e:3b9:5a50:c6b5] | 80, 443, 8080 | 13 |
| [2606:4700:100:3c72:963e:3b9:5a50:c6b5] | 80, 443, 8080 | 13 |

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
