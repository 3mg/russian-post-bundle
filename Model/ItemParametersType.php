<?php

namespace a3mg\RussianPostBundle\Model;

/**
 * Class representing ItemParametersType
 *
 *
 * XSD Type: ItemParameters
 */
class ItemParametersType
{

    /**
     * @property string $barcode
     */
    private $barcode = null;

    /**
     * @property string $internum
     */
    private $internum = null;

    /**
     * @property boolean $validRuType
     */
    private $validRuType = null;

    /**
     * @property boolean $validEnType
     */
    private $validEnType = null;

    /**
     * @property string $complexItemName
     */
    private $complexItemName = null;

    /**
     * @property \a3mg\RussianPostBundle\Model\Rtm02ParameterType $mailRank
     */
    private $mailRank = null;

    /**
     * @property \a3mg\RussianPostBundle\Model\Rtm02ParameterType $postMark
     */
    private $postMark = null;

    /**
     * @property \a3mg\RussianPostBundle\Model\Rtm02ParameterType $mailType
     */
    private $mailType = null;

    /**
     * @property \a3mg\RussianPostBundle\Model\Rtm02ParameterType $mailCtg
     */
    private $mailCtg = null;

    /**
     * @property integer $mass
     */
    private $mass = null;

    /**
     * @property integer $maxMassRU
     */
    private $maxMassRU = null;

    /**
     * @property integer $maxMassEN
     */
    private $maxMassEN = null;

    /**
     * Gets as barcode
     *
     * @return string
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * Sets a new barcode
     *
     * @param string $barcode
     * @return self
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
        return $this;
    }

    /**
     * Gets as internum
     *
     * @return string
     */
    public function getInternum()
    {
        return $this->internum;
    }

    /**
     * Sets a new internum
     *
     * @param string $internum
     * @return self
     */
    public function setInternum($internum)
    {
        $this->internum = $internum;
        return $this;
    }

    /**
     * Gets as validRuType
     *
     * @return boolean
     */
    public function getValidRuType()
    {
        return $this->validRuType;
    }

    /**
     * Sets a new validRuType
     *
     * @param boolean $validRuType
     * @return self
     */
    public function setValidRuType($validRuType)
    {
        $this->validRuType = $validRuType;
        return $this;
    }

    /**
     * Gets as validEnType
     *
     * @return boolean
     */
    public function getValidEnType()
    {
        return $this->validEnType;
    }

    /**
     * Sets a new validEnType
     *
     * @param boolean $validEnType
     * @return self
     */
    public function setValidEnType($validEnType)
    {
        $this->validEnType = $validEnType;
        return $this;
    }

    /**
     * Gets as complexItemName
     *
     * @return string
     */
    public function getComplexItemName()
    {
        return $this->complexItemName;
    }

    /**
     * Sets a new complexItemName
     *
     * @param string $complexItemName
     * @return self
     */
    public function setComplexItemName($complexItemName)
    {
        $this->complexItemName = $complexItemName;
        return $this;
    }

    /**
     * Gets as mailRank
     *
     * @return \a3mg\RussianPostBundle\Model\Rtm02ParameterType
     */
    public function getMailRank()
    {
        return $this->mailRank;
    }

    /**
     * Sets a new mailRank
     *
     * @param \a3mg\RussianPostBundle\Model\Rtm02ParameterType $mailRank
     * @return self
     */
    public function setMailRank(\a3mg\RussianPostBundle\Model\Rtm02ParameterType $mailRank)
    {
        $this->mailRank = $mailRank;
        return $this;
    }

    /**
     * Gets as postMark
     *
     * @return \a3mg\RussianPostBundle\Model\Rtm02ParameterType
     */
    public function getPostMark()
    {
        return $this->postMark;
    }

    /**
     * Sets a new postMark
     *
     * @param \a3mg\RussianPostBundle\Model\Rtm02ParameterType $postMark
     * @return self
     */
    public function setPostMark(\a3mg\RussianPostBundle\Model\Rtm02ParameterType $postMark)
    {
        $this->postMark = $postMark;
        return $this;
    }

    /**
     * Gets as mailType
     *
     * @return \a3mg\RussianPostBundle\Model\Rtm02ParameterType
     */
    public function getMailType()
    {
        return $this->mailType;
    }

    /**
     * Sets a new mailType
     *
     * @param \a3mg\RussianPostBundle\Model\Rtm02ParameterType $mailType
     * @return self
     */
    public function setMailType(\a3mg\RussianPostBundle\Model\Rtm02ParameterType $mailType)
    {
        $this->mailType = $mailType;
        return $this;
    }

    /**
     * Gets as mailCtg
     *
     * @return \a3mg\RussianPostBundle\Model\Rtm02ParameterType
     */
    public function getMailCtg()
    {
        return $this->mailCtg;
    }

    /**
     * Sets a new mailCtg
     *
     * @param \a3mg\RussianPostBundle\Model\Rtm02ParameterType $mailCtg
     * @return self
     */
    public function setMailCtg(\a3mg\RussianPostBundle\Model\Rtm02ParameterType $mailCtg)
    {
        $this->mailCtg = $mailCtg;
        return $this;
    }

    /**
     * Gets as mass
     *
     * @return integer
     */
    public function getMass()
    {
        return $this->mass;
    }

    /**
     * Sets a new mass
     *
     * @param integer $mass
     * @return self
     */
    public function setMass($mass)
    {
        $this->mass = $mass;
        return $this;
    }

    /**
     * Gets as maxMassRU
     *
     * @return integer
     */
    public function getMaxMassRU()
    {
        return $this->maxMassRU;
    }

    /**
     * Sets a new maxMassRU
     *
     * @param integer $maxMassRU
     * @return self
     */
    public function setMaxMassRU($maxMassRU)
    {
        $this->maxMassRU = $maxMassRU;
        return $this;
    }

    /**
     * Gets as maxMassEN
     *
     * @return integer
     */
    public function getMaxMassEN()
    {
        return $this->maxMassEN;
    }

    /**
     * Sets a new maxMassEN
     *
     * @param integer $maxMassEN
     * @return self
     */
    public function setMaxMassEN($maxMassEN)
    {
        $this->maxMassEN = $maxMassEN;
        return $this;
    }


}

