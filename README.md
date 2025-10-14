# Implementation of Fake Wi-Fi Hotspot and Phishing Login Page Attack

**Short description**  
Simulates a rogue Wi-Fi access point and captive phishing login portal in an isolated lab to demonstrate credential-theft risks and teach defensive awareness.

---

## Key Techniques
- Fake AP creation with wireless broadcast plus DHCP/DNS spoofing.
- HTML + PHP captive/login page used for demonstration and immediate user education.
- One-click orchestration to combine AP, DHCP and web server for a controlled demo.

---

## Prerequisites
- Kali Linux (or similar pentest distribution) in an isolated VM.
- Wireless adapter that supports monitor/AP mode.
- `dnsmasq`, `apache2` (or equivalent web server), PHP runtime.
- Test client devices owned by the researcher.

---

## Quick Start (summary — non-executable)
1. Prepare an isolated VM environment and attach an AP-capable wireless interface to the VM.  
2. Configure the demo scripts and web content included in this folder.  
3. Launch the demo orchestration script to start the fake AP, DHCP/DNS, and captive portal.  
4. Connect a test device (owned by you) and observe the captive page and educational notice.

> This Quick Start is intentionally descriptive. See the repo `scripts/` folder for local automation scripts and read their headers before use.

---

## Safety & Ethics
- **Do not** deploy on public networks or against other people's devices.
- Only run within an isolated network on hardware you own or have explicit permission to use.
- The demonstration intentionally destroys any simulated inputs; do not log or retain real credentials.

---

## Artifacts & Docs
- `docs/` — lab report, flowchart, screenshots (redacted).
- `scripts/` — orchestration scripts (read before executing).
- `web/` — captive portal HTML/PHP demo files.

---

## References & Notes
- aircrack-ng / airbase-ng documentation (local copy recommended).
- dnsmasq configuration examples included in `configs/`.
