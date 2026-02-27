# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-02-27 10:57:38 +0330

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
| 198.41.209.50 | 80, 443, 8080 | 51 |
| 198.41.209.50 | 80, 443, 8080 | 51 |
| 198.41.209.165 | 80, 443, 8080 | 52 |
| 198.41.209.165 | 80, 443, 8080 | 52 |
| 190.93.246.211 | 80, 443, 8080 | 53 |
| 190.93.246.211 | 80, 443, 8080 | 53 |
| 104.16.0.34 | 80, 443, 8080 | 134 |
| 104.16.250.93 | 80, 443, 8080 | 135 |
| 104.17.121.183 | 80, 443, 8080 | 141 |
| 104.16.1.166 | 80, 443, 8080 | 144 |
| 104.19.218.29 | 80, 443, 8080 | 148 |
| 162.159.36.62 | 80, 443, 8080 | 187 |
| 162.159.36.62 | 80, 443, 8080 | 187 |
| 172.67.120.74 | 80, 443, 8080 | 192 |
| 172.67.120.74 | 80, 443, 8080 | 192 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:91b8:6f91:a17b:f223:943a:df86] | 80, 443, 8080 | 3 |
| [2606:4700:90cc:1717:a72b:2a9a:2096:93f7] | 80, 443, 8080 | 3 |
| [2606:4700:8:958b:48fc:4f37:bdac:2990] | 80, 443, 8080 | 3 |
| [2606:4700:91b8:8d36:b18d:b438:f0ce:9c0d] | 80, 443, 8080 | 3 |
| [2606:4700:9767:d6a3:d225:6957:d56b:ff5a] | 80, 443, 8080 | 3 |
| [2606:4700:91b8:6f91:a17b:f223:943a:df86] | 80, 443, 8080 | 3 |
| [2606:4700:90cc:1717:a72b:2a9a:2096:93f7] | 80, 443, 8080 | 3 |
| [2606:4700:8:958b:48fc:4f37:bdac:2990] | 80, 443, 8080 | 3 |
| [2606:4700:91b8:8d36:b18d:b438:f0ce:9c0d] | 80, 443, 8080 | 3 |
| [2606:4700:9767:d6a3:d225:6957:d56b:ff5a] | 80, 443, 8080 | 3 |
| [2606:4700:91b8:6f91:a17b:f223:943a:df86] | 80, 443, 8080 | 3 |
| [2606:4700:90cc:1717:a72b:2a9a:2096:93f7] | 80, 443, 8080 | 3 |
| [2606:4700:8:958b:48fc:4f37:bdac:2990] | 80, 443, 8080 | 3 |
| [2606:4700:91b8:8d36:b18d:b438:f0ce:9c0d] | 80, 443, 8080 | 3 |
| [2606:4700:9767:d6a3:d225:6957:d56b:ff5a] | 80, 443, 8080 | 3 |

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
