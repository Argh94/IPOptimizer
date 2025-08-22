# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-08-22 10:52:23 +0330

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
| 172.64.88.124 | 80, 443, 8080 | 51 |
| 141.101.115.46 | 80, 443, 8080 | 51 |
| 172.64.89.248 | 80, 443, 8080 | 52 |
| 198.41.208.176 | 80, 443, 8080 | 56 |
| 198.41.209.0 | 80, 443, 8080 | 56 |
| 162.159.247.186 | 80, 443, 8080 | 56 |
| 172.64.66.107 | 80, 443, 8080 | 56 |
| 172.67.199.182 | 80, 443, 8080 | 133 |
| 172.67.253.95 | 80, 443, 8080 | 133 |
| 172.67.197.64 | 80, 443, 8080 | 134 |
| 104.17.36.196 | 80, 443, 8080 | 151 |
| 104.19.244.149 | 80, 443, 8080 | 160 |
| 104.19.15.217 | 80, 443, 8080 | 160 |
| 104.18.21.170 | 80, 443, 8080 | 167 |
| 104.21.88.58 | 80, 443, 8080 | 187 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:135:f2aa:aac8:53b1:a501:8f63] | 80, 443, 8080 | 3 |
| [2606:4700:8de3:a37f:7ab0:ae10:5295:7677] | 80, 443, 8080 | 3 |
| [2606:4700:9adc:4a04:bf76:1459:865e:fb30] | 80, 443, 8080 | 3 |
| [2606:4700:135:f2aa:aac8:53b1:a501:8f63] | 80, 443, 8080 | 3 |
| [2606:4700:8de3:a37f:7ab0:ae10:5295:7677] | 80, 443, 8080 | 3 |
| [2606:4700:9adc:4a04:bf76:1459:865e:fb30] | 80, 443, 8080 | 3 |
| [2606:4700:135:f2aa:aac8:53b1:a501:8f63] | 80, 443, 8080 | 3 |
| [2606:4700:8de3:a37f:7ab0:ae10:5295:7677] | 80, 443, 8080 | 3 |
| [2606:4700:9adc:4a04:bf76:1459:865e:fb30] | 80, 443, 8080 | 3 |
| [2606:4700:83b9:2874:74d2:b72:9469:9c0f] | 80, 443, 8080 | 152 |
| [2606:4700:83b9:2874:74d2:b72:9469:9c0f] | 80, 443, 8080 | 152 |
| [2606:4700:83b9:2874:74d2:b72:9469:9c0f] | 80, 443, 8080 | 152 |
| [2606:4700:83b9:781d:4e4c:dc37:f6ed:d28f] | 80, 443, 8080 | 156 |
| [2606:4700:83b9:781d:4e4c:dc37:f6ed:d28f] | 80, 443, 8080 | 156 |
| [2606:4700:83b9:781d:4e4c:dc37:f6ed:d28f] | 80, 443, 8080 | 156 |

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
