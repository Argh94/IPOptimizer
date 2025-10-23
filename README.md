# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-23 10:19:52 +0330

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
| 198.41.208.119 | 80, 443, 8080 | 52 |
| 198.41.208.202 | 80, 443, 8080 | 52 |
| 198.41.209.120 | 80, 443, 8080 | 53 |
| 190.93.245.40 | 80, 443, 8080 | 54 |
| 198.41.209.63 | 80, 443, 8080 | 54 |
| 172.67.83.190 | 80, 443, 8080 | 56 |
| 162.159.247.41 | 80, 443, 8080 | 56 |
| 172.67.64.78 | 80, 443, 8080 | 56 |
| 198.41.223.116 | 80, 443, 8080 | 74 |
| 162.159.36.232 | 80, 443, 8080 | 79 |
| 104.17.196.151 | 80, 443, 8080 | 129 |
| 104.19.173.57 | 80, 443, 8080 | 129 |
| 104.17.213.181 | 80, 443, 8080 | 129 |
| 172.67.238.79 | 80, 443, 8080 | 142 |
| 172.67.228.46 | 80, 443, 8080 | 145 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8391:52b6:283a:16ef:b6b8:6982] | 80, 443, 8080 | 3 |
| [2606:4700:9a6a:392:6798:6bde:3e37:17a0] | 80, 443, 8080 | 3 |
| [2606:4700:9a6a:557f:edde:7974:b161:1b] | 80, 443, 8080 | 3 |
| [2606:4700:4408:88d5:cdbf:6153:d394:7114] | 80, 443, 8080 | 3 |
| [2606:4700:8391:52b6:283a:16ef:b6b8:6982] | 80, 443, 8080 | 3 |
| [2606:4700:9a6a:392:6798:6bde:3e37:17a0] | 80, 443, 8080 | 3 |
| [2606:4700:9a6a:557f:edde:7974:b161:1b] | 80, 443, 8080 | 3 |
| [2606:4700:4408:88d5:cdbf:6153:d394:7114] | 80, 443, 8080 | 3 |
| [2606:4700:8391:52b6:283a:16ef:b6b8:6982] | 80, 443, 8080 | 3 |
| [2606:4700:9a6a:392:6798:6bde:3e37:17a0] | 80, 443, 8080 | 3 |
| [2606:4700:9a6a:557f:edde:7974:b161:1b] | 80, 443, 8080 | 3 |
| [2606:4700:4408:88d5:cdbf:6153:d394:7114] | 80, 443, 8080 | 3 |
| [2606:4700:9b06:76ef:1d05:ebc2:124a:4a02] | 80, 443, 8080 | 4 |
| [2606:4700:9b06:76ef:1d05:ebc2:124a:4a02] | 80, 443, 8080 | 4 |
| [2606:4700:9b06:76ef:1d05:ebc2:124a:4a02] | 80, 443, 8080 | 4 |

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
