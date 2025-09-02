# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-03 00:04:13 +0330

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
| 198.41.208.41 | 80, 443, 8080 | 51 |
| 198.41.208.218 | 80, 443, 8080 | 52 |
| 162.159.193.232 | 80, 443, 8080 | 55 |
| 162.159.36.106 | 80, 443, 8080 | 56 |
| 198.41.215.77 | 80, 443, 8080 | 56 |
| 198.41.209.180 | 80, 443, 8080 | 57 |
| 198.41.208.31 | 80, 443, 8080 | 57 |
| 198.41.208.62 | 80, 443, 8080 | 85 |
| 104.18.198.150 | 80, 443, 8080 | 128 |
| 104.18.233.166 | 80, 443, 8080 | 129 |
| 104.18.202.182 | 80, 443, 8080 | 130 |
| 104.18.196.85 | 80, 443, 8080 | 130 |
| 172.67.128.107 | 80, 443, 8080 | 130 |
| 104.16.66.52 | 80, 443, 8080 | 131 |
| 172.64.101.74 | 80, 443, 8080 | 218 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8dea:594:c293:ce22:efb8:e5af] | 80, 443, 8080 | 3 |
| [2606:4700:9a6b:b93d:b5c4:4f0d:f623:819e] | 80, 443, 8080 | 3 |
| [2606:4700:8dea:594:c293:ce22:efb8:e5af] | 80, 443, 8080 | 3 |
| [2606:4700:9a6b:b93d:b5c4:4f0d:f623:819e] | 80, 443, 8080 | 3 |
| [2606:4700:8dea:594:c293:ce22:efb8:e5af] | 80, 443, 8080 | 3 |
| [2606:4700:9a6b:b93d:b5c4:4f0d:f623:819e] | 80, 443, 8080 | 3 |
| [2606:4700:8dd6:eaf8:b19f:861f:8196:e081] | 80, 443, 8080 | 4 |
| [2606:4700:8dea:754e:26e0:8434:f102:515d] | 80, 443, 8080 | 4 |
| [2606:4700:8dd6:eaf8:b19f:861f:8196:e081] | 80, 443, 8080 | 4 |
| [2606:4700:8dea:754e:26e0:8434:f102:515d] | 80, 443, 8080 | 4 |
| [2606:4700:8dd6:eaf8:b19f:861f:8196:e081] | 80, 443, 8080 | 4 |
| [2606:4700:8dea:754e:26e0:8434:f102:515d] | 80, 443, 8080 | 4 |
| [2606:4700:83be:f2a9:9f5b:31e1:362a:e37a] | 80, 443, 8080 | 191 |
| [2606:4700:83be:f2a9:9f5b:31e1:362a:e37a] | 80, 443, 8080 | 191 |
| [2606:4700:83be:f2a9:9f5b:31e1:362a:e37a] | 80, 443, 8080 | 191 |

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
