<?php

namespace JouwWeb\DocData\Type;


class AmexPaymentInfo extends AbstractObject
{
    /**
     * @var string
     */
    protected $creditCardNumber;

    /**
     * @var string
     */
    protected $expiryDate;

    /**
     * @var string
     */
    protected $cid;

    /**
     * @var string
     */
    protected $cardHolder;

    /**
     * @var string
     */
    protected $emailAddress;

    /**
     * @param string $cardHolder
     */
    public function setCardHolder($cardHolder)
    {
        $this->cardHolder = $cardHolder;
    }

    /**
     * @return string
     */
    public function getCardHolder()
    {
        return $this->cardHolder;
    }

    /**
     * @param string $cid
     */
    public function setCid($cid)
    {
        $this->cid = $cid;
    }

    /**
     * @return string
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * @param string $creditCardNumber
     */
    public function setCreditCardNumber($creditCardNumber)
    {
        $this->creditCardNumber = $creditCardNumber;
    }

    /**
     * @return string
     */
    public function getCreditCardNumber()
    {
        return $this->creditCardNumber;
    }

    /**
     * @param string $emailAddress
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param string $expiryDate
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;
    }

    /**
     * @return string
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }
}
