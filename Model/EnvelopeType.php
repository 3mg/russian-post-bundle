<?php

namespace a3mg\RussianPostBundle\Model;

/**
 * Class representing EnvelopeType
 *
 *
 * XSD Type: Envelope
 */
class EnvelopeType
{

    /**
     * @property \a3mg\RussianPostBundle\Model\Header $header
     */
    private $header = null;

    /**
     * @property \a3mg\RussianPostBundle\Model\Body $body
     */
    private $body = null;

    /**
     * Gets as header
     *
     * @return \a3mg\RussianPostBundle\Model\Header
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * @param \a3mg\RussianPostBundle\Model\Header $header
     * @return self
     */
    public function setHeader(\a3mg\RussianPostBundle\Model\Header $header)
    {
        $this->header = $header;
        return $this;
    }

    /**
     * Gets as body
     *
     * @return \a3mg\RussianPostBundle\Model\Body
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Sets a new body
     *
     * @param \a3mg\RussianPostBundle\Model\Body $body
     * @return self
     */
    public function setBody(\a3mg\RussianPostBundle\Model\Body $body)
    {
        $this->body = $body;
        return $this;
    }


}

