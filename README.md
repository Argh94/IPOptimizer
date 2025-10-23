# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-24 00:12:32 +0330

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
| 198.41.208.202 | 80, 443, 8080 | 52 |
| 198.41.209.120 | 80, 443, 8080 | 53 |
| 190.93.245.40 | 80, 443, 8080 | 54 |
| 198.41.209.63 | 80, 443, 8080 | 54 |
| 190.93.247.177 | 80, 443, 8080 | 55 |
| 198.41.222.125 | 80, 443, 8080 | 55 |
| 162.159.46.249 | 80, 443, 8080 | 82 |
| 104.17.165.186 | 80, 443, 8080 | 128 |
| 172.64.84.216 | 80, 443, 8080 | 129 |
| 104.17.105.168 | 80, 443, 8080 | 129 |
| 104.17.55.232 | 80, 443, 8080 | 130 |
| 172.67.223.137 | 80, 443, 8080 | 144 |
| 172.67.199.224 | 80, 443, 8080 | 145 |
| 172.64.79.152 | 80, 443, 8080 | 216 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9641:251f:f0dc:7200:9f17:8f10] | 80, 443, 8080 | 3 |
| [2606:4700:9649:cc19:2906:3c64:93da:de79] | 80, 443, 8080 | 3 |
| [2606:4700:9b07:7cf3:a0db:48e5:85ba:6503] | 80, 443, 8080 | 3 |
| [2606:4700:9641:251f:f0dc:7200:9f17:8f10] | 80, 443, 8080 | 3 |
| [2606:4700:9649:cc19:2906:3c64:93da:de79] | 80, 443, 8080 | 3 |
| [2606:4700:9b07:7cf3:a0db:48e5:85ba:6503] | 80, 443, 8080 | 3 |
| [2606:4700:9641:251f:f0dc:7200:9f17:8f10] | 80, 443, 8080 | 3 |
| [2606:4700:9649:cc19:2906:3c64:93da:de79] | 80, 443, 8080 | 3 |
| [2606:4700:9b07:7cf3:a0db:48e5:85ba:6503] | 80, 443, 8080 | 3 |
| [2606:4700:9649:5a86:3595:a8a7:c49d:8b10] | 80, 443, 8080 | 4 |
| [2606:4700:9b07:75d7:1ca0:d1e1:15f3:d2d9] | 80, 443, 8080 | 4 |
| [2606:4700:9649:5a86:3595:a8a7:c49d:8b10] | 80, 443, 8080 | 4 |
| [2606:4700:9b07:75d7:1ca0:d1e1:15f3:d2d9] | 80, 443, 8080 | 4 |
| [2606:4700:9649:5a86:3595:a8a7:c49d:8b10] | 80, 443, 8080 | 4 |
| [2606:4700:9b07:75d7:1ca0:d1e1:15f3:d2d9] | 80, 443, 8080 | 4 |

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
