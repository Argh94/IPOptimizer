# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-30 10:25:12 +0330

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
| 198.41.209.105 | 80, 443, 8080 | 50 |
| 198.41.209.105 | 80, 443, 8080 | 50 |
| 198.41.208.63 | 80, 443, 8080 | 51 |
| 172.64.95.70 | 80, 443, 8080 | 51 |
| 198.41.208.57 | 80, 443, 8080 | 51 |
| 198.41.209.157 | 80, 443, 8080 | 51 |
| 198.41.208.63 | 80, 443, 8080 | 51 |
| 172.64.95.70 | 80, 443, 8080 | 51 |
| 198.41.208.57 | 80, 443, 8080 | 51 |
| 198.41.209.157 | 80, 443, 8080 | 51 |
| 162.159.36.250 | 80, 443, 8080 | 80 |
| 198.41.222.177 | 80, 443, 8080 | 83 |
| 104.19.175.85 | 80, 443, 8080 | 134 |
| 104.16.0.142 | 80, 443, 8080 | 138 |
| 104.17.218.38 | 80, 443, 8080 | 141 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:4403:b88e:70c3:173f:df8:ac8f] | 80, 443, 8080 | 3 |
| [2606:4700:4403:b88e:70c3:173f:df8:ac8f] | 80, 443, 8080 | 3 |
| [2606:4700:4403:b88e:70c3:173f:df8:ac8f] | 80, 443, 8080 | 3 |
| [2606:4700:9ae6:abcc:c16e:d45a:5c1:1b91] | 80, 443, 8080 | 9 |
| [2606:4700:90ce:9875:cc40:ec92:d758:3299] | 80, 443, 8080 | 9 |
| [2606:4700:90ce:a8cb:fceb:ec59:5add:ea2c] | 80, 443, 8080 | 9 |
| [2606:4700:99e6:17a2:46f4:c7bf:1814:5fde] | 80, 443, 8080 | 9 |
| [2606:4700:9ae6:abcc:c16e:d45a:5c1:1b91] | 80, 443, 8080 | 9 |
| [2606:4700:90ce:9875:cc40:ec92:d758:3299] | 80, 443, 8080 | 9 |
| [2606:4700:90ce:a8cb:fceb:ec59:5add:ea2c] | 80, 443, 8080 | 9 |
| [2606:4700:99e6:17a2:46f4:c7bf:1814:5fde] | 80, 443, 8080 | 9 |
| [2606:4700:9ae6:abcc:c16e:d45a:5c1:1b91] | 80, 443, 8080 | 9 |
| [2606:4700:90ce:9875:cc40:ec92:d758:3299] | 80, 443, 8080 | 9 |
| [2606:4700:90ce:a8cb:fceb:ec59:5add:ea2c] | 80, 443, 8080 | 9 |
| [2606:4700:99e6:17a2:46f4:c7bf:1814:5fde] | 80, 443, 8080 | 9 |

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
