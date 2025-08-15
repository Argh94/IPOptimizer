# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-08-16 01:34:51 +0330

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
|----|------------------|--------------|
| 141.101.121.249 | 80, 443, 8080 | 51 |
| 141.101.122.148 | 80, 443, 8080 | 51 |
| 141.101.120.246 | 80, 443, 8080 | 51 |
| 141.101.114.197 | 80, 443, 8080 | 51 |
| 141.101.114.245 | 80, 443, 8080 | 51 |
| 172.67.73.30 | 80, 443, 8080 | 56 |
| 172.64.83.233 | 80, 443, 8080 | 56 |
| 162.159.129.67 | 80, 443, 8080 | 57 |
| 190.93.246.127 | 80, 443, 8080 | 57 |
| 104.18.66.1 | 80, 443, 8080 | 128 |
| 104.18.167.106 | 80, 443, 8080 | 129 |
| 104.17.196.243 | 80, 443, 8080 | 129 |
| 104.17.34.19 | 80, 443, 8080 | 130 |
| 172.67.197.77 | 80, 443, 8080 | 130 |
| 104.19.59.40 | 80, 443, 8080 | 132 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|----|------------------|--------------|
| [2606:4700:8dd2:892a:4725:ad83:ce33:bb34] | 80, 443, 8080 | 3 |
| [2606:4700:2e:21ee:1810:d7b7:cf3d:2d3d] | 80, 443, 8080 | 3 |
| [2606:4700:19:c8e3:df67:9055:aff0:81ef] | 80, 443, 8080 | 3 |
| [2606:4700:99ef:5151:3a0:ede4:81f4:dfbf] | 80, 443, 8080 | 3 |
| [2606:4700:8dd2:892a:4725:ad83:ce33:bb34] | 80, 443, 8080 | 3 |
| [2606:4700:2e:21ee:1810:d7b7:cf3d:2d3d] | 80, 443, 8080 | 3 |
| [2606:4700:19:c8e3:df67:9055:aff0:81ef] | 80, 443, 8080 | 3 |
| [2606:4700:99ef:5151:3a0:ede4:81f4:dfbf] | 80, 443, 8080 | 3 |
| [2606:4700:8dd2:892a:4725:ad83:ce33:bb34] | 80, 443, 8080 | 3 |
| [2606:4700:2e:21ee:1810:d7b7:cf3d:2d3d] | 80, 443, 8080 | 3 |
| [2606:4700:19:c8e3:df67:9055:aff0:81ef] | 80, 443, 8080 | 3 |
| [2606:4700:99ef:5151:3a0:ede4:81f4:dfbf] | 80, 443, 8080 | 3 |
| [2606:4700:8dd2:3004:8156:93d5:754f:cc66] | 80, 443, 8080 | 5 |
| [2606:4700:8dd2:3004:8156:93d5:754f:cc66] | 80, 443, 8080 | 5 |
| [2606:4700:8dd2:3004:8156:93d5:754f:cc66] | 80, 443, 8080 | 5 |

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
