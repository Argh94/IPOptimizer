# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-04 00:11:00 +0330

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
| 198.41.208.202 | 80, 443, 8080 | 52 |
| 198.41.209.137 | 80, 443, 8080 | 53 |
| 172.67.97.85 | 80, 443, 8080 | 54 |
| 141.101.113.202 | 80, 443, 8080 | 55 |
| 162.159.246.33 | 80, 443, 8080 | 55 |
| 172.64.67.213 | 80, 443, 8080 | 56 |
| 162.159.36.19 | 80, 443, 8080 | 71 |
| 198.41.223.130 | 80, 443, 8080 | 71 |
| 104.19.114.76 | 80, 443, 8080 | 128 |
| 104.16.249.105 | 80, 443, 8080 | 129 |
| 104.17.207.71 | 80, 443, 8080 | 129 |
| 172.67.182.52 | 80, 443, 8080 | 142 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9ae4:9e0b:ba32:d428:d86c:ebd1] | 80, 443, 8080 | 3 |
| [2606:4700:3:aa2d:388e:ca83:cb14:7277] | 80, 443, 8080 | 3 |
| [2606:4700:8d72:e007:4290:e290:d614:93b2] | 80, 443, 8080 | 3 |
| [2606:4700:9ad5:be3a:efb6:d3dd:54eb:9a0a] | 80, 443, 8080 | 3 |
| [2606:4700:9ae4:9e0b:ba32:d428:d86c:ebd1] | 80, 443, 8080 | 3 |
| [2606:4700:3:aa2d:388e:ca83:cb14:7277] | 80, 443, 8080 | 3 |
| [2606:4700:8d72:e007:4290:e290:d614:93b2] | 80, 443, 8080 | 3 |
| [2606:4700:9ad5:be3a:efb6:d3dd:54eb:9a0a] | 80, 443, 8080 | 3 |
| [2606:4700:9ae4:9e0b:ba32:d428:d86c:ebd1] | 80, 443, 8080 | 3 |
| [2606:4700:3:aa2d:388e:ca83:cb14:7277] | 80, 443, 8080 | 3 |
| [2606:4700:8d72:e007:4290:e290:d614:93b2] | 80, 443, 8080 | 3 |
| [2606:4700:9ad5:be3a:efb6:d3dd:54eb:9a0a] | 80, 443, 8080 | 3 |
| [2606:4700:8d9b:ace7:d1a2:a5a7:8999:23a8] | 80, 443, 8080 | 4 |
| [2606:4700:8d9b:ace7:d1a2:a5a7:8999:23a8] | 80, 443, 8080 | 4 |
| [2606:4700:8d9b:ace7:d1a2:a5a7:8999:23a8] | 80, 443, 8080 | 4 |

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
