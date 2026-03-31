# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-04-01 00:34:43 +0330

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
| 198.41.209.73 | 80, 443, 8080 | 59 |
| 198.41.209.73 | 80, 443, 8080 | 59 |
| 198.41.208.66 | 80, 443, 8080 | 62 |
| 198.41.208.66 | 80, 443, 8080 | 62 |
| 198.41.208.135 | 80, 443, 8080 | 68 |
| 198.41.208.135 | 80, 443, 8080 | 68 |
| 198.41.222.230 | 80, 443, 8080 | 77 |
| 198.41.209.39 | 80, 443, 8080 | 99 |
| 198.41.209.39 | 80, 443, 8080 | 99 |
| 198.41.209.88 | 80, 443, 8080 | 108 |
| 198.41.209.88 | 80, 443, 8080 | 108 |
| 104.17.77.11 | 80, 443, 8080 | 130 |
| 104.16.0.129 | 80, 443, 8080 | 131 |
| 104.17.210.193 | 80, 443, 8080 | 131 |
| 104.16.241.47 | 80, 443, 8080 | 132 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9add:ab3b:cbb0:c7a2:6b13:3cad] | 80, 443, 8080 | 3 |
| [2606:4700:8d7d:f931:2114:8ca1:78cf:17b0] | 80, 443, 8080 | 3 |
| [2606:4700:8d7d:d6af:4bf8:cc8b:929:f27] | 80, 443, 8080 | 3 |
| [2606:4700:9add:ab3b:cbb0:c7a2:6b13:3cad] | 80, 443, 8080 | 3 |
| [2606:4700:8d7d:f931:2114:8ca1:78cf:17b0] | 80, 443, 8080 | 3 |
| [2606:4700:8d7d:d6af:4bf8:cc8b:929:f27] | 80, 443, 8080 | 3 |
| [2606:4700:9add:ab3b:cbb0:c7a2:6b13:3cad] | 80, 443, 8080 | 3 |
| [2606:4700:8d7d:f931:2114:8ca1:78cf:17b0] | 80, 443, 8080 | 3 |
| [2606:4700:8d7d:d6af:4bf8:cc8b:929:f27] | 80, 443, 8080 | 3 |
| [2606:4700:8caf:1ad8:b4a3:b839:3a18:a451] | 80, 443, 8080 | 4 |
| [2606:4700:8caf:168e:7a24:d564:2a96:a1d0] | 80, 443, 8080 | 4 |
| [2606:4700:8caf:1ad8:b4a3:b839:3a18:a451] | 80, 443, 8080 | 4 |
| [2606:4700:8caf:168e:7a24:d564:2a96:a1d0] | 80, 443, 8080 | 4 |
| [2606:4700:8caf:1ad8:b4a3:b839:3a18:a451] | 80, 443, 8080 | 4 |
| [2606:4700:8caf:168e:7a24:d564:2a96:a1d0] | 80, 443, 8080 | 4 |

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
