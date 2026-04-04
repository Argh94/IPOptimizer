# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-04-04 11:02:23 +0330

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
| 198.41.209.214 | 80, 443, 8080 | 52 |
| 198.41.209.214 | 80, 443, 8080 | 52 |
| 198.41.208.47 | 80, 443, 8080 | 53 |
| 198.41.208.120 | 80, 443, 8080 | 53 |
| 198.41.208.47 | 80, 443, 8080 | 53 |
| 198.41.208.120 | 80, 443, 8080 | 53 |
| 198.41.209.167 | 80, 443, 8080 | 54 |
| 198.41.209.167 | 80, 443, 8080 | 54 |
| 198.41.209.109 | 80, 443, 8080 | 56 |
| 198.41.209.109 | 80, 443, 8080 | 56 |
| 104.16.226.238 | 80, 443, 8080 | 133 |
| 104.17.244.88 | 80, 443, 8080 | 133 |
| 104.18.255.206 | 80, 443, 8080 | 133 |
| 104.16.69.223 | 80, 443, 8080 | 134 |
| 104.17.110.15 | 80, 443, 8080 | 138 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8de8:2721:fe1b:1739:68c8:ebd7] | 80, 443, 8080 | 1 |
| [2606:4700:9a90:64a0:3f76:b933:446d:f3c2] | 80, 443, 8080 | 1 |
| [2606:4700:0:e28a:d62f:475e:4877:b8e1] | 80, 443, 8080 | 1 |
| [2606:4700:8d78:6cbd:930a:e121:6ad2:fac] | 80, 443, 8080 | 1 |
| [2606:4700:9a90:b936:f8ae:d790:a7e5:dcbc] | 80, 443, 8080 | 1 |
| [2606:4700:8de8:2721:fe1b:1739:68c8:ebd7] | 80, 443, 8080 | 1 |
| [2606:4700:9a90:64a0:3f76:b933:446d:f3c2] | 80, 443, 8080 | 1 |
| [2606:4700:0:e28a:d62f:475e:4877:b8e1] | 80, 443, 8080 | 1 |
| [2606:4700:8d78:6cbd:930a:e121:6ad2:fac] | 80, 443, 8080 | 1 |
| [2606:4700:9a90:b936:f8ae:d790:a7e5:dcbc] | 80, 443, 8080 | 1 |
| [2606:4700:8de8:2721:fe1b:1739:68c8:ebd7] | 80, 443, 8080 | 1 |
| [2606:4700:9a90:64a0:3f76:b933:446d:f3c2] | 80, 443, 8080 | 1 |
| [2606:4700:0:e28a:d62f:475e:4877:b8e1] | 80, 443, 8080 | 1 |
| [2606:4700:8d78:6cbd:930a:e121:6ad2:fac] | 80, 443, 8080 | 1 |
| [2606:4700:9a90:b936:f8ae:d790:a7e5:dcbc] | 80, 443, 8080 | 1 |

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
