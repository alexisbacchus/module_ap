<?php

require_once 'includes/status_messages.php';
require_once 'config.php';

/**
 *
 *
 */
function DisplayMyBacchusSettings()
{

    // $status = new StatusMessages();

    if (isset($_POST['SaveLanguage'])) {
        if (isset($_POST['locale'])) {
            // $_SESSION['locale'] = $_POST['locale'];
            // $status->addMessage('Language setting saved', 'success');
        }
    }

    // if (!RASPI_MONITOR_ENABLED) {
    //     if (isset($_POST['SaveServerSettings'])) {
    //         $good_input = true;
    //         // Validate server port
    //         if (isset($_POST['serverPort'])) {
    //             if (strlen($_POST['serverPort']) > 4 || !is_numeric($_POST['serverPort'])) {
    //                 $status->addMessage('Invalid value for port number', 'danger');
    //                 $good_input = false;
    //             } else {
    //                 $serverPort = escapeshellarg($_POST['serverPort']);
    //            }
    //         }
    //         // Validate server bind address
    //         $serverBind = escapeshellarg('');
    //         if ($_POST['serverBind'] && $_POST['serverBind'] !== null ) {
    //             if (!filter_var($_POST['serverBind'], FILTER_VALIDATE_IP)) {
    //                 $status->addMessage('Invalid value for bind address', 'danger');
    //                 $good_input = false;
    //             } else {
    //                 $serverBind = escapeshellarg($_POST['serverBind']);
    //             }
    //         }
    //         // Save settings
    //         if ($good_input) {
    //             exec("sudo /etc/raspap/lighttpd/configport.sh $serverPort $serverBind " .RASPI_LIGHTTPD_CONFIG. " ".$_SERVER['SERVER_NAME'], $return);
    //             foreach ($return as $line) {
    //                 $status->addMessage($line, 'info');
    //             }
    //         }
    //     }

    //     if (isset($_POST['system_reboot'])) {
    //         $status->addMessage("System Rebooting Now!", "warning", false);
    //         $result = shell_exec("sudo /sbin/reboot");
    //     }
    //     if (isset($_POST['system_shutdown'])) {
    //         $status->addMessage("System Shutting Down Now!", "warning", false);
    //         $result = shell_exec("sudo /sbin/shutdown -h now");
    //     }
    // }

    // if (isset($_POST['RestartLighttpd'])) {
    //     $status->addMessage('Restarting lighttpd in 3 seconds...', 'info');
    //     exec('sudo /etc/raspap/lighttpd/configport.sh --restart');
    // }
    // exec('cat '. RASPI_LIGHTTPD_CONFIG, $return);
    // $conf = ParseConfig($return);
    // $serverPort = $conf['server.port'];
    // $serverBind = str_replace('"', '',$conf['server.bind']);

    // // define locales
    // $arrLocales = array(
    //     'en_GB.UTF-8' => 'English',
    //     'cs_CZ.UTF-8' => 'Čeština',
    //     'zh_TW.UTF-8' => '正體中文 (Chinese traditional)',
    //     'zh_CN.UTF-8' => '简体中文 (Chinese simplified)',
    //     'da_DK.UTF-8' => 'Dansk',
    //     'de_DE.UTF-8' => 'Deutsch',
    //     'es_MX.UTF-8' => 'Español',
    //     'fi_FI.UTF-8' => 'Finnish',
    //     'fr_FR.UTF-8' => 'Français',
    //     'el_GR.UTF-8' => 'Ελληνικά',
    //     'id_ID.UTF-8' => 'Indonesian',
    //     'it_IT.UTF-8' => 'Italiano',
    //     'ja_JP.UTF-8' => '日本語 (Japanese)',
    //     'ko_KR.UTF-8' => '한국어 (Korean)',
    //     'nl_NL.UTF-8' => 'Nederlands',
    //     'pl_PL.UTF-8' => 'Polskie',
    //     'pt_BR.UTF-8' => 'Português',
    //     'ru_RU.UTF-8' => 'Русский',
    //     'sv_SE.UTF-8' => 'Svenska',
    //     'tr_TR.UTF-8' => 'Türkçe',
    //     'vi_VN.UTF-8' => 'Tiếng Việt (Vietnamese)'
    // );

    echo renderTemplate("mybacchus_settings", compact([]));
}
