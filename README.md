# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-04 10:18:23 +0330

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
| 162.159.247.187 | 80, 443, 8080 | 53 |
| 162.159.249.217 | 80, 443, 8080 | 53 |
| 172.64.88.20 | 80, 443, 8080 | 55 |
| 162.159.136.25 | 80, 443, 8080 | 56 |
| 198.41.214.191 | 80, 443, 8080 | 56 |
| 198.41.209.80 | 80, 443, 8080 | 112 |
| 198.41.208.70 | 80, 443, 8080 | 118 |
| 172.67.153.26 | 80, 443, 8080 | 129 |
| 172.67.239.67 | 80, 443, 8080 | 129 |
| 172.67.243.210 | 80, 443, 8080 | 130 |
| 104.18.23.78 | 80, 443, 8080 | 138 |
| 104.19.57.194 | 80, 443, 8080 | 146 |
| 162.159.245.205 | 80, 443, 8080 | 152 |
| 104.17.161.111 | 80, 443, 8080 | 153 |
| 104.19.131.36 | 80, 443, 8080 | 153 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:3016:8f2b:b0a4:1874:102c:8fb9] | 80, 443, 8080 | 3 |
| [2606:4700:3016:a1a1:e817:f66a:a11c:460c] | 80, 443, 8080 | 3 |
| [2606:4700:90d4:e898:86d0:1622:f4af:b63] | 80, 443, 8080 | 3 |
| [2606:4700:3016:8f2b:b0a4:1874:102c:8fb9] | 80, 443, 8080 | 3 |
| [2606:4700:3016:a1a1:e817:f66a:a11c:460c] | 80, 443, 8080 | 3 |
| [2606:4700:90d4:e898:86d0:1622:f4af:b63] | 80, 443, 8080 | 3 |
| [2606:4700:3016:8f2b:b0a4:1874:102c:8fb9] | 80, 443, 8080 | 3 |
| [2606:4700:3016:a1a1:e817:f66a:a11c:460c] | 80, 443, 8080 | 3 |
| [2606:4700:90d4:e898:86d0:1622:f4af:b63] | 80, 443, 8080 | 3 |
| [2606:4700:310c:32d1:ea80:2219:f901:dc7e] | 80, 443, 8080 | 4 |
| [2606:4700:90d4:f0d6:d194:15ec:b573:fa3f] | 80, 443, 8080 | 4 |
| [2606:4700:310c:32d1:ea80:2219:f901:dc7e] | 80, 443, 8080 | 4 |
| [2606:4700:90d4:f0d6:d194:15ec:b573:fa3f] | 80, 443, 8080 | 4 |
| [2606:4700:310c:32d1:ea80:2219:f901:dc7e] | 80, 443, 8080 | 4 |
| [2606:4700:90d4:f0d6:d194:15ec:b573:fa3f] | 80, 443, 8080 | 4 |

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
