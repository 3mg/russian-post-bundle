<?php

namespace a3mg\RussianPostBundle\Model\Rtm02Parameter;

/**
 * Коды видов операций над отправлением
 *
 * Class OperType
 * @package a3mg\RussianPostBundle\Model\Rtm02Parameter
 */
class OperType extends AbstractRtm02Parameter
{
    const ACCEPTANCE = 1; // Прием
    const DELIVERY = 2; // Вручение
    const OP_RETURN = 3; // Возврат
    const REDIRECTING = 4; // Досылка почты
    const NON_DELIVERY = 5; // Невручение
    const DEPOSIT = 6; // Хранение
    const TEMPORARY_DEPOSIT = 7; // Временное хранение
    const PROCESSING = 8; // Обработка
    const IMPORT_OF_INTERNATIONAL_MAIL = 9; // Импорт международной почты
    const EXPORT_OF_INTERNATIONAL_MAIL = 10; // Экспорт международной почты
    const HANDED_TO_CUSTOMS = 11; // Прием на таможню
    const UNSUCCESSFUL_DELIVERY_ATTEMPT = 12; // Неудачная попытка вручения
    const DATE_OF_SENDING = 13; // Регистрация отправки
    const CUSTOMS_CLEARANCE_COMPLETED = 14; // Таможенное оформление
    const TRANSMISSION_TO_TEMPORARY_DEPOSIT = 15; // Передача на временное хранение
    const DESTRUCTION = 16; // Уничтожение
    const TRANSMISSION_INVESTMENTS_ON_THE_BALANCE_SHEET = 17; // Передача вложения на баланс
    const REGISTER_LOSS = 18; // Регистрация утраты
    const CUSTOMS_PAYMENTS_RECEIVED = 19; // Таможенные платежи поступили
    const REGISTER = 20; // Регистрация
    const DELIVERING = 21; // Доставка
    const NDR = 22; // Недоставка

    /** @return string */
    public static function getType() {
        return 'OperType';
    }
    
    /** @return string */
    public static function getDescription() {
        return 'Коды видов операций над отправлением';
    }
    
    protected $dic = array (
        self::ACCEPTANCE => array ( 'name' => 'Прием', 'translation' => 'Acceptance', 'relatedAttributeType' => 'AcceptType' ),
        self::DELIVERY => array ( 'name' => 'Вручение', 'translation' => 'Delivery', 'relatedAttributeType' => 'IssueType' ),
        self::OP_RETURN => array ( 'name' => 'Возврат', 'translation' => 'Return', 'relatedAttributeType' => 'RetnReason' ),
        self::REDIRECTING => array ( 'name' => 'Досылка почты', 'translation' => 'Redirectiong', 'relatedAttributeType' => 'SendAdd' ),
        self::NON_DELIVERY => array ( 'name' => 'Невручение', 'translation' => 'Non-delivery', 'relatedAttributeType' => 'NonDeliv' ),
        self::DEPOSIT => array ( 'name' => 'Хранение', 'translation' => 'Safekeeping', 'relatedAttributeType' => 'DeposReasn' ),
        self::TEMPORARY_DEPOSIT => array ( 'name' => 'Временное хранение', 'translation' => 'Temporary storage', 'relatedAttributeType' => 'DeposTemp' ),
        self::PROCESSING => array ( 'name' => 'Обработка', 'translation' => 'Processing', 'relatedAttributeType' => 'ProcessType' ),
        self::IMPORT_OF_INTERNATIONAL_MAIL => array ( 'name' => 'Импорт международной почты', 'translation' => 'Import of international mail', 'relatedAttributeType' => '' ),
        self::EXPORT_OF_INTERNATIONAL_MAIL => array ( 'name' => 'Экспорт международной почты', 'translation' => 'Export of international mail', 'relatedAttributeType' => '' ),
        self::HANDED_TO_CUSTOMS => array ( 'name' => 'Прием на таможню', 'translation' => 'Handed to customs', 'relatedAttributeType' => '' ),
        self::UNSUCCESSFUL_DELIVERY_ATTEMPT => array ( 'name' => 'Неудачная попытка вручения', 'translation' => 'Unsuccessful delivery attempt', 'relatedAttributeType' => 'AttemptDeliv' ),
        self::DATE_OF_SENDING => array ( 'name' => 'Регистрация отправки', 'translation' => 'Date of sending', 'relatedAttributeType' => '' ),
        self::CUSTOMS_CLEARANCE_COMPLETED => array ( 'name' => 'Таможенное оформление', 'translation' => 'Customs clearance completed', 'relatedAttributeType' => 'CustomCompletionCode' ),
        self::TRANSMISSION_TO_TEMPORARY_DEPOSIT => array ( 'name' => 'Передача на временное хранение', 'translation' => 'Transmission in temporary storage', 'relatedAttributeType' => '' ),
        self::DESTRUCTION => array ( 'name' => 'Уничтожение', 'translation' => 'Destruction', 'relatedAttributeType' => '' ),
        self::TRANSMISSION_INVESTMENTS_ON_THE_BALANCE_SHEET => array ( 'name' => 'Передача вложения на баланс', 'translation' => 'Transmission investments on the balance sheet', 'relatedAttributeType' => '' ),
        self::REGISTER_LOSS => array ( 'name' => 'Регистрация утраты', 'translation' => 'Register loss', 'relatedAttributeType' => '' ),
        self::CUSTOMS_PAYMENTS_RECEIVED => array ( 'name' => 'Таможенные платежи поступили', 'translation' => 'Customs payments received', 'relatedAttributeType' => '' ),
        self::REGISTER => array ( 'name' => 'Регистрация', 'translation' => 'Register', 'relatedAttributeType' => '' ),
        self::DELIVERING => array ( 'name' => 'Доставка', 'translation' => 'Delivering', 'relatedAttributeType' => '' ),
        self::NDR => array ( 'name' => 'Недоставка', 'translation' => 'NDR', 'relatedAttributeType' => 'NonCommit' ),
    );
}
