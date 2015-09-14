<?php

namespace a3mg\RussianPostBundle\Model\Rtm02Parameter;

/**
 * Коды классификации отправления
 *
 * Class DirectCtg
 * @package a3mg\RussianPostBundle\Model\Rtm02Parameter
 */
class DirectCtg extends AbstractRtm02Parameter
{
    const DOMESTIC = 1; // Внутренняя
    const INTERNATIONAL = 2; // Международная 

    /** @return string */
    public static function getType() {
        return 'DirectCtg';
    }
    
    /** @return string */
    public static function getDescription() {
        return 'Коды классификации отправления';
    }
    
    protected $dic = array (
        self::DOMESTIC => array ( 'name' => 'Внутренняя', 'translation' => 'domestic', 'relatedAttributeType' => '' ),
        self::INTERNATIONAL => array ( 'name' => 'Международная ', 'translation' => 'International', 'relatedAttributeType' => 'MailDirect' ),
    );
}
