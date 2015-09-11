<?php

namespace a3mg\RussianPostBundle\Model\DataExchangeESPP;

/**
 * Class representing PostalOrderEventsForMailFaultType
 *
 *
 * XSD Type: PostalOrderEventsForMailFault
 */
class PostalOrderEventsForMailFaultType
{

    /**
     * @property
     * \a3mg\RussianPostBundle\Model\DataExchangeESPP\PostalOrderEventsForMailErrorType[]
     * $postalOrderEventsForMailError
     */
    private $postalOrderEventsForMailError = null;

    /**
     * Adds as postalOrderEventsForMailError
     *
     * @return self
     * @param
     * \a3mg\RussianPostBundle\Model\DataExchangeESPP\PostalOrderEventsForMailErrorType
     * $postalOrderEventsForMailError
     */
    public function addToPostalOrderEventsForMailError(\a3mg\RussianPostBundle\Model\DataExchangeESPP\PostalOrderEventsForMailErrorType $postalOrderEventsForMailError)
    {
        $this->postalOrderEventsForMailError[] = $postalOrderEventsForMailError;
        return $this;
    }

    /**
     * isset postalOrderEventsForMailError
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPostalOrderEventsForMailError($index)
    {
        return isset($this->postalOrderEventsForMailError[$index]);
    }

    /**
     * unset postalOrderEventsForMailError
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPostalOrderEventsForMailError($index)
    {
        unset($this->postalOrderEventsForMailError[$index]);
    }

    /**
     * Gets as postalOrderEventsForMailError
     *
     * @return
     * \a3mg\RussianPostBundle\Model\DataExchangeESPP\PostalOrderEventsForMailErrorType[]
     */
    public function getPostalOrderEventsForMailError()
    {
        return $this->postalOrderEventsForMailError;
    }

    /**
     * Sets a new postalOrderEventsForMailError
     *
     * @param
     * \a3mg\RussianPostBundle\Model\DataExchangeESPP\PostalOrderEventsForMailErrorType[]
     * $postalOrderEventsForMailError
     * @return self
     */
    public function setPostalOrderEventsForMailError(array $postalOrderEventsForMailError)
    {
        $this->postalOrderEventsForMailError = $postalOrderEventsForMailError;
        return $this;
    }


}

