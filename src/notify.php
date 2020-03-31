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

if($notification->isSuccessful()) {
    return 'OK';
}
