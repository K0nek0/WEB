<?php
require 'vendor/autoload.php';
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);


$client = new Google_Client();
$client->setApplicationName('php-lab-4');
$client->setScopes(['https://www.googleapis.com/auth/spreadsheets']);
$client->setAccessType('offline');
$client->setAuthConfig('credentials.json');

$service = new Google_Service_Sheets($client);

$spreadsheetId = '1ruEPHBsrQh9OfpIxJhbf9jwouhIrIRcPZ2q0GavMbFQ';

if ('POST' === $_SERVER['REQUEST_METHOD']) {
    $category = $_POST['categories'] ?? '';
    $title = $_POST['title'] ?? '';
    $email = $_POST['email'] ?? '';
    $description = $_POST['text'] ?? '';
    $data = [
        [$category, $title, $email, $description]
    ];
}

$range = 'sheet_1';

$body = new Google_Service_Sheets_ValueRange([
    'values' => $data
]);
$params = [
    'valueInputOption' => 'RAW'
];

$result = $service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);

header('Location: index.php');
exit();
