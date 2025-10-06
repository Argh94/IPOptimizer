# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-06 10:19:20 +0330

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
| 198.41.209.186 | 80, 443, 8080 | 51 |
| 198.41.208.218 | 80, 443, 8080 | 51 |
| 198.41.209.110 | 80, 443, 8080 | 51 |
| 198.41.209.137 | 80, 443, 8080 | 51 |
| 198.41.208.113 | 80, 443, 8080 | 52 |
| 172.67.99.132 | 80, 443, 8080 | 54 |
| 172.67.105.151 | 80, 443, 8080 | 55 |
| 172.67.98.118 | 80, 443, 8080 | 55 |
| 104.18.158.46 | 80, 443, 8080 | 129 |
| 104.16.101.20 | 80, 443, 8080 | 138 |
| 104.27.80.128 | 80, 443, 8080 | 158 |
| 104.25.55.219 | 80, 443, 8080 | 172 |
| 104.19.39.91 | 80, 443, 8080 | 178 |
| 162.159.239.159 | 80, 443, 8080 | 217 |
| 172.67.129.36 | 80, 443, 8080 | 220 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:13f:7b5b:56e6:6922:d799:3ad9] | 80, 443, 8080 | 3 |
| [2606:4700:9b0e:b07d:5bd9:750b:3971:cb89] | 80, 443, 8080 | 3 |
| [2606:4700:8de1:f09f:aafe:a6fb:db1b:7d15] | 80, 443, 8080 | 3 |
| [2606:4700:8de1:396b:8581:8ad4:736a:4b3f] | 80, 443, 8080 | 3 |
| [2606:4700:9b0e:8eff:ec84:9b43:71b2:849] | 80, 443, 8080 | 3 |
| [2606:4700:13f:7b5b:56e6:6922:d799:3ad9] | 80, 443, 8080 | 3 |
| [2606:4700:9b0e:b07d:5bd9:750b:3971:cb89] | 80, 443, 8080 | 3 |
| [2606:4700:8de1:f09f:aafe:a6fb:db1b:7d15] | 80, 443, 8080 | 3 |
| [2606:4700:8de1:396b:8581:8ad4:736a:4b3f] | 80, 443, 8080 | 3 |
| [2606:4700:9b0e:8eff:ec84:9b43:71b2:849] | 80, 443, 8080 | 3 |
| [2606:4700:13f:7b5b:56e6:6922:d799:3ad9] | 80, 443, 8080 | 3 |
| [2606:4700:9b0e:b07d:5bd9:750b:3971:cb89] | 80, 443, 8080 | 3 |
| [2606:4700:8de1:f09f:aafe:a6fb:db1b:7d15] | 80, 443, 8080 | 3 |
| [2606:4700:8de1:396b:8581:8ad4:736a:4b3f] | 80, 443, 8080 | 3 |
| [2606:4700:9b0e:8eff:ec84:9b43:71b2:849] | 80, 443, 8080 | 3 |

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
