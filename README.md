# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-11 10:18:45 +0330

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
| 141.101.115.46 | 80, 443, 8080 | 52 |
| 162.159.248.175 | 80, 443, 8080 | 53 |
| 198.41.209.139 | 80, 443, 8080 | 54 |
| 172.67.96.58 | 80, 443, 8080 | 54 |
| 172.67.83.113 | 80, 443, 8080 | 54 |
| 198.41.209.51 | 80, 443, 8080 | 55 |
| 162.159.133.117 | 80, 443, 8080 | 56 |
| 172.67.82.215 | 80, 443, 8080 | 56 |
| 198.41.208.66 | 80, 443, 8080 | 60 |
| 104.17.169.211 | 80, 443, 8080 | 129 |
| 104.19.153.157 | 80, 443, 8080 | 130 |
| 104.19.64.140 | 80, 443, 8080 | 130 |
| 104.16.73.48 | 80, 443, 8080 | 132 |
| 104.16.0.31 | 80, 443, 8080 | 149 |
| 172.67.200.186 | 80, 443, 8080 | 149 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9c69:b30b:1866:9f0e:4ea:eed6] | 80, 443, 8080 | 3 |
| [2606:4700:9c69:b30b:1866:9f0e:4ea:eed6] | 80, 443, 8080 | 3 |
| [2606:4700:9c69:b30b:1866:9f0e:4ea:eed6] | 80, 443, 8080 | 3 |
| [2606:4700:9c69:1691:7ec2:709b:c3d5:f834] | 80, 443, 8080 | 4 |
| [2606:4700:90ce:1fb4:8428:255b:25f0:52e8] | 80, 443, 8080 | 4 |
| [2606:4700:8d77:1c1e:d591:80d9:c884:506b] | 80, 443, 8080 | 4 |
| [2606:4700:8d77:7765:9bf0:e18b:680d:715a] | 80, 443, 8080 | 4 |
| [2606:4700:9c69:1691:7ec2:709b:c3d5:f834] | 80, 443, 8080 | 4 |
| [2606:4700:90ce:1fb4:8428:255b:25f0:52e8] | 80, 443, 8080 | 4 |
| [2606:4700:8d77:1c1e:d591:80d9:c884:506b] | 80, 443, 8080 | 4 |
| [2606:4700:8d77:7765:9bf0:e18b:680d:715a] | 80, 443, 8080 | 4 |
| [2606:4700:9c69:1691:7ec2:709b:c3d5:f834] | 80, 443, 8080 | 4 |
| [2606:4700:90ce:1fb4:8428:255b:25f0:52e8] | 80, 443, 8080 | 4 |
| [2606:4700:8d77:1c1e:d591:80d9:c884:506b] | 80, 443, 8080 | 4 |
| [2606:4700:8d77:7765:9bf0:e18b:680d:715a] | 80, 443, 8080 | 4 |

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
