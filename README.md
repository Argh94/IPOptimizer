# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-13 00:15:55 +0330

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
| 198.41.209.110 | 80, 443, 8080 | 50 |
| 198.41.209.110 | 80, 443, 8080 | 50 |
| 198.41.208.113 | 80, 443, 8080 | 51 |
| 198.41.208.113 | 80, 443, 8080 | 51 |
| 172.64.95.102 | 80, 443, 8080 | 52 |
| 172.64.95.102 | 80, 443, 8080 | 52 |
| 190.93.246.203 | 80, 443, 8080 | 53 |
| 190.93.246.203 | 80, 443, 8080 | 53 |
| 104.16.251.33 | 80, 443, 8080 | 56 |
| 104.16.251.33 | 80, 443, 8080 | 56 |
| 104.16.203.106 | 80, 443, 8080 | 128 |
| 104.16.1.137 | 80, 443, 8080 | 129 |
| 104.19.92.252 | 80, 443, 8080 | 129 |
| 104.18.205.160 | 80, 443, 8080 | 129 |
| 104.18.232.249 | 80, 443, 8080 | 149 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:5:c925:47f0:60cc:31cb:643e] | 80, 443, 8080 | 3 |
| [2606:4700:5:b9b3:7ef:1173:2862:8c41] | 80, 443, 8080 | 3 |
| [2606:4700:440b:e17f:7fac:3f8c:e474:8f3c] | 80, 443, 8080 | 3 |
| [2606:4700:9c6d:35ec:a748:4e02:e797:103b] | 80, 443, 8080 | 3 |
| [2606:4700:3004:9d1e:cbab:e2b3:2fe2:5ae0] | 80, 443, 8080 | 3 |
| [2606:4700:5:c925:47f0:60cc:31cb:643e] | 80, 443, 8080 | 3 |
| [2606:4700:5:b9b3:7ef:1173:2862:8c41] | 80, 443, 8080 | 3 |
| [2606:4700:440b:e17f:7fac:3f8c:e474:8f3c] | 80, 443, 8080 | 3 |
| [2606:4700:9c6d:35ec:a748:4e02:e797:103b] | 80, 443, 8080 | 3 |
| [2606:4700:3004:9d1e:cbab:e2b3:2fe2:5ae0] | 80, 443, 8080 | 3 |
| [2606:4700:5:c925:47f0:60cc:31cb:643e] | 80, 443, 8080 | 3 |
| [2606:4700:5:b9b3:7ef:1173:2862:8c41] | 80, 443, 8080 | 3 |
| [2606:4700:440b:e17f:7fac:3f8c:e474:8f3c] | 80, 443, 8080 | 3 |
| [2606:4700:9c6d:35ec:a748:4e02:e797:103b] | 80, 443, 8080 | 3 |
| [2606:4700:3004:9d1e:cbab:e2b3:2fe2:5ae0] | 80, 443, 8080 | 3 |

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
