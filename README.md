# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-11-02 10:17:48 +0330

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
| 104.17.165.13 | 80, 443, 8080 | 39 |
| 104.17.170.204 | 80, 443, 8080 | 40 |
| 198.41.208.213 | 80, 443, 8080 | 53 |
| 198.41.209.14 | 80, 443, 8080 | 54 |
| 172.67.89.235 | 80, 443, 8080 | 55 |
| 172.67.124.8 | 80, 443, 8080 | 55 |
| 172.67.95.90 | 80, 443, 8080 | 56 |
| 104.18.242.62 | 80, 443, 8080 | 128 |
| 104.16.243.75 | 80, 443, 8080 | 129 |
| 104.19.148.31 | 80, 443, 8080 | 130 |
| 104.17.69.205 | 80, 443, 8080 | 131 |
| 104.19.104.125 | 80, 443, 8080 | 143 |
| 172.67.200.4 | 80, 443, 8080 | 143 |
| 172.67.243.24 | 80, 443, 8080 | 143 |
| 104.18.225.151 | 80, 443, 8080 | 168 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9b08:dde8:d652:b2d6:e5de:bb8] | 80, 443, 8080 | 3 |
| [2606:4700:8d79:b567:1c55:24ad:da76:6579] | 80, 443, 8080 | 3 |
| [2606:4700:8dd6:531e:3294:2972:c5a1:15e4] | 80, 443, 8080 | 3 |
| [2606:4700:9b08:8be4:1e2b:9deb:d1e:8b64] | 80, 443, 8080 | 3 |
| [2606:4700:8dd6:b28f:4391:9763:a02:f5a2] | 80, 443, 8080 | 3 |
| [2606:4700:9b08:dde8:d652:b2d6:e5de:bb8] | 80, 443, 8080 | 3 |
| [2606:4700:8d79:b567:1c55:24ad:da76:6579] | 80, 443, 8080 | 3 |
| [2606:4700:8dd6:531e:3294:2972:c5a1:15e4] | 80, 443, 8080 | 3 |
| [2606:4700:9b08:8be4:1e2b:9deb:d1e:8b64] | 80, 443, 8080 | 3 |
| [2606:4700:8dd6:b28f:4391:9763:a02:f5a2] | 80, 443, 8080 | 3 |
| [2606:4700:9b08:dde8:d652:b2d6:e5de:bb8] | 80, 443, 8080 | 3 |
| [2606:4700:8d79:b567:1c55:24ad:da76:6579] | 80, 443, 8080 | 3 |
| [2606:4700:8dd6:531e:3294:2972:c5a1:15e4] | 80, 443, 8080 | 3 |
| [2606:4700:9b08:8be4:1e2b:9deb:d1e:8b64] | 80, 443, 8080 | 3 |
| [2606:4700:8dd6:b28f:4391:9763:a02:f5a2] | 80, 443, 8080 | 3 |

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
