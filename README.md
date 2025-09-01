# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-02 00:06:37 +0330

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
| 172.64.84.137 | 80, 443, 8080 | 53 |
| 172.67.122.248 | 80, 443, 8080 | 55 |
| 198.41.208.251 | 80, 443, 8080 | 56 |
| 198.41.209.208 | 80, 443, 8080 | 56 |
| 198.41.208.156 | 80, 443, 8080 | 63 |
| 198.41.209.223 | 80, 443, 8080 | 64 |
| 104.17.169.219 | 80, 443, 8080 | 128 |
| 104.18.9.233 | 80, 443, 8080 | 128 |
| 104.18.165.214 | 80, 443, 8080 | 129 |
| 104.17.16.247 | 80, 443, 8080 | 129 |
| 172.67.144.186 | 80, 443, 8080 | 130 |
| 172.67.212.65 | 80, 443, 8080 | 130 |
| 104.16.100.43 | 80, 443, 8080 | 131 |
| 162.159.250.62 | 80, 443, 8080 | 135 |
| 172.64.101.245 | 80, 443, 8080 | 218 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:3037:78e4:d9fa:57d0:8d2:4258] | 80, 443, 8080 | 3 |
| [2606:4700:3037:81e9:1faa:5a28:165b:ec6] | 80, 443, 8080 | 3 |
| [2606:4700:90ce:7231:df49:b574:8858:ee6d] | 80, 443, 8080 | 3 |
| [2606:4700:3037:78e4:d9fa:57d0:8d2:4258] | 80, 443, 8080 | 3 |
| [2606:4700:3037:81e9:1faa:5a28:165b:ec6] | 80, 443, 8080 | 3 |
| [2606:4700:90ce:7231:df49:b574:8858:ee6d] | 80, 443, 8080 | 3 |
| [2606:4700:3037:78e4:d9fa:57d0:8d2:4258] | 80, 443, 8080 | 3 |
| [2606:4700:3037:81e9:1faa:5a28:165b:ec6] | 80, 443, 8080 | 3 |
| [2606:4700:90ce:7231:df49:b574:8858:ee6d] | 80, 443, 8080 | 3 |
| [2606:4700:136:16e2:74f9:5bb9:319b:abe] | 80, 443, 8080 | 4 |
| [2606:4700:90ca:c0f3:b8da:f8ed:eb91:131d] | 80, 443, 8080 | 4 |
| [2606:4700:136:16e2:74f9:5bb9:319b:abe] | 80, 443, 8080 | 4 |
| [2606:4700:90ca:c0f3:b8da:f8ed:eb91:131d] | 80, 443, 8080 | 4 |
| [2606:4700:136:16e2:74f9:5bb9:319b:abe] | 80, 443, 8080 | 4 |
| [2606:4700:90ca:c0f3:b8da:f8ed:eb91:131d] | 80, 443, 8080 | 4 |

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
