# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-07 10:18:41 +0330

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
| 198.41.209.186 | 80, 443, 8080 | 51 |
| 198.41.208.218 | 80, 443, 8080 | 51 |
| 198.41.209.110 | 80, 443, 8080 | 51 |
| 198.41.209.137 | 80, 443, 8080 | 51 |
| 198.41.208.113 | 80, 443, 8080 | 52 |
| 172.67.76.9 | 80, 443, 8080 | 55 |
| 172.64.86.70 | 80, 443, 8080 | 55 |
| 172.67.92.128 | 80, 443, 8080 | 56 |
| 104.17.102.87 | 80, 443, 8080 | 150 |
| 104.25.12.151 | 80, 443, 8080 | 151 |
| 162.159.244.165 | 80, 443, 8080 | 151 |
| 104.21.78.158 | 80, 443, 8080 | 162 |
| 104.16.0.23 | 80, 443, 8080 | 166 |
| 172.67.228.39 | 80, 443, 8080 | 210 |
| 172.67.228.50 | 80, 443, 8080 | 211 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9adf:1e0a:ad63:950d:dbfe:9122] | 80, 443, 8080 | 3 |
| [2606:4700:3055:6716:59a3:a3a7:4b03:20b6] | 80, 443, 8080 | 3 |
| [2606:4700:976e:619:398e:a44f:5ef4:d381] | 80, 443, 8080 | 3 |
| [2606:4700:9adf:1e0a:ad63:950d:dbfe:9122] | 80, 443, 8080 | 3 |
| [2606:4700:3055:6716:59a3:a3a7:4b03:20b6] | 80, 443, 8080 | 3 |
| [2606:4700:976e:619:398e:a44f:5ef4:d381] | 80, 443, 8080 | 3 |
| [2606:4700:9adf:1e0a:ad63:950d:dbfe:9122] | 80, 443, 8080 | 3 |
| [2606:4700:3055:6716:59a3:a3a7:4b03:20b6] | 80, 443, 8080 | 3 |
| [2606:4700:976e:619:398e:a44f:5ef4:d381] | 80, 443, 8080 | 3 |
| [2606:4700:9adf:e361:e8b1:3364:9d42:db3a] | 80, 443, 8080 | 4 |
| [2606:4700:9adf:e361:e8b1:3364:9d42:db3a] | 80, 443, 8080 | 4 |
| [2606:4700:9adf:e361:e8b1:3364:9d42:db3a] | 80, 443, 8080 | 4 |
| [2606:4700:4406:135b:528b:858d:2f67:3134] | 80, 443, 8080 | 13 |
| [2606:4700:4406:135b:528b:858d:2f67:3134] | 80, 443, 8080 | 13 |
| [2606:4700:4406:135b:528b:858d:2f67:3134] | 80, 443, 8080 | 13 |

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
