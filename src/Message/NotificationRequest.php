<?php

namespace Omnipay\Paydollar\Message;

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
        if ($this->getSecurity()) {
            $data['secureHash'] = Helper::getParamsSignatureWithSecurity($data, $this->getSecurity());
        }
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
}