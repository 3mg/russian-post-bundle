<?php

namespace a3mg\RussianPostBundle\Model\DataExchangeESPP;

/**
 * Class representing PostalOrderEventsForMaiOutputType
 *
 *
 * XSD Type: PostalOrderEventsForMaiOutput
 */
class PostalOrderEventsForMaiOutputType
{

    /**
     * @property \a3mg\RussianPostBundle\Model\DataExchangeESPP\PostalOrderEventType[]
     * $postalOrderEvent
     */
    private $postalOrderEvent = null;

    /**
     * Adds as postalOrderEvent
     *
     * @return self
     * @param \a3mg\RussianPostBundle\Model\DataExchangeESPP\PostalOrderEventType
     * $postalOrderEvent
     */
    public function addToPostalOrderEvent(\a3mg\RussianPostBundle\Model\DataExchangeESPP\PostalOrderEventType $postalOrderEvent)
    {
        $this->postalOrderEvent[] = $postalOrderEvent;
        return $this;
    }

    /**
     * isset postalOrderEvent
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPostalOrderEvent($index)
    {
        return isset($this->postalOrderEvent[$index]);
    }

    /**
     * unset postalOrderEvent
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPostalOrderEvent($index)
    {
        unset($this->postalOrderEvent[$index]);
    }

    /**
     * Gets as postalOrderEvent
     *
     * @return \a3mg\RussianPostBundle\Model\DataExchangeESPP\PostalOrderEventType[]
     */
    public function getPostalOrderEvent()
    {
        return $this->postalOrderEvent;
    }

    /**
     * Sets a new postalOrderEvent
     *
     * @param \a3mg\RussianPostBundle\Model\DataExchangeESPP\PostalOrderEventType[]
     * $postalOrderEvent
     * @return self
     */
    public function setPostalOrderEvent(array $postalOrderEvent)
    {
        $this->postalOrderEvent = $postalOrderEvent;
        return $this;
    }


}

