# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-09-10 10:18:39 +0330

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
| 198.41.209.110 | 80, 443, 8080 | 50 |
| 141.101.114.245 | 80, 443, 8080 | 52 |
| 141.101.122.148 | 80, 443, 8080 | 52 |
| 198.41.209.165 | 80, 443, 8080 | 52 |
| 198.41.208.133 | 80, 443, 8080 | 54 |
| 104.18.154.231 | 80, 443, 8080 | 130 |
| 104.16.109.217 | 80, 443, 8080 | 130 |
| 104.19.38.199 | 80, 443, 8080 | 132 |
| 104.18.242.104 | 80, 443, 8080 | 133 |
| 104.19.33.214 | 80, 443, 8080 | 142 |
| 172.67.132.237 | 80, 443, 8080 | 147 |
| 172.67.251.66 | 80, 443, 8080 | 158 |
| 172.67.218.32 | 80, 443, 8080 | 159 |
| 172.67.196.179 | 80, 443, 8080 | 166 |
| 172.67.160.170 | 80, 443, 8080 | 168 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:90c2:5669:23c0:f98c:e0b9:c049] | 80, 443, 8080 | 3 |
| [2606:4700:9adc:ab2b:b37:2b4f:eb47:1dcc] | 80, 443, 8080 | 3 |
| [2606:4700:8dd7:5ca8:552b:3b45:a605:d289] | 80, 443, 8080 | 3 |
| [2606:4700:91bb:d886:a3c6:ebf1:f8fb:86ec] | 80, 443, 8080 | 3 |
| [2606:4700:90c2:5669:23c0:f98c:e0b9:c049] | 80, 443, 8080 | 3 |
| [2606:4700:9adc:ab2b:b37:2b4f:eb47:1dcc] | 80, 443, 8080 | 3 |
| [2606:4700:8dd7:5ca8:552b:3b45:a605:d289] | 80, 443, 8080 | 3 |
| [2606:4700:91bb:d886:a3c6:ebf1:f8fb:86ec] | 80, 443, 8080 | 3 |
| [2606:4700:90c2:5669:23c0:f98c:e0b9:c049] | 80, 443, 8080 | 3 |
| [2606:4700:9adc:ab2b:b37:2b4f:eb47:1dcc] | 80, 443, 8080 | 3 |
| [2606:4700:8dd7:5ca8:552b:3b45:a605:d289] | 80, 443, 8080 | 3 |
| [2606:4700:91bb:d886:a3c6:ebf1:f8fb:86ec] | 80, 443, 8080 | 3 |
| [2606:4700:91bb:8415:595a:3887:8c68:5384] | 80, 443, 8080 | 5 |
| [2606:4700:91bb:8415:595a:3887:8c68:5384] | 80, 443, 8080 | 5 |
| [2606:4700:91bb:8415:595a:3887:8c68:5384] | 80, 443, 8080 | 5 |

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
