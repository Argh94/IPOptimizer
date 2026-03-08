# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-09 00:20:46 +0330

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
| 198.41.208.229 | 80, 443, 8080 | 52 |
| 198.41.208.133 | 80, 443, 8080 | 52 |
| 198.41.208.113 | 80, 443, 8080 | 52 |
| 198.41.208.134 | 80, 443, 8080 | 52 |
| 198.41.208.229 | 80, 443, 8080 | 52 |
| 198.41.208.133 | 80, 443, 8080 | 52 |
| 198.41.208.113 | 80, 443, 8080 | 52 |
| 198.41.208.134 | 80, 443, 8080 | 52 |
| 198.41.214.105 | 80, 443, 8080 | 53 |
| 198.41.214.105 | 80, 443, 8080 | 53 |
| 104.18.204.184 | 80, 443, 8080 | 131 |
| 104.17.165.133 | 80, 443, 8080 | 131 |
| 104.18.178.114 | 80, 443, 8080 | 131 |
| 104.18.224.151 | 80, 443, 8080 | 135 |
| 162.159.249.22 | 80, 443, 8080 | 140 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:137:f48c:6793:996f:6d84:5b4f] | 80, 443, 8080 | 1 |
| [2606:4700:9ade:d424:db41:8bb8:4b91:f469] | 80, 443, 8080 | 1 |
| [2606:4700:8ca7:a289:ea91:9b8b:a95f:c762] | 80, 443, 8080 | 1 |
| [2606:4700:9ade:8c24:1378:c3d1:9f69:d22a] | 80, 443, 8080 | 1 |
| [2606:4700:137:f48c:6793:996f:6d84:5b4f] | 80, 443, 8080 | 1 |
| [2606:4700:9ade:d424:db41:8bb8:4b91:f469] | 80, 443, 8080 | 1 |
| [2606:4700:8ca7:a289:ea91:9b8b:a95f:c762] | 80, 443, 8080 | 1 |
| [2606:4700:9ade:8c24:1378:c3d1:9f69:d22a] | 80, 443, 8080 | 1 |
| [2606:4700:137:f48c:6793:996f:6d84:5b4f] | 80, 443, 8080 | 1 |
| [2606:4700:9ade:d424:db41:8bb8:4b91:f469] | 80, 443, 8080 | 1 |
| [2606:4700:8ca7:a289:ea91:9b8b:a95f:c762] | 80, 443, 8080 | 1 |
| [2606:4700:9ade:8c24:1378:c3d1:9f69:d22a] | 80, 443, 8080 | 1 |
| [2606:4700:8398:7aea:236a:e5c1:af4a:225d] | 80, 443, 8080 | 3 |
| [2606:4700:8398:7aea:236a:e5c1:af4a:225d] | 80, 443, 8080 | 3 |
| [2606:4700:8398:7aea:236a:e5c1:af4a:225d] | 80, 443, 8080 | 3 |

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
