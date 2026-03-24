# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-24 11:04:54 +0330

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
| 104.17.29.91 | 80, 443, 8080 | 134 |
| 104.17.81.188 | 80, 443, 8080 | 134 |
| 104.17.29.91 | 80, 443, 8080 | 134 |
| 104.17.81.188 | 80, 443, 8080 | 134 |
| 104.17.29.91 | 80, 443, 8080 | 134 |
| 104.17.81.188 | 80, 443, 8080 | 134 |
| 104.19.184.48 | 80, 443, 8080 | 141 |
| 104.19.184.48 | 80, 443, 8080 | 141 |
| 104.19.184.48 | 80, 443, 8080 | 141 |
| 104.17.133.164 | 80, 443, 8080 | 143 |
| 104.17.133.164 | 80, 443, 8080 | 143 |
| 104.17.133.164 | 80, 443, 8080 | 143 |
| 104.16.244.153 | 80, 443, 8080 | 148 |
| 104.16.244.153 | 80, 443, 8080 | 148 |
| 104.16.244.153 | 80, 443, 8080 | 148 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:90cc:dafd:5645:1553:c20:719d] | 80, 443, 8080 | 1 |
| [2606:4700:8dd6:498b:3d50:617f:1e0:a8f5] | 80, 443, 8080 | 1 |
| [2606:4700:8dd6:dfb3:4ace:436a:3f11:ebed] | 80, 443, 8080 | 1 |
| [2606:4700:90cc:dafd:5645:1553:c20:719d] | 80, 443, 8080 | 1 |
| [2606:4700:8dd6:498b:3d50:617f:1e0:a8f5] | 80, 443, 8080 | 1 |
| [2606:4700:8dd6:dfb3:4ace:436a:3f11:ebed] | 80, 443, 8080 | 1 |
| [2606:4700:90cc:dafd:5645:1553:c20:719d] | 80, 443, 8080 | 1 |
| [2606:4700:8dd6:498b:3d50:617f:1e0:a8f5] | 80, 443, 8080 | 1 |
| [2606:4700:8dd6:dfb3:4ace:436a:3f11:ebed] | 80, 443, 8080 | 1 |
| [2606:4700:83b6:1d68:622a:4d15:25ee:9587] | 80, 443, 8080 | 137 |
| [2606:4700:83b6:1d68:622a:4d15:25ee:9587] | 80, 443, 8080 | 137 |
| [2606:4700:83b6:1d68:622a:4d15:25ee:9587] | 80, 443, 8080 | 137 |
| [2606:4700:83b6:962a:2e64:e9da:5a0d:ba97] | 80, 443, 8080 | 140 |
| [2606:4700:83b6:962a:2e64:e9da:5a0d:ba97] | 80, 443, 8080 | 140 |
| [2606:4700:83b6:962a:2e64:e9da:5a0d:ba97] | 80, 443, 8080 | 140 |

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
