# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-01-31 00:26:07 +0330

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
| 198.41.208.203 | 80, 443, 8080 | 50 |
| 198.41.208.22 | 80, 443, 8080 | 50 |
| 198.41.208.186 | 80, 443, 8080 | 50 |
| 198.41.208.203 | 80, 443, 8080 | 50 |
| 198.41.208.22 | 80, 443, 8080 | 50 |
| 198.41.208.186 | 80, 443, 8080 | 50 |
| 104.16.251.33 | 80, 443, 8080 | 52 |
| 104.16.251.33 | 80, 443, 8080 | 52 |
| 190.93.245.113 | 80, 443, 8080 | 53 |
| 190.93.245.113 | 80, 443, 8080 | 53 |
| 173.245.49.246 | 80, 443, 8080 | 130 |
| 104.17.251.240 | 80, 443, 8080 | 130 |
| 104.19.171.187 | 80, 443, 8080 | 130 |
| 104.16.65.88 | 80, 443, 8080 | 130 |
| 104.16.166.102 | 80, 443, 8080 | 131 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8dd7:9aa0:8903:337:1b66:c0b2] | 80, 443, 8080 | 3 |
| [2606:4700:91b7:d9e7:3fcb:bb82:f057:d3ea] | 80, 443, 8080 | 3 |
| [2606:4700:8ddc:80e0:1a85:d6be:a687:de6a] | 80, 443, 8080 | 3 |
| [2606:4700:8dd7:9aad:f8a:1dbe:e05f:3bd2] | 80, 443, 8080 | 3 |
| [2606:4700:8dd7:9aa0:8903:337:1b66:c0b2] | 80, 443, 8080 | 3 |
| [2606:4700:91b7:d9e7:3fcb:bb82:f057:d3ea] | 80, 443, 8080 | 3 |
| [2606:4700:8ddc:80e0:1a85:d6be:a687:de6a] | 80, 443, 8080 | 3 |
| [2606:4700:8dd7:9aad:f8a:1dbe:e05f:3bd2] | 80, 443, 8080 | 3 |
| [2606:4700:8dd7:9aa0:8903:337:1b66:c0b2] | 80, 443, 8080 | 3 |
| [2606:4700:91b7:d9e7:3fcb:bb82:f057:d3ea] | 80, 443, 8080 | 3 |
| [2606:4700:8ddc:80e0:1a85:d6be:a687:de6a] | 80, 443, 8080 | 3 |
| [2606:4700:8dd7:9aad:f8a:1dbe:e05f:3bd2] | 80, 443, 8080 | 3 |
| [2606:4700:9ad4:7f17:8dac:bce4:5820:e54] | 80, 443, 8080 | 4 |
| [2606:4700:9ad4:7f17:8dac:bce4:5820:e54] | 80, 443, 8080 | 4 |
| [2606:4700:9ad4:7f17:8dac:bce4:5820:e54] | 80, 443, 8080 | 4 |

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
