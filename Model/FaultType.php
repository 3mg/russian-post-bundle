<?php

namespace a3mg\RussianPostBundle\Model;

/**
 * Class representing FaultType
 *
 * Fault reporting structure
 * XSD Type: Fault
 */
class FaultType
{

    /**
     * @property string $faultcode
     */
    private $faultcode = null;

    /**
     * @property string $faultstring
     */
    private $faultstring = null;

    /**
     * @property string $faultactor
     */
    private $faultactor = null;

    /**
     * @property \a3mg\RussianPostBundle\Model\DetailType $detail
     */
    private $detail = null;

    /**
     * Gets as faultcode
     *
     * @return string
     */
    public function getFaultcode()
    {
        return $this->faultcode;
    }

    /**
     * Sets a new faultcode
     *
     * @param string $faultcode
     * @return self
     */
    public function setFaultcode($faultcode)
    {
        $this->faultcode = $faultcode;
        return $this;
    }

    /**
     * Gets as faultstring
     *
     * @return string
     */
    public function getFaultstring()
    {
        return $this->faultstring;
    }

    /**
     * Sets a new faultstring
     *
     * @param string $faultstring
     * @return self
     */
    public function setFaultstring($faultstring)
    {
        $this->faultstring = $faultstring;
        return $this;
    }

    /**
     * Gets as faultactor
     *
     * @return string
     */
    public function getFaultactor()
    {
        return $this->faultactor;
    }

    /**
     * Sets a new faultactor
     *
     * @param string $faultactor
     * @return self
     */
    public function setFaultactor($faultactor)
    {
        $this->faultactor = $faultactor;
        return $this;
    }

    /**
     * Gets as detail
     *
     * @return \a3mg\RussianPostBundle\Model\DetailType
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * @param \a3mg\RussianPostBundle\Model\DetailType $detail
     * @return self
     */
    public function setDetail(\a3mg\RussianPostBundle\Model\DetailType $detail)
    {
        $this->detail = $detail;
        return $this;
    }


}

