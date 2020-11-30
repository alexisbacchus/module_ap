sudo mv /etc/dhcpcd.conf /etc/dhcpcd.conf
cp /etc/raspap/backups/dhcpcd.conf /etc/

sudo systemctl disable hostapd.service
sudo systemctl disable dnsmasq.service
sudo systemctl disable lighttpd.service
sudo killall ssh
sudo reboot