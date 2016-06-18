<?php

namespace a3mg\RussianPostBundle\Model\Rtm02Parameter;

/**
 * Коды видов отправлений 
 *
 * Class MailType
 * @package a3mg\RussianPostBundle\Model\Rtm02Parameter
 */
class MailType extends AbstractRtm02Parameter
{
    const NOT_DETERMINED = 0; // Не определено
    const POSTAL_ORDER_BLANK = 1; // Бланк почтового перевода
    const LETTER = 2; // Письмо
    const PACKET = 3; // Бандероль
    const PARCEL = 4; // Посылка
    const SMALL_PACKAGE = 5; // Мелкий пакет
    const POSTCARD = 6; // Почтовая карточка
    const EMS = 7; // Отправление EMS
    const SECOGRAMS = 8; // Секограмма
    const M_BAG = 9; // Мешок «М»
    const DIRECT_CONTAINER = 10; // Прямой контейнер
    const EMAIL = 11; // Отправление электронной почты
    const NOTICE_BLANK = 12; // Бланк уведомления
    const NEWSPAPER_PACK = 13; // Газетная пачка
    const GROUPED_DEPARTURE_CONSIGNMENT = 14; // Сгруппированные отправления «Консигнация»
    const FIRST_CLASS_LETTER = 15; // Письмо 1 класса
    const FIRST_CLASS_PARCEL = 16; // Бандероль 1 класса
    const FIRST_CLASS_NOTICE_BLANK = 17; // Бланк уведомления 1 класса
    const INSURANCE_BAG = 18; // Сумка страховая
    const OVPO_LETTER = 19; // ОВПО - письмо
    const MULTI_ENVELOP = 20; // Мультиконверт
    const HEAVY_POSTAL = 21; // Тяжеловесное почтовое отправление
    const OVPO_CARD = 22; // ОВПО - карточка
    const ONLINE_PACKAGE = 23; // Посылка онлайн
    const ONLINE_COURIER = 24; // Курьер онлайн
    const DIRECT_MAIL = 25; // Отправление ДМ
    const DIRECT_MAIL_PACKAGE = 26; // Пакет ДМ
    const PACKAGE_STANDARD = 27; // Посылка стандарт
    const PACKAGE_COURIER = 28; // Посылка курьер
    const PACKAGE_EXPRESS = 29; // Посылка экспресс
    const BUSINESS_COURIER = 30; // Бизнес курьер
    const BUSINESS_COURIER_EXPRESS = 31; // Бизнес курьер экспресс

    /** @return string */
    public static function getType() {
        return 'MailType';
    }
    
    /** @return string */
    public static function getDescription() {
        return 'Коды видов отправлений ';
    }
    
