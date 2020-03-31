<?php

namespace Omnipay\Paydollar\Message;

use Dotenv\Dotenv;
use Omnipay\Common\Message\MessageInterface;
use Omnipay\Common\Message\ResponseInterface;
use Omnipay\Paydollar\Helper;

class NotificationRequest extends AbstractClientRequest
{
    /**
     * Get the raw data array for this message. The format of this varies from gateway to
     * gateway, but will usually be either an associative array, or a SimpleXMLElement.
     *
     * @return mixed
     */
    public function getData()
    {
        $data = array(
            'src'           => $this->getSrc(),
            'prc'           => $this->getPrc(),
            'successCode'   => $this->getSuccessCode(),
            'ref'           => $this->getRef(),
            'PayRef'        => $this->getPayRef(),
            'currencyCode'  => $this->getCurrCode(),
            'amount'        => $this->getAmount(),
            'payerAuth'     => $this->getPayerAuth(),
            'secureHash'    => $this->getSecureHash()
        );

        $data['merchantId'] = $this->getMerchantId();

        return $data;
    }

    /**
     * Send the request with specified data
     *
     * @param  mixed  $data  The data to send
     * @return ResponseInterface
     */
    public function sendData($data)
    {
        return new NotificationResponse($this, $data);
    }

    public function setSrc($value)
    {
        return $this->setParameter('src', $value);
    }

    public function getSrc()
    {
        return $this->getParameter('src');
    }

    public function setPrc($value)
    {
        return $this->setParameter('prc', $value);
    }

    public function getPrc()
    {
        return $this->getParameter('prc');
    }

    public function setAmt($value)
    {
        return $this->setParameter('amount', $value);
    }

    public function setSuccessCode($value)
    {
        return $this->setParameter('successcode', $value);
    }

    public function getSuccessCode()
    {
        return $this->getParameter('successcode');
    }

    public function setRef($value)
    {
        return $this->setParameter('ref', $value);
    }

    public function getRef()
    {
        return $this->getParameter('ref');
    }

    public function setCur($value)
    {
        return $this->setParameter('CurrCode', $value);
    }

    public function setSecureHash($value)
    {
        return $this->setParameter('secureHash', $value);
    }

    public function getSecureHash()
    {
        return $this->getParameter('secureHash');
    }

    public function setPayerAuth($value)
    {
        return $this->setParameter('payerAuth', $value);
    }

    public function getPayerAuth()
    {
        return $this->getParameter('payerAuth');
    }

}