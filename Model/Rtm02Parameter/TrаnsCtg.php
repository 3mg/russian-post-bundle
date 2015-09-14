<?php

namespace a3mg\RussianPostBundle\Model\Rtm02Parameter;

/**
 * Коды характера пересылки отправления
 *
 * Class TrаnsCtg
 * @package a3mg\RussianPostBundle\Model\Rtm02Parameter
 */
class TrаnsCtg extends AbstractRtm02Parameter
{
    const ORDINARY = 1; // Обыкновенный
    const ACCELERATED = 2; // Ускоренный

    /** @return string */
    public static function getType() {
        return 'TrаnsCtg';
    }
    
    /** @return string */
    public static function getDescription() {
        return 'Коды характера пересылки отправления';
    }
    
    protected $dic = array (
        self::ORDINARY => array ( 'name' => 'Обыкновенный', 'translation' => 'Ordinary', 'relatedAttributeType' => '' ),
        self::ACCELERATED => array ( 'name' => 'Ускоренный', 'translation' => 'Accelerated', 'relatedAttributeType' => '' ),
    );
}
