# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2025-12-23 10:26:22 +0330

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
| 198.41.208.22 | 80, 443, 8080 | 51 |
| 198.41.209.149 | 80, 443, 8080 | 51 |
| 198.41.208.22 | 80, 443, 8080 | 51 |
| 198.41.209.149 | 80, 443, 8080 | 51 |
| 172.64.95.102 | 80, 443, 8080 | 52 |
| 190.93.247.192 | 80, 443, 8080 | 52 |
| 198.41.209.54 | 80, 443, 8080 | 52 |
| 172.64.95.102 | 80, 443, 8080 | 52 |
| 190.93.247.192 | 80, 443, 8080 | 52 |
| 198.41.209.54 | 80, 443, 8080 | 52 |
| 162.159.46.148 | 80, 443, 8080 | 75 |
| 104.19.49.11 | 80, 443, 8080 | 130 |
| 141.101.121.135 | 80, 443, 8080 | 132 |
| 104.18.196.148 | 80, 443, 8080 | 132 |
| 172.64.87.176 | 80, 443, 8080 | 133 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:300b:dce2:c46f:aa0d:c94b:99f8] | 80, 443, 8080 | 3 |
| [2606:4700:300b:dce2:c46f:aa0d:c94b:99f8] | 80, 443, 8080 | 3 |
| [2606:4700:300b:dce2:c46f:aa0d:c94b:99f8] | 80, 443, 8080 | 3 |
| [2606:4700:9b06:ecb7:1bb7:a56b:2879:c29a] | 80, 443, 8080 | 8 |
| [2606:4700:9b06:ecb7:1bb7:a56b:2879:c29a] | 80, 443, 8080 | 8 |
| [2606:4700:9b06:ecb7:1bb7:a56b:2879:c29a] | 80, 443, 8080 | 8 |
| [2606:4700:9ad9:bdf4:9fae:5f56:3d13:c2a8] | 80, 443, 8080 | 9 |
| [2606:4700:8d9f:1981:f5cc:a27c:922c:a5be] | 80, 443, 8080 | 9 |
| [2606:4700:9b06:4b56:ad98:3cf6:fde6:4052] | 80, 443, 8080 | 9 |
| [2606:4700:9ad9:bdf4:9fae:5f56:3d13:c2a8] | 80, 443, 8080 | 9 |
| [2606:4700:8d9f:1981:f5cc:a27c:922c:a5be] | 80, 443, 8080 | 9 |
| [2606:4700:9b06:4b56:ad98:3cf6:fde6:4052] | 80, 443, 8080 | 9 |
| [2606:4700:9ad9:bdf4:9fae:5f56:3d13:c2a8] | 80, 443, 8080 | 9 |
| [2606:4700:8d9f:1981:f5cc:a27c:922c:a5be] | 80, 443, 8080 | 9 |
| [2606:4700:9b06:4b56:ad98:3cf6:fde6:4052] | 80, 443, 8080 | 9 |

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
