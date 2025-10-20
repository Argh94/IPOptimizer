# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-21 00:13:51 +0330

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
| 198.41.209.63 | 80, 443, 8080 | 55 |
| 190.93.245.158 | 80, 443, 8080 | 55 |
| 190.93.245.40 | 80, 443, 8080 | 55 |
| 190.93.244.113 | 80, 443, 8080 | 55 |
| 190.93.247.139 | 80, 443, 8080 | 56 |
| 172.67.88.0 | 80, 443, 8080 | 56 |
| 162.159.192.210 | 80, 443, 8080 | 56 |
| 104.17.71.130 | 80, 443, 8080 | 128 |
| 104.18.214.240 | 80, 443, 8080 | 129 |
| 104.17.96.172 | 80, 443, 8080 | 130 |
| 104.17.229.98 | 80, 443, 8080 | 130 |
| 104.17.48.245 | 80, 443, 8080 | 130 |
| 172.67.240.141 | 80, 443, 8080 | 142 |
| 172.67.208.42 | 80, 443, 8080 | 144 |
| 172.67.200.200 | 80, 443, 8080 | 145 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:99e8:5d9b:78a6:6d0e:a3a0:71fa] | 80, 443, 8080 | 3 |
| [2606:4700:9:f96a:9ec2:707e:8bf7:e8e5] | 80, 443, 8080 | 3 |
| [2606:4700:99e8:5d9b:78a6:6d0e:a3a0:71fa] | 80, 443, 8080 | 3 |
| [2606:4700:9:f96a:9ec2:707e:8bf7:e8e5] | 80, 443, 8080 | 3 |
| [2606:4700:99e8:5d9b:78a6:6d0e:a3a0:71fa] | 80, 443, 8080 | 3 |
| [2606:4700:9:f96a:9ec2:707e:8bf7:e8e5] | 80, 443, 8080 | 3 |
| [2606:4700:9:2f9f:a68a:b584:a612:d890] | 80, 443, 8080 | 4 |
| [2606:4700:90d1:bf66:50a:67b5:3a8a:bdcf] | 80, 443, 8080 | 4 |
| [2606:4700:9:2f9f:a68a:b584:a612:d890] | 80, 443, 8080 | 4 |
| [2606:4700:90d1:bf66:50a:67b5:3a8a:bdcf] | 80, 443, 8080 | 4 |
| [2606:4700:9:2f9f:a68a:b584:a612:d890] | 80, 443, 8080 | 4 |
| [2606:4700:90d1:bf66:50a:67b5:3a8a:bdcf] | 80, 443, 8080 | 4 |
| [2606:4700:13e:e56d:7ff5:9cce:6174:4543] | 80, 443, 8080 | 13 |
| [2606:4700:13e:e56d:7ff5:9cce:6174:4543] | 80, 443, 8080 | 13 |
| [2606:4700:13e:e56d:7ff5:9cce:6174:4543] | 80, 443, 8080 | 13 |

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
