# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-10 00:06:45 +0330

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
| 198.41.208.133 | 80, 443, 8080 | 54 |
| 198.41.209.71 | 80, 443, 8080 | 54 |
| 172.67.123.121 | 80, 443, 8080 | 55 |
| 172.67.103.163 | 80, 443, 8080 | 56 |
| 198.41.208.226 | 80, 443, 8080 | 57 |
| 198.41.208.191 | 80, 443, 8080 | 59 |
| 198.41.209.55 | 80, 443, 8080 | 62 |
| 198.41.211.179 | 80, 443, 8080 | 71 |
| 104.19.237.14 | 80, 443, 8080 | 129 |
| 104.16.201.163 | 80, 443, 8080 | 129 |
| 104.18.200.125 | 80, 443, 8080 | 129 |
| 104.16.246.167 | 80, 443, 8080 | 131 |
| 172.67.239.16 | 80, 443, 8080 | 132 |
| 172.67.178.248 | 80, 443, 8080 | 133 |
| 172.67.129.95 | 80, 443, 8080 | 133 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8dd9:ac60:ec33:e648:d64:50ee] | 80, 443, 8080 | 3 |
| [2606:4700:8dd9:5b01:2c8:134f:36ec:2638] | 80, 443, 8080 | 3 |
| [2606:4700:13d:4e04:d40c:e075:325f:f598] | 80, 443, 8080 | 3 |
| [2606:4700:9ada:acb8:1556:3b31:d1cf:68f6] | 80, 443, 8080 | 3 |
| [2606:4700:8dd9:ac60:ec33:e648:d64:50ee] | 80, 443, 8080 | 3 |
| [2606:4700:8dd9:5b01:2c8:134f:36ec:2638] | 80, 443, 8080 | 3 |
| [2606:4700:13d:4e04:d40c:e075:325f:f598] | 80, 443, 8080 | 3 |
| [2606:4700:9ada:acb8:1556:3b31:d1cf:68f6] | 80, 443, 8080 | 3 |
| [2606:4700:8dd9:ac60:ec33:e648:d64:50ee] | 80, 443, 8080 | 3 |
| [2606:4700:8dd9:5b01:2c8:134f:36ec:2638] | 80, 443, 8080 | 3 |
| [2606:4700:13d:4e04:d40c:e075:325f:f598] | 80, 443, 8080 | 3 |
| [2606:4700:9ada:acb8:1556:3b31:d1cf:68f6] | 80, 443, 8080 | 3 |
| [2606:4700:99eb:71ce:a234:10d3:544b:af70] | 80, 443, 8080 | 4 |
| [2606:4700:99eb:71ce:a234:10d3:544b:af70] | 80, 443, 8080 | 4 |
| [2606:4700:99eb:71ce:a234:10d3:544b:af70] | 80, 443, 8080 | 4 |

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
