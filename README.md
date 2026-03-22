# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-22 10:42:34 +0330

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
| 104.16.86.190 | 80, 443, 8080 | 134 |
| 104.16.86.190 | 80, 443, 8080 | 134 |
| 104.16.86.190 | 80, 443, 8080 | 134 |
| 104.18.141.11 | 80, 443, 8080 | 136 |
| 104.18.141.11 | 80, 443, 8080 | 136 |
| 104.18.141.11 | 80, 443, 8080 | 136 |
| 104.17.180.76 | 80, 443, 8080 | 150 |
| 104.17.180.76 | 80, 443, 8080 | 150 |
| 104.17.180.76 | 80, 443, 8080 | 150 |
| 104.18.234.92 | 80, 443, 8080 | 151 |
| 104.18.234.92 | 80, 443, 8080 | 151 |
| 104.18.234.92 | 80, 443, 8080 | 151 |
| 104.18.157.161 | 80, 443, 8080 | 160 |
| 104.18.157.161 | 80, 443, 8080 | 160 |
| 104.18.157.161 | 80, 443, 8080 | 160 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9c6b:98:ac7:e05f:e352:785d] | 80, 443, 8080 | 1 |
| [2606:4700:8de2:c15f:59d2:7231:8b45:ddb0] | 80, 443, 8080 | 1 |
| [2606:4700:8de2:31a0:c026:fedb:5200:5122] | 80, 443, 8080 | 1 |
| [2606:4700:9c6b:2e67:3dbc:8ffe:e937:28f9] | 80, 443, 8080 | 1 |
| [2606:4700:9a92:b895:5b90:acbb:2c9e:a149] | 80, 443, 8080 | 1 |
| [2606:4700:9c6b:98:ac7:e05f:e352:785d] | 80, 443, 8080 | 1 |
| [2606:4700:8de2:c15f:59d2:7231:8b45:ddb0] | 80, 443, 8080 | 1 |
| [2606:4700:8de2:31a0:c026:fedb:5200:5122] | 80, 443, 8080 | 1 |
| [2606:4700:9c6b:2e67:3dbc:8ffe:e937:28f9] | 80, 443, 8080 | 1 |
| [2606:4700:9a92:b895:5b90:acbb:2c9e:a149] | 80, 443, 8080 | 1 |
| [2606:4700:9c6b:98:ac7:e05f:e352:785d] | 80, 443, 8080 | 1 |
| [2606:4700:8de2:c15f:59d2:7231:8b45:ddb0] | 80, 443, 8080 | 1 |
| [2606:4700:8de2:31a0:c026:fedb:5200:5122] | 80, 443, 8080 | 1 |
| [2606:4700:9c6b:2e67:3dbc:8ffe:e937:28f9] | 80, 443, 8080 | 1 |
| [2606:4700:9a92:b895:5b90:acbb:2c9e:a149] | 80, 443, 8080 | 1 |

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
