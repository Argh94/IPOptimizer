# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-04-24 00:54:17 +0330

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
| [2606:4700:9add:38b1:ba2:80e6:eb29:ad4d] | 80, 443, 8080 | 3 |
| [2606:4700:9add:250b:7392:b3f5:cc28:b566] | 80, 443, 8080 | 3 |
| [2606:4700:9b0c:806f:3a0:27bc:43ae:1511] | 80, 443, 8080 | 3 |
| [2606:4700:9641:87a7:c2e:cf31:a8ee:a729] | 80, 443, 8080 | 3 |
| [2606:4700:4406:d7ed:fb8c:4c4b:b2b2:2c68] | 80, 443, 8080 | 3 |
| [2606:4700:9add:38b1:ba2:80e6:eb29:ad4d] | 80, 443, 8080 | 3 |
| [2606:4700:9add:250b:7392:b3f5:cc28:b566] | 80, 443, 8080 | 3 |
| [2606:4700:9b0c:806f:3a0:27bc:43ae:1511] | 80, 443, 8080 | 3 |
| [2606:4700:9641:87a7:c2e:cf31:a8ee:a729] | 80, 443, 8080 | 3 |
| [2606:4700:4406:d7ed:fb8c:4c4b:b2b2:2c68] | 80, 443, 8080 | 3 |
| [2606:4700:9add:38b1:ba2:80e6:eb29:ad4d] | 80, 443, 8080 | 3 |
| [2606:4700:9add:250b:7392:b3f5:cc28:b566] | 80, 443, 8080 | 3 |
| [2606:4700:9b0c:806f:3a0:27bc:43ae:1511] | 80, 443, 8080 | 3 |
| [2606:4700:9641:87a7:c2e:cf31:a8ee:a729] | 80, 443, 8080 | 3 |
| [2606:4700:4406:d7ed:fb8c:4c4b:b2b2:2c68] | 80, 443, 8080 | 3 |

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
