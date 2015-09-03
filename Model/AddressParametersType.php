<?php

namespace a3mg\RussianPostBundle\Model;

/**
 * Class representing AddressParametersType
 *
 *
 * XSD Type: AddressParameters
 */
class AddressParametersType
{

    /**
     * @property \a3mg\RussianPostBundle\Model\AddressType $destinationAddress
     */
    private $destinationAddress = null;

    /**
     * @property \a3mg\RussianPostBundle\Model\AddressType $operationAddress
     */
    private $operationAddress = null;

    /**
     * @property \a3mg\RussianPostBundle\Model\CountryType $mailDirect
     */
    private $mailDirect = null;

    /**
     * @property \a3mg\RussianPostBundle\Model\CountryType $countryFrom
     */
    private $countryFrom = null;

    /**
     * @property \a3mg\RussianPostBundle\Model\CountryType $countryOper
     */
    private $countryOper = null;

    /**
     * Gets as destinationAddress
     *
     * @return \a3mg\RussianPostBundle\Model\AddressType
     */
    public function getDestinationAddress()
    {
        return $this->destinationAddress;
    }

    /**
     * Sets a new destinationAddress
     *
     * @param \a3mg\RussianPostBundle\Model\AddressType $destinationAddress
     * @return self
     */
    public function setDestinationAddress(\a3mg\RussianPostBundle\Model\AddressType $destinationAddress)
    {
        $this->destinationAddress = $destinationAddress;
        return $this;
    }

    /**
     * Gets as operationAddress
     *
     * @return \a3mg\RussianPostBundle\Model\AddressType
     */
    public function getOperationAddress()
    {
        return $this->operationAddress;
    }

    /**
     * Sets a new operationAddress
     *
     * @param \a3mg\RussianPostBundle\Model\AddressType $operationAddress
     * @return self
     */
    public function setOperationAddress(\a3mg\RussianPostBundle\Model\AddressType $operationAddress)
    {
        $this->operationAddress = $operationAddress;
        return $this;
    }

    /**
     * Gets as mailDirect
     *
     * @return \a3mg\RussianPostBundle\Model\CountryType
     */
    public function getMailDirect()
    {
        return $this->mailDirect;
    }

    /**
     * Sets a new mailDirect
     *
     * @param \a3mg\RussianPostBundle\Model\CountryType $mailDirect
     * @return self
     */
    public function setMailDirect(\a3mg\RussianPostBundle\Model\CountryType $mailDirect)
    {
        $this->mailDirect = $mailDirect;
        return $this;
    }

    /**
     * Gets as countryFrom
     *
     * @return \a3mg\RussianPostBundle\Model\CountryType
     */
    public function getCountryFrom()
    {
        return $this->countryFrom;
    }

    /**
     * Sets a new countryFrom
     *
     * @param \a3mg\RussianPostBundle\Model\CountryType $countryFrom
     * @return self
     */
    public function setCountryFrom(\a3mg\RussianPostBundle\Model\CountryType $countryFrom)
    {
        $this->countryFrom = $countryFrom;
        return $this;
    }

    /**
     * Gets as countryOper
     *
     * @return \a3mg\RussianPostBundle\Model\CountryType
     */
    public function getCountryOper()
    {
        return $this->countryOper;
    }

    /**
     * Sets a new countryOper
     *
     * @param \a3mg\RussianPostBundle\Model\CountryType $countryOper
     * @return self
     */
    public function setCountryOper(\a3mg\RussianPostBundle\Model\CountryType $countryOper)
    {
        $this->countryOper = $countryOper;
        return $this;
    }


}

