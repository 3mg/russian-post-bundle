<?php

namespace a3mg\RussianPostBundle\Model;

/**
 * Class representing FinanceParametersType
 *
 *
 * XSD Type: FinanceParameters
 */
class FinanceParametersType
{

    /**
     * @property integer $payment
     */
    private $payment = null;

    /**
     * @property integer $value
     */
    private $value = null;

    /**
     * @property integer $massRate
     */
    private $massRate = null;

    /**
     * @property integer $insrRate
     */
    private $insrRate = null;

    /**
     * @property integer $airRate
     */
    private $airRate = null;

    /**
     * @property integer $rate
     */
    private $rate = null;

    /**
     * Gets as payment
     *
     * @return integer
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Sets a new payment
     *
     * @param integer $payment
     * @return self
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
        return $this;
    }

    /**
     * Gets as value
     *
     * @return integer
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param integer $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as massRate
     *
     * @return integer
     */
    public function getMassRate()
    {
        return $this->massRate;
    }

    /**
     * Sets a new massRate
     *
     * @param integer $massRate
     * @return self
     */
    public function setMassRate($massRate)
    {
        $this->massRate = $massRate;
        return $this;
    }

    /**
     * Gets as insrRate
     *
     * @return integer
     */
    public function getInsrRate()
    {
        return $this->insrRate;
    }

    /**
     * Sets a new insrRate
     *
     * @param integer $insrRate
     * @return self
     */
    public function setInsrRate($insrRate)
    {
        $this->insrRate = $insrRate;
        return $this;
    }

    /**
     * Gets as airRate
     *
     * @return integer
     */
    public function getAirRate()
    {
        return $this->airRate;
    }

    /**
     * Sets a new airRate
     *
     * @param integer $airRate
     * @return self
     */
    public function setAirRate($airRate)
    {
        $this->airRate = $airRate;
        return $this;
    }

    /**
     * Gets as rate
     *
     * @return integer
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate
     *
     * @param integer $rate
     * @return self
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
        return $this;
    }


}

