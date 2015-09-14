<?php

namespace a3mg\RussianPostBundle\Model\Rtm02Parameter;

/**
 * Коды таможенного оформления
 *
 * Class CustomCompletionCode
 * @package a3mg\RussianPostBundle\Model\Rtm02Parameter
 */
class CustomCompletionCode extends AbstractRtm02Parameter
{
    const RELEASED_BY_CUSTOMS = 1; // Выпущено таможней
    const RETURNED_BY_CUSTOMS = 2; // Возвращено таможней
    const INSPECTED_BY_CUSTOMS = 3; // Осмотрено таможней
    const REFUSED_BY_CUSTOMS = 4; // Отказ в выпуске
    const SENT_TO_THE_CUSTOMS_NOTIFICATION = 5; // Направлено с таможенным уведомлением
    const SENT_WITH_A_MANDATORY_PAYMENT_OF_CUSTOMS_DUTIES = 6; // Направлено с обязательной уплатой таможенных платежей

    /** @return string */
    public static function getType() {
        return 'CustomCompletionCode';
    }
    
    /** @return string */
    public static function getDescription() {
        return 'Коды таможенного оформления';
    }
    
    protected $dic = array (
        self::RELEASED_BY_CUSTOMS => array ( 'name' => 'Выпущено таможней', 'translation' => 'Released by customs', 'relatedAttributeType' => '' ),
        self::RETURNED_BY_CUSTOMS => array ( 'name' => 'Возвращено таможней', 'translation' => 'Returned by Customs', 'relatedAttributeType' => '' ),
        self::INSPECTED_BY_CUSTOMS => array ( 'name' => 'Осмотрено таможней', 'translation' => 'Inspected by customs', 'relatedAttributeType' => '' ),
        self::REFUSED_BY_CUSTOMS => array ( 'name' => 'Отказ в выпуске', 'translation' => 'Refused by customs', 'relatedAttributeType' => '' ),
        self::SENT_TO_THE_CUSTOMS_NOTIFICATION => array ( 'name' => 'Направлено с таможенным уведомлением', 'translation' => 'Sent to the customs notification', 'relatedAttributeType' => '' ),
        self::SENT_WITH_A_MANDATORY_PAYMENT_OF_CUSTOMS_DUTIES => array ( 'name' => 'Направлено с обязательной уплатой таможенных платежей', 'translation' => 'Sent with a mandatory payment of customs duties', 'relatedAttributeType' => '' ),
    );
}
