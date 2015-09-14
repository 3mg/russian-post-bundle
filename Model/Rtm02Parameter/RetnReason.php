<?php

namespace a3mg\RussianPostBundle\Model\Rtm02Parameter;

/**
 * Коды причин возврата
 *
 * Class RetnReason
 * @package a3mg\RussianPostBundle\Model\Rtm02Parameter
 */
class RetnReason extends AbstractRtm02Parameter
{
    const DEPOSIT_PERIOD_EXPIRED = 1; // Истек срок хранения
    const SENDER_STATEMENT = 2; // Заявление отправителя
    const ADDRESSEE_ABSENCE = 3; // Отсутствие адресата по указанному адресу
    const ADDRESSEE_DISCLAIMER = 4; // Отказ адресата 
    const ADDRESSEE_DEATH = 5; // Смерть адресата
    const CAN_NOT_READ_THE_DESTINATION_ADDRESS = 6; // Невозможно прочесть адрес адресата
    const REFUSAL_TO_ISSUE_CUSTOMS = 7; // Отказ в выпуске таможней
    const MAILBOX_OWNER_NOT_SPECIFIED_OR_IS_INCORRECT = 8; // Адресат, абонирующий абонементный почтовый шкаф, не указан или указан неправильно 
    const OTHER_FACTS = 9; // Иные обстоятельства 
    const WRONG_ADDRESS = 10; // Неверный адрес

    /** @return string */
    public static function getType() {
        return 'RetnReason';
    }
    
    /** @return string */
    public static function getDescription() {
        return 'Коды причин возврата';
    }
    
    protected $dic = array (
        self::DEPOSIT_PERIOD_EXPIRED => array ( 'name' => 'Истек срок хранения', 'translation' => 'Deposit period expired', 'relatedAttributeType' => '' ),
        self::SENDER_STATEMENT => array ( 'name' => 'Заявление отправителя', 'translation' => 'Sender statement', 'relatedAttributeType' => '' ),
        self::ADDRESSEE_ABSENCE => array ( 'name' => 'Отсутствие адресата по указанному адресу', 'translation' => 'addressee absence', 'relatedAttributeType' => '' ),
        self::ADDRESSEE_DISCLAIMER => array ( 'name' => 'Отказ адресата ', 'translation' => 'addressee disclaimer', 'relatedAttributeType' => '' ),
        self::ADDRESSEE_DEATH => array ( 'name' => 'Смерть адресата', 'translation' => 'addressee death', 'relatedAttributeType' => '' ),
        self::CAN_NOT_READ_THE_DESTINATION_ADDRESS => array ( 'name' => 'Невозможно прочесть адрес адресата', 'translation' => 'Can not read the destination address', 'relatedAttributeType' => '' ),
        self::REFUSAL_TO_ISSUE_CUSTOMS => array ( 'name' => 'Отказ в выпуске таможней', 'translation' => 'Refusal to issue Customs', 'relatedAttributeType' => '' ),
        self::MAILBOX_OWNER_NOT_SPECIFIED_OR_IS_INCORRECT => array ( 'name' => 'Адресат, абонирующий абонементный почтовый шкаф, не указан или указан неправильно ', 'translation' => 'Mailbox owner not specified or is incorrect', 'relatedAttributeType' => '' ),
        self::OTHER_FACTS => array ( 'name' => 'Иные обстоятельства ', 'translation' => 'Other facts', 'relatedAttributeType' => '' ),
        self::WRONG_ADDRESS => array ( 'name' => 'Неверный адрес', 'translation' => 'Wrong address', 'relatedAttributeType' => '' ),
    );
}
