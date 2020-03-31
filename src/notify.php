<?php

use Omnipay\Paydollar\ClientGateway;

require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/ClientGateway.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


$adapter = new ClientGateway();
$adapter->initialize([
    'merchantId'    => getenv('MERCHANT_ID'),
    'username'      => getenv('USERNAME'),
    'password'      => getenv('PASSWORD'),
    'signature'     => getenv('SIGNATURE'),
    'testMode'      => true,
]);

$notification = $adapter->acceptNotification($_POST)->send();

$myfile = fopen("log.txt", "a") or die("Unable to open file!");
fwrite($myfile, print_r($notification->getData(), true));
fclose($myfile);
