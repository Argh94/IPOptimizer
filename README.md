# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-15 00:13:43 +0330

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
| 198.41.208.112 | 80, 443, 8080 | 52 |
| 198.41.208.112 | 80, 443, 8080 | 52 |
| 198.41.209.105 | 80, 443, 8080 | 53 |
| 198.41.209.41 | 80, 443, 8080 | 53 |
| 198.41.209.105 | 80, 443, 8080 | 53 |
| 198.41.209.41 | 80, 443, 8080 | 53 |
| 198.41.208.119 | 80, 443, 8080 | 55 |
| 198.41.208.212 | 80, 443, 8080 | 55 |
| 198.41.208.119 | 80, 443, 8080 | 55 |
| 198.41.208.212 | 80, 443, 8080 | 55 |
| 104.17.64.28 | 80, 443, 8080 | 129 |
| 190.93.247.137 | 80, 443, 8080 | 132 |
| 104.18.119.224 | 80, 443, 8080 | 138 |
| 104.16.95.254 | 80, 443, 8080 | 145 |
| 104.18.10.187 | 80, 443, 8080 | 148 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8d74:ea27:ef37:9579:5d74:7cf] | 80, 443, 8080 | 3 |
| [2606:4700:90d2:26f9:aaf9:6970:cd1e:ad27] | 80, 443, 8080 | 3 |
| [2606:4700:d1:573:f9ce:2037:a74f:2146] | 80, 443, 8080 | 3 |
| [2606:4700:8d74:ea27:ef37:9579:5d74:7cf] | 80, 443, 8080 | 3 |
| [2606:4700:90d2:26f9:aaf9:6970:cd1e:ad27] | 80, 443, 8080 | 3 |
| [2606:4700:d1:573:f9ce:2037:a74f:2146] | 80, 443, 8080 | 3 |
| [2606:4700:8d74:ea27:ef37:9579:5d74:7cf] | 80, 443, 8080 | 3 |
| [2606:4700:90d2:26f9:aaf9:6970:cd1e:ad27] | 80, 443, 8080 | 3 |
| [2606:4700:d1:573:f9ce:2037:a74f:2146] | 80, 443, 8080 | 3 |
| [2606:4700:3017:e0b9:79b3:2a70:a14b:9fb6] | 80, 443, 8080 | 4 |
| [2606:4700:3017:267f:81e5:ae4e:cc5c:8804] | 80, 443, 8080 | 4 |
| [2606:4700:3017:e0b9:79b3:2a70:a14b:9fb6] | 80, 443, 8080 | 4 |
| [2606:4700:3017:267f:81e5:ae4e:cc5c:8804] | 80, 443, 8080 | 4 |
| [2606:4700:3017:e0b9:79b3:2a70:a14b:9fb6] | 80, 443, 8080 | 4 |
| [2606:4700:3017:267f:81e5:ae4e:cc5c:8804] | 80, 443, 8080 | 4 |

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
