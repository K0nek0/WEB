<?php
require 'vendor/autoload.php';
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);


$client = new \Google_Client();
$client->setApplicationName('php-lab-4');
$client->setScopes(['https://www.googleapis.com/auth/spreadsheets']);
$client->setAccessType('offline');
$client->setAuthConfig('credentials.json');

$service = new \Google_Service_Sheets($client);
