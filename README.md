# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-01-29 00:28:02 +0330

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
| 198.41.209.112 | 80, 443, 8080 | 51 |
| 198.41.209.71 | 80, 443, 8080 | 51 |
| 198.41.209.112 | 80, 443, 8080 | 51 |
| 198.41.209.71 | 80, 443, 8080 | 51 |
| 172.64.87.39 | 80, 443, 8080 | 52 |
| 162.159.46.243 | 80, 443, 8080 | 52 |
| 190.93.245.203 | 80, 443, 8080 | 52 |
| 172.64.87.39 | 80, 443, 8080 | 52 |
| 162.159.46.243 | 80, 443, 8080 | 52 |
| 190.93.245.203 | 80, 443, 8080 | 52 |
| 104.19.63.204 | 80, 443, 8080 | 130 |
| 104.19.203.71 | 80, 443, 8080 | 130 |
| 104.18.247.82 | 80, 443, 8080 | 130 |
| 104.16.88.188 | 80, 443, 8080 | 130 |
| 104.17.208.102 | 80, 443, 8080 | 131 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:3003:7e:425a:283e:8712:543a] | 80, 443, 8080 | 3 |
| [2606:4700:3003:7e:425a:283e:8712:543a] | 80, 443, 8080 | 3 |
| [2606:4700:3003:7e:425a:283e:8712:543a] | 80, 443, 8080 | 3 |
| [2606:4700:8d93:a8f6:9bbe:6fa7:cd54:8f70] | 80, 443, 8080 | 8 |
| [2606:4700:91bc:c93:b372:8e60:83d3:634f] | 80, 443, 8080 | 8 |
| [2606:4700:8d93:a8f6:9bbe:6fa7:cd54:8f70] | 80, 443, 8080 | 8 |
| [2606:4700:91bc:c93:b372:8e60:83d3:634f] | 80, 443, 8080 | 8 |
| [2606:4700:8d93:a8f6:9bbe:6fa7:cd54:8f70] | 80, 443, 8080 | 8 |
| [2606:4700:91bc:c93:b372:8e60:83d3:634f] | 80, 443, 8080 | 8 |
| [2606:4700:9768:b672:a18a:f797:e3e5:5fe6] | 80, 443, 8080 | 9 |
| [2606:4700:9768:b672:a18a:f797:e3e5:5fe6] | 80, 443, 8080 | 9 |
| [2606:4700:9768:b672:a18a:f797:e3e5:5fe6] | 80, 443, 8080 | 9 |
| [2606:4700:440b:775d:39b9:8268:ffe8:68ef] | 80, 443, 8080 | 12 |
| [2606:4700:440b:775d:39b9:8268:ffe8:68ef] | 80, 443, 8080 | 12 |
| [2606:4700:440b:775d:39b9:8268:ffe8:68ef] | 80, 443, 8080 | 12 |

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
