# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-10-11 10:14:31 +0330

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
| 198.41.208.9 | 80, 443, 8080 | 53 |
| 198.41.209.71 | 80, 443, 8080 | 53 |
| 172.67.74.122 | 80, 443, 8080 | 55 |
| 172.67.115.237 | 80, 443, 8080 | 56 |
| 162.159.250.103 | 80, 443, 8080 | 56 |
| 162.159.46.235 | 80, 443, 8080 | 66 |
| 104.18.240.250 | 80, 443, 8080 | 132 |
| 104.19.114.207 | 80, 443, 8080 | 132 |
| 104.16.220.241 | 80, 443, 8080 | 133 |
| 172.67.168.245 | 80, 443, 8080 | 142 |
| 104.17.44.95 | 80, 443, 8080 | 143 |
| 172.67.163.147 | 80, 443, 8080 | 143 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:4:1105:79a8:229a:b91f:c08f] | 80, 443, 8080 | 3 |
| [2606:4700:8de7:ded8:a990:6174:e0cc:922f] | 80, 443, 8080 | 3 |
| [2606:4700:90d5:c99f:c926:6cc3:8f9a:deed] | 80, 443, 8080 | 3 |
| [2606:4700:8d98:4671:bda2:25ef:3045:c676] | 80, 443, 8080 | 3 |
| [2606:4700:4:d8bb:3aae:9cae:98df:cd6a] | 80, 443, 8080 | 3 |
| [2606:4700:4:1105:79a8:229a:b91f:c08f] | 80, 443, 8080 | 3 |
| [2606:4700:8de7:ded8:a990:6174:e0cc:922f] | 80, 443, 8080 | 3 |
| [2606:4700:90d5:c99f:c926:6cc3:8f9a:deed] | 80, 443, 8080 | 3 |
| [2606:4700:8d98:4671:bda2:25ef:3045:c676] | 80, 443, 8080 | 3 |
| [2606:4700:4:d8bb:3aae:9cae:98df:cd6a] | 80, 443, 8080 | 3 |
| [2606:4700:4:1105:79a8:229a:b91f:c08f] | 80, 443, 8080 | 3 |
| [2606:4700:8de7:ded8:a990:6174:e0cc:922f] | 80, 443, 8080 | 3 |
| [2606:4700:90d5:c99f:c926:6cc3:8f9a:deed] | 80, 443, 8080 | 3 |
| [2606:4700:8d98:4671:bda2:25ef:3045:c676] | 80, 443, 8080 | 3 |
| [2606:4700:4:d8bb:3aae:9cae:98df:cd6a] | 80, 443, 8080 | 3 |

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
