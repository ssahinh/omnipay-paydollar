<?php

namespace Omnipay\Paydollar\Message;

use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\RedirectResponseInterface;
use Omnipay\Paydollar\Helper;

/**
 * Class ClientPurchaseResponse
 * @package Omnipay\Paydollar\Message
 */
class ClientPurchaseResponse extends AbstractResponse implements RedirectResponseInterface
{

    public function isSuccessful()
    {
        return false;
    }


    public function isRedirect()
    {
        return true;
    }


    public function getRedirectUrl()
    {
        return 'https://www.paydollar.com/b2c2/eng/payment/payForm.jsp';
    }


    public function getRedirectMethod()
    {
        return 'POST';
    }


    public function getRedirectData()
    {
        // TODO: Add Hash
        return $this->data;
    }
}