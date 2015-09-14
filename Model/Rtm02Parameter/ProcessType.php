<?php

namespace a3mg\RussianPostBundle\Model\Rtm02Parameter;

/**
 * Коды видов обработки РПО
 *
 * Class ProcessType
 * @package a3mg\RussianPostBundle\Model\Rtm02Parameter
 */
class ProcessType extends AbstractRtm02Parameter
{
    const SORT = 0; // Сортировка
    const LEFT_THE_ACCEPTANCE_POINT = 1; // Покинуло место приёма
    const ARRIVED_AT_THE_PLACE_OF_DELIVERY = 2; // Прибыло в место вручения
    const ARRIVED_AT_THE_SORTING_CENTER = 3; // Прибыло в сортировочный центр
    const LEFT_THE_SORTING_CENTER = 4; // Покинуло сортировочный центр
    const ARRIVED_AT_INTERNATIONAL_OFFICE_OF_EXCHANGE = 5; // Прибыло в место международного обмена
    const LEFT_INTERNATIONAL_OFFICE_OF_EXCHANGE = 6; // Покинуло место международного обмена
    const ARRIVED_AT_THE_TRANSITION_POINT = 7; // Прибыло в место транзита
    const LEFT_THE_TRANSITION_POINT = 8; // Покинуло место транзита
    const ARRIVED_AT_THE_POSTMAT = 9; // Прибыло в почтомат
    const EXPIRING_POSTMAT_STORAGE_PERIOD = 10; // Истекает срок хранения в почтомате
    const FORWARDED_TO_POSTMAT = 11; // Переадресовано в почтомат
    const LEFT_THE_POSTMAT = 12; // Изъято из почтомата
    const ARRIVED_IN_THE_TERRITORY_OF_THE_RUSSIAN_FEDERATION = 13; // Прибыло на территорию РФ
    const ARRIVED_AT_THE_ISSUING_CENTER = 14; // Прибыло в Центр выдачи посылок
    const HANDED_TO_COURIER = 15; // Передано курьеру
    const ARRIVED_AT_ELECTRONIC__PLACE_OF_DELIVERY = 16; // Доставлено для вручения электронно
    const ARRIVIED_IN_CST = 17; // Прибыло в ЦГП
    const HANDED_TO_POSTMAN = 18; // Передано почтальону
    const TRANSFER_TO_THE_PANTRY_STORAGE = 19; // Передача в кладовую хранения

    /** @return string */
    public static function getType() {
        return 'ProcessType';
    }
    
    /** @return string */
    public static function getDescription() {
        return 'Коды видов обработки РПО';
    }
    
    protected $dic = array (
        self::SORT => array ( 'name' => 'Сортировка', 'translation' => 'Sort', 'relatedAttributeType' => '' ),
        self::LEFT_THE_ACCEPTANCE_POINT => array ( 'name' => 'Покинуло место приёма', 'translation' => 'Left the acceptance point', 'relatedAttributeType' => '' ),
        self::ARRIVED_AT_THE_PLACE_OF_DELIVERY => array ( 'name' => 'Прибыло в место вручения', 'translation' => 'Arrived at the place of delivery', 'relatedAttributeType' => '' ),
        self::ARRIVED_AT_THE_SORTING_CENTER => array ( 'name' => 'Прибыло в сортировочный центр', 'translation' => 'Arrived at the sorting center', 'relatedAttributeType' => '' ),
        self::LEFT_THE_SORTING_CENTER => array ( 'name' => 'Покинуло сортировочный центр', 'translation' => 'Left the sorting center', 'relatedAttributeType' => '' ),
        self::ARRIVED_AT_INTERNATIONAL_OFFICE_OF_EXCHANGE => array ( 'name' => 'Прибыло в место международного обмена', 'translation' => 'Arrived at international office of exchange', 'relatedAttributeType' => '' ),
        self::LEFT_INTERNATIONAL_OFFICE_OF_EXCHANGE => array ( 'name' => 'Покинуло место международного обмена', 'translation' => 'Left international office of exchange', 'relatedAttributeType' => '' ),
        self::ARRIVED_AT_THE_TRANSITION_POINT => array ( 'name' => 'Прибыло в место транзита', 'translation' => 'Arrived at the transition point', 'relatedAttributeType' => '' ),
        self::LEFT_THE_TRANSITION_POINT => array ( 'name' => 'Покинуло место транзита', 'translation' => 'Left the transition point', 'relatedAttributeType' => '' ),
        self::ARRIVED_AT_THE_POSTMAT => array ( 'name' => 'Прибыло в почтомат', 'translation' => 'Arrived at the postmat', 'relatedAttributeType' => '' ),
        self::EXPIRING_POSTMAT_STORAGE_PERIOD => array ( 'name' => 'Истекает срок хранения в почтомате', 'translation' => 'Expiring postmat storage period', 'relatedAttributeType' => '' ),
        self::FORWARDED_TO_POSTMAT => array ( 'name' => 'Переадресовано в почтомат', 'translation' => 'Forwarded to postmat', 'relatedAttributeType' => '' ),
        self::LEFT_THE_POSTMAT => array ( 'name' => 'Изъято из почтомата', 'translation' => 'Left the postmat', 'relatedAttributeType' => '' ),
        self::ARRIVED_IN_THE_TERRITORY_OF_THE_RUSSIAN_FEDERATION => array ( 'name' => 'Прибыло на территорию РФ', 'translation' => 'Arrived in the territory of the Russian Federation', 'relatedAttributeType' => '' ),
        self::ARRIVED_AT_THE_ISSUING_CENTER => array ( 'name' => 'Прибыло в Центр выдачи посылок', 'translation' => 'Arrived at the issuing center', 'relatedAttributeType' => '' ),
        self::HANDED_TO_COURIER => array ( 'name' => 'Передано курьеру', 'translation' => 'Handed to courier', 'relatedAttributeType' => '' ),
        self::ARRIVED_AT_ELECTRONIC__PLACE_OF_DELIVERY => array ( 'name' => 'Доставлено для вручения электронно', 'translation' => 'Arrived at electronic  place of delivery', 'relatedAttributeType' => '' ),
        self::ARRIVIED_IN_CST => array ( 'name' => 'Прибыло в ЦГП', 'translation' => 'Arrivied in CST', 'relatedAttributeType' => '' ),
        self::HANDED_TO_POSTMAN => array ( 'name' => 'Передано почтальону', 'translation' => 'Handed to postman', 'relatedAttributeType' => '' ),
        self::TRANSFER_TO_THE_PANTRY_STORAGE => array ( 'name' => 'Передача в кладовую хранения', 'translation' => 'Transfer to the pantry storage', 'relatedAttributeType' => '' ),
    );
}
