# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-02 00:11:28 +0330

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
| 198.41.209.165 | 80, 443, 8080 | 51 |
| 198.41.209.165 | 80, 443, 8080 | 51 |
| 198.41.208.22 | 80, 443, 8080 | 53 |
| 198.41.208.236 | 80, 443, 8080 | 53 |
| 198.41.208.22 | 80, 443, 8080 | 53 |
| 198.41.208.236 | 80, 443, 8080 | 53 |
| 172.64.82.201 | 80, 443, 8080 | 56 |
| 172.64.86.189 | 80, 443, 8080 | 56 |
| 172.64.82.201 | 80, 443, 8080 | 56 |
| 172.64.86.189 | 80, 443, 8080 | 56 |
| 104.18.211.126 | 80, 443, 8080 | 127 |
| 104.18.162.216 | 80, 443, 8080 | 128 |
| 104.17.166.63 | 80, 443, 8080 | 128 |
| 104.18.168.156 | 80, 443, 8080 | 128 |
| 104.19.165.92 | 80, 443, 8080 | 129 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:a:68e2:e87c:22b9:203e:6a2d] | 80, 443, 8080 | 3 |
| [2606:4700:a:987a:cbae:90b9:ff30:25b3] | 80, 443, 8080 | 3 |
| [2606:4700:90ce:c994:9176:9a6f:d0b7:bbf0] | 80, 443, 8080 | 3 |
| [2606:4700:90ce:de0a:1d12:bef9:98cc:31af] | 80, 443, 8080 | 3 |
| [2606:4700:9765:26e0:f0f5:234a:467f:8cf7] | 80, 443, 8080 | 3 |
| [2606:4700:a:68e2:e87c:22b9:203e:6a2d] | 80, 443, 8080 | 3 |
| [2606:4700:a:987a:cbae:90b9:ff30:25b3] | 80, 443, 8080 | 3 |
| [2606:4700:90ce:c994:9176:9a6f:d0b7:bbf0] | 80, 443, 8080 | 3 |
| [2606:4700:90ce:de0a:1d12:bef9:98cc:31af] | 80, 443, 8080 | 3 |
| [2606:4700:9765:26e0:f0f5:234a:467f:8cf7] | 80, 443, 8080 | 3 |
| [2606:4700:a:68e2:e87c:22b9:203e:6a2d] | 80, 443, 8080 | 3 |
| [2606:4700:a:987a:cbae:90b9:ff30:25b3] | 80, 443, 8080 | 3 |
| [2606:4700:90ce:c994:9176:9a6f:d0b7:bbf0] | 80, 443, 8080 | 3 |
| [2606:4700:90ce:de0a:1d12:bef9:98cc:31af] | 80, 443, 8080 | 3 |
| [2606:4700:9765:26e0:f0f5:234a:467f:8cf7] | 80, 443, 8080 | 3 |

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
