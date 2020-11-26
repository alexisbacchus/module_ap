<?php

$wifissid = $_POST["wifi_ssid"];
$wifipsk = $_POST["wifi_psk"];
$moduleid = $_POST["module-id"];
$portssh = $_POST["port-ssh"];

$output = shell_exec("sudo /usr/local/bin/bacchus_settings.sh $wifissid $wifipsk $moduleid $portssh");
echo "Changement effectué !".$_POST['wifi_ssid'].$wifissid;
?>
