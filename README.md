# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-10 10:25:16 +0330

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
| 198.41.209.186 | 80, 443, 8080 | 50 |
| 198.41.209.186 | 80, 443, 8080 | 50 |
| 198.41.209.105 | 80, 443, 8080 | 51 |
| 198.41.209.105 | 80, 443, 8080 | 51 |
| 190.93.246.120 | 80, 443, 8080 | 52 |
| 198.41.208.57 | 80, 443, 8080 | 52 |
| 190.93.246.120 | 80, 443, 8080 | 52 |
| 198.41.208.57 | 80, 443, 8080 | 52 |
| 104.17.191.109 | 80, 443, 8080 | 53 |
| 104.17.191.109 | 80, 443, 8080 | 53 |
| 198.41.222.214 | 80, 443, 8080 | 71 |
| 104.16.132.230 | 80, 443, 8080 | 128 |
| 104.18.84.63 | 80, 443, 8080 | 128 |
| 104.16.80.218 | 80, 443, 8080 | 132 |
| 104.18.95.56 | 80, 443, 8080 | 132 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8d95:670d:4d8:887b:5960:ad61] | 80, 443, 8080 | 3 |
| [2606:4700:8d95:104:8329:65b8:2b6:1c9f] | 80, 443, 8080 | 3 |
| [2606:4700:91b2:16a:fc3d:4596:3c02:1852] | 80, 443, 8080 | 3 |
| [2606:4700:9763:ca:466:f998:f0cd:d9a3] | 80, 443, 8080 | 3 |
| [2606:4700:9763:dcab:536e:8d9a:1ff6:3ac5] | 80, 443, 8080 | 3 |
| [2606:4700:8d95:670d:4d8:887b:5960:ad61] | 80, 443, 8080 | 3 |
| [2606:4700:8d95:104:8329:65b8:2b6:1c9f] | 80, 443, 8080 | 3 |
| [2606:4700:91b2:16a:fc3d:4596:3c02:1852] | 80, 443, 8080 | 3 |
| [2606:4700:9763:ca:466:f998:f0cd:d9a3] | 80, 443, 8080 | 3 |
| [2606:4700:9763:dcab:536e:8d9a:1ff6:3ac5] | 80, 443, 8080 | 3 |
| [2606:4700:8d95:670d:4d8:887b:5960:ad61] | 80, 443, 8080 | 3 |
| [2606:4700:8d95:104:8329:65b8:2b6:1c9f] | 80, 443, 8080 | 3 |
| [2606:4700:91b2:16a:fc3d:4596:3c02:1852] | 80, 443, 8080 | 3 |
| [2606:4700:9763:ca:466:f998:f0cd:d9a3] | 80, 443, 8080 | 3 |
| [2606:4700:9763:dcab:536e:8d9a:1ff6:3ac5] | 80, 443, 8080 | 3 |

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
