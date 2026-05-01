# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-05-02 00:56:21 +0330

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
| [2606:4700:90d2:480f:c018:70a6:b831:fa5f] | 80, 443, 8080 | 3 |
| [2606:4700:91b3:29eb:3c73:dca9:f910:1a9f] | 80, 443, 8080 | 3 |
| [2606:4700:8d74:5aaf:f796:1e0d:a9f:c147] | 80, 443, 8080 | 3 |
| [2606:4700:976c:6e57:b58c:999f:45ca:2b9f] | 80, 443, 8080 | 3 |
| [2606:4700:976c:bcfb:5bc5:1250:3eb8:c2a6] | 80, 443, 8080 | 3 |
| [2606:4700:90d2:480f:c018:70a6:b831:fa5f] | 80, 443, 8080 | 3 |
| [2606:4700:91b3:29eb:3c73:dca9:f910:1a9f] | 80, 443, 8080 | 3 |
| [2606:4700:8d74:5aaf:f796:1e0d:a9f:c147] | 80, 443, 8080 | 3 |
| [2606:4700:976c:6e57:b58c:999f:45ca:2b9f] | 80, 443, 8080 | 3 |
| [2606:4700:976c:bcfb:5bc5:1250:3eb8:c2a6] | 80, 443, 8080 | 3 |
| [2606:4700:90d2:480f:c018:70a6:b831:fa5f] | 80, 443, 8080 | 3 |
| [2606:4700:91b3:29eb:3c73:dca9:f910:1a9f] | 80, 443, 8080 | 3 |
| [2606:4700:8d74:5aaf:f796:1e0d:a9f:c147] | 80, 443, 8080 | 3 |
| [2606:4700:976c:6e57:b58c:999f:45ca:2b9f] | 80, 443, 8080 | 3 |
| [2606:4700:976c:bcfb:5bc5:1250:3eb8:c2a6] | 80, 443, 8080 | 3 |

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
