# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-08-22 10:21:37 +0330

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
| 172.64.94.9 | 80, 443, 8080 | 50 |
| 162.159.248.151 | 80, 443, 8080 | 51 |
| 141.101.115.46 | 80, 443, 8080 | 51 |
| 198.41.208.176 | 80, 443, 8080 | 56 |
| 198.41.209.0 | 80, 443, 8080 | 56 |
| 162.159.130.53 | 80, 443, 8080 | 57 |
| 198.41.215.168 | 80, 443, 8080 | 57 |
| 172.67.170.132 | 80, 443, 8080 | 133 |
| 172.67.201.255 | 80, 443, 8080 | 134 |
| 172.67.197.64 | 80, 443, 8080 | 134 |
| 104.16.226.90 | 80, 443, 8080 | 155 |
| 104.19.15.217 | 80, 443, 8080 | 160 |
| 104.18.21.170 | 80, 443, 8080 | 167 |
| 104.16.155.145 | 80, 443, 8080 | 180 |
| 104.21.88.58 | 80, 443, 8080 | 187 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|----|------------------|--------------|
| [2606:4700:4700:886f:8053:1cf9:d7ff:9d47] | 80, 443, 8080 | 3 |
| [2606:4700:9aef:5b59:1eaf:aee6:ea9:e3af] | 80, 443, 8080 | 3 |
| [2606:4700:24:d236:8678:d811:a6d4:7a55] | 80, 443, 8080 | 3 |
| [2606:4700:24:1bb5:2fa5:4a98:1889:6b50] | 80, 443, 8080 | 3 |
| [2606:4700:4700:6734:5e1b:967:76c4:188e] | 80, 443, 8080 | 3 |
| [2606:4700:4700:886f:8053:1cf9:d7ff:9d47] | 80, 443, 8080 | 3 |
| [2606:4700:9aef:5b59:1eaf:aee6:ea9:e3af] | 80, 443, 8080 | 3 |
| [2606:4700:24:d236:8678:d811:a6d4:7a55] | 80, 443, 8080 | 3 |
| [2606:4700:24:1bb5:2fa5:4a98:1889:6b50] | 80, 443, 8080 | 3 |
| [2606:4700:4700:6734:5e1b:967:76c4:188e] | 80, 443, 8080 | 3 |
| [2606:4700:4700:886f:8053:1cf9:d7ff:9d47] | 80, 443, 8080 | 3 |
| [2606:4700:9aef:5b59:1eaf:aee6:ea9:e3af] | 80, 443, 8080 | 3 |
| [2606:4700:24:d236:8678:d811:a6d4:7a55] | 80, 443, 8080 | 3 |
| [2606:4700:24:1bb5:2fa5:4a98:1889:6b50] | 80, 443, 8080 | 3 |
| [2606:4700:4700:6734:5e1b:967:76c4:188e] | 80, 443, 8080 | 3 |

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
