# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-02-25 11:02:39 +0330

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
| 190.93.247.104 | 80, 443, 8080 | 55 |
| 104.18.98.58 | 80, 443, 8080 | 134 |
| 104.18.98.58 | 80, 443, 8080 | 134 |
| 104.18.98.58 | 80, 443, 8080 | 134 |
| 104.16.193.68 | 80, 443, 8080 | 141 |
| 104.16.193.68 | 80, 443, 8080 | 141 |
| 104.16.193.68 | 80, 443, 8080 | 141 |
| 104.18.178.255 | 80, 443, 8080 | 143 |
| 104.18.178.255 | 80, 443, 8080 | 143 |
| 104.18.178.255 | 80, 443, 8080 | 143 |
| 104.18.165.58 | 80, 443, 8080 | 144 |
| 104.18.165.58 | 80, 443, 8080 | 144 |
| 104.18.165.58 | 80, 443, 8080 | 144 |
| 104.17.255.12 | 80, 443, 8080 | 146 |
| 104.17.255.12 | 80, 443, 8080 | 146 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9c63:f66e:eb06:6b69:c31e:9d42] | 80, 443, 8080 | 1 |
| [2606:4700:9c63:2cf5:e25b:f6e5:6f1e:3f30] | 80, 443, 8080 | 1 |
| [2606:4700:976f:a215:5b31:bea5:8f45:fe66] | 80, 443, 8080 | 1 |
| [2606:4700:1:aea3:f04e:ca6f:b131:bf86] | 80, 443, 8080 | 1 |
| [2606:4700:3031:5c21:f8ad:8832:f453:643b] | 80, 443, 8080 | 1 |
| [2606:4700:9c63:f66e:eb06:6b69:c31e:9d42] | 80, 443, 8080 | 1 |
| [2606:4700:9c63:2cf5:e25b:f6e5:6f1e:3f30] | 80, 443, 8080 | 1 |
| [2606:4700:976f:a215:5b31:bea5:8f45:fe66] | 80, 443, 8080 | 1 |
| [2606:4700:1:aea3:f04e:ca6f:b131:bf86] | 80, 443, 8080 | 1 |
| [2606:4700:3031:5c21:f8ad:8832:f453:643b] | 80, 443, 8080 | 1 |
| [2606:4700:9c63:f66e:eb06:6b69:c31e:9d42] | 80, 443, 8080 | 1 |
| [2606:4700:9c63:2cf5:e25b:f6e5:6f1e:3f30] | 80, 443, 8080 | 1 |
| [2606:4700:976f:a215:5b31:bea5:8f45:fe66] | 80, 443, 8080 | 1 |
| [2606:4700:1:aea3:f04e:ca6f:b131:bf86] | 80, 443, 8080 | 1 |
| [2606:4700:3031:5c21:f8ad:8832:f453:643b] | 80, 443, 8080 | 1 |

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
