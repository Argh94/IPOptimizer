# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-13 00:10:14 +0330

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
| 198.41.209.149 | 80, 443, 8080 | 51 |
| 198.41.208.119 | 80, 443, 8080 | 51 |
| 198.41.209.210 | 80, 443, 8080 | 51 |
| 198.41.209.71 | 80, 443, 8080 | 53 |
| 198.41.209.180 | 80, 443, 8080 | 55 |
| 162.159.244.158 | 80, 443, 8080 | 56 |
| 172.67.98.49 | 80, 443, 8080 | 57 |
| 104.18.155.91 | 80, 443, 8080 | 128 |
| 104.16.168.63 | 80, 443, 8080 | 130 |
| 104.18.73.218 | 80, 443, 8080 | 130 |
| 104.18.114.144 | 80, 443, 8080 | 139 |
| 104.19.80.1 | 80, 443, 8080 | 140 |
| 172.67.220.254 | 80, 443, 8080 | 143 |
| 172.67.222.87 | 80, 443, 8080 | 145 |
| 172.67.222.27 | 80, 443, 8080 | 145 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9642:89a6:7b7d:2ebf:77ca:c0f3] | 80, 443, 8080 | 3 |
| [2606:4700:26:90e1:214c:7bee:8ed4:d8cc] | 80, 443, 8080 | 3 |
| [2606:4700:99e7:ecea:12ab:eba1:beb0:5d23] | 80, 443, 8080 | 3 |
| [2606:4700:9642:db68:b3a1:3078:a895:95ff] | 80, 443, 8080 | 3 |
| [2606:4700:9642:89a6:7b7d:2ebf:77ca:c0f3] | 80, 443, 8080 | 3 |
| [2606:4700:26:90e1:214c:7bee:8ed4:d8cc] | 80, 443, 8080 | 3 |
| [2606:4700:99e7:ecea:12ab:eba1:beb0:5d23] | 80, 443, 8080 | 3 |
| [2606:4700:9642:db68:b3a1:3078:a895:95ff] | 80, 443, 8080 | 3 |
| [2606:4700:9642:89a6:7b7d:2ebf:77ca:c0f3] | 80, 443, 8080 | 3 |
| [2606:4700:26:90e1:214c:7bee:8ed4:d8cc] | 80, 443, 8080 | 3 |
| [2606:4700:99e7:ecea:12ab:eba1:beb0:5d23] | 80, 443, 8080 | 3 |
| [2606:4700:9642:db68:b3a1:3078:a895:95ff] | 80, 443, 8080 | 3 |
| [2606:4700:99e7:20ba:d980:c74c:abe6:8a83] | 80, 443, 8080 | 4 |
| [2606:4700:99e7:20ba:d980:c74c:abe6:8a83] | 80, 443, 8080 | 4 |
| [2606:4700:99e7:20ba:d980:c74c:abe6:8a83] | 80, 443, 8080 | 4 |

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
