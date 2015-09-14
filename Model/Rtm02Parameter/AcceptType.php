<?php

namespace a3mg\RussianPostBundle\Model\Rtm02Parameter;

/**
 * Коды видов приема
 *
 * Class AcceptType
 * @package a3mg\RussianPostBundle\Model\Rtm02Parameter
 */
class AcceptType extends AbstractRtm02Parameter
{
    const SINGLE = 1; // Единичный
    const PARTIONAL = 2; // Партионный
    const PARTIONAL_ELECTRONIC = 3; // Партионный электронно

    /** @return string */
    public static function getType() {
        return 'AcceptType';
    }
    
    /** @return string */
    public static function getDescription() {
        return 'Коды видов приема';
    }
    
    protected $dic = array (
        self::SINGLE => array ( 'name' => 'Единичный', 'translation' => 'Single', 'relatedAttributeType' => '' ),
        self::PARTIONAL => array ( 'name' => 'Партионный', 'translation' => 'Partional', 'relatedAttributeType' => '' ),
        self::PARTIONAL_ELECTRONIC => array ( 'name' => 'Партионный электронно', 'translation' => 'Partional electronic', 'relatedAttributeType' => '' ),
    );
}
