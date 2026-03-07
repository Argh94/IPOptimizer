# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-08 00:19:43 +0330

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
| 198.41.209.50 | 80, 443, 8080 | 51 |
| 198.41.209.50 | 80, 443, 8080 | 51 |
| 198.41.214.105 | 80, 443, 8080 | 53 |
| 198.41.214.105 | 80, 443, 8080 | 53 |
| 141.101.121.164 | 80, 443, 8080 | 54 |
| 141.101.121.164 | 80, 443, 8080 | 54 |
| 141.101.120.73 | 80, 443, 8080 | 55 |
| 141.101.120.73 | 80, 443, 8080 | 55 |
| 141.101.121.51 | 80, 443, 8080 | 56 |
| 141.101.121.51 | 80, 443, 8080 | 56 |
| 198.41.222.165 | 80, 443, 8080 | 67 |
| 104.18.154.216 | 80, 443, 8080 | 130 |
| 104.16.203.150 | 80, 443, 8080 | 130 |
| 104.16.245.45 | 80, 443, 8080 | 130 |
| 104.16.1.178 | 80, 443, 8080 | 140 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:300b:dd1d:c722:f072:d376:593b] | 80, 443, 8080 | 1 |
| [2606:4700:9a9e:f50:49e4:9add:7ed6:376f] | 80, 443, 8080 | 1 |
| [2606:4700:9c6e:f423:8aad:4758:1f0a:92bd] | 80, 443, 8080 | 1 |
| [2606:4700:8d9c:f0f5:1a43:e05c:f821:7fba] | 80, 443, 8080 | 1 |
| [2606:4700:9ae2:14ce:7dfd:539d:602f:de25] | 80, 443, 8080 | 1 |
| [2606:4700:300b:dd1d:c722:f072:d376:593b] | 80, 443, 8080 | 1 |
| [2606:4700:9a9e:f50:49e4:9add:7ed6:376f] | 80, 443, 8080 | 1 |
| [2606:4700:9c6e:f423:8aad:4758:1f0a:92bd] | 80, 443, 8080 | 1 |
| [2606:4700:8d9c:f0f5:1a43:e05c:f821:7fba] | 80, 443, 8080 | 1 |
| [2606:4700:9ae2:14ce:7dfd:539d:602f:de25] | 80, 443, 8080 | 1 |
| [2606:4700:300b:dd1d:c722:f072:d376:593b] | 80, 443, 8080 | 1 |
| [2606:4700:9a9e:f50:49e4:9add:7ed6:376f] | 80, 443, 8080 | 1 |
| [2606:4700:9c6e:f423:8aad:4758:1f0a:92bd] | 80, 443, 8080 | 1 |
| [2606:4700:8d9c:f0f5:1a43:e05c:f821:7fba] | 80, 443, 8080 | 1 |
| [2606:4700:9ae2:14ce:7dfd:539d:602f:de25] | 80, 443, 8080 | 1 |

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
