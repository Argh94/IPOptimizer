# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-08-30 10:15:44 +0330

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
| 198.41.208.186 | 80, 443, 8080 | 51 |
| 172.64.66.165 | 80, 443, 8080 | 52 |
| 198.41.211.203 | 80, 443, 8080 | 52 |
| 162.159.255.71 | 80, 443, 8080 | 52 |
| 190.93.246.113 | 80, 443, 8080 | 53 |
| 172.64.84.173 | 80, 443, 8080 | 56 |
| 172.64.91.102 | 80, 443, 8080 | 57 |
| 104.17.171.230 | 80, 443, 8080 | 131 |
| 172.67.232.22 | 80, 443, 8080 | 131 |
| 172.67.241.254 | 80, 443, 8080 | 131 |
| 172.67.225.200 | 80, 443, 8080 | 131 |
| 104.19.63.168 | 80, 443, 8080 | 143 |
| 104.19.249.223 | 80, 443, 8080 | 146 |
| 104.16.217.49 | 80, 443, 8080 | 155 |
| 104.19.153.172 | 80, 443, 8080 | 157 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:4405:2290:325a:d2e5:e106:e2fc] | 80, 443, 8080 | 3 |
| [2606:4700:8d7f:36df:2815:6390:546f:248] | 80, 443, 8080 | 3 |
| [2606:4700:4405:2290:325a:d2e5:e106:e2fc] | 80, 443, 8080 | 3 |
| [2606:4700:8d7f:36df:2815:6390:546f:248] | 80, 443, 8080 | 3 |
| [2606:4700:4405:2290:325a:d2e5:e106:e2fc] | 80, 443, 8080 | 3 |
| [2606:4700:8d7f:36df:2815:6390:546f:248] | 80, 443, 8080 | 3 |
| [2606:4700:8d7f:3377:a9e2:42ca:2cdc:5f2c] | 80, 443, 8080 | 4 |
| [2606:4700:4405:e106:4ca5:4a2e:304a:5f21] | 80, 443, 8080 | 4 |
| [2606:4700:9aee:ee6b:442a:bc80:df80:8e54] | 80, 443, 8080 | 4 |
| [2606:4700:8d7f:3377:a9e2:42ca:2cdc:5f2c] | 80, 443, 8080 | 4 |
| [2606:4700:4405:e106:4ca5:4a2e:304a:5f21] | 80, 443, 8080 | 4 |
| [2606:4700:9aee:ee6b:442a:bc80:df80:8e54] | 80, 443, 8080 | 4 |
| [2606:4700:8d7f:3377:a9e2:42ca:2cdc:5f2c] | 80, 443, 8080 | 4 |
| [2606:4700:4405:e106:4ca5:4a2e:304a:5f21] | 80, 443, 8080 | 4 |
| [2606:4700:9aee:ee6b:442a:bc80:df80:8e54] | 80, 443, 8080 | 4 |

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
