# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-15 10:57:27 +0330

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
| 198.41.223.102 | 80, 443, 8080 | 67 |
| 198.41.209.109 | 80, 443, 8080 | 92 |
| 198.41.209.109 | 80, 443, 8080 | 92 |
| 198.41.208.4 | 80, 443, 8080 | 117 |
| 198.41.208.4 | 80, 443, 8080 | 117 |
| 104.19.124.80 | 80, 443, 8080 | 133 |
| 104.16.213.148 | 80, 443, 8080 | 133 |
| 104.16.13.29 | 80, 443, 8080 | 134 |
| 104.25.158.126 | 80, 443, 8080 | 149 |
| 198.41.208.244 | 80, 443, 8080 | 169 |
| 198.41.208.244 | 80, 443, 8080 | 169 |
| 162.159.250.34 | 80, 443, 8080 | 186 |
| 162.159.250.34 | 80, 443, 8080 | 186 |
| 198.41.208.245 | 80, 443, 8080 | 189 |
| 198.41.208.245 | 80, 443, 8080 | 189 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9b05:841f:74a9:1d33:86ef:ae52] | 80, 443, 8080 | 3 |
| [2606:4700:839a:655:e9c0:f602:b825:71ec] | 80, 443, 8080 | 3 |
| [2606:4700:839a:4d74:f164:5b88:271e:9aac] | 80, 443, 8080 | 3 |
| [2606:4700:9b05:e95c:cab2:f435:123f:621b] | 80, 443, 8080 | 3 |
| [2606:4700:9b05:841f:74a9:1d33:86ef:ae52] | 80, 443, 8080 | 3 |
| [2606:4700:839a:655:e9c0:f602:b825:71ec] | 80, 443, 8080 | 3 |
| [2606:4700:839a:4d74:f164:5b88:271e:9aac] | 80, 443, 8080 | 3 |
| [2606:4700:9b05:e95c:cab2:f435:123f:621b] | 80, 443, 8080 | 3 |
| [2606:4700:9b05:841f:74a9:1d33:86ef:ae52] | 80, 443, 8080 | 3 |
| [2606:4700:839a:655:e9c0:f602:b825:71ec] | 80, 443, 8080 | 3 |
| [2606:4700:839a:4d74:f164:5b88:271e:9aac] | 80, 443, 8080 | 3 |
| [2606:4700:9b05:e95c:cab2:f435:123f:621b] | 80, 443, 8080 | 3 |
| [2606:4700:8d9d:50f0:189a:fd6a:dd09:3981] | 80, 443, 8080 | 4 |
| [2606:4700:8d9d:50f0:189a:fd6a:dd09:3981] | 80, 443, 8080 | 4 |
| [2606:4700:8d9d:50f0:189a:fd6a:dd09:3981] | 80, 443, 8080 | 4 |

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
