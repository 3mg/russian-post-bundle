<?php

namespace a3mg\RussianPostBundle\Model\Rtm02Parameter;

/**
 * Коды способов и форм оплаты услуг почтовой связи
 *
 * Class PayType
 * @package a3mg\RussianPostBundle\Model\Rtm02Parameter
 */
class PayType extends AbstractRtm02Parameter
{
    const CASH = 1; // Наличная
    const CASHLESS = 2; // Безналичная
    const FREE_OF_CHARGE = 4; // Бесплатно
    const A_PLASTIC_CARD = 8; // Пластиковая карта
    const PUBLIC_SIGNS_OF_POSTAGE_STAMPS = 16; // Государственные знаки почтовой оплаты марками
    const PREPAYMENT_ADVANCE_PAYMENT = 32; // Предоплата (авансовый платеж)
    const PAID_INTERNATIONAL_OPERATOR = 64; // Оплачено международному оператору
    const PAID_BY_THE_BENEFICIARY = 128; // Оплачивается получателем
    const OF_POSTAGE_STAMPS_FRANKING = 256; // Государственные знаки почтовой оплаты  франкирование

    /** @return string */
    public static function getType() {
        return 'PayType';
    }
    
    /** @return string */
    public static function getDescription() {
        return 'Коды способов и форм оплаты услуг почтовой связи';
    }
    
    protected $dic = array (
        self::CASH => array ( 'name' => 'Наличная', 'translation' => 'Cash', 'relatedAttributeType' => '' ),
        self::CASHLESS => array ( 'name' => 'Безналичная', 'translation' => 'Cashless', 'relatedAttributeType' => '' ),
        self::FREE_OF_CHARGE => array ( 'name' => 'Бесплатно', 'translation' => 'Free of charge', 'relatedAttributeType' => '' ),
        self::A_PLASTIC_CARD => array ( 'name' => 'Пластиковая карта', 'translation' => 'A plastic card', 'relatedAttributeType' => '' ),
        self::PUBLIC_SIGNS_OF_POSTAGE_STAMPS => array ( 'name' => 'Государственные знаки почтовой оплаты марками', 'translation' => 'Public signs of postage stamps', 'relatedAttributeType' => '' ),
        self::PREPAYMENT_ADVANCE_PAYMENT => array ( 'name' => 'Предоплата (авансовый платеж)', 'translation' => 'Prepayment (advance payment)', 'relatedAttributeType' => '' ),
        self::PAID_INTERNATIONAL_OPERATOR => array ( 'name' => 'Оплачено международному оператору', 'translation' => 'Paid International operator', 'relatedAttributeType' => '' ),
        self::PAID_BY_THE_BENEFICIARY => array ( 'name' => 'Оплачивается получателем', 'translation' => 'Paid by the beneficiary', 'relatedAttributeType' => '' ),
        self::OF_POSTAGE_STAMPS_FRANKING => array ( 'name' => 'Государственные знаки почтовой оплаты  франкирование', 'translation' => 'Of postage stamps franking', 'relatedAttributeType' => '' ),
    );
}
