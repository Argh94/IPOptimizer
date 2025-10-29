# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-30 00:13:41 +0330

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
| 198.41.209.214 | 80, 443, 8080 | 51 |
| 198.41.208.202 | 80, 443, 8080 | 52 |
| 198.41.209.120 | 80, 443, 8080 | 53 |
| 198.41.209.6 | 80, 443, 8080 | 54 |
| 172.67.106.140 | 80, 443, 8080 | 55 |
| 162.159.137.108 | 80, 443, 8080 | 55 |
| 198.41.223.179 | 80, 443, 8080 | 84 |
| 104.16.230.179 | 80, 443, 8080 | 128 |
| 172.64.95.96 | 80, 443, 8080 | 131 |
| 172.64.88.29 | 80, 443, 8080 | 132 |
| 104.17.115.92 | 80, 443, 8080 | 134 |
| 172.67.198.13 | 80, 443, 8080 | 143 |
| 172.67.221.65 | 80, 443, 8080 | 144 |
| 172.67.130.125 | 80, 443, 8080 | 145 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9769:d397:2137:8fc9:35d2:5f6d] | 80, 443, 8080 | 3 |
| [2606:4700:9763:7b3e:b177:ec95:1fc9:e59b] | 80, 443, 8080 | 3 |
| [2606:4700:9763:97fe:b194:5e56:86ff:4734] | 80, 443, 8080 | 3 |
| [2606:4700:90db:ec4a:f7b1:14d1:a0ee:45be] | 80, 443, 8080 | 3 |
| [2606:4700:9769:e40b:ed7:2ce7:ca38:3d76] | 80, 443, 8080 | 3 |
| [2606:4700:9769:d397:2137:8fc9:35d2:5f6d] | 80, 443, 8080 | 3 |
| [2606:4700:9763:7b3e:b177:ec95:1fc9:e59b] | 80, 443, 8080 | 3 |
| [2606:4700:9763:97fe:b194:5e56:86ff:4734] | 80, 443, 8080 | 3 |
| [2606:4700:90db:ec4a:f7b1:14d1:a0ee:45be] | 80, 443, 8080 | 3 |
| [2606:4700:9769:e40b:ed7:2ce7:ca38:3d76] | 80, 443, 8080 | 3 |
| [2606:4700:9769:d397:2137:8fc9:35d2:5f6d] | 80, 443, 8080 | 3 |
| [2606:4700:9763:7b3e:b177:ec95:1fc9:e59b] | 80, 443, 8080 | 3 |
| [2606:4700:9763:97fe:b194:5e56:86ff:4734] | 80, 443, 8080 | 3 |
| [2606:4700:90db:ec4a:f7b1:14d1:a0ee:45be] | 80, 443, 8080 | 3 |
| [2606:4700:9769:e40b:ed7:2ce7:ca38:3d76] | 80, 443, 8080 | 3 |

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
