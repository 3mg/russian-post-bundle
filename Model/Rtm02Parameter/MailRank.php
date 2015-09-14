<?php

namespace a3mg\RussianPostBundle\Model\Rtm02Parameter;

/**
 * Коды разрядов почтового отправления
 *
 * Class MailRank
 * @package a3mg\RussianPostBundle\Model\Rtm02Parameter
 */
class MailRank extends AbstractRtm02Parameter
{
    const NO_TYPE = 0; // Без разряда
    const GOVERNMENT = 1; // Правительственное
    const MILITARY = 2; // Воинское
    const OFFICE = 3; // Служебное
    const THE_COURT = 4; // Судебное
    const PRESIDENTIAL = 5; // Президентское
    const LOAN = 6; // Кредитное

    /** @return string */
    public static function getType() {
        return 'MailRank';
    }
    
    /** @return string */
    public static function getDescription() {
        return 'Коды разрядов почтового отправления';
    }
    
    protected $dic = array (
        self::NO_TYPE => array ( 'name' => 'Без разряда', 'translation' => 'No type', 'relatedAttributeType' => '' ),
        self::GOVERNMENT => array ( 'name' => 'Правительственное', 'translation' => 'Government', 'relatedAttributeType' => '' ),
        self::MILITARY => array ( 'name' => 'Воинское', 'translation' => 'Military', 'relatedAttributeType' => '' ),
        self::OFFICE => array ( 'name' => 'Служебное', 'translation' => 'Office', 'relatedAttributeType' => '' ),
        self::THE_COURT => array ( 'name' => 'Судебное', 'translation' => 'The court', 'relatedAttributeType' => '' ),
        self::PRESIDENTIAL => array ( 'name' => 'Президентское', 'translation' => 'Presidential', 'relatedAttributeType' => '' ),
        self::LOAN => array ( 'name' => 'Кредитное', 'translation' => 'Loan', 'relatedAttributeType' => '' ),
    );
}
