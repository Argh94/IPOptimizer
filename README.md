# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-02-13 11:01:48 +0330

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
| 104.16.9.245 | 80, 443, 8080 | 52 |
| 104.16.9.245 | 80, 443, 8080 | 52 |
| 141.101.114.24 | 80, 443, 8080 | 54 |
| 141.101.114.104 | 80, 443, 8080 | 54 |
| 141.101.114.165 | 80, 443, 8080 | 54 |
| 141.101.114.24 | 80, 443, 8080 | 54 |
| 141.101.114.104 | 80, 443, 8080 | 54 |
| 141.101.114.165 | 80, 443, 8080 | 54 |
| 104.16.153.2 | 80, 443, 8080 | 56 |
| 104.16.153.2 | 80, 443, 8080 | 56 |
| 162.159.46.253 | 80, 443, 8080 | 72 |
| 172.64.83.57 | 80, 443, 8080 | 131 |
| 104.19.193.140 | 80, 443, 8080 | 133 |
| 104.16.87.223 | 80, 443, 8080 | 141 |
| 104.16.16.96 | 80, 443, 8080 | 150 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:d1:df60:5143:29ff:c20d:3861] | 80, 443, 8080 | 3 |
| [2606:4700:964d:c6a5:1ede:bea5:2c80:4bbb] | 80, 443, 8080 | 3 |
| [2606:4700:d1:e21d:2d9e:b772:bbed:2c14] | 80, 443, 8080 | 3 |
| [2606:4700:9ad0:a77a:2845:974e:476c:5cf] | 80, 443, 8080 | 3 |
| [2606:4700:d1:df60:5143:29ff:c20d:3861] | 80, 443, 8080 | 3 |
| [2606:4700:964d:c6a5:1ede:bea5:2c80:4bbb] | 80, 443, 8080 | 3 |
| [2606:4700:d1:e21d:2d9e:b772:bbed:2c14] | 80, 443, 8080 | 3 |
| [2606:4700:9ad0:a77a:2845:974e:476c:5cf] | 80, 443, 8080 | 3 |
| [2606:4700:d1:df60:5143:29ff:c20d:3861] | 80, 443, 8080 | 3 |
| [2606:4700:964d:c6a5:1ede:bea5:2c80:4bbb] | 80, 443, 8080 | 3 |
| [2606:4700:d1:e21d:2d9e:b772:bbed:2c14] | 80, 443, 8080 | 3 |
| [2606:4700:9ad0:a77a:2845:974e:476c:5cf] | 80, 443, 8080 | 3 |
| [2606:4700:4403:8ec7:8dd2:aefa:caed:77a1] | 80, 443, 8080 | 13 |
| [2606:4700:4403:8ec7:8dd2:aefa:caed:77a1] | 80, 443, 8080 | 13 |
| [2606:4700:4403:8ec7:8dd2:aefa:caed:77a1] | 80, 443, 8080 | 13 |

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
