<?php

namespace a3mg\RussianPostBundle\Model;

/**
 * Class representing OperationParametersType
 *
 *
 * XSD Type: OperationParameters
 */
class OperationParametersType
{

    /**
     * @property \a3mg\RussianPostBundle\Model\Rtm02ParameterType $operType
     */
    private $operType = null;

    /**
     * @property \a3mg\RussianPostBundle\Model\Rtm02ParameterType $operAttr
     */
    private $operAttr = null;

    /**
     * @property \DateTime $operDate
     */
    private $operDate = null;

    /**
     * Gets as operType
     *
     * @return \a3mg\RussianPostBundle\Model\Rtm02ParameterType
     */
    public function getOperType()
    {
        return $this->operType;
    }

    /**
     * Sets a new operType
     *
     * @param \a3mg\RussianPostBundle\Model\Rtm02ParameterType $operType
     * @return self
     */
    public function setOperType(\a3mg\RussianPostBundle\Model\Rtm02ParameterType $operType)
    {
        $this->operType = $operType;
        return $this;
    }

    /**
     * Gets as operAttr
     *
     * @return \a3mg\RussianPostBundle\Model\Rtm02ParameterType
     */
    public function getOperAttr()
    {
        return $this->operAttr;
    }

    /**
     * Sets a new operAttr
     *
     * @param \a3mg\RussianPostBundle\Model\Rtm02ParameterType $operAttr
     * @return self
     */
    public function setOperAttr(\a3mg\RussianPostBundle\Model\Rtm02ParameterType $operAttr)
    {
        $this->operAttr = $operAttr;
        return $this;
    }

    /**
     * Gets as operDate
     *
     * @return \DateTime
     */
    public function getOperDate()
    {
        return $this->operDate;
    }

    /**
     * Sets a new operDate
     *
     * @param \DateTime $operDate
     * @return self
     */
    public function setOperDate(\DateTime $operDate)
    {
        $this->operDate = $operDate;
        return $this;
    }


}

