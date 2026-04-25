# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-04-26 00:36:03 +0330

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

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9aea:ebaa:f5ec:ebf7:5f0e:a3f9] | 80, 443, 8080 | 3 |
| [2606:4700:9aea:ebaa:f5ec:ebf7:5f0e:a3f9] | 80, 443, 8080 | 3 |
| [2606:4700:9aea:ebaa:f5ec:ebf7:5f0e:a3f9] | 80, 443, 8080 | 3 |
| [2606:4700:9649:a936:261f:bdc4:f86b:f670] | 80, 443, 8080 | 4 |
| [2606:4700:9aea:ce5b:ac75:c828:f7f9:8c5e] | 80, 443, 8080 | 4 |
| [2606:4700:9649:a936:261f:bdc4:f86b:f670] | 80, 443, 8080 | 4 |
| [2606:4700:9aea:ce5b:ac75:c828:f7f9:8c5e] | 80, 443, 8080 | 4 |
| [2606:4700:9649:a936:261f:bdc4:f86b:f670] | 80, 443, 8080 | 4 |
| [2606:4700:9aea:ce5b:ac75:c828:f7f9:8c5e] | 80, 443, 8080 | 4 |
| [2606:4700:83b0:b661:3859:688c:14d8:7b01] | 80, 443, 8080 | 284 |
| [2606:4700:83b0:b661:3859:688c:14d8:7b01] | 80, 443, 8080 | 284 |
| [2606:4700:83b0:b661:3859:688c:14d8:7b01] | 80, 443, 8080 | 284 |
| [2606:4700:83b0:eeda:2c74:d0b6:6cb:9f0d] | 80, 443, 8080 | 285 |
| [2606:4700:83b0:eeda:2c74:d0b6:6cb:9f0d] | 80, 443, 8080 | 285 |
| [2606:4700:83b0:eeda:2c74:d0b6:6cb:9f0d] | 80, 443, 8080 | 285 |

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
