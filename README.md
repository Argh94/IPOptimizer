# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-25 00:13:02 +0330

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
| 198.41.223.159 | 80, 443, 8080 | 57 |
| 172.64.93.98 | 80, 443, 8080 | 57 |
| 198.41.211.124 | 80, 443, 8080 | 73 |
| 198.41.211.124 | 80, 443, 8080 | 73 |
| 162.159.46.199 | 80, 443, 8080 | 84 |
| 162.159.36.243 | 80, 443, 8080 | 84 |
| 162.159.46.199 | 80, 443, 8080 | 84 |
| 162.159.36.243 | 80, 443, 8080 | 84 |
| 104.19.239.212 | 80, 443, 8080 | 128 |
| 104.19.239.212 | 80, 443, 8080 | 128 |
| 104.18.181.103 | 80, 443, 8080 | 129 |
| 104.18.181.103 | 80, 443, 8080 | 129 |
| 172.67.216.197 | 80, 443, 8080 | 143 |
| 172.67.212.135 | 80, 443, 8080 | 144 |
| 172.67.171.29 | 80, 443, 8080 | 145 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:3016:8cb4:d8ec:6412:ec86:cf95] | 80, 443, 8080 | 3 |
| [2606:4700:10f:e94f:fe7f:d77:f7df:53f] | 80, 443, 8080 | 3 |
| [2606:4700:90cd:810f:622e:f226:a038:6b03] | 80, 443, 8080 | 3 |
| [2606:4700:10f:f963:724c:6bef:2beb:c292] | 80, 443, 8080 | 3 |
| [2606:4700:8d9a:acb5:e07d:c621:b1c3:f58b] | 80, 443, 8080 | 3 |
| [2606:4700:3016:8cb4:d8ec:6412:ec86:cf95] | 80, 443, 8080 | 3 |
| [2606:4700:10f:e94f:fe7f:d77:f7df:53f] | 80, 443, 8080 | 3 |
| [2606:4700:90cd:810f:622e:f226:a038:6b03] | 80, 443, 8080 | 3 |
| [2606:4700:10f:f963:724c:6bef:2beb:c292] | 80, 443, 8080 | 3 |
| [2606:4700:8d9a:acb5:e07d:c621:b1c3:f58b] | 80, 443, 8080 | 3 |
| [2606:4700:3016:8cb4:d8ec:6412:ec86:cf95] | 80, 443, 8080 | 3 |
| [2606:4700:10f:e94f:fe7f:d77:f7df:53f] | 80, 443, 8080 | 3 |
| [2606:4700:90cd:810f:622e:f226:a038:6b03] | 80, 443, 8080 | 3 |
| [2606:4700:10f:f963:724c:6bef:2beb:c292] | 80, 443, 8080 | 3 |
| [2606:4700:8d9a:acb5:e07d:c621:b1c3:f58b] | 80, 443, 8080 | 3 |

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
