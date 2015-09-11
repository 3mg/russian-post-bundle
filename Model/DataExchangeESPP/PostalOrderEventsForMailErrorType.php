<?php

namespace a3mg\RussianPostBundle\Model\DataExchangeESPP;

/**
 * Class representing PostalOrderEventsForMailErrorType
 *
 *
 * XSD Type: PostalOrderEventsForMailError
 */
class PostalOrderEventsForMailErrorType
{

    /**
     * @property string $errorID
     */
    private $errorID = null;

    /**
     * Gets as errorID
     *
     * @return string
     */
    public function getErrorID()
    {
        return $this->errorID;
    }

    /**
     * Sets a new errorID
     *
     * @param string $errorID
     * @return self
     */
    public function setErrorID($errorID)
    {
        $this->errorID = $errorID;
        return $this;
    }


}

