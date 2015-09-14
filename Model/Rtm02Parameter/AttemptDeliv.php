<?php

namespace a3mg\RussianPostBundle\Model\Rtm02Parameter;

/**
 * Коды причин неудачной попытки вручения
 *
 * Class AttemptDeliv
 * @package a3mg\RussianPostBundle\Model\Rtm02Parameter
 */
class AttemptDeliv extends AbstractRtm02Parameter
{
    const TEMPORARY_ABSENCE_OF_ADDRESSEE = 1; // Временное отсутствие адресата
    const DELIVERY_DELAYED_BY_RECIPIENT_REQUEST = 2; // Доставка отложена по просьбе адресата
    const INCOMPLETE_ADDRESS = 3; // Неполный адрес 
    const WRONG_ADDRESS = 4; // Неправильный адрес
    const DESTINATION_RETIRED = 5; // Адресат выбыл
    const REFUSAL_OF_RECEIPT = 6; // Отказ от получения
    const FORCE_MAJEURE = 7; // Обстоятельства непреодолимой силы
    const OTHER = 8; // Иная
    const THE_RECIPIENT_WILL_TAKE_THE_ADMINISTRATION_ITSELF = 9; // Адресат заберет отправление сам
    const NO_RECIPIENT = 10; // Нет адресата
    const TECHNICAL_REASONS = 11; // По техническим причинам
    const POSTMAT_STORAGE_PERIOD_EXPIRED = 12; // Истек срок хранения в почтомате

    /** @return string */
    public static function getType() {
        return 'AttemptDeliv';
    }
    
    /** @return string */
    public static function getDescription() {
        return 'Коды причин неудачной попытки вручения';
    }
    
    protected $dic = array (
        self::TEMPORARY_ABSENCE_OF_ADDRESSEE => array ( 'name' => 'Временное отсутствие адресата', 'translation' => 'The temporary absence of the addressee', 'relatedAttributeType' => '' ),
        self::DELIVERY_DELAYED_BY_RECIPIENT_REQUEST => array ( 'name' => 'Доставка отложена по просьбе адресата', 'translation' => 'Delivery delayed at the request of the recipient', 'relatedAttributeType' => '' ),
        self::INCOMPLETE_ADDRESS => array ( 'name' => 'Неполный адрес ', 'translation' => 'Incomplete address', 'relatedAttributeType' => '' ),
        self::WRONG_ADDRESS => array ( 'name' => 'Неправильный адрес', 'translation' => 'Wrong address', 'relatedAttributeType' => '' ),
        self::DESTINATION_RETIRED => array ( 'name' => 'Адресат выбыл', 'translation' => 'Destination retired', 'relatedAttributeType' => '' ),
        self::REFUSAL_OF_RECEIPT => array ( 'name' => 'Отказ от получения', 'translation' => 'Refusal of receipt', 'relatedAttributeType' => '' ),
        self::FORCE_MAJEURE => array ( 'name' => 'Обстоятельства непреодолимой силы', 'translation' => 'Force majeure', 'relatedAttributeType' => '' ),
        self::OTHER => array ( 'name' => 'Иная', 'translation' => 'Other', 'relatedAttributeType' => '' ),
        self::THE_RECIPIENT_WILL_TAKE_THE_ADMINISTRATION_ITSELF => array ( 'name' => 'Адресат заберет отправление сам', 'translation' => 'The recipient will take the administration itself', 'relatedAttributeType' => '' ),
        self::NO_RECIPIENT => array ( 'name' => 'Нет адресата', 'translation' => 'No recipient', 'relatedAttributeType' => '' ),
        self::TECHNICAL_REASONS => array ( 'name' => 'По техническим причинам', 'translation' => 'For technical reasons,', 'relatedAttributeType' => '' ),
        self::POSTMAT_STORAGE_PERIOD_EXPIRED => array ( 'name' => 'Истек срок хранения в почтомате', 'translation' => 'Outdated storage pochtomate', 'relatedAttributeType' => '' ),
    );
}
