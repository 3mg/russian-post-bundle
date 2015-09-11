<?php

namespace a3mg\RussianPostBundle\Model\DataExchangeESPP;

/**
 * Class representing PostalOrderEventsForMailInputType
 *
 *
 * XSD Type: PostalOrderEventsForMailInput
 */
class PostalOrderEventsForMailInputType
{

    /**
     * @property string $barcode
     */
    private $barcode = null;

    /**
     * @property string $language
     */
    private $language = null;

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
     * Gets as language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }


}

