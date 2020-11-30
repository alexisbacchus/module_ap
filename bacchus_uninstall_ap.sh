sudo mv /etc/dhcpcd.conf /etc/dhcpcd.conf
cp /etc/raspap/dhcpcd.conf /etc/

sudo systemctl disable hostapd.service
sudo reboot