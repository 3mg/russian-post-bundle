<?php

namespace a3mg\RussianPostBundle\Model\Rtm02Parameter;

/**
 * Коды категорий почтовых отправлений 
 *
 * Class MailCtg
 * @package a3mg\RussianPostBundle\Model\Rtm02Parameter
 */
class MailCtg extends AbstractRtm02Parameter
{
    const NON_REGISTERED = 0; // Простое 
    const REGISTERED = 1; // Заказное
    const WITH_DECLARED_VALUE = 2; // С объявленной ценностью
    const ORDINARY = 3; // Обыкновенное
    const CASH_ON_DELIVERY_WITH_DECLARED_VALUE = 4; // С объявленной ценностью и наложенным платежом
    const NOT_DETERMINED = 5; // Не определена
    const OBLIGATORY_PAYMENTS_WITH_DECLARED_VALUE = 6; // С объявленной ценностью и обязательным платежом

    /** @return string */
    public static function getType() {
        return 'MailCtg';
    }
    
    /** @return string */
    public static function getDescription() {
        return 'Коды категорий почтовых отправлений ';
    }
    
    protected $dic = array (
        self::NON_REGISTERED => array ( 'name' => 'Простое ', 'translation' => 'Easy', 'relatedAttributeType' => '' ),
        self::REGISTERED => array ( 'name' => 'Заказное', 'translation' => 'Custom', 'relatedAttributeType' => '' ),
        self::WITH_DECLARED_VALUE => array ( 'name' => 'С объявленной ценностью', 'translation' => 'With declared value', 'relatedAttributeType' => '' ),
        self::ORDINARY => array ( 'name' => 'Обыкновенное', 'translation' => 'Ordinary', 'relatedAttributeType' => '' ),
        self::CASH_ON_DELIVERY_WITH_DECLARED_VALUE => array ( 'name' => 'С объявленной ценностью и наложенным платежом', 'translation' => 'Cash-on-delivery with declared value', 'relatedAttributeType' => '' ),
        self::NOT_DETERMINED => array ( 'name' => 'Не определена', 'translation' => 'Not determined', 'relatedAttributeType' => '' ),
        self::OBLIGATORY_PAYMENTS_WITH_DECLARED_VALUE => array ( 'name' => 'С объявленной ценностью и обязательным платежом', 'translation' => 'Obligatory payments with declared value', 'relatedAttributeType' => '' ),
    );
}
