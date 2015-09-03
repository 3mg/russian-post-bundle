<?php

namespace a3mg\RussianPostBundle\Model;

/**
 * Class representing Rtm02ParameterType
 *
 *
 * XSD Type: Rtm02Parameter
 */
class Rtm02ParameterType
{

    /**
     * @property integer $id
     */
    private $id = null;

    /**
     * @property string $name
     */
    private $name = null;

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
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


}

