# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-08-23 00:09:04 +0330

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
| 162.159.235.254 | 80, 443, 8080 | 52 |
| 162.159.248.248 | 80, 443, 8080 | 52 |
| 172.64.85.155 | 80, 443, 8080 | 52 |
| 198.41.208.176 | 80, 443, 8080 | 56 |
| 198.41.209.0 | 80, 443, 8080 | 56 |
| 172.67.94.82 | 80, 443, 8080 | 56 |
| 198.41.211.10 | 80, 443, 8080 | 57 |
| 172.67.98.214 | 80, 443, 8080 | 57 |
| 104.19.64.177 | 80, 443, 8080 | 129 |
| 104.19.147.56 | 80, 443, 8080 | 129 |
| 104.17.160.207 | 80, 443, 8080 | 130 |
| 104.19.177.38 | 80, 443, 8080 | 130 |
| 104.19.217.196 | 80, 443, 8080 | 130 |
| 172.67.215.70 | 80, 443, 8080 | 133 |
| 172.67.200.255 | 80, 443, 8080 | 137 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8d98:a422:f91c:f6b6:7199:c415] | 80, 443, 8080 | 3 |
| [2606:4700:8d98:a422:f91c:f6b6:7199:c415] | 80, 443, 8080 | 3 |
| [2606:4700:8d98:a422:f91c:f6b6:7199:c415] | 80, 443, 8080 | 3 |
| [2606:4700:91b1:22e7:71ca:579b:c042:99a7] | 80, 443, 8080 | 4 |
| [2606:4700:90c9:1bb3:7163:361e:db91:f7a1] | 80, 443, 8080 | 4 |
| [2606:4700:8d91:a2e2:255e:4b87:67d5:3626] | 80, 443, 8080 | 4 |
| [2606:4700:8d98:fc10:8f41:4b2:f392:d673] | 80, 443, 8080 | 4 |
| [2606:4700:91b1:22e7:71ca:579b:c042:99a7] | 80, 443, 8080 | 4 |
| [2606:4700:90c9:1bb3:7163:361e:db91:f7a1] | 80, 443, 8080 | 4 |
| [2606:4700:8d91:a2e2:255e:4b87:67d5:3626] | 80, 443, 8080 | 4 |
| [2606:4700:8d98:fc10:8f41:4b2:f392:d673] | 80, 443, 8080 | 4 |
| [2606:4700:91b1:22e7:71ca:579b:c042:99a7] | 80, 443, 8080 | 4 |
| [2606:4700:90c9:1bb3:7163:361e:db91:f7a1] | 80, 443, 8080 | 4 |
| [2606:4700:8d91:a2e2:255e:4b87:67d5:3626] | 80, 443, 8080 | 4 |
| [2606:4700:8d98:fc10:8f41:4b2:f392:d673] | 80, 443, 8080 | 4 |

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
