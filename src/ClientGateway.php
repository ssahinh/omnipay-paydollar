<?php

namespace Omnipay\Paydollar;

use Omnipay\Common\AbstractGateway;

/**
 * Class ClientGateway
 * @package Omnipay\Paydollar
 * @method \Omnipay\Common\Message\RequestInterface authorize(array $options = array())
 * @method \Omnipay\Common\Message\RequestInterface completeAuthorize(array $options = array())
 * @method \Omnipay\Common\Message\RequestInterface capture(array $options = array())
 * @method \Omnipay\Common\Message\RequestInterface void(array $options = array())
 * @method \Omnipay\Common\Message\RequestInterface createCard(array $options = array())
 * @method \Omnipay\Common\Message\RequestInterface updateCard(array $options = array())
 * @method \Omnipay\Common\Message\RequestInterface deleteCard(array $options = array())
 */
class ClientGateway extends AbstractGateway
{

    /**
     * Get gateway display name
     *
     * This can be used by carts to get the display name for each gateway.
     */
    public function getName()
    {
        return 'Paydollar';
    }


    public function getDefaultParameters()
    {
        return array (
            'currCode'   => '840',
            'mpsMode'    => 'NIL',
            'payType'    => 'N',
            'lang'       => 'C',
            'payMethod'  => 'ALL',
            'redirect'   => 'https://sim4crew.test'
        );
    }

    public function setLoginId($value)
    {
        return $this->setParameter('loginId', $value);
    }


    public function getLoginId()
    {
        return $this->getParameter('loginId');
    }

    public function setPassword($value)
    {
        return $this->setParameter('password', $value);
    }


    public function getPassword()
    {
        return $this->getParameter('password');
    }

    public function setActionType($value)
    {
        return $this->setParameter('actionType', $value);
    }


    public function getActionType()
    {
        return $this->getParameter('actionType');
    }

    public function setPayRef($value)
    {
        return $this->setParameter('payRef', $value);
    }


    public function getPayRef()
    {
        return $this->getParameter('payRef');
    }

    public function setMerchantUrl($value)
    {
        return $this->setParameter('merchant_url', $value);
    }


    public function getMerchantUrl()
    {
        return $this->getParameter('merchant_url');
    }

    public function setPayServerUrl($value)
    {
        return $this->setParameter('pay_server_url', $value);
    }


    public function getPayServerUrl()
    {
        return $this->getParameter('pay_server_url');
    }


    public function setAmount($value)
    {
        return $this->setParameter('amount', $value);
    }


    public function getAmount()
    {
        return $this->getParameter('amount');
    }


    public function setOrderRef($value)
    {
        return $this->setParameter('orderRef', $value);
    }


    public function getOrderRef()
    {
        return $this->getParameter('orderRef');
    }


    public function setRedirect($value)
    {
        return $this->setParameter('redirect', $value);
    }


    public function getRedirect()
    {
        return $this->getParameter('redirect');
    }


    public function setSuccessUrl($value)
    {
        return $this->setParameter('successUrl', $value);
    }


    public function getSuccessUrl()
    {
        return $this->getParameter('successUrl');
    }


    public function setFailUrl($value)
    {
        return $this->setParameter('failUrl', $value);
    }


    public function getFailUrl()
    {
        return $this->getParameter('failUrl');
    }


    public function setCancelUrl($value)
    {
        return $this->setParameter('cancelUrl', $value);
    }


    public function getCancelUrl()
    {
        return $this->getParameter('cancelUrl');
    }


    public function setMerchantId($value)
    {
        return $this->setParameter('merchantId', $value);
    }


    public function getMerchantId()
    {
        return $this->getParameter('merchantId');
    }


    public function setMpsMode($value)
    {
        return $this->setParameter('mpsMode', $value);
    }


    public function getMpsMode()
    {
        return $this->getParameter('mpsMode');
    }


    public function setCurrCode($value)
    {
        return $this->setParameter('currCode', $value);
    }


    public function getCurrCode()
    {
        return $this->getParameter('currCode');
    }


    public function setPayType($value)
    {
        return $this->setParameter('payType', $value);
    }


    public function getPayType()
    {
        return $this->getParameter('payType');
    }


    public function setLang($value)
    {
        return $this->setParameter('lang', $value);
    }


    public function getLang()
    {
        return $this->getParameter('lang');
    }


    public function setPayMethod($value)
    {
        return $this->setParameter('payMethod', $value);
    }


    public function getPayMethod()
    {
        return $this->getParameter('payMethod');
    }


    public function setSecurity($value)
    {
        return $this->setParameter('security', $value);
    }


    public function getSecurity()
    {
        return $this->getParameter('security');
    }


    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Paydollar\Message\ClientPurchaseRequest', $parameters);
    }


    public function completePurchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Paydollar\Message\ClientCompletePurchaseRequest', $parameters);
    }

    public function refund(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Paydollar\Message\ClientRefundRequest', $parameters);
    }

    public function __call($name, $arguments)
    {
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface authorize(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface completeAuthorize(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface capture(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface void(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface createCard(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface updateCard(array $options = array())
        // TODO: Implement @method \Omnipay\Common\Message\RequestInterface deleteCard(array $options = array())
    }
}