<?php

use Omnipay\Paydollar\ClientGateway;

require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/ClientGateway.php';


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$adapter = new ClientGateway();
$adapter->initialize([
    'merchantId'    => getenv('MERCHANT_ID'),
    'orderRef'      => date('YmdHis'),
    'username'      => getenv('USERNAME'),
    'password'      => getenv('PASSWORD'),
    'signature'     => getenv('SIGNATURE'),
    'testMode'      => true,
]);

/** @var \Omnipay\Common\Message\ResponseInterface $response */
$response = $adapter->purchase([
    'amount'        => 100,
    'successUrl'    => getenv('SUCCESS_URL'),
    'failUrl'       => getenv('FAIL_URL'),
    'returnUrl'     => getenv('RETURN_URL'),
    'cancelUrl'     => getenv('CANCEL_URL'),
    'redirectUrl'   => getenv('REDIRECT_URL'),
])->send();

$parameters = $adapter->getParameters();

if($response->isRedirect()) {
    var_dump($response->getRedirectHtml());
}
