<?php

namespace a3mg\RussianPostBundle\Model\Rtm02Parameter;

/**
 * Коды способов пересылки отправления
 *
 * Class TransType
 * @package a3mg\RussianPostBundle\Model\Rtm02Parameter
 */
class TransType extends AbstractRtm02Parameter
{
    const GROUND = 1; // Наземный
    const AVIA = 2; // Авиа
    const COMBINED = 3; // Комбинированный
    const EXPRESS_MAIL_SYSTEM = 4; // Системой ускоренной почты
    const ELECTRONIC = 5; // Электронный

    /** @return string */
    public static function getType() {
        return 'TransType';
    }
    
    /** @return string */
    public static function getDescription() {
        return 'Коды способов пересылки отправления';
    }
    
    protected $dic = array (
        self::GROUND => array ( 'name' => 'Наземный', 'translation' => 'Above-ground', 'relatedAttributeType' => '' ),
        self::AVIA => array ( 'name' => 'Авиа', 'translation' => 'Avia', 'relatedAttributeType' => '' ),
        self::COMBINED => array ( 'name' => 'Комбинированный', 'translation' => 'Combined', 'relatedAttributeType' => '' ),
        self::EXPRESS_MAIL_SYSTEM => array ( 'name' => 'Системой ускоренной почты', 'translation' => 'Express Mail System', 'relatedAttributeType' => '' ),
        self::ELECTRONIC => array ( 'name' => 'Электронный', 'translation' => 'Electronic', 'relatedAttributeType' => '' ),
    );
}
