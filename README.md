# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-17 00:17:07 +0330

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
| 198.41.208.112 | 80, 443, 8080 | 51 |
| 198.41.208.112 | 80, 443, 8080 | 51 |
| 198.41.208.155 | 80, 443, 8080 | 52 |
| 198.41.209.231 | 80, 443, 8080 | 52 |
| 198.41.208.155 | 80, 443, 8080 | 52 |
| 198.41.209.231 | 80, 443, 8080 | 52 |
| 198.41.209.6 | 80, 443, 8080 | 53 |
| 198.41.209.6 | 80, 443, 8080 | 53 |
| 198.41.208.119 | 80, 443, 8080 | 54 |
| 198.41.208.119 | 80, 443, 8080 | 54 |
| 190.93.246.207 | 80, 443, 8080 | 129 |
| 104.17.200.229 | 80, 443, 8080 | 130 |
| 104.19.212.99 | 80, 443, 8080 | 130 |
| 104.18.84.18 | 80, 443, 8080 | 131 |
| 104.18.249.209 | 80, 443, 8080 | 142 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9adc:9d19:86ab:bf61:9b57:bc55] | 80, 443, 8080 | 3 |
| [2606:4700:9adc:db4e:10dd:4056:27f2:9896] | 80, 443, 8080 | 3 |
| [2606:4700:8d7c:e05c:4b47:783b:7f31:1778] | 80, 443, 8080 | 3 |
| [2606:4700:8d7c:d9ef:785a:46a5:8328:cb9e] | 80, 443, 8080 | 3 |
| [2606:4700:9ada:f1fa:5818:47cc:c865:927c] | 80, 443, 8080 | 3 |
| [2606:4700:9adc:9d19:86ab:bf61:9b57:bc55] | 80, 443, 8080 | 3 |
| [2606:4700:9adc:db4e:10dd:4056:27f2:9896] | 80, 443, 8080 | 3 |
| [2606:4700:8d7c:e05c:4b47:783b:7f31:1778] | 80, 443, 8080 | 3 |
| [2606:4700:8d7c:d9ef:785a:46a5:8328:cb9e] | 80, 443, 8080 | 3 |
| [2606:4700:9ada:f1fa:5818:47cc:c865:927c] | 80, 443, 8080 | 3 |
| [2606:4700:9adc:9d19:86ab:bf61:9b57:bc55] | 80, 443, 8080 | 3 |
| [2606:4700:9adc:db4e:10dd:4056:27f2:9896] | 80, 443, 8080 | 3 |
| [2606:4700:8d7c:e05c:4b47:783b:7f31:1778] | 80, 443, 8080 | 3 |
| [2606:4700:8d7c:d9ef:785a:46a5:8328:cb9e] | 80, 443, 8080 | 3 |
| [2606:4700:9ada:f1fa:5818:47cc:c865:927c] | 80, 443, 8080 | 3 |

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
