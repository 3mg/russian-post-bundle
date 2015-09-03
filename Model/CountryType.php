<?php

namespace a3mg\RussianPostBundle\Model;

/**
 * Class representing CountryType
 *
 *
 * XSD Type: Country
 */
class CountryType
{

    /**
     * @property integer $id
     */
    private $id = null;

    /**
     * @property string $code2A
     */
    private $code2A = null;

    /**
     * @property string $code3A
     */
    private $code3A = null;

    /**
     * @property string $nameRU
     */
    private $nameRU = null;

    /**
     * @property string $nameEN
     */
    private $nameEN = null;

    /**
     * Gets as id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param integer $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as code2A
     *
     * @return string
     */
    public function getCode2A()
    {
        return $this->code2A;
    }

    /**
     * Sets a new code2A
     *
     * @param string $code2A
     * @return self
     */
    public function setCode2A($code2A)
    {
        $this->code2A = $code2A;
        return $this;
    }

    /**
     * Gets as code3A
     *
     * @return string
     */
    public function getCode3A()
    {
        return $this->code3A;
    }

    /**
     * Sets a new code3A
     *
     * @param string $code3A
     * @return self
     */
    public function setCode3A($code3A)
    {
        $this->code3A = $code3A;
        return $this;
    }

    /**
     * Gets as nameRU
     *
     * @return string
     */
    public function getNameRU()
    {
        return $this->nameRU;
    }

    /**
     * Sets a new nameRU
     *
     * @param string $nameRU
     * @return self
     */
    public function setNameRU($nameRU)
    {
        $this->nameRU = $nameRU;
        return $this;
    }

    /**
     * Gets as nameEN
     *
     * @return string
     */
    public function getNameEN()
    {
        return $this->nameEN;
    }

    /**
     * Sets a new nameEN
     *
     * @param string $nameEN
     * @return self
     */
    public function setNameEN($nameEN)
    {
        $this->nameEN = $nameEN;
        return $this;
    }


}

