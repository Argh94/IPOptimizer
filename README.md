# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-04-15 11:42:10 +0330

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
| 198.41.209.165 | 80, 443, 8080 | 53 |
| 198.41.209.165 | 80, 443, 8080 | 53 |
| 198.41.209.182 | 80, 443, 8080 | 56 |
| 198.41.209.182 | 80, 443, 8080 | 56 |
| 198.41.208.137 | 80, 443, 8080 | 57 |
| 198.41.208.137 | 80, 443, 8080 | 57 |
| 198.41.208.12 | 80, 443, 8080 | 60 |
| 198.41.208.12 | 80, 443, 8080 | 60 |
| 104.17.87.80 | 80, 443, 8080 | 135 |
| 104.18.141.58 | 80, 443, 8080 | 141 |
| 104.19.183.36 | 80, 443, 8080 | 147 |
| 104.16.0.129 | 80, 443, 8080 | 153 |
| 104.19.162.149 | 80, 443, 8080 | 155 |
| 172.64.75.86 | 80, 443, 8080 | 202 |
| 172.64.75.86 | 80, 443, 8080 | 202 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:3039:c66b:f002:834c:e227:78e1] | 80, 443, 8080 | 0 |
| [2606:4700:3039:c66b:f002:834c:e227:78e1] | 80, 443, 8080 | 0 |
| [2606:4700:3039:c66b:f002:834c:e227:78e1] | 80, 443, 8080 | 0 |
| [2606:4700:3039:cacb:ff6e:8b13:c4d:4bdb] | 80, 443, 8080 | 1 |
| [2606:4700:3039:cacb:ff6e:8b13:c4d:4bdb] | 80, 443, 8080 | 1 |
| [2606:4700:3039:cacb:ff6e:8b13:c4d:4bdb] | 80, 443, 8080 | 1 |
| [2606:4700:8dd4:7f7e:aa3f:906e:d60e:7124] | 80, 443, 8080 | 3 |
| [2606:4700:8ca7:8ec3:9f97:2ee9:ade8:16b7] | 80, 443, 8080 | 3 |
| [2606:4700:8dd4:7f7e:aa3f:906e:d60e:7124] | 80, 443, 8080 | 3 |
| [2606:4700:8ca7:8ec3:9f97:2ee9:ade8:16b7] | 80, 443, 8080 | 3 |
| [2606:4700:8dd4:7f7e:aa3f:906e:d60e:7124] | 80, 443, 8080 | 3 |
| [2606:4700:8ca7:8ec3:9f97:2ee9:ade8:16b7] | 80, 443, 8080 | 3 |
| [2606:4700:8de3:e8dc:a37d:a377:3cee:5ac4] | 80, 443, 8080 | 4 |
| [2606:4700:8de3:e8dc:a37d:a377:3cee:5ac4] | 80, 443, 8080 | 4 |
| [2606:4700:8de3:e8dc:a37d:a377:3cee:5ac4] | 80, 443, 8080 | 4 |

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
