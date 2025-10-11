# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-12 00:09:12 +0330

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
| 198.41.208.9 | 80, 443, 8080 | 53 |
| 198.41.209.71 | 80, 443, 8080 | 53 |
| 172.64.84.99 | 80, 443, 8080 | 56 |
| 162.159.251.138 | 80, 443, 8080 | 57 |
| 104.17.62.225 | 80, 443, 8080 | 128 |
| 104.18.219.129 | 80, 443, 8080 | 129 |
| 104.17.64.84 | 80, 443, 8080 | 129 |
| 104.19.73.255 | 80, 443, 8080 | 131 |
| 104.16.0.10 | 80, 443, 8080 | 131 |
| 172.67.254.223 | 80, 443, 8080 | 142 |
| 172.67.253.229 | 80, 443, 8080 | 142 |
| 172.67.245.204 | 80, 443, 8080 | 145 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9aeb:c130:68ed:a419:a61e:51ef] | 80, 443, 8080 | 3 |
| [2606:4700:91bb:1d75:2e94:ad3d:29e9:d668] | 80, 443, 8080 | 3 |
| [2606:4700:8d94:2266:5c2f:4f24:bc01:2b79] | 80, 443, 8080 | 3 |
| [2606:4700:9aeb:c130:68ed:a419:a61e:51ef] | 80, 443, 8080 | 3 |
| [2606:4700:91bb:1d75:2e94:ad3d:29e9:d668] | 80, 443, 8080 | 3 |
| [2606:4700:8d94:2266:5c2f:4f24:bc01:2b79] | 80, 443, 8080 | 3 |
| [2606:4700:9aeb:c130:68ed:a419:a61e:51ef] | 80, 443, 8080 | 3 |
| [2606:4700:91bb:1d75:2e94:ad3d:29e9:d668] | 80, 443, 8080 | 3 |
| [2606:4700:8d94:2266:5c2f:4f24:bc01:2b79] | 80, 443, 8080 | 3 |
| [2606:4700:8de7:70d1:837b:8f43:417a:41e] | 80, 443, 8080 | 4 |
| [2606:4700:8d94:18db:f821:5e9f:bede:b8ef] | 80, 443, 8080 | 4 |
| [2606:4700:8de7:70d1:837b:8f43:417a:41e] | 80, 443, 8080 | 4 |
| [2606:4700:8d94:18db:f821:5e9f:bede:b8ef] | 80, 443, 8080 | 4 |
| [2606:4700:8de7:70d1:837b:8f43:417a:41e] | 80, 443, 8080 | 4 |
| [2606:4700:8d94:18db:f821:5e9f:bede:b8ef] | 80, 443, 8080 | 4 |

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
