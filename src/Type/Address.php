<?php

namespace JouwWeb\DocData\Type;


class Address extends AbstractObject
{
    /**
     * @var string
     */
    protected $company;

    /**
     * Address lines must be filled as specific as possible using the house
     * number and optionally the house number addition field.
     *
     * @var string
     */
    protected $street;

    /**
     * The house number.
     *
     * @var string
     */
    protected $houseNumber;

    /**
     * The addition to the house number.
     *
     * @var string
     */
    protected $houseNumberAddition;

    /**
     * @var string
     */
    protected $postalCode;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var Country
     */
    protected $country;

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param Country $country
     */
    public function setCountry(Country $country)
    {
        $this->country = $country;
    }

    /**
     * @return Country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $houseNumber
     */
    public function setHouseNumber($houseNumber)
    {
        $this->houseNumber = $houseNumber;
    }

    /**
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->houseNumber;
    }

    /**
     * @param string $houseNumberAddition
     */
    public function setHouseNumberAddition($houseNumberAddition)
    {
        $this->houseNumberAddition = $houseNumberAddition;
    }

    /**
     * @return string
     */
    public function getHouseNumberAddition()
    {
        return $this->houseNumberAddition;
    }

    /**
     * @param string $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }
}
