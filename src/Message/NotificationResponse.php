<?php

namespace Omnipay\Paydollar\Message;

use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\NotificationInterface;
use Omnipay\Paydollar\Helper;

class NotificationResponse extends AbstractResponse implements NotificationInterface
{
    /**
     * Was the transaction successful?
     *
     * @return string Transaction status, one of {@see STATUS_COMPLETED}, {@see #STATUS_PENDING},
     * or {@see #STATUS_FAILED}.
     */
    public function getTransactionStatus()
    {
        return false;
    }

    /**
     * Is the response successful?
     *
     * @return boolean
     */
    public function isSuccessful()
    {
        /**
         * Validate Hash
         */

        /* Security'i nerden alacağımı bilemedim */
        Helper::getParamsSignatureWithSecurity($this->data, 'security');

        return false;
    }

    public function getTransactionReference()
    {
        return $this->data;
    }


    public function getData()
    {
        return $this->data;
    }
}