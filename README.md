# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-02 10:17:20 +0330

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
| 198.41.209.202 | 80, 443, 8080 | 53 |
| 198.41.209.149 | 80, 443, 8080 | 54 |
| 198.41.209.10 | 80, 443, 8080 | 54 |
| 162.159.248.175 | 80, 443, 8080 | 54 |
| 173.245.49.215 | 80, 443, 8080 | 55 |
| 172.67.121.245 | 80, 443, 8080 | 55 |
| 162.159.255.146 | 80, 443, 8080 | 55 |
| 172.67.116.230 | 80, 443, 8080 | 55 |
| 172.67.80.130 | 80, 443, 8080 | 56 |
| 162.159.36.241 | 80, 443, 8080 | 56 |
| 198.41.223.44 | 80, 443, 8080 | 95 |
| 104.16.228.54 | 80, 443, 8080 | 128 |
| 104.19.115.88 | 80, 443, 8080 | 130 |
| 104.18.75.148 | 80, 443, 8080 | 132 |
| 172.64.85.49 | 80, 443, 8080 | 132 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8d7c:1c31:f35b:b62:b20:eaee] | 80, 443, 8080 | 3 |
| [2606:4700:9ae8:7ecc:7c12:b701:852b:9e23] | 80, 443, 8080 | 3 |
| [2606:4700:8d7c:1c31:f35b:b62:b20:eaee] | 80, 443, 8080 | 3 |
| [2606:4700:9ae8:7ecc:7c12:b701:852b:9e23] | 80, 443, 8080 | 3 |
| [2606:4700:8d7c:1c31:f35b:b62:b20:eaee] | 80, 443, 8080 | 3 |
| [2606:4700:9ae8:7ecc:7c12:b701:852b:9e23] | 80, 443, 8080 | 3 |
| [2606:4700:9ae8:122b:5e07:3bd4:73ac:b88e] | 80, 443, 8080 | 4 |
| [2606:4700:8d7c:c3cc:d254:eda0:a85e:d791] | 80, 443, 8080 | 4 |
| [2606:4700:9640:f254:a254:342:7292:8bc2] | 80, 443, 8080 | 4 |
| [2606:4700:9ae8:122b:5e07:3bd4:73ac:b88e] | 80, 443, 8080 | 4 |
| [2606:4700:8d7c:c3cc:d254:eda0:a85e:d791] | 80, 443, 8080 | 4 |
| [2606:4700:9640:f254:a254:342:7292:8bc2] | 80, 443, 8080 | 4 |
| [2606:4700:9ae8:122b:5e07:3bd4:73ac:b88e] | 80, 443, 8080 | 4 |
| [2606:4700:8d7c:c3cc:d254:eda0:a85e:d791] | 80, 443, 8080 | 4 |
| [2606:4700:9640:f254:a254:342:7292:8bc2] | 80, 443, 8080 | 4 |

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
