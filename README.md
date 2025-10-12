# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-12 10:14:47 +0330

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
| 198.41.209.149 | 80, 443, 8080 | 51 |
| 198.41.209.210 | 80, 443, 8080 | 51 |
| 162.159.46.56 | 80, 443, 8080 | 52 |
| 198.41.208.9 | 80, 443, 8080 | 53 |
| 198.41.209.71 | 80, 443, 8080 | 53 |
| 172.67.71.35 | 80, 443, 8080 | 55 |
| 162.159.129.1 | 80, 443, 8080 | 56 |
| 172.67.121.72 | 80, 443, 8080 | 57 |
| 104.16.10.137 | 80, 443, 8080 | 128 |
| 104.19.202.206 | 80, 443, 8080 | 129 |
| 172.64.80.0 | 80, 443, 8080 | 130 |
| 104.17.30.128 | 80, 443, 8080 | 130 |
| 104.19.37.137 | 80, 443, 8080 | 131 |
| 172.67.230.25 | 80, 443, 8080 | 145 |
| 172.67.177.195 | 80, 443, 8080 | 145 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:8d9e:6089:6611:56c0:f6eb:48ef] | 80, 443, 8080 | 3 |
| [2606:4700:8d9e:eb29:1be1:6083:5715:de8f] | 80, 443, 8080 | 3 |
| [2606:4700:9763:3bf7:9b3b:84de:7e72:d5b5] | 80, 443, 8080 | 3 |
| [2606:4700:8d9e:6089:6611:56c0:f6eb:48ef] | 80, 443, 8080 | 3 |
| [2606:4700:8d9e:eb29:1be1:6083:5715:de8f] | 80, 443, 8080 | 3 |
| [2606:4700:9763:3bf7:9b3b:84de:7e72:d5b5] | 80, 443, 8080 | 3 |
| [2606:4700:8d9e:6089:6611:56c0:f6eb:48ef] | 80, 443, 8080 | 3 |
| [2606:4700:8d9e:eb29:1be1:6083:5715:de8f] | 80, 443, 8080 | 3 |
| [2606:4700:9763:3bf7:9b3b:84de:7e72:d5b5] | 80, 443, 8080 | 3 |
| [2606:4700:8ddf:9e18:6136:c57e:ea37:6eae] | 80, 443, 8080 | 4 |
| [2606:4700:90d1:948c:7165:1d4:2fd1:94f2] | 80, 443, 8080 | 4 |
| [2606:4700:8ddf:9e18:6136:c57e:ea37:6eae] | 80, 443, 8080 | 4 |
| [2606:4700:90d1:948c:7165:1d4:2fd1:94f2] | 80, 443, 8080 | 4 |
| [2606:4700:8ddf:9e18:6136:c57e:ea37:6eae] | 80, 443, 8080 | 4 |
| [2606:4700:90d1:948c:7165:1d4:2fd1:94f2] | 80, 443, 8080 | 4 |

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
