# IPOptimizer

[![GitHub Actions](https://github.com/Argh94/IPOptimizer/workflows/IPOptimizer/badge.svg)](https://github.com/Argh94/IPOptimizer/actions)
[![PHP Version](https://img.shields.io/badge/PHP-8.0-blue)](https://www.php.net)
[![Update Frequency](https://img.shields.io/badge/Updates-Every%205%20Hours-green)](https://github.com/Argh94/IPOptimizer)
[![License](https://img.shields.io/badge/License-MIT-yellow)](https://opensource.org/licenses/MIT)
[![Issues](https://img.shields.io/github/issues/Argh94/IPOptimizer)](https://github.com/Argh94/IPOptimizer/issues)

## 🚀 Network Optimization with Top IPs

**IPOptimizer** fetches a list of optimized IPs (IPv4 and IPv6) with the lowest latency from [Hostmonit](https://hostmonit.com/) every 5 hours. These IPs are ideal for configuring proxies, VPNs, or improving network performance.

**Last Updated:** 2026-03-02 11:01:21 +0330

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
| 198.41.222.58 | 80, 443, 8080 | 53 |
| 198.41.222.58 | 80, 443, 8080 | 53 |
| 162.159.235.120 | 80, 443, 8080 | 56 |
| 162.159.235.152 | 80, 443, 8080 | 56 |
| 162.159.235.120 | 80, 443, 8080 | 56 |
| 162.159.235.152 | 80, 443, 8080 | 56 |
| 104.16.68.40 | 80, 443, 8080 | 133 |
| 104.16.238.146 | 80, 443, 8080 | 133 |
| 104.16.3.88 | 80, 443, 8080 | 135 |
| 104.19.18.158 | 80, 443, 8080 | 145 |
| 104.16.0.253 | 80, 443, 8080 | 152 |
| 172.64.80.202 | 80, 443, 8080 | 174 |
| 172.64.80.202 | 80, 443, 8080 | 174 |
| 172.67.210.88 | 80, 443, 8080 | 177 |
| 172.67.210.88 | 80, 443, 8080 | 177 |

### IPv6
| IP | Suggested Ports | Latency (ms) |
|:---:|:---------------:|:------------:|
| [2606:4700:9a93:f143:4fd2:ed49:ab05:f25] | 80, 443, 8080 | 1 |
| [2606:4700:90c5:9906:7916:3a2c:7c5:c692] | 80, 443, 8080 | 1 |
| [2606:4700:90d7:a719:e1e4:551e:cca8:c2cb] | 80, 443, 8080 | 1 |
| [2606:4700:8d91:950c:88b3:f8d7:9dd6:8e88] | 80, 443, 8080 | 1 |
| [2606:4700:9a93:f143:4fd2:ed49:ab05:f25] | 80, 443, 8080 | 1 |
| [2606:4700:90c5:9906:7916:3a2c:7c5:c692] | 80, 443, 8080 | 1 |
| [2606:4700:90d7:a719:e1e4:551e:cca8:c2cb] | 80, 443, 8080 | 1 |
| [2606:4700:8d91:950c:88b3:f8d7:9dd6:8e88] | 80, 443, 8080 | 1 |
| [2606:4700:9a93:f143:4fd2:ed49:ab05:f25] | 80, 443, 8080 | 1 |
| [2606:4700:90c5:9906:7916:3a2c:7c5:c692] | 80, 443, 8080 | 1 |
| [2606:4700:90d7:a719:e1e4:551e:cca8:c2cb] | 80, 443, 8080 | 1 |
| [2606:4700:8d91:950c:88b3:f8d7:9dd6:8e88] | 80, 443, 8080 | 1 |
| [2606:4700:83b2:4bce:fd91:675e:95a4:c1dc] | 80, 443, 8080 | 144 |
| [2606:4700:83b2:4bce:fd91:675e:95a4:c1dc] | 80, 443, 8080 | 144 |
| [2606:4700:83b2:4bce:fd91:675e:95a4:c1dc] | 80, 443, 8080 | 144 |

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
