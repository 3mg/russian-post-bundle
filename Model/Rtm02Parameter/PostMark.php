<?php

namespace a3mg\RussianPostBundle\Model\Rtm02Parameter;

/**
 * Коды отметок внутренних и международных отправлений
 *
 * Class PostMark
 * @package a3mg\RussianPostBundle\Model\Rtm02Parameter
 */
class PostMark extends AbstractRtm02Parameter
{
    const WITHOUT_NOTE = 0; // Без отметки 
    const WITH_A_SIMPLE_NOTIFICATION = 1; // С простым уведомлением
    const WITH_A_REGISTERED_NOTICE = 2; // С заказным уведомлением
    const WITH_INVENTORY = 4; // С описью
    const CAUTION_FRAGILE = 8; // Осторожно (Хрупкая)
    const HEAVY_WEIGHT = 16; // Тяжеловесная
    const THE_LARGE_BULKY = 32; // Крупногабаритная (Громоздкая)
    const WITH_THE_DELIVERY_BY_COURIER = 64; // С доставкой (Доставка нарочным)
    const HAND_IN_THEIR_OWN_HANDS = 128; // Вручить в собственные руки 
    const THE_DOCUMENTS = 256; // С документами
    const WITH_GOODS = 512; // С товарами
    const NO_RETURN = 1024; // Возврату не подлежит
    const CUSTOM = 2048; // Нестандартная
    const BORDER = 4096; // Приграничная
    const INSURED = 8192; // Застраховано
    const WITH_E_MAIL_ALERT = 16384; // С электронным уведомлением
    const BUSINESS_COURIER_EXPRESS = 32768; // Курьер бизнес-экспресс
    const CUSTOM_UP_TO_10_KG = 65536; // Нестандартная до 10 кг
    const CUSTOM_UP_TO_20_KG = 131072; // Нестандартная до 20 кг

    /** @return string */
    public static function getType() {
        return 'PostMark';
    }
    
    /** @return string */
    public static function getDescription() {
        return 'Коды отметок внутренних и международных отправлений';
    }
    
    protected $dic = array (
        self::WITHOUT_NOTE => array ( 'name' => 'Без отметки ', 'translation' => 'Without note', 'relatedAttributeType' => '' ),
        self::WITH_A_SIMPLE_NOTIFICATION => array ( 'name' => 'С простым уведомлением', 'translation' => 'With a simple notification', 'relatedAttributeType' => '' ),
        self::WITH_A_REGISTERED_NOTICE => array ( 'name' => 'С заказным уведомлением', 'translation' => 'With a registered notice', 'relatedAttributeType' => '' ),
        self::WITH_INVENTORY => array ( 'name' => 'С описью', 'translation' => 'With inventory', 'relatedAttributeType' => '' ),
        self::CAUTION_FRAGILE => array ( 'name' => 'Осторожно (Хрупкая)', 'translation' => 'Caution (Fragile)', 'relatedAttributeType' => '' ),
        self::HEAVY_WEIGHT => array ( 'name' => 'Тяжеловесная', 'translation' => 'HEAVYWEIGHT', 'relatedAttributeType' => '' ),
        self::THE_LARGE_BULKY => array ( 'name' => 'Крупногабаритная (Громоздкая)', 'translation' => 'The large (bulky)', 'relatedAttributeType' => '' ),
        self::WITH_THE_DELIVERY_BY_COURIER => array ( 'name' => 'С доставкой (Доставка нарочным)', 'translation' => 'With the delivery (by courier)', 'relatedAttributeType' => '' ),
        self::HAND_IN_THEIR_OWN_HANDS => array ( 'name' => 'Вручить в собственные руки ', 'translation' => 'Hand in their own hands', 'relatedAttributeType' => '' ),
        self::THE_DOCUMENTS => array ( 'name' => 'С документами', 'translation' => 'The documents', 'relatedAttributeType' => '' ),
        self::WITH_GOODS => array ( 'name' => 'С товарами', 'translation' => 'With goods', 'relatedAttributeType' => '' ),
        self::NO_RETURN => array ( 'name' => 'Возврату не подлежит', 'translation' => 'No return', 'relatedAttributeType' => '' ),
        self::CUSTOM => array ( 'name' => 'Нестандартная', 'translation' => 'Custom', 'relatedAttributeType' => '' ),
        self::BORDER => array ( 'name' => 'Приграничная', 'translation' => 'Border', 'relatedAttributeType' => '' ),
        self::INSURED => array ( 'name' => 'Застраховано', 'translation' => 'Insured', 'relatedAttributeType' => '' ),
        self::WITH_E_MAIL_ALERT => array ( 'name' => 'С электронным уведомлением', 'translation' => 'With e-mail alert', 'relatedAttributeType' => '' ),
        self::BUSINESS_COURIER_EXPRESS => array ( 'name' => 'Курьер бизнес-экспресс', 'translation' => 'Business Courier Express', 'relatedAttributeType' => '' ),
        self::CUSTOM_UP_TO_10_KG => array ( 'name' => 'Нестандартная до 10 кг', 'translation' => 'Custom up to 10 kg', 'relatedAttributeType' => '' ),
        self::CUSTOM_UP_TO_20_KG => array ( 'name' => 'Нестандартная до 20 кг', 'translation' => 'Custom up to 20 kg', 'relatedAttributeType' => '' ),
    );
}
