# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-08-19 00:09:05 +0330

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
| 172.64.66.134 | 80, 443, 8080 | 56 |
| 162.159.241.167 | 80, 443, 8080 | 56 |
| 172.64.66.105 | 80, 443, 8080 | 57 |
| 172.67.73.123 | 80, 443, 8080 | 57 |
| 104.17.0.203 | 80, 443, 8080 | 129 |
| 104.17.0.203 | 80, 443, 8080 | 129 |
| 104.16.172.35 | 80, 443, 8080 | 130 |
| 104.16.172.35 | 80, 443, 8080 | 130 |
| 172.67.142.147 | 80, 443, 8080 | 130 |
| 104.19.220.218 | 80, 443, 8080 | 132 |
| 104.19.220.218 | 80, 443, 8080 | 132 |
| 104.17.39.89 | 80, 443, 8080 | 134 |
| 104.19.19.146 | 80, 443, 8080 | 134 |
| 104.17.39.89 | 80, 443, 8080 | 134 |
| 104.19.19.146 | 80, 443, 8080 | 134 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|----|------------------|--------------|
| [2606:4700:440e:9c06:8224:ea36:67cb:96] | 80, 443, 8080 | 3 |
| [2606:4700:8def:377:58a4:61fd:d530:905f] | 80, 443, 8080 | 3 |
| [2606:4700:91b2:7899:e493:b6f5:f367:7f65] | 80, 443, 8080 | 3 |
| [2606:4700:91b2:8c0a:6ffe:3bb1:60ad:558a] | 80, 443, 8080 | 3 |
| [2606:4700:440e:9c06:8224:ea36:67cb:96] | 80, 443, 8080 | 3 |
| [2606:4700:8def:377:58a4:61fd:d530:905f] | 80, 443, 8080 | 3 |
| [2606:4700:91b2:7899:e493:b6f5:f367:7f65] | 80, 443, 8080 | 3 |
| [2606:4700:91b2:8c0a:6ffe:3bb1:60ad:558a] | 80, 443, 8080 | 3 |
| [2606:4700:440e:9c06:8224:ea36:67cb:96] | 80, 443, 8080 | 3 |
| [2606:4700:8def:377:58a4:61fd:d530:905f] | 80, 443, 8080 | 3 |
| [2606:4700:91b2:7899:e493:b6f5:f367:7f65] | 80, 443, 8080 | 3 |
| [2606:4700:91b2:8c0a:6ffe:3bb1:60ad:558a] | 80, 443, 8080 | 3 |
| [2606:4700:440e:2867:d972:ed67:6116:e493] | 80, 443, 8080 | 4 |
| [2606:4700:440e:2867:d972:ed67:6116:e493] | 80, 443, 8080 | 4 |
| [2606:4700:440e:2867:d972:ed67:6116:e493] | 80, 443, 8080 | 4 |

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
