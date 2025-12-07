# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-08 00:11:52 +0330

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
| 198.41.209.50 | 80, 443, 8080 | 52 |
| 198.41.209.137 | 80, 443, 8080 | 52 |
| 198.41.209.112 | 80, 443, 8080 | 52 |
| 198.41.208.112 | 80, 443, 8080 | 52 |
| 198.41.209.50 | 80, 443, 8080 | 52 |
| 198.41.209.137 | 80, 443, 8080 | 52 |
| 198.41.209.112 | 80, 443, 8080 | 52 |
| 198.41.208.112 | 80, 443, 8080 | 52 |
| 104.17.215.28 | 80, 443, 8080 | 53 |
| 104.17.215.28 | 80, 443, 8080 | 53 |
| 104.19.193.128 | 80, 443, 8080 | 128 |
| 198.41.209.212 | 80, 443, 8080 | 129 |
| 104.16.0.129 | 80, 443, 8080 | 129 |
| 104.17.4.0 | 80, 443, 8080 | 137 |
| 104.17.249.212 | 80, 443, 8080 | 149 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:2:493a:86b6:eafc:ecf7:2225] | 80, 443, 8080 | 3 |
| [2606:4700:4401:b482:2267:33b2:5120:7dd1] | 80, 443, 8080 | 3 |
| [2606:4700:8d7e:a79a:ae80:a926:f490:1ef5] | 80, 443, 8080 | 3 |
| [2606:4700:4401:78ed:b5d6:3dd3:f032:cbc5] | 80, 443, 8080 | 3 |
| [2606:4700:2:493a:86b6:eafc:ecf7:2225] | 80, 443, 8080 | 3 |
| [2606:4700:4401:b482:2267:33b2:5120:7dd1] | 80, 443, 8080 | 3 |
| [2606:4700:8d7e:a79a:ae80:a926:f490:1ef5] | 80, 443, 8080 | 3 |
| [2606:4700:4401:78ed:b5d6:3dd3:f032:cbc5] | 80, 443, 8080 | 3 |
| [2606:4700:2:493a:86b6:eafc:ecf7:2225] | 80, 443, 8080 | 3 |
| [2606:4700:4401:b482:2267:33b2:5120:7dd1] | 80, 443, 8080 | 3 |
| [2606:4700:8d7e:a79a:ae80:a926:f490:1ef5] | 80, 443, 8080 | 3 |
| [2606:4700:4401:78ed:b5d6:3dd3:f032:cbc5] | 80, 443, 8080 | 3 |
| [2606:4700:2:173e:85cb:58e8:ffcd:7d04] | 80, 443, 8080 | 5 |
| [2606:4700:2:173e:85cb:58e8:ffcd:7d04] | 80, 443, 8080 | 5 |
| [2606:4700:2:173e:85cb:58e8:ffcd:7d04] | 80, 443, 8080 | 5 |

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
