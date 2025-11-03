# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-11-04 00:13:28 +0330

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
| 104.19.48.144 | 80, 443, 8080 | 38 |
| 198.41.208.70 | 80, 443, 8080 | 52 |
| 104.16.145.254 | 80, 443, 8080 | 54 |
| 190.93.245.112 | 80, 443, 8080 | 54 |
| 172.67.94.179 | 80, 443, 8080 | 55 |
| 141.101.120.225 | 80, 443, 8080 | 55 |
| 198.41.211.37 | 80, 443, 8080 | 56 |
| 172.67.97.88 | 80, 443, 8080 | 56 |
| 172.64.84.9 | 80, 443, 8080 | 56 |
| 162.159.36.128 | 80, 443, 8080 | 76 |
| 104.16.8.48 | 80, 443, 8080 | 128 |
| 104.16.228.118 | 80, 443, 8080 | 129 |
| 104.17.167.9 | 80, 443, 8080 | 129 |
| 104.18.254.221 | 80, 443, 8080 | 129 |
| 172.67.249.132 | 80, 443, 8080 | 142 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:90d0:f87:758f:2631:e9a4:eab6] | 80, 443, 8080 | 3 |
| [2606:4700:9add:fbdc:bbc0:1083:629b:79ec] | 80, 443, 8080 | 3 |
| [2606:4700:90d0:bd03:26e5:cdf8:99b3:b28a] | 80, 443, 8080 | 3 |
| [2606:4700:440a:31ed:4bdb:7508:4952:2f2] | 80, 443, 8080 | 3 |
| [2606:4700:440a:409:f428:2ce8:6eb8:7040] | 80, 443, 8080 | 3 |
| [2606:4700:90d0:f87:758f:2631:e9a4:eab6] | 80, 443, 8080 | 3 |
| [2606:4700:9add:fbdc:bbc0:1083:629b:79ec] | 80, 443, 8080 | 3 |
| [2606:4700:90d0:bd03:26e5:cdf8:99b3:b28a] | 80, 443, 8080 | 3 |
| [2606:4700:440a:31ed:4bdb:7508:4952:2f2] | 80, 443, 8080 | 3 |
| [2606:4700:440a:409:f428:2ce8:6eb8:7040] | 80, 443, 8080 | 3 |
| [2606:4700:90d0:f87:758f:2631:e9a4:eab6] | 80, 443, 8080 | 3 |
| [2606:4700:9add:fbdc:bbc0:1083:629b:79ec] | 80, 443, 8080 | 3 |
| [2606:4700:90d0:bd03:26e5:cdf8:99b3:b28a] | 80, 443, 8080 | 3 |
| [2606:4700:440a:31ed:4bdb:7508:4952:2f2] | 80, 443, 8080 | 3 |
| [2606:4700:440a:409:f428:2ce8:6eb8:7040] | 80, 443, 8080 | 3 |

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
