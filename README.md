# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-08 10:36:27 +0330

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
| 198.41.208.113 | 80, 443, 8080 | 52 |
| 198.41.208.133 | 80, 443, 8080 | 52 |
| 198.41.208.134 | 80, 443, 8080 | 52 |
| 198.41.208.229 | 80, 443, 8080 | 52 |
| 198.41.208.113 | 80, 443, 8080 | 52 |
| 198.41.208.133 | 80, 443, 8080 | 52 |
| 198.41.208.134 | 80, 443, 8080 | 52 |
| 198.41.214.105 | 80, 443, 8080 | 53 |
| 198.41.214.105 | 80, 443, 8080 | 53 |
| 198.41.222.185 | 80, 443, 8080 | 76 |
| 104.16.219.167 | 80, 443, 8080 | 133 |
| 104.17.44.95 | 80, 443, 8080 | 134 |
| 104.16.20.116 | 80, 443, 8080 | 134 |
| 104.16.1.142 | 80, 443, 8080 | 143 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:3029:2c79:a90d:f46b:a616:55d9] | 80, 443, 8080 | 3 |
| [2606:4700:9a99:6942:3df0:8676:84ec:7abf] | 80, 443, 8080 | 3 |
| [2606:4700:3029:522e:774f:ff63:bc54:6c2a] | 80, 443, 8080 | 3 |
| [2606:4700:9a99:b84d:66f8:c409:3c4:dfb2] | 80, 443, 8080 | 3 |
| [2606:4700:9649:4d56:b2a2:1a2a:ca10:e4ce] | 80, 443, 8080 | 3 |
| [2606:4700:3029:2c79:a90d:f46b:a616:55d9] | 80, 443, 8080 | 3 |
| [2606:4700:9a99:6942:3df0:8676:84ec:7abf] | 80, 443, 8080 | 3 |
| [2606:4700:3029:522e:774f:ff63:bc54:6c2a] | 80, 443, 8080 | 3 |
| [2606:4700:9a99:b84d:66f8:c409:3c4:dfb2] | 80, 443, 8080 | 3 |
| [2606:4700:9649:4d56:b2a2:1a2a:ca10:e4ce] | 80, 443, 8080 | 3 |
| [2606:4700:3029:2c79:a90d:f46b:a616:55d9] | 80, 443, 8080 | 3 |
| [2606:4700:9a99:6942:3df0:8676:84ec:7abf] | 80, 443, 8080 | 3 |
| [2606:4700:3029:522e:774f:ff63:bc54:6c2a] | 80, 443, 8080 | 3 |
| [2606:4700:9a99:b84d:66f8:c409:3c4:dfb2] | 80, 443, 8080 | 3 |
| [2606:4700:9649:4d56:b2a2:1a2a:ca10:e4ce] | 80, 443, 8080 | 3 |

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
