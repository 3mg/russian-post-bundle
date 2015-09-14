<?php

namespace a3mg\RussianPostBundle\Model\Rtm02Parameter;

/**
 * Class TrackValidator
 * @package a3mg\RussianPostBundle\Model\Rtm02Parameter
 */
abstract class AbstractRtm02Parameter implements Rtm02ParameterInterface
{
    protected $dic;
    
    /** 
     * @param int $code
     * @return string 
     */
    public function getRelatedAttributeType($code) {
        if (!array_key_exists($code, $this->dic)) {
            return null;
        }
        if (!array_key_exists("relatedAttributeType", $this->dic[$code])) {
            return null;
        }
        return $this->dic[$code]["relatedAttributeType"];
    }

    /** 
     * @param int $code
     * @return string 
     */
    public function getName($code) {
        if (!array_key_exists($code, $this->dic)) {
            return null;
        }
        if (!array_key_exists("relatedAttributeType", $this->dic[$code])) {
            return null;
        }
        return $this->dic[$code]["name"];
    }
    
    /** 
     * @param int $code
     * @return string 
     */
    public function getTranslation($code) {
        if (!array_key_exists($code, $this->dic)) {
            return null;
        }
        if (!array_key_exists("relatedAttributeType", $this->dic[$code])) {
            return null;
        }
        return $this->dic[$code]["translation"];
    }
}
