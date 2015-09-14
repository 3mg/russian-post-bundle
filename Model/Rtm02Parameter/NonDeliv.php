<?php

namespace a3mg\RussianPostBundle\Model\Rtm02Parameter;

/**
 * Коды причин невручения отправления
 *
 * Class NonDeliv
 * @package a3mg\RussianPostBundle\Model\Rtm02Parameter
 */
class NonDeliv extends AbstractRtm02Parameter
{
    const LOST = 1; // Утрачено
    const CONFISCATED = 2; // Изъято
    const MISDIRECTION = 3; // Засылка
    const CUSTOMS_DECISION = 8; // Решение таможни
    const SPECIFIED_ADDRESS_NOT_DELIVER = 9; // Доставка по указанному адресу не осуществляется

    /** @return string */
    public static function getType() {
        return 'NonDeliv';
    }
    
    /** @return string */
    public static function getDescription() {
        return 'Коды причин невручения отправления';
    }
    
    protected $dic = array (
        self::LOST => array ( 'name' => 'Утрачено', 'translation' => 'Lost', 'relatedAttributeType' => '' ),
        self::CONFISCATED => array ( 'name' => 'Изъято', 'translation' => 'confiscated', 'relatedAttributeType' => '' ),
        self::MISDIRECTION => array ( 'name' => 'Засылка', 'translation' => 'misdirection', 'relatedAttributeType' => '' ),
        self::CUSTOMS_DECISION => array ( 'name' => 'Решение таможни', 'translation' => 'Customs Decision', 'relatedAttributeType' => '' ),
        self::SPECIFIED_ADDRESS_NOT_DELIVER => array ( 'name' => 'Доставка по указанному адресу не осуществляется', 'translation' => 'SPECIFIED ADDRESS NOT DELIVER', 'relatedAttributeType' => '' ),
    );
}
