<?php

use Omnipay\Paydollar\ClientGateway;
use Omnipay\Paydollar\Message\ClientCompletePurchaseRequest;

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

$notification = $adapter->acceptNotification([

])->send();

dd($notification->isSuccessful());

/** @var \Omnipay\Common\Message\AbstractResponse $response */
$response = $adapter->purchase([
    'amount'        => 100,
    'successUrl'    => getenv('SUCCESS_URL'),
    'failUrl'       => getenv('FAIL_URL'),
    'returnUrl'     => getenv('RETURN_URL'),
    'cancelUrl'     => getenv('CANCEL_URL'),
])->send();

if ($response->isSuccessful()) {

}
else if ($response->isRedirect()) {
    /** \Omnipay\Common\Message\RedirectResponseInterface $response */
    dd($response->getRedirectResponse()->getContent());
} else {

}

//dd(
//  $response->isRedirect(),
//    $response->getRedirectUrl(),
//    $response->getRedirectMethod(),
//    $response->getRedirectData(),
//    $response->getRedirectResponse()
//);
//
//



function getRedirectHtml()
{
    $action = $this->getRequest()->getPayServerUrl();
    $fields = $this->getFormFields();
    $method = $this->getRedirectMethod();

    $html = <<<eot
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Paydollar</title>
</head>
<body  onload="javascript:document.pay_form.submit();">
    <form id="pay_form" name="pay_form" action="{$action}" method="{$method}">
        {$fields}
    </form>
</body>
</html>
eot;

    return $html;
}


$parameters = $adapter->getParameters();

function dd()
{
    array_map(function($x) {
        var_dump($x);
    }, func_get_args());
    die;
}