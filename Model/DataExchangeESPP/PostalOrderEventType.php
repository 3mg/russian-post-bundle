<?php

namespace a3mg\RussianPostBundle\Model\DataExchangeESPP;

/**
 * Class representing PostalOrderEventType
 *
 *
 * XSD Type: PostalOrderEvent
 */
class PostalOrderEventType
{

    /**
     * @property string $number
     */
    private $number = null;

    /**
     * @property \DateTime $eventDateTime
     */
    private $eventDateTime = null;

    /**
     * @property integer $eventType
     */
    private $eventType = null;

    /**
     * @property string $eventName
     */
    private $eventName = null;

    /**
     * @property integer $indexTo
     */
    private $indexTo = null;

    /**
     * @property integer $indexEvent
     */
    private $indexEvent = null;

    /**
     * @property integer $sumPaymentForward
     */
    private $sumPaymentForward = null;

    /**
     * @property string $countryEventCode
     */
    private $countryEventCode = null;

    /**
     * @property string $countryToCode
     */
    private $countryToCode = null;

    /**
     * Gets as number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as eventDateTime
     *
     * @return \DateTime
     */
    public function getEventDateTime()
    {
        return $this->eventDateTime;
    }

    /**
     * Sets a new eventDateTime
     *
     * @param \DateTime $eventDateTime
     * @return self
     */
    public function setEventDateTime(\DateTime $eventDateTime)
    {
        $this->eventDateTime = $eventDateTime;
        return $this;
    }

    /**
     * Gets as eventType
     *
     * @return integer
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Sets a new eventType
     *
     * @param integer $eventType
     * @return self
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
        return $this;
    }

    /**
     * Gets as eventName
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * Sets a new eventName
     *
     * @param string $eventName
     * @return self
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
        return $this;
    }

    /**
     * Gets as indexTo
     *
     * @return integer
     */
    public function getIndexTo()
    {
        return $this->indexTo;
    }

    /**
     * Sets a new indexTo
     *
     * @param integer $indexTo
     * @return self
     */
    public function setIndexTo($indexTo)
    {
        $this->indexTo = $indexTo;
        return $this;
    }

    /**
     * Gets as indexEvent
     *
     * @return integer
     */
    public function getIndexEvent()
    {
        return $this->indexEvent;
    }

    /**
     * Sets a new indexEvent
     *
     * @param integer $indexEvent
     * @return self
     */
    public function setIndexEvent($indexEvent)
    {
        $this->indexEvent = $indexEvent;
        return $this;
    }

    /**
     * Gets as sumPaymentForward
     *
     * @return integer
     */
    public function getSumPaymentForward()
    {
        return $this->sumPaymentForward;
    }

    /**
     * Sets a new sumPaymentForward
     *
     * @param integer $sumPaymentForward
     * @return self
     */
    public function setSumPaymentForward($sumPaymentForward)
    {
        $this->sumPaymentForward = $sumPaymentForward;
        return $this;
    }

    /**
     * Gets as countryEventCode
     *
     * @return string
     */
    public function getCountryEventCode()
    {
        return $this->countryEventCode;
    }

    /**
     * Sets a new countryEventCode
     *
     * @param string $countryEventCode
     * @return self
     */
    public function setCountryEventCode($countryEventCode)
    {
        $this->countryEventCode = $countryEventCode;
        return $this;
    }

    /**
     * Gets as countryToCode
     *
     * @return string
     */
    public function getCountryToCode()
    {
        return $this->countryToCode;
    }

    /**
     * Sets a new countryToCode
     *
     * @param string $countryToCode
     * @return self
     */
    public function setCountryToCode($countryToCode)
    {
        $this->countryToCode = $countryToCode;
        return $this;
    }


}

