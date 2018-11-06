<?php
session_start();
require_once "../GoogleAPI/vendor/autoload.php";
$googleClient = new Google_Client();
$googleClient->setClientId("[Client ID]");
$googleClient->setClientSecret("[Secret Key]");
$googleClient->setApplicationName("Lab Activity DAD - REST Login");
$googleClient->setRedirectUri("http://localhost/GoogleOAuthWithMap/resource/google-callback.php");
$googleClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email")

?>

