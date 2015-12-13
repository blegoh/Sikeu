<?php
/**
 * Created by PhpStorm.
 * User: blegoh
 * Date: 12/12/15
 * Time: 11:22
 */

namespace App\Soap;


class PaymentRequest
{
    public $language;

    public $trxDateTime;

    public $transmissionDateTime;

    public $companyCode;

    public $channelID;

    public $terminalID;

    public $billKey1;

    public $billKey2;

    public $billKey3;

    public $paymentAmount;

    public $currency;

    public $transactionID;

    public $reference1;

    public $reference2;

    public $reference3;
}