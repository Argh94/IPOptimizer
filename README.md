# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-26 00:10:39 +0330

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
| 198.41.209.110 | 80, 443, 8080 | 51 |
| 198.41.208.218 | 80, 443, 8080 | 51 |
| 198.41.208.112 | 80, 443, 8080 | 52 |
| 198.41.208.203 | 80, 443, 8080 | 52 |
| 172.64.84.32 | 80, 443, 8080 | 55 |
| 104.21.239.211 | 80, 443, 8080 | 142 |
| 172.67.170.58 | 80, 443, 8080 | 145 |
| 172.67.223.137 | 80, 443, 8080 | 145 |
| 172.67.220.183 | 80, 443, 8080 | 145 |
| 172.67.184.127 | 80, 443, 8080 | 145 |
| 104.21.198.132 | 80, 443, 8080 | 154 |
| 162.159.240.114 | 80, 443, 8080 | 162 |
| 162.159.234.177 | 80, 443, 8080 | 166 |
| 104.17.247.53 | 80, 443, 8080 | 179 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:3020:4376:c378:e79c:200b:3c9e] | 80, 443, 8080 | 3 |
| [2606:4700:3020:4376:c378:e79c:200b:3c9e] | 80, 443, 8080 | 3 |
| [2606:4700:3020:4376:c378:e79c:200b:3c9e] | 80, 443, 8080 | 3 |
| [2606:4700:9645:4243:4523:ca04:c30b:9bf7] | 80, 443, 8080 | 4 |
| [2606:4700:3004:621c:4385:ffe2:5c4c:67fa] | 80, 443, 8080 | 4 |
| [2606:4700:3008:75e7:5161:9731:7c8:b180] | 80, 443, 8080 | 4 |
| [2606:4700:3020:3cce:a16c:edb3:745e:59e1] | 80, 443, 8080 | 4 |
| [2606:4700:9645:4243:4523:ca04:c30b:9bf7] | 80, 443, 8080 | 4 |
| [2606:4700:3004:621c:4385:ffe2:5c4c:67fa] | 80, 443, 8080 | 4 |
| [2606:4700:3008:75e7:5161:9731:7c8:b180] | 80, 443, 8080 | 4 |
| [2606:4700:3020:3cce:a16c:edb3:745e:59e1] | 80, 443, 8080 | 4 |
| [2606:4700:9645:4243:4523:ca04:c30b:9bf7] | 80, 443, 8080 | 4 |
| [2606:4700:3004:621c:4385:ffe2:5c4c:67fa] | 80, 443, 8080 | 4 |
| [2606:4700:3008:75e7:5161:9731:7c8:b180] | 80, 443, 8080 | 4 |
| [2606:4700:3020:3cce:a16c:edb3:745e:59e1] | 80, 443, 8080 | 4 |

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
