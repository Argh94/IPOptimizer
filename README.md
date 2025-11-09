# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-11-09 10:16:55 +0330

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
| 104.19.222.169 | 80, 443, 8080 | 40 |
| 104.19.222.169 | 80, 443, 8080 | 40 |
| 104.17.148.194 | 80, 443, 8080 | 42 |
| 104.17.148.194 | 80, 443, 8080 | 42 |
| 198.41.208.22 | 80, 443, 8080 | 53 |
| 198.41.208.22 | 80, 443, 8080 | 53 |
| 198.41.209.88 | 80, 443, 8080 | 55 |
| 198.41.209.88 | 80, 443, 8080 | 55 |
| 172.64.93.64 | 80, 443, 8080 | 56 |
| 172.64.93.64 | 80, 443, 8080 | 56 |
| 104.17.201.245 | 80, 443, 8080 | 129 |
| 104.17.109.71 | 80, 443, 8080 | 129 |
| 104.18.241.114 | 80, 443, 8080 | 130 |
| 104.18.207.55 | 80, 443, 8080 | 132 |
| 104.17.95.220 | 80, 443, 8080 | 134 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9b08:edfa:dc8c:f36c:197a:fd72] | 80, 443, 8080 | 3 |
| [2606:4700:3033:c553:37fe:8743:17c9:cf73] | 80, 443, 8080 | 3 |
| [2606:4700:3033:ba7:687c:652b:63a2:ea76] | 80, 443, 8080 | 3 |
| [2606:4700:9b08:8e55:c244:89e2:916b:8e48] | 80, 443, 8080 | 3 |
| [2606:4700:300a:bfb2:394e:434a:3984:fbe9] | 80, 443, 8080 | 3 |
| [2606:4700:9b08:edfa:dc8c:f36c:197a:fd72] | 80, 443, 8080 | 3 |
| [2606:4700:3033:c553:37fe:8743:17c9:cf73] | 80, 443, 8080 | 3 |
| [2606:4700:3033:ba7:687c:652b:63a2:ea76] | 80, 443, 8080 | 3 |
| [2606:4700:9b08:8e55:c244:89e2:916b:8e48] | 80, 443, 8080 | 3 |
| [2606:4700:300a:bfb2:394e:434a:3984:fbe9] | 80, 443, 8080 | 3 |
| [2606:4700:9b08:edfa:dc8c:f36c:197a:fd72] | 80, 443, 8080 | 3 |
| [2606:4700:3033:c553:37fe:8743:17c9:cf73] | 80, 443, 8080 | 3 |
| [2606:4700:3033:ba7:687c:652b:63a2:ea76] | 80, 443, 8080 | 3 |
| [2606:4700:9b08:8e55:c244:89e2:916b:8e48] | 80, 443, 8080 | 3 |
| [2606:4700:300a:bfb2:394e:434a:3984:fbe9] | 80, 443, 8080 | 3 |

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
