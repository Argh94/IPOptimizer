# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-31 10:20:34 +0330

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
| 104.19.45.123 | 80, 443, 8080 | 38 |
| 104.18.92.218 | 80, 443, 8080 | 39 |
| 104.18.237.65 | 80, 443, 8080 | 41 |
| 104.18.165.134 | 80, 443, 8080 | 42 |
| 104.17.171.97 | 80, 443, 8080 | 43 |
| 172.67.104.160 | 80, 443, 8080 | 56 |
| 162.159.36.208 | 80, 443, 8080 | 77 |
| 198.41.223.134 | 80, 443, 8080 | 105 |
| 104.17.202.50 | 80, 443, 8080 | 129 |
| 104.16.105.6 | 80, 443, 8080 | 133 |
| 104.16.100.214 | 80, 443, 8080 | 134 |
| 172.67.191.90 | 80, 443, 8080 | 143 |
| 172.67.194.185 | 80, 443, 8080 | 145 |
| 172.67.223.131 | 80, 443, 8080 | 145 |
| 172.67.213.63 | 80, 443, 8080 | 145 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9a64:a250:21f:5d29:6fc0:68e6] | 80, 443, 8080 | 3 |
| [2606:4700:8dd7:4b1:2886:cdc:5fd:4220] | 80, 443, 8080 | 3 |
| [2606:4700:9a64:aed1:afc1:4027:676e:1cc3] | 80, 443, 8080 | 3 |
| [2606:4700:91b0:f331:de42:5998:187f:775f] | 80, 443, 8080 | 3 |
| [2606:4700:9a64:a250:21f:5d29:6fc0:68e6] | 80, 443, 8080 | 3 |
| [2606:4700:8dd7:4b1:2886:cdc:5fd:4220] | 80, 443, 8080 | 3 |
| [2606:4700:9a64:aed1:afc1:4027:676e:1cc3] | 80, 443, 8080 | 3 |
| [2606:4700:91b0:f331:de42:5998:187f:775f] | 80, 443, 8080 | 3 |
| [2606:4700:9a64:a250:21f:5d29:6fc0:68e6] | 80, 443, 8080 | 3 |
| [2606:4700:8dd7:4b1:2886:cdc:5fd:4220] | 80, 443, 8080 | 3 |
| [2606:4700:9a64:aed1:afc1:4027:676e:1cc3] | 80, 443, 8080 | 3 |
| [2606:4700:91b0:f331:de42:5998:187f:775f] | 80, 443, 8080 | 3 |
| [2606:4700:9a9e:31b7:2d11:3bac:7681:9ab9] | 80, 443, 8080 | 4 |
| [2606:4700:9a9e:31b7:2d11:3bac:7681:9ab9] | 80, 443, 8080 | 4 |
| [2606:4700:9a9e:31b7:2d11:3bac:7681:9ab9] | 80, 443, 8080 | 4 |

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
