<?php

namespace a3mg\RussianPostBundle\Model\Rtm02Parameter;

/**
 * Коды причин временного хранения почтового отправления
 *
 * Class DeposTemp
 * @package a3mg\RussianPostBundle\Model\Rtm02Parameter
 */
class DeposTemp extends AbstractRtm02Parameter
{
    const NEROZDANO = 1; // Нероздано
    const UNCLAIMED = 2; // Невостребовано
    const CONTENT_IS_PROHIBITED_FOR_CARRIAGE = 3; // Содержимое запрещено к пересылке 

    /** @return string */
    public static function getType() {
        return 'DeposTemp';
    }
    
    /** @return string */
    public static function getDescription() {
        return 'Коды причин временного хранения почтового отправления';
    }
    
    protected $dic = array (
        self::NEROZDANO => array ( 'name' => 'Нероздано', 'translation' => 'Not distributed', 'relatedAttributeType' => '' ),
        self::UNCLAIMED => array ( 'name' => 'Невостребовано', 'translation' => 'Unclaimed', 'relatedAttributeType' => '' ),
        self::CONTENT_IS_PROHIBITED_FOR_CARRIAGE => array ( 'name' => 'Содержимое запрещено к пересылке ', 'translation' => 'Content is prohibited for carriage', 'relatedAttributeType' => '' ),
    );
}
