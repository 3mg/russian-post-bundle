<?php

namespace a3mg\RussianPostBundle\Model\Rtm02Parameter;

/**
 * Class TrackValidator
 * @package a3mg\RussianPostBundle\Model\Rtm02Parameter
 */
interface Rtm02ParameterInterface
{
    /** @return string */
    public static function getType();
    
    /** @return string */
    public static function getDescription();
    
    /** 
     * @param int $code
     * @return string 
     */
    public function getRelatedAttributeType($code);

    /** 
     * @param int $code
     * @return string 
     */
    public function getName($code);
    
    /** 
     * @param int $code
     * @return string 
     */
    public function getTranslation($code);
}
