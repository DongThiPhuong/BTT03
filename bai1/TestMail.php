<?php
require 'vendor/autoload.php';
require './EmailServerInterface.php';
require './MyEmailServer.php';
require './EmailSender.php';

$emailServer = new MyEmailServer();
$emailSender = new EmailSender($emailServer);
$emailSender->send("dongphuongthi@gmail.com", "Test Email", "This is a test email.");
?>