    protected $dic = array (
        self::NOT_DETERMINED => array ( 'name' => 'Не определено', 'translation' => 'Not determined', 'relatedAttributeType' => '' ),
        self::POSTAL_ORDER_BLANK => array ( 'name' => 'Бланк почтового перевода', 'translation' => 'Blank postal order', 'relatedAttributeType' => '' ),
        self::LETTER => array ( 'name' => 'Письмо', 'translation' => 'Letter', 'relatedAttributeType' => '' ),
        self::PACKET => array ( 'name' => 'Бандероль', 'translation' => 'Packet', 'relatedAttributeType' => '' ),
        self::PARCEL => array ( 'name' => 'Посылка', 'translation' => 'Parcel', 'relatedAttributeType' => '' ),
        self::SMALL_PACKAGE => array ( 'name' => 'Мелкий пакет', 'translation' => 'Small package', 'relatedAttributeType' => '' ),
        self::POSTCARD => array ( 'name' => 'Почтовая карточка', 'translation' => 'Postcard', 'relatedAttributeType' => '' ),
        self::EMS => array ( 'name' => 'Отправление EMS', 'translation' => 'EMS items', 'relatedAttributeType' => '' ),
        self::SECOGRAMS => array ( 'name' => 'Секограмма', 'translation' => 'Secograms', 'relatedAttributeType' => '' ),
        self::M_BAG => array ( 'name' => 'Мешок «М»', 'translation' => 'Bag \"M\"', 'relatedAttributeType' => '' ),
        self::DIRECT_CONTAINER => array ( 'name' => 'Прямой контейнер', 'translation' => 'Straight container', 'relatedAttributeType' => '' ),
        self::EMAIL => array ( 'name' => 'Отправление электронной почты', 'translation' => 'Sending e-mail', 'relatedAttributeType' => '' ),
        self::NOTICE_BLANK => array ( 'name' => 'Бланк уведомления', 'translation' => 'Blank notice', 'relatedAttributeType' => '' ),
        self::NEWSPAPER_PACK => array ( 'name' => 'Газетная пачка', 'translation' => 'Newspaper pack', 'relatedAttributeType' => '' ),
        self::GROUPED_DEPARTURE_CONSIGNMENT => array ( 'name' => 'Сгруппированные отправления «Консигнация»', 'translation' => 'Grouped departure \"Consignment\"', 'relatedAttributeType' => '' ),
        self::FIRST_CLASS_LETTER => array ( 'name' => 'Письмо 1 класса', 'translation' => 'Letter 1 class', 'relatedAttributeType' => '' ),
        self::FIRST_CLASS_PARCEL => array ( 'name' => 'Бандероль 1 класса', 'translation' => 'Parcel 1 class', 'relatedAttributeType' => '' ),
        self::FIRST_CLASS_NOTICE_BLANK => array ( 'name' => 'Бланк уведомления 1 класса', 'translation' => 'Blank notice 1 class', 'relatedAttributeType' => '' ),
        self::INSURANCE_BAG => array ( 'name' => 'Сумка страховая', 'translation' => 'Bag Insurance', 'relatedAttributeType' => '' ),
        self::OVPO_LETTER => array ( 'name' => 'ОВПО - письмо', 'translation' => 'OVPO - email', 'relatedAttributeType' => '' ),
        self::MULTI_ENVELOP => array ( 'name' => 'Мультиконверт', 'translation' => 'Multikonvert', 'relatedAttributeType' => '' ),
        self::HEAVY_POSTAL => array ( 'name' => 'Тяжеловесное почтовое отправление', 'translation' => 'Heavy postal', 'relatedAttributeType' => '' ),
        self::OVPO_CARD => array ( 'name' => 'ОВПО - карточка', 'translation' => 'OVPO - Card', 'relatedAttributeType' => '' ),
        self::ONLINE_PACKAGE => array ( 'name' => 'Посылка онлайн', 'translation' => 'Making online', 'relatedAttributeType' => '' ),
        self::ONLINE_COURIER => array ( 'name' => 'Курьер онлайн', 'translation' => 'Courier online', 'relatedAttributeType' => '' ),
        self::DIRECT_MAIL => array ( 'name' => 'Отправление ДМ', 'translation' => 'Administration of DM', 'relatedAttributeType' => '' ),
        self::DIRECT_MAIL_PACKAGE => array ( 'name' => 'Пакет ДМ', 'translation' => 'Package DM', 'relatedAttributeType' => '' ),
        self::PACKAGE_STANDARD => array ( 'name' => 'Посылка стандарт', 'translation' => 'Making standard', 'relatedAttributeType' => '' ),
        self::PACKAGE_COURIER => array ( 'name' => 'Посылка курьер', 'translation' => 'Sending Courier', 'relatedAttributeType' => '' ),
        self::PACKAGE_EXPRESS => array ( 'name' => 'Посылка экспресс', 'translation' => 'Sending Express', 'relatedAttributeType' => '' ),
        self::BUSINESS_COURIER => array ( 'name' => 'Бизнес курьер', 'translation' => 'Business Courier', 'relatedAttributeType' => '' ),
        self::BUSINESS_COURIER_EXPRESS => array ( 'name' => 'Бизнес курьер экспресс', 'translation' => 'Business Courier Express', 'relatedAttributeType' => '' ),
    );
}
