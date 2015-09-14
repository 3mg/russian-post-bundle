<?php

namespace a3mg\RussianPostBundle\Model\Rtm02Parameter;

/**
 * Коды видов вручения
 *
 * Class IssueType
 * @package a3mg\RussianPostBundle\Model\Rtm02Parameter
 */
class IssueType extends AbstractRtm02Parameter
{
    const DELIVERY_TO_ADDRESSEE = 1; // Вручение адресату
    const DELIVERY_TO_SENDER = 2; // Вручение отправителю
    const DELIVERY_TO_ADDRESSEE_BY_POSTOMAT = 3; // Выдано адресату через почтомат
    const DELIVERY_TO_SENDER_BY_POSTOMAT = 4; // Выдано отправителю через почтомат
    const DELIVERY_TO_ADDRESSEE_ELECTRONIC = 5; // Адресату электронно
    const DELIVERY_TO_ADDRESSEE_BY_POSTMAN = 6; // Адресату почтальоном
    const DELIVERY_TO_SENDER_BY_POSTMAN = 7; // Отправителю почтальоном
    const DELIVERY_TO_ADDRESSEE_BY_COURIER = 8; // Адресату курьером
    const DELIVERY_TO_SENDER_BY_COURIER = 9; // Отправителю курьером
    const DELIVERY_TO_ADDRESSEE_WITH_RESPONSE_CONTROL = 10; // Адресату с контролем ответа
    const DELIVERY_TO_ADDRESSEE_WITH_RESPONSE_CONTROL_BY_POSTMAN = 11; // Адресату с контролем ответа почтальоном
    const DELIVERY_TO_ADDRESSEE_WITH_RESPONSE_CONTROL_BY_COURIER = 12; // Адресату с контролем ответа курьером

    /** @return string */
    public static function getType() {
        return 'IssueType';
    }
    
    /** @return string */
    public static function getDescription() {
        return 'Коды видов вручения';
    }
    
    protected $dic = array (
        self::DELIVERY_TO_ADDRESSEE => array ( 'name' => 'Вручение адресату', 'translation' => 'Delivery to addressee', 'relatedAttributeType' => '' ),
        self::DELIVERY_TO_SENDER => array ( 'name' => 'Вручение отправителю', 'translation' => 'Delivery to sender', 'relatedAttributeType' => '' ),
        self::DELIVERY_TO_ADDRESSEE_BY_POSTOMAT => array ( 'name' => 'Выдано адресату через почтомат', 'translation' => 'Delivery to addressee by Postomat', 'relatedAttributeType' => '' ),
        self::DELIVERY_TO_SENDER_BY_POSTOMAT => array ( 'name' => 'Выдано отправителю через почтомат', 'translation' => 'Delivery to sender by Postomat', 'relatedAttributeType' => '' ),
        self::DELIVERY_TO_ADDRESSEE_ELECTRONIC => array ( 'name' => 'Адресату электронно', 'translation' => 'Delivery to addressee electronic', 'relatedAttributeType' => '' ),
        self::DELIVERY_TO_ADDRESSEE_BY_POSTMAN => array ( 'name' => 'Адресату почтальоном', 'translation' => 'Delivery to addressee by postman', 'relatedAttributeType' => '' ),
        self::DELIVERY_TO_SENDER_BY_POSTMAN => array ( 'name' => 'Отправителю почтальоном', 'translation' => 'Delivery to sender by postman', 'relatedAttributeType' => '' ),
        self::DELIVERY_TO_ADDRESSEE_BY_COURIER => array ( 'name' => 'Адресату курьером', 'translation' => 'Delivery to addressee by courier', 'relatedAttributeType' => '' ),
        self::DELIVERY_TO_SENDER_BY_COURIER => array ( 'name' => 'Отправителю курьером', 'translation' => 'Delivery to sender by courier', 'relatedAttributeType' => '' ),
        self::DELIVERY_TO_ADDRESSEE_WITH_RESPONSE_CONTROL => array ( 'name' => 'Адресату с контролем ответа', 'translation' => 'Delivery to addressee with response control', 'relatedAttributeType' => '' ),
        self::DELIVERY_TO_ADDRESSEE_WITH_RESPONSE_CONTROL_BY_POSTMAN => array ( 'name' => 'Адресату с контролем ответа почтальоном', 'translation' => 'Delivery to addressee with response control by postman', 'relatedAttributeType' => '' ),
        self::DELIVERY_TO_ADDRESSEE_WITH_RESPONSE_CONTROL_BY_COURIER => array ( 'name' => 'Адресату с контролем ответа курьером', 'translation' => 'Delivery to addressee with response control by courier', 'relatedAttributeType' => '' ),
    );
}
