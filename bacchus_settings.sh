#!/bin/sh

# * Récupérer :
# * SSID
# * PSK
# * Device-ID
# * Port SSH

# First Argument is Wifi SSID
ssid=$1

# Second Argument is Wifi PSK
psk=$2

# Third Argument is Device-ID
modid=$3

# Fourth Argument is Port SSH
sshport=$4

# Creation of the supplicant file
mv /etc/wpa_supplicant/wpa_supplicant.conf /etc/wpa_supplicant/wpa_supplicant.conf.old
cat > /etc/wpa_supplicant/wpa_supplicant.conf << EOF
country=fr
ctrl_interface=DIR=/var/run/wpa_supplicant GROUP=netdev
update_config=1

network={
    ssid="$ssid"
    psk="$psk"
    key_mgmt=WPA-PSK
    scan_ssid=1
}
EOF


# Creation of the .env file
cat > /home/mybacchus/mybacchus.env << EOF
export LOGGER_LEVEL=DEBUG
export MODULE_API_ADDR=https://collector.api.dev.mybacchus.net/graphql
export MODULE_API_WS_ADDR=wss://collector.api.dev.mybacchus.net/graphql_sub
export MODULE_ID=$modid
export MODULE_DEVICE_ID=$modid
EOF


# Creation of the link file
cat > /etc/init.d/link << EOF
#! /bin/sh
if !(screen -list | grep -q "link"); then
	screen -dmS link bash -c 'autossh -N -R$sshport:127.0.0.1:22 -o ServerAliveInterval=60 mybacchusadmin@146.59.238.219 -p 4242'
fi
exit 0
EOF

# Disable Raspberry Access Point, disable lighttpd daemon, and reboot
# systemctl disable hostapd.service
# systemctl disable lighttpd.service
# reboot
