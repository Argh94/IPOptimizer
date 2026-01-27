# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-01-28 00:18:45 +0330

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
| 104.19.61.81 | 80, 443, 8080 | 129 |
| 104.16.153.163 | 80, 443, 8080 | 130 |
| 104.19.176.165 | 80, 443, 8080 | 130 |
| 104.17.166.58 | 80, 443, 8080 | 130 |
| 104.17.101.45 | 80, 443, 8080 | 130 |
| 172.67.83.227 | 80, 443, 8080 | 178 |
| 172.67.253.62 | 80, 443, 8080 | 178 |
| 172.67.83.227 | 80, 443, 8080 | 178 |
| 172.67.253.62 | 80, 443, 8080 | 178 |
| 172.67.189.79 | 80, 443, 8080 | 179 |
| 172.67.87.125 | 80, 443, 8080 | 179 |
| 172.67.189.79 | 80, 443, 8080 | 179 |
| 172.67.87.125 | 80, 443, 8080 | 179 |
| 172.67.225.195 | 80, 443, 8080 | 180 |
| 172.67.225.195 | 80, 443, 8080 | 180 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:131:e7bf:44f2:f6:2b13:5cd3] | 80, 443, 8080 | 3 |
| [2606:4700:131:e7bf:44f2:f6:2b13:5cd3] | 80, 443, 8080 | 3 |
| [2606:4700:131:e7bf:44f2:f6:2b13:5cd3] | 80, 443, 8080 | 3 |
| [2606:4700:9b05:a1f6:72d2:4eec:2491:b90b] | 80, 443, 8080 | 8 |
| [2606:4700:9b05:9b69:58c1:9bc5:239:c62a] | 80, 443, 8080 | 8 |
| [2606:4700:8d7a:405b:470f:461a:91e9:6e6] | 80, 443, 8080 | 8 |
| [2606:4700:9b05:a1f6:72d2:4eec:2491:b90b] | 80, 443, 8080 | 8 |
| [2606:4700:9b05:9b69:58c1:9bc5:239:c62a] | 80, 443, 8080 | 8 |
| [2606:4700:8d7a:405b:470f:461a:91e9:6e6] | 80, 443, 8080 | 8 |
| [2606:4700:9b05:a1f6:72d2:4eec:2491:b90b] | 80, 443, 8080 | 8 |
| [2606:4700:9b05:9b69:58c1:9bc5:239:c62a] | 80, 443, 8080 | 8 |
| [2606:4700:8d7a:405b:470f:461a:91e9:6e6] | 80, 443, 8080 | 8 |
| [2606:4700:8d7a:74b:77ed:47df:f086:89bd] | 80, 443, 8080 | 9 |
| [2606:4700:8d7a:74b:77ed:47df:f086:89bd] | 80, 443, 8080 | 9 |
| [2606:4700:8d7a:74b:77ed:47df:f086:89bd] | 80, 443, 8080 | 9 |

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
