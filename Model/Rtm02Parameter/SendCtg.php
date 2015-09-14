<?php

namespace a3mg\RussianPostBundle\Model\Rtm02Parameter;

/**
 * Коды категорий отправителей 
 *
 * Class SendCtg
 * @package a3mg\RussianPostBundle\Model\Rtm02Parameter
 */
class SendCtg extends AbstractRtm02Parameter
{
    const PEOPLE = 1; // Население
    const STATE_FINANCED_ORGANIZATION = 2; // Бюджетная организация
    const SELF_FINANCING_ORGANIZATION = 3; // Хозрасчетная организация
    const INTERNATIONAL_OPERATOR = 4; // Международный оператор
    const CORPORATE_CUSTOMER = 5; // Корпоративный клиент
    const POSTAL_OPERATOR = 6; // Почтовый оператор

    /** @return string */
    public static function getType() {
        return 'SendCtg';
    }
    
    /** @return string */
    public static function getDescription() {
        return 'Коды категорий отправителей ';
    }
    
    protected $dic = array (
        self::PEOPLE => array ( 'name' => 'Население', 'translation' => 'Population', 'relatedAttributeType' => '' ),
        self::STATE_FINANCED_ORGANIZATION => array ( 'name' => 'Бюджетная организация', 'translation' => 'State-financed organization', 'relatedAttributeType' => '' ),
        self::SELF_FINANCING_ORGANIZATION => array ( 'name' => 'Хозрасчетная организация', 'translation' => 'Self-financing organization', 'relatedAttributeType' => '' ),
        self::INTERNATIONAL_OPERATOR => array ( 'name' => 'Международный оператор', 'translation' => 'International operator', 'relatedAttributeType' => '' ),
        self::CORPORATE_CUSTOMER => array ( 'name' => 'Корпоративный клиент', 'translation' => 'Corporate Customer', 'relatedAttributeType' => '' ),
        self::POSTAL_OPERATOR => array ( 'name' => 'Почтовый оператор', 'translation' => 'Postal operator', 'relatedAttributeType' => '' ),
    );
}
