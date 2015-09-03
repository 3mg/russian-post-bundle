<?php

namespace a3mg\RussianPostBundle\Model;

/**
 * Class representing AddressType
 *
 *
 * XSD Type: Address
 */
class AddressType
{

    /**
     * @property string $index
     */
    private $index = null;

    /**
     * @property string $description
     */
    private $description = null;

    /**
     * Gets as index
     *
     * @return string
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Sets a new index
     *
     * @param string $index
     * @return self
     */
    public function setIndex($index)
    {
        $this->index = $index;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }


}

