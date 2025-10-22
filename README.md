# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-23 00:11:57 +0330

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
| 198.41.209.120 | 80, 443, 8080 | 53 |
| 190.93.245.40 | 80, 443, 8080 | 54 |
| 198.41.209.63 | 80, 443, 8080 | 54 |
| 172.67.76.93 | 80, 443, 8080 | 55 |
| 162.159.130.212 | 80, 443, 8080 | 56 |
| 172.67.116.135 | 80, 443, 8080 | 57 |
| 172.67.66.214 | 80, 443, 8080 | 57 |
| 104.17.165.235 | 80, 443, 8080 | 128 |
| 104.17.251.88 | 80, 443, 8080 | 128 |
| 104.19.43.100 | 80, 443, 8080 | 129 |
| 104.17.246.36 | 80, 443, 8080 | 129 |
| 104.17.132.0 | 80, 443, 8080 | 134 |
| 172.67.221.84 | 80, 443, 8080 | 143 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:90c3:fa6f:de29:c56b:65fc:1fa1] | 80, 443, 8080 | 3 |
| [2606:4700:90c3:fa6f:de29:c56b:65fc:1fa1] | 80, 443, 8080 | 3 |
| [2606:4700:90c3:fa6f:de29:c56b:65fc:1fa1] | 80, 443, 8080 | 3 |
| [2606:4700:135:84a:71fd:bd50:f911:a877] | 80, 443, 8080 | 4 |
| [2606:4700:135:84a:71fd:bd50:f911:a877] | 80, 443, 8080 | 4 |
| [2606:4700:135:84a:71fd:bd50:f911:a877] | 80, 443, 8080 | 4 |
| [2606:4700:135:61b2:ca91:1a4c:c123:cbf5] | 80, 443, 8080 | 12 |
| [2606:4700:135:61b2:ca91:1a4c:c123:cbf5] | 80, 443, 8080 | 12 |
| [2606:4700:135:61b2:ca91:1a4c:c123:cbf5] | 80, 443, 8080 | 12 |
| [2606:4700:83b4:fec:a7cb:f078:7eb6:99c] | 80, 443, 8080 | 184 |
| [2606:4700:83b4:cd9:fb2:19df:26e7:8ce] | 80, 443, 8080 | 184 |
| [2606:4700:83b4:fec:a7cb:f078:7eb6:99c] | 80, 443, 8080 | 184 |
| [2606:4700:83b4:cd9:fb2:19df:26e7:8ce] | 80, 443, 8080 | 184 |
| [2606:4700:83b4:fec:a7cb:f078:7eb6:99c] | 80, 443, 8080 | 184 |
| [2606:4700:83b4:cd9:fb2:19df:26e7:8ce] | 80, 443, 8080 | 184 |

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
