# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-25 10:15:49 +0330

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
| 162.159.138.226 | 80, 443, 8080 | 55 |
| 162.159.36.125 | 80, 443, 8080 | 55 |
| 162.159.153.142 | 80, 443, 8080 | 56 |
| 162.159.46.96 | 80, 443, 8080 | 76 |
| 162.159.46.96 | 80, 443, 8080 | 76 |
| 104.19.26.38 | 80, 443, 8080 | 128 |
| 104.19.26.38 | 80, 443, 8080 | 128 |
| 104.16.141.226 | 80, 443, 8080 | 129 |
| 104.16.226.170 | 80, 443, 8080 | 129 |
| 104.16.141.226 | 80, 443, 8080 | 129 |
| 104.16.226.170 | 80, 443, 8080 | 129 |
| 104.17.82.210 | 80, 443, 8080 | 130 |
| 104.17.82.210 | 80, 443, 8080 | 130 |
| 172.67.171.56 | 80, 443, 8080 | 145 |
| 172.67.238.198 | 80, 443, 8080 | 145 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8d92:8ed:1e2f:9296:1488:f4e8] | 80, 443, 8080 | 3 |
| [2606:4700:8d92:5939:a6a8:a6c3:7236:eb43] | 80, 443, 8080 | 3 |
| [2606:4700:99eb:c29f:880f:182e:6038:7dc3] | 80, 443, 8080 | 3 |
| [2606:4700:9763:dd9b:2ced:df10:1b1e:c408] | 80, 443, 8080 | 3 |
| [2606:4700:9a69:d1c6:4246:30d8:15ed:2374] | 80, 443, 8080 | 3 |
| [2606:4700:8d92:8ed:1e2f:9296:1488:f4e8] | 80, 443, 8080 | 3 |
| [2606:4700:8d92:5939:a6a8:a6c3:7236:eb43] | 80, 443, 8080 | 3 |
| [2606:4700:99eb:c29f:880f:182e:6038:7dc3] | 80, 443, 8080 | 3 |
| [2606:4700:9763:dd9b:2ced:df10:1b1e:c408] | 80, 443, 8080 | 3 |
| [2606:4700:9a69:d1c6:4246:30d8:15ed:2374] | 80, 443, 8080 | 3 |
| [2606:4700:8d92:8ed:1e2f:9296:1488:f4e8] | 80, 443, 8080 | 3 |
| [2606:4700:8d92:5939:a6a8:a6c3:7236:eb43] | 80, 443, 8080 | 3 |
| [2606:4700:99eb:c29f:880f:182e:6038:7dc3] | 80, 443, 8080 | 3 |
| [2606:4700:9763:dd9b:2ced:df10:1b1e:c408] | 80, 443, 8080 | 3 |
| [2606:4700:9a69:d1c6:4246:30d8:15ed:2374] | 80, 443, 8080 | 3 |

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
