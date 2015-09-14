<?php

namespace a3mg\RussianPostBundle\Model\Rtm02Parameter;

/**
 * Коды причин хранения почтового отправления
 *
 * Class DeposReasn
 * @package a3mg\RussianPostBundle\Model\Rtm02Parameter
 */
class DeposReasn extends AbstractRtm02Parameter
{
    const POSTE_RESTANTE = 1; // До востребования
    const POST_OFFICE_BOX = 2; // На абонементный ящик
    const FIXED_DEPOSIT_PERIOD = 3; // Установленный срок хранения
    const EXTENDING_DEPOSIT_PERIOD_BY_RECIPIENT_REQUEST = 4; // Продление срока хранения по заявлению адресата
    const EXTENSION_OF_CUSTOMS_RELEASE = 5; // Продление срока выпуска таможней

    /** @return string */
    public static function getType() {
        return 'DeposReasn';
    }
    
    /** @return string */
    public static function getDescription() {
        return 'Коды причин хранения почтового отправления';
    }
    
    protected $dic = array (
        self::POSTE_RESTANTE => array ( 'name' => 'До востребования', 'translation' => 'Poste restante', 'relatedAttributeType' => '' ),
        self::POST_OFFICE_BOX => array ( 'name' => 'На абонементный ящик', 'translation' => 'In the post office box', 'relatedAttributeType' => '' ),
        self::FIXED_DEPOSIT_PERIOD => array ( 'name' => 'Установленный срок хранения', 'translation' => 'FIXED DEPOSIT PERIOD', 'relatedAttributeType' => '' ),
        self::EXTENDING_DEPOSIT_PERIOD_BY_RECIPIENT_REQUEST => array ( 'name' => 'Продление срока хранения по заявлению адресата', 'translation' => 'Extending the shelf life at the request of the recipient', 'relatedAttributeType' => '' ),
        self::EXTENSION_OF_CUSTOMS_RELEASE => array ( 'name' => 'Продление срока выпуска таможней', 'translation' => 'Extension of customs release', 'relatedAttributeType' => '' ),
    );
}
