# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-08-21 10:27:57 +0330

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
| 162.159.235.154 | 80, 443, 8080 | 51 |
| 162.159.235.254 | 80, 443, 8080 | 52 |
| 172.64.85.154 | 80, 443, 8080 | 52 |
| 162.159.248.248 | 80, 443, 8080 | 52 |
| 172.64.85.155 | 80, 443, 8080 | 52 |
| 162.159.130.139 | 80, 443, 8080 | 56 |
| 162.159.249.190 | 80, 443, 8080 | 71 |
| 172.67.189.131 | 80, 443, 8080 | 133 |
| 172.67.224.93 | 80, 443, 8080 | 133 |
| 172.67.223.243 | 80, 443, 8080 | 133 |
| 104.16.116.170 | 80, 443, 8080 | 148 |
| 104.27.202.10 | 80, 443, 8080 | 153 |
| 104.18.126.170 | 80, 443, 8080 | 156 |
| 104.16.116.96 | 80, 443, 8080 | 160 |
| 104.27.125.191 | 80, 443, 8080 | 167 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|----|------------------|--------------|
| [2606:4700:91bc:856c:714a:aae8:a503:b5fa] | 80, 443, 8080 | 3 |
| [2606:4700:9a6a:bc97:37a2:77cd:d034:2f55] | 80, 443, 8080 | 3 |
| [2606:4700:3001:3565:1316:88ce:4d2c:f18d] | 80, 443, 8080 | 3 |
| [2606:4700:91bc:856c:714a:aae8:a503:b5fa] | 80, 443, 8080 | 3 |
| [2606:4700:9a6a:bc97:37a2:77cd:d034:2f55] | 80, 443, 8080 | 3 |
| [2606:4700:3001:3565:1316:88ce:4d2c:f18d] | 80, 443, 8080 | 3 |
| [2606:4700:91bc:856c:714a:aae8:a503:b5fa] | 80, 443, 8080 | 3 |
| [2606:4700:9a6a:bc97:37a2:77cd:d034:2f55] | 80, 443, 8080 | 3 |
| [2606:4700:3001:3565:1316:88ce:4d2c:f18d] | 80, 443, 8080 | 3 |
| [2606:4700:91bc:792d:253b:80bf:6c4a:2156] | 80, 443, 8080 | 4 |
| [2606:4700:91bc:792d:253b:80bf:6c4a:2156] | 80, 443, 8080 | 4 |
| [2606:4700:91bc:792d:253b:80bf:6c4a:2156] | 80, 443, 8080 | 4 |
| [2606:4700:13a:ed8e:61b4:650b:4b22:ef47] | 80, 443, 8080 | 6 |
| [2606:4700:13a:ed8e:61b4:650b:4b22:ef47] | 80, 443, 8080 | 6 |
| [2606:4700:13a:ed8e:61b4:650b:4b22:ef47] | 80, 443, 8080 | 6 |

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
