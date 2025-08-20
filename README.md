# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-08-21 00:10:05 +0330

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
|----|------------------|--------------|
| 198.41.211.218 | 80, 443, 8080 | 51 |
| 172.64.90.138 | 80, 443, 8080 | 52 |
| 190.93.245.86 | 80, 443, 8080 | 52 |
| 141.101.115.219 | 80, 443, 8080 | 56 |
| 172.67.122.219 | 80, 443, 8080 | 56 |
| 162.159.235.92 | 80, 443, 8080 | 59 |
| 172.67.190.3 | 80, 443, 8080 | 133 |
| 172.67.132.79 | 80, 443, 8080 | 133 |
| 172.67.228.195 | 80, 443, 8080 | 133 |
| 172.67.189.59 | 80, 443, 8080 | 133 |
| 162.159.246.99 | 80, 443, 8080 | 137 |
| 162.159.245.242 | 80, 443, 8080 | 140 |
| 104.19.16.193 | 80, 443, 8080 | 146 |
| 104.16.135.124 | 80, 443, 8080 | 148 |
| 104.17.185.152 | 80, 443, 8080 | 157 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|----|------------------|--------------|
| [2606:4700:91b3:89e3:5764:57a1:64db:2cb2] | 80, 443, 8080 | 3 |
| [2606:4700:9aef:1f1c:85fc:ab4:d48a:2b69] | 80, 443, 8080 | 3 |
| [2606:4700:91b3:89e3:5764:57a1:64db:2cb2] | 80, 443, 8080 | 3 |
| [2606:4700:9aef:1f1c:85fc:ab4:d48a:2b69] | 80, 443, 8080 | 3 |
| [2606:4700:91b3:89e3:5764:57a1:64db:2cb2] | 80, 443, 8080 | 3 |
| [2606:4700:9aef:1f1c:85fc:ab4:d48a:2b69] | 80, 443, 8080 | 3 |
| [2606:4700:20:77e8:dec8:fc21:7f38:6fb0] | 80, 443, 8080 | 4 |
| [2606:4700:3037:e9c6:c7bf:5103:712:fb11] | 80, 443, 8080 | 4 |
| [2606:4700:9aef:1e81:5f1d:f47b:4e16:35b3] | 80, 443, 8080 | 4 |
| [2606:4700:20:77e8:dec8:fc21:7f38:6fb0] | 80, 443, 8080 | 4 |
| [2606:4700:3037:e9c6:c7bf:5103:712:fb11] | 80, 443, 8080 | 4 |
| [2606:4700:9aef:1e81:5f1d:f47b:4e16:35b3] | 80, 443, 8080 | 4 |
| [2606:4700:20:77e8:dec8:fc21:7f38:6fb0] | 80, 443, 8080 | 4 |
| [2606:4700:3037:e9c6:c7bf:5103:712:fb11] | 80, 443, 8080 | 4 |
| [2606:4700:9aef:1e81:5f1d:f47b:4e16:35b3] | 80, 443, 8080 | 4 |

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
