# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-08-17 10:21:01 +0330

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
| 172.67.103.46 | 80, 443, 8080 | 56 |
| 172.64.89.90 | 80, 443, 8080 | 56 |
| 172.67.127.21 | 80, 443, 8080 | 56 |
| 162.159.251.143 | 80, 443, 8080 | 56 |
| 141.101.120.184 | 80, 443, 8080 | 153 |
| 141.101.120.184 | 80, 443, 8080 | 153 |
| 172.67.87.206 | 80, 443, 8080 | 154 |
| 172.67.87.206 | 80, 443, 8080 | 154 |
| 104.19.46.133 | 80, 443, 8080 | 157 |
| 104.19.46.133 | 80, 443, 8080 | 157 |
| 104.18.24.130 | 80, 443, 8080 | 161 |
| 104.18.24.130 | 80, 443, 8080 | 161 |
| 104.24.153.133 | 80, 443, 8080 | 167 |
| 104.24.153.133 | 80, 443, 8080 | 167 |
| 162.159.237.35 | 80, 443, 8080 | 219 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|----|------------------|--------------|
| [2606:4700:9643:de43:e01e:2d1d:a83c:dd47] | 80, 443, 8080 | 3 |
| [2606:4700:9643:ef9f:c54:2805:5d86:96d0] | 80, 443, 8080 | 3 |
| [2606:4700:8dd1:cf74:4eaa:71da:15c2:926a] | 80, 443, 8080 | 3 |
| [2606:4700:9643:de43:e01e:2d1d:a83c:dd47] | 80, 443, 8080 | 3 |
| [2606:4700:9643:ef9f:c54:2805:5d86:96d0] | 80, 443, 8080 | 3 |
| [2606:4700:8dd1:cf74:4eaa:71da:15c2:926a] | 80, 443, 8080 | 3 |
| [2606:4700:9643:de43:e01e:2d1d:a83c:dd47] | 80, 443, 8080 | 3 |
| [2606:4700:9643:ef9f:c54:2805:5d86:96d0] | 80, 443, 8080 | 3 |
| [2606:4700:8dd1:cf74:4eaa:71da:15c2:926a] | 80, 443, 8080 | 3 |
| [2606:4700:9b0f:1be0:7396:b613:5b1d:5022] | 80, 443, 8080 | 4 |
| [2606:4700:9b0f:1be0:7396:b613:5b1d:5022] | 80, 443, 8080 | 4 |
| [2606:4700:9b0f:1be0:7396:b613:5b1d:5022] | 80, 443, 8080 | 4 |
| [2606:4700:3019:c17e:c21e:19fb:7102:f941] | 80, 443, 8080 | 9 |
| [2606:4700:3019:c17e:c21e:19fb:7102:f941] | 80, 443, 8080 | 9 |
| [2606:4700:3019:c17e:c21e:19fb:7102:f941] | 80, 443, 8080 | 9 |

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
