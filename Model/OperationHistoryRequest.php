<?php

namespace a3mg\RussianPostBundle\Model;

/**
 * Class representing OperationHistoryRequest
 */
class OperationHistoryRequest
{

    /**
     * @property string $barcode
     */
    private $barcode = null;

    /**
     * @property integer $messageType
     */
    private $messageType = null;

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
     * Gets as messageType
     *
     * @return integer
     */
    public function getMessageType()
    {
        return $this->messageType;
    }

    /**
     * Sets a new messageType
     *
     * @param integer $messageType
     * @return self
     */
    public function setMessageType($messageType)
    {
        $this->messageType = $messageType;
        return $this;
    }


}

