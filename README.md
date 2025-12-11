# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-11 10:26:22 +0330

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
| 198.41.208.133 | 80, 443, 8080 | 51 |
| 198.41.209.202 | 80, 443, 8080 | 51 |
| 198.41.209.50 | 80, 443, 8080 | 51 |
| 198.41.208.133 | 80, 443, 8080 | 51 |
| 198.41.209.202 | 80, 443, 8080 | 51 |
| 172.64.95.102 | 80, 443, 8080 | 53 |
| 190.93.246.188 | 80, 443, 8080 | 53 |
| 172.64.95.102 | 80, 443, 8080 | 53 |
| 190.93.246.188 | 80, 443, 8080 | 53 |
| 198.41.223.189 | 80, 443, 8080 | 69 |
| 104.16.136.156 | 80, 443, 8080 | 131 |
| 104.16.249.242 | 80, 443, 8080 | 132 |
| 104.19.218.65 | 80, 443, 8080 | 141 |
| 104.16.146.9 | 80, 443, 8080 | 152 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:4406:381f:9f55:7c1:7a4f:5b43] | 80, 443, 8080 | 3 |
| [2606:4700:90c3:86da:f463:dff6:c867:f8d4] | 80, 443, 8080 | 3 |
| [2606:4700:90c3:df4d:4647:6ca7:fedf:903f] | 80, 443, 8080 | 3 |
| [2606:4700:8dd8:d3f4:42ab:5c74:143f:f3b1] | 80, 443, 8080 | 3 |
| [2606:4700:90c7:133:d902:ecde:ef79:2a29] | 80, 443, 8080 | 3 |
| [2606:4700:4406:381f:9f55:7c1:7a4f:5b43] | 80, 443, 8080 | 3 |
| [2606:4700:90c3:86da:f463:dff6:c867:f8d4] | 80, 443, 8080 | 3 |
| [2606:4700:90c3:df4d:4647:6ca7:fedf:903f] | 80, 443, 8080 | 3 |
| [2606:4700:8dd8:d3f4:42ab:5c74:143f:f3b1] | 80, 443, 8080 | 3 |
| [2606:4700:90c7:133:d902:ecde:ef79:2a29] | 80, 443, 8080 | 3 |
| [2606:4700:4406:381f:9f55:7c1:7a4f:5b43] | 80, 443, 8080 | 3 |
| [2606:4700:90c3:86da:f463:dff6:c867:f8d4] | 80, 443, 8080 | 3 |
| [2606:4700:90c3:df4d:4647:6ca7:fedf:903f] | 80, 443, 8080 | 3 |
| [2606:4700:8dd8:d3f4:42ab:5c74:143f:f3b1] | 80, 443, 8080 | 3 |
| [2606:4700:90c7:133:d902:ecde:ef79:2a29] | 80, 443, 8080 | 3 |

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
