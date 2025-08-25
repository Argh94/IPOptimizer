# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-08-26 00:08:58 +0330

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
| 172.64.69.119 | 80, 443, 8080 | 53 |
| 190.93.246.50 | 80, 443, 8080 | 53 |
| 198.41.209.192 | 80, 443, 8080 | 53 |
| 172.67.125.12 | 80, 443, 8080 | 56 |
| 198.41.209.38 | 80, 443, 8080 | 57 |
| 141.101.113.208 | 80, 443, 8080 | 57 |
| 104.19.7.190 | 80, 443, 8080 | 129 |
| 104.18.139.192 | 80, 443, 8080 | 129 |
| 104.17.190.149 | 80, 443, 8080 | 129 |
| 104.19.123.152 | 80, 443, 8080 | 129 |
| 104.19.63.50 | 80, 443, 8080 | 130 |
| 172.67.217.240 | 80, 443, 8080 | 131 |
| 172.67.226.151 | 80, 443, 8080 | 131 |
| 172.67.155.60 | 80, 443, 8080 | 131 |
| 141.101.120.147 | 80, 443, 8080 | 158 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9a9b:42cf:5840:c39e:3f50:78b0] | 80, 443, 8080 | 3 |
| [2606:4700:9ad3:8a9e:254c:69f2:30d6:9353] | 80, 443, 8080 | 3 |
| [2606:4700:9ad3:db7e:6c8b:94f0:c2b4:f486] | 80, 443, 8080 | 3 |
| [2606:4700:9a9b:42cf:5840:c39e:3f50:78b0] | 80, 443, 8080 | 3 |
| [2606:4700:9ad3:8a9e:254c:69f2:30d6:9353] | 80, 443, 8080 | 3 |
| [2606:4700:9ad3:db7e:6c8b:94f0:c2b4:f486] | 80, 443, 8080 | 3 |
| [2606:4700:9a9b:42cf:5840:c39e:3f50:78b0] | 80, 443, 8080 | 3 |
| [2606:4700:9ad3:8a9e:254c:69f2:30d6:9353] | 80, 443, 8080 | 3 |
| [2606:4700:9ad3:db7e:6c8b:94f0:c2b4:f486] | 80, 443, 8080 | 3 |
| [2606:4700:9a9b:9b4f:1d12:b83e:49df:1bbe] | 80, 443, 8080 | 4 |
| [2606:4700:9a62:2346:355c:582a:1977:2263] | 80, 443, 8080 | 4 |
| [2606:4700:9a9b:9b4f:1d12:b83e:49df:1bbe] | 80, 443, 8080 | 4 |
| [2606:4700:9a62:2346:355c:582a:1977:2263] | 80, 443, 8080 | 4 |
| [2606:4700:9a9b:9b4f:1d12:b83e:49df:1bbe] | 80, 443, 8080 | 4 |
| [2606:4700:9a62:2346:355c:582a:1977:2263] | 80, 443, 8080 | 4 |

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
