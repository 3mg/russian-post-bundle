<?php

namespace a3mg\RussianPostBundle\Model\Rtm02Parameter;

/**
 * Коды причин досылки почтового отправления
 *
 * Class SendAdd
 * @package a3mg\RussianPostBundle\Model\Rtm02Parameter
 */
class SendAdd extends AbstractRtm02Parameter
{
    const ACCORDING_TO_THE_USER = 1; // По заявлению пользователя
    const DISPOSAL_OF_THE_ADDRESSEE_AT_THE_NEW_ADDRESS = 2; // Выбытие адресата по новому адресу
    const MISDIRECTION = 3; // Засылка

    /** @return string */
    public static function getType() {
        return 'SendAdd';
    }
    
    /** @return string */
    public static function getDescription() {
        return 'Коды причин досылки почтового отправления';
    }
    
    protected $dic = array (
        self::ACCORDING_TO_THE_USER => array ( 'name' => 'По заявлению пользователя', 'translation' => 'According to the user', 'relatedAttributeType' => '' ),
        self::DISPOSAL_OF_THE_ADDRESSEE_AT_THE_NEW_ADDRESS => array ( 'name' => 'Выбытие адресата по новому адресу', 'translation' => 'Disposal of the addressee at the new address', 'relatedAttributeType' => '' ),
        self::MISDIRECTION => array ( 'name' => 'Засылка', 'translation' => 'The sending', 'relatedAttributeType' => '' ),
    );
}
