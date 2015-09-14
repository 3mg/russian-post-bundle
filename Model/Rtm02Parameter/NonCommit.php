<?php

namespace a3mg\RussianPostBundle\Model\Rtm02Parameter;

/**
 * Коды причин не доставки отправлений ДМ
 *
 * Class NonCommit
 * @package a3mg\RussianPostBundle\Model\Rtm02Parameter
 */
class NonCommit extends AbstractRtm02Parameter
{
    const LACK_OF_MAILBOX = 1; // Отсутствие п/я
    const ABSENCE_OF_STREETS_HOUSES_APARTMENTS = 2; // Отсутствие улицы, дома, квартиры
    const MISMATCH_INDEX_OPS_EXTRADITION = 3; // Несоответствие индекса ОПС выдачи 
    const INCORRECT_ADDRESS = 4; // Неверный адрес/адрес не существует

    /** @return string */
    public static function getType() {
        return 'NonCommit';
    }
    
    /** @return string */
    public static function getDescription() {
        return 'Коды причин не доставки отправлений ДМ';
    }
    
    protected $dic = array (
        self::LACK_OF_MAILBOX => array ( 'name' => 'Отсутствие п/я', 'translation' => 'Lack of mailbox', 'relatedAttributeType' => '' ),
        self::ABSENCE_OF_STREETS_HOUSES_APARTMENTS => array ( 'name' => 'Отсутствие улицы, дома, квартиры', 'translation' => 'The absence of streets, houses, apartments', 'relatedAttributeType' => '' ),
        self::MISMATCH_INDEX_OPS_EXTRADITION => array ( 'name' => 'Несоответствие индекса ОПС выдачи ', 'translation' => 'Mismatch index OPS extradition', 'relatedAttributeType' => '' ),
        self::INCORRECT_ADDRESS => array ( 'name' => 'Неверный адрес/адрес не существует', 'translation' => 'Incorrect address / address does not exist', 'relatedAttributeType' => '' ),
    );
}
