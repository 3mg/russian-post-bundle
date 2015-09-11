<?php

namespace a3mg\RussianPostBundle\Model;

/**
 * Class representing LanguageData
 */
class LanguageData
{

    /**
     * @property \a3mg\RussianPostBundle\Model\LanguageData\LanguageAType[] $language
     */
    private $language = null;

    /**
     * Adds as language
     *
     * @return self
     * @param \a3mg\RussianPostBundle\Model\LanguageData\LanguageAType $language
     */
    public function addToLanguage(\a3mg\RussianPostBundle\Model\LanguageData\LanguageAType $language)
    {
        $this->language[] = $language;
        return $this;
    }

    /**
     * isset language
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLanguage($index)
    {
        return isset($this->language[$index]);
    }

    /**
     * unset language
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLanguage($index)
    {
        unset($this->language[$index]);
    }

    /**
     * Gets as language
     *
     * @return \a3mg\RussianPostBundle\Model\LanguageData\LanguageAType[]
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * @param \a3mg\RussianPostBundle\Model\LanguageData\LanguageAType[] $language
     * @return self
     */
    public function setLanguage(array $language)
    {
        $this->language = $language;
        return $this;
    }


}

