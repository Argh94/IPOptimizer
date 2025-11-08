# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-11-09 00:10:27 +0330

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
| 104.25.242.186 | 80, 443, 8080 | 40 |
| 104.25.242.186 | 80, 443, 8080 | 40 |
| 198.41.209.214 | 80, 443, 8080 | 52 |
| 198.41.209.214 | 80, 443, 8080 | 52 |
| 162.159.247.118 | 80, 443, 8080 | 54 |
| 162.159.247.118 | 80, 443, 8080 | 54 |
| 198.41.209.159 | 80, 443, 8080 | 55 |
| 198.41.209.159 | 80, 443, 8080 | 55 |
| 162.159.248.156 | 80, 443, 8080 | 57 |
| 162.159.248.156 | 80, 443, 8080 | 57 |
| 104.19.145.191 | 80, 443, 8080 | 128 |
| 104.17.38.103 | 80, 443, 8080 | 130 |
| 104.17.68.219 | 80, 443, 8080 | 130 |
| 104.17.59.98 | 80, 443, 8080 | 142 |
| 104.16.117.78 | 80, 443, 8080 | 148 |

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
