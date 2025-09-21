# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-21 10:15:38 +0330

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
| 162.159.248.175 | 80, 443, 8080 | 53 |
| 162.159.251.118 | 80, 443, 8080 | 53 |
| 162.159.242.201 | 80, 443, 8080 | 54 |
| 172.64.87.80 | 80, 443, 8080 | 54 |
| 172.64.89.136 | 80, 443, 8080 | 55 |
| 173.245.49.223 | 80, 443, 8080 | 55 |
| 172.64.95.89 | 80, 443, 8080 | 55 |
| 172.67.82.218 | 80, 443, 8080 | 55 |
| 172.64.84.59 | 80, 443, 8080 | 55 |
| 104.16.19.2 | 80, 443, 8080 | 129 |
| 104.19.97.79 | 80, 443, 8080 | 130 |
| 104.18.241.87 | 80, 443, 8080 | 130 |
| 104.16.253.123 | 80, 443, 8080 | 131 |
| 104.17.53.247 | 80, 443, 8080 | 132 |
| 172.67.168.149 | 80, 443, 8080 | 146 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:3032:c0e4:d3ae:30f0:b758:f79b] | 80, 443, 8080 | 3 |
| [2606:4700:3032:ab37:85e7:31a3:f6bf:2aab] | 80, 443, 8080 | 3 |
| [2606:4700:99e3:97bb:d5ef:7771:765b:f64d] | 80, 443, 8080 | 3 |
| [2606:4700:3032:c0e4:d3ae:30f0:b758:f79b] | 80, 443, 8080 | 3 |
| [2606:4700:3032:ab37:85e7:31a3:f6bf:2aab] | 80, 443, 8080 | 3 |
| [2606:4700:99e3:97bb:d5ef:7771:765b:f64d] | 80, 443, 8080 | 3 |
| [2606:4700:3032:c0e4:d3ae:30f0:b758:f79b] | 80, 443, 8080 | 3 |
| [2606:4700:3032:ab37:85e7:31a3:f6bf:2aab] | 80, 443, 8080 | 3 |
| [2606:4700:99e3:97bb:d5ef:7771:765b:f64d] | 80, 443, 8080 | 3 |
| [2606:4700:8de0:82a7:2c1b:568c:3dea:2337] | 80, 443, 8080 | 4 |
| [2606:4700:99e3:6c71:a59f:3b02:9865:ad66] | 80, 443, 8080 | 4 |
| [2606:4700:8de0:82a7:2c1b:568c:3dea:2337] | 80, 443, 8080 | 4 |
| [2606:4700:99e3:6c71:a59f:3b02:9865:ad66] | 80, 443, 8080 | 4 |
| [2606:4700:8de0:82a7:2c1b:568c:3dea:2337] | 80, 443, 8080 | 4 |
| [2606:4700:99e3:6c71:a59f:3b02:9865:ad66] | 80, 443, 8080 | 4 |

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
