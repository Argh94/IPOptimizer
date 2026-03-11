# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-11 10:56:13 +0330

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
| 162.159.251.245 | 80, 443, 8080 | 56 |
| 162.159.251.245 | 80, 443, 8080 | 56 |
| 162.159.134.176 | 80, 443, 8080 | 79 |
| 162.159.134.176 | 80, 443, 8080 | 79 |
| 162.159.137.143 | 80, 443, 8080 | 88 |
| 162.159.137.49 | 80, 443, 8080 | 88 |
| 162.159.137.143 | 80, 443, 8080 | 88 |
| 162.159.137.49 | 80, 443, 8080 | 88 |
| 162.159.153.200 | 80, 443, 8080 | 91 |
| 162.159.153.200 | 80, 443, 8080 | 91 |
| 104.17.67.182 | 80, 443, 8080 | 133 |
| 104.16.82.227 | 80, 443, 8080 | 134 |
| 104.18.82.132 | 80, 443, 8080 | 134 |
| 162.159.241.0 | 80, 443, 8080 | 142 |
| 104.17.246.142 | 80, 443, 8080 | 144 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:12:4854:4037:5588:314d:b72d] | 80, 443, 8080 | 1 |
| [2606:4700:12:4854:4037:5588:314d:b72d] | 80, 443, 8080 | 1 |
| [2606:4700:12:4854:4037:5588:314d:b72d] | 80, 443, 8080 | 1 |
| [2606:4700:3028:59aa:b47c:4a3c:a3b9:865a] | 80, 443, 8080 | 3 |
| [2606:4700:9c6c:c765:f027:7d77:d2e0:32e7] | 80, 443, 8080 | 3 |
| [2606:4700:9ae8:8b95:7f3a:df41:7ff1:c5ec] | 80, 443, 8080 | 3 |
| [2606:4700:3028:75ad:1911:f755:6ba9:fa76] | 80, 443, 8080 | 3 |
| [2606:4700:3028:59aa:b47c:4a3c:a3b9:865a] | 80, 443, 8080 | 3 |
| [2606:4700:9c6c:c765:f027:7d77:d2e0:32e7] | 80, 443, 8080 | 3 |
| [2606:4700:9ae8:8b95:7f3a:df41:7ff1:c5ec] | 80, 443, 8080 | 3 |
| [2606:4700:3028:75ad:1911:f755:6ba9:fa76] | 80, 443, 8080 | 3 |
| [2606:4700:3028:59aa:b47c:4a3c:a3b9:865a] | 80, 443, 8080 | 3 |
| [2606:4700:9c6c:c765:f027:7d77:d2e0:32e7] | 80, 443, 8080 | 3 |
| [2606:4700:9ae8:8b95:7f3a:df41:7ff1:c5ec] | 80, 443, 8080 | 3 |
| [2606:4700:3028:75ad:1911:f755:6ba9:fa76] | 80, 443, 8080 | 3 |

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
