<?php

namespace a3mg\RussianPostBundle\Model\Rtm02Parameter;

/**
 * Коды стран пересылки почтовых отправлений
 *
 * Class MailDirect
 * @package a3mg\RussianPostBundle\Model\Rtm02Parameter
 */
class MailDirect extends AbstractRtm02Parameter
{
    const  = 895; // АБХАЗИЯ
    const  = 36; // АВСТРАЛИЯ
    const  = 40; // АВСТРИЯ
    const  = 31; // АЗЕРБАЙДЖАН
    const  = 8; // АЛБАНИЯ
    const  = 12; // АЛЖИР
    const  = 660; // АНГИЛЬЯ
    const  = 24; // АНГОЛА
    const  = 20; // АНДОРРА
    const  = 10; // АНТАРКТИКА
    const  = 28; // АНТИГУА И БАРБУДА
    const  = 32; // АРГЕНТИНА
    const  = 51; // АРМЕНИЯ
    const  = 533; // АРУБА
    const  = 4; // АФГАНИСТАН
    const  = 44; // БАГАМЫ
    const  = 50; // БАНГЛАДЕШ
    const  = 52; // БАРБАДОС
    const  = 48; // БАХРЕЙН
    const  = 84; // БЕЛИЗ
    const  = 112; // БЕЛАРУСЬ
    const  = 56; // БЕЛЬГИЯ
    const  = 204; // БЕНИН
    const  = 60; // БЕРМУДЫ
    const  = 100; // БОЛГАРИЯ
    const  = 68; // БОЛИВИЯ
    const  = 535; // БОНЭЙР, СИНТ-ЭСТАТИУС И САБА
    const  = 70; // БОСНИЯ И ГЕРЦЕГОВИНА
    const  = 72; // БОТСВАНА
    const  = 76; // БРАЗИЛИЯ
    const  = 92; // БРИТАНСКИЕ ВИРГИНСКИЕ ОСТРОВА
    const  = 86; // БРИТАНСКИЕ ТЕРРИТОРИИ В ИНДИЙСКОМ ОКЕАНЕ
    const  = 96; // БРУНЕЙ
    const  = 74; // БУВЕ ОСТРОВА
    const  = 854; // БУРКИНА-ФАСО
    const  = 108; // БУРУНДИ
    const  = 64; // БУТАН
    const  = 548; // ВАНУАТУ
    const  = 336; // ВАТИКАН
    const  = 826; // ВЕЛИКОБРИТАНИЯ
    const  = 348; // ВЕНГРИЯ
    const  = 862; // ВЕНЕСУЭЛА БОЛИВАРИАНСКАЯ РЕСПУБЛИКА
    const  = 850; // ВИРГИНСКИЕ ОСТРОВА (США)
    const  = 906; // вознесения остров
    const  = 16; // ВОСТОЧНОЕ САМОА
    const  = 704; // ВЬЕТНАМ
    const  = 266; // ГАБОН
    const  = 332; // ГАИТИ
    const  = 328; // ГАЙАНА
    const  = 270; // ГАМБИЯ
    const  = 288; // ГАНА
    const  = 312; // ГВАДЕЛУПА
    const  = 320; // ГВАТЕМАЛА
    const  = 324; // ГВИНЕЯ
    const  = 624; // ГВИНЕЯ-БИСАУ
    const  = 276; // ГЕРМАНИЯ
    const  = 831; // ГЕРНСИ
    const  = 292; // ГИБРАЛТАР
    const  = 340; // ГОНДУРАС
    const  = 344; // ГОНКОНГ
    const  = 308; // ГРЕНАДА
    const  = 304; // ГРЕНЛАНДИЯ
    const  = 300; // ГРЕЦИЯ
    const  = 268; // ГРУЗИЯ
    const  = 316; // ГУАМ
    const  = 208; // ДАНИЯ
    const  = 180; // ДЕМОКРАТИЧЕСКАЯ РЕСПУБЛИКА КОНГО
    const  = 832; // ДЖЕРСИ
    const  = 262; // ДЖИБУТИ
    const  = 212; // ДОМИНИКА
    const  = 214; // ДОМИНИКАНСКАЯ РЕСПУБЛИКА
    const  = 818; // ЕГИПЕТ
    const  = 894; // ЗАМБИЯ
    const  = 732; // ЗАПАДНАЯ САХАРА
    const  = 716; // ЗИМБАБВЕ
    const  = 376; // ИЗРАИЛЬ
    const  = 356; // ИНДИЯ
    const  = 360; // ИНДОНЕЗИЯ
    const  = 400; // ИОРДАНИЯ
    const  = 368; // ИРАК
    const  = 364; // ИРАН
    const  = 372; // ИРЛАНДИЯ
    const  = 352; // ИСЛАНДИЯ
    const  = 724; // ИСПАНИЯ
    const  = 380; // ИТАЛИЯ
    const  = 887; // ЙЕМЕН
    const  = 132; // КАБО-ВЕРДЕ
    const  = 398; // КАЗАХСТАН
    const  = 136; // КАЙМАНОВЫ ОСТРОВА
    const  = 116; // КАМБОДЖА
    const  = 120; // КАМЕРУН
    const  = 124; // КАНАДА
    const  = 634; // КАТАР
    const  = 404; // КЕНИЯ
    const  = 196; // КИПР
    const  = 417; // КИРГИЗИЯ
    const  = 296; // КИРИБАТИ
    const  = 156; // КИТАЙ
    const  = 408; // КНДР
    const  = 166; // КОКОС ОСТРОВА
    const  = 170; // КОЛУМБИЯ
    const  = 174; // КОМОРЫ
    const  = 410; // КОРЕЯ
    const  = 914; // КОСОВО
    const  = 188; // КОСТА-РИКА
    const  = 384; // КОТ-Д'ИВУАР
    const  = 192; // КУБА
    const  = 414; // КУВЕЙТ
    const  = 184; // КУКА ОСТРОВА
    const  = 531; // КЮРАСАО
    const  = 418; // ЛАОС
    const  = 428; // ЛАТВИЯ
    const  = 426; // ЛЕСОТО
    const  = 430; // ЛИБЕРИЯ
    const  = 422; // ЛИВАН
    const  = 434; // ЛИВИЯ
    const  = 440; // ЛИТВА
    const  = 438; // ЛИХТЕНШТЕЙН
    const  = 442; // ЛЮКСЕМБУРГ
    const  = 480; // МАВРИКИЙ
    const  = 478; // МАВРИТАНИЯ
    const  = 450; // МАДАГАСКАР
    const  = 175; // МАЙОТТА
    const  = 446; // МАКАО
    const  = 807; // МАКЕДОНИЯ
    const  = 454; // МАЛАВИ
    const  = 458; // МАЛАЙЗИЯ
    const  = 466; // МАЛИ
    const  = 462; // МАЛЬДИВЫ
    const  = 581; // МАЛЫЕ ТИХООКЕАНСКИЕ ОТДАЛЕННЫЕ ОСТРОВА СОЕДИНЕННЫХ ШТАТОВ
    const  = 470; // МАЛЬТА
    const  = 504; // МАРОККО
    const  = 474; // МАРТИНИКА
    const  = 584; // МАРШАЛЛОВЫ ОСТРОВА
    const  = 484; // МЕКСИКА
    const  = 583; // МИКРОНЕЗИЯ
    const  = 508; // МОЗАМБИК
    const  = 498; // МОЛДОВА, РЕСПУБЛИКА
    const  = 492; // МОНАКО
    const  = 496; // МОНГОЛИЯ
    const  = 500; // МОНТСЕРРАТ
    const  = 104; // МЬЯНМА
    const  = 833; // МЭН ОСТРОВ
    const  = 516; // НАМИБИЯ
    const  = 520; // НАУРУ
    const  = 524; // НЕПАЛ
    const  = 562; // НИГЕР
    const  = 566; // НИГЕРИЯ
    const  = 530; // НИДЕРЛАНДСКИЕ АНТИЛЫ
    const  = 528; // НИДЕРЛАНДЫ
    const  = 558; // НИКАРАГУА
    const  = 570; // НИУЭ
    const  = 554; // НОВАЯ ЗЕЛАНДИЯ
    const  = 540; // НОВАЯ КАЛЕДОНИЯ
    const  = 578; // НОРВЕГИЯ
    const  = 574; // НОРФОЛК ОСТРОВ
    const  = 784; // ОБЪЕДИНЕННЫЕ АРАБСКИЕ ЭМИРАТЫ
    const  = 512; // ОМАН
    const  = 586; // ПАКИСТАН
    const  = 585; // ПАЛАУ
    const  = 275; // ПАЛЕСТИНА
    const  = 591; // ПАНАМА
    const  = 598; // ПАПУА НОВАЯ ГВИНЕЯ
    const  = 600; // ПАРАГВАЙ
    const  = 604; // ПЕРУ
    const  = 612; // ПИТКЕРН
    const  = 616; // ПОЛЬША
    const  = 620; // ПОРТУГАЛИЯ
    const  = 630; // ПУЭРТО-РИКО
    const  = 178; // РЕСПУБЛИКА КОНГО
    const  = 638; // РЕЮНЬОН
    const  = 162; // РОЖДЕСТВА ОСТРОВ
    const  = 643; // РОССИЙСКАЯ ФЕДЕРАЦИЯ
    const  = 646; // РУАНДА
    const  = 642; // РУМЫНИЯ
    const  = 222; // САЛЬВАДОР
    const  = 882; // САМОА
    const  = 674; // САН-МАРИНО
    const  = 678; // САН-ТОМЕ И ПРИНСИПИ
    const  = 682; // САУДОВСКАЯ АРАВИЯ
    const  = 748; // СВАЗИЛЕНД
    const  = 654; // СВЯТАЯ ЕЛЕНА, 
    const  = 580; // СЕВЕРНЫЕ МАРИАНСКИЕ ОСТРОВА
    const  = 690; // СЕЙШЕЛЫ
    const  = 652; // СЕН-БАРТЕЛЕМИ
    const  = 686; // СЕНЕГАЛ
    const  = 534; // СЕНТ-МАРТЕН (НИДЕРЛАНДСКАЯ ЧАСТЬ)
    const  = 663; // СЕН-МАРТЕН (ФРАНЦУЗСКАЯ ЧАСТЬ)
    const  = 666; // СЕН-ПЬЕР И МИКЕЛОН
    const  = 670; // СЕНТ-ВИНСЕНТ И ГРЕНАДИНЫ
    const  = 659; // СЕНТ-КИТТС И НЕВИС
    const  = 662; // СЕНТ-ЛЮСИЯ
    const  = 688; // СЕРБИЯ
    const  = 702; // СИНГАПУР
    const  = 760; // СИРИЙСКАЯ АРАБСКАЯ РЕСПУБЛИКА
    const  = 703; // СЛОВАКИЯ
    const  = 705; // СЛОВЕНИЯ
    const  = 840; // СОЕДИНЕННЫЕ ШТАТЫ АМЕРИКИ
    const  = 90; // СОЛОМОНОВЫ ОСТРОВА
    const  = 706; // СОМАЛИ
    const  = 0; // Страна не определена
    const  = 736; // СУДАН
    const  = 729; // СУДАН
    const  = 740; // СУРИНАМ
    const  = 694; // СЬЕРРА-ЛЕОНЕ
    const  = 762; // ТАДЖИКИСТАН
    const  = 764; // ТАИЛАНД
    const  = 158; // ТАЙВАНЬ
    const  = 834; // ТАНЗАНИЯ
    const  = 796; // ТЕРКС И КАЙКОС ОСТРОВА
    const  = 626; // ТИМОР-ЛЕСТЕ
    const  = 768; // ТОГО
    const  = 772; // ТОКЕЛАУ
    const  = 776; // ТОНГА
    const  = 780; // ТРИНИДАД И ТОБАГО
    const  = 798; // ТУВАЛУ
    const  = 788; // ТУНИС
    const  = 795; // ТУРКМЕНИЯ
    const  = 792; // ТУРЦИЯ
    const  = 800; // УГАНДА
    const  = 860; // УЗБЕКИСТАН
    const  = 804; // УКРАИНА
    const  = 876; // УОЛЛEС И ФУТУНА ОСТРОВА
    const  = 858; // УРУГВАЙ
    const  = 234; // ФАРЕРСКИЕ ОСТРОВА
    const  = 242; // ФИДЖИ
    const  = 608; // ФИЛИППИНЫ
    const  = 246; // ФИНЛЯНДИЯ
    const  = 238; // ФОЛКЛЕНДСКИЕ (МАЛЬВИНСКИЕ) ОСТРОВА
    const  = 250; // ФРАНЦИЯ
    const  = 249; // ФРАНЦИЯ, МЕТРОПОЛИЯ
    const  = 254; // ФРАНЦУЗСКАЯ ГВИАНА
    const  = 258; // ФРАНЦУЗСКАЯ ПОЛИНЕЗИЯ
    const  = 260; // ФРАНЦУЗСКИЕ ЮЖНЫЕ ТЕРРИТОРИИ
    const  = 334; // ХЕРД И МАКДОНАЛЬД ОСТРОВА
    const  = 191; // ХОРВАТИЯ
    const  = 140; // ЦЕНТРАЛЬНО-АФРИКАНСКАЯ РЕСПУБЛИКА
    const  = 148; // ЧАД
    const  = 499; // ЧЕРНОГОРИЯ
    const  = 203; // ЧЕШСКАЯ РЕСПУБЛИКА
    const  = 152; // ЧИЛИ
    const  = 903; // ЧИЛИ, ПАСХИ ОСТРОВ
    const  = 756; // ШВЕЙЦАРИЯ
    const  = 752; // ШВЕЦИЯ
    const  = 744; // ШПИЦБЕРГЕН И ЯН-МАЙЕН
    const  = 144; // ШРИ ЛАНКА
    const  = 218; // ЭКВАДОР
    const  = 226; // ЭКВАТОРИАЛЬНАЯ ГВИНЕЯ
    const  = 248; // ЭЛАНДСКИЕ ОСТРОВА
    const  = 232; // ЭРИТРЕЯ
    const  = 233; // ЭСТОНИЯ
    const  = 231; // ЭФИОПИЯ
    const  = 891; // ЮГОСЛАВИЯ²
    const  = 239; // ЮЖНАЯ ДЖОРДЖИЯ И ЮЖНЫЕ САНДВИЧЕВЫ ОСТРОВА
    const  = 896; // Южная Осетия
    const  = 710; // ЮЖНО-АФРИКАНСКАЯ РЕСПУБЛИКА
    const  = 728; // ЮЖНЫЙ СУДАН
    const  = 388; // ЯМАЙКА
    const  = 392; // ЯПОНИЯ

    /** @return string */
    public static function getType() {
        return 'MailDirect';
    }
    
    /** @return string */
    public static function getDescription() {
        return 'Коды стран пересылки почтовых отправлений';
    }
    
    protected $dic = array (
        self:: => array ( 'name' => 'АБХАЗИЯ', 'translation' => 'Abkhazia', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'АВСТРАЛИЯ', 'translation' => 'AUSTRALIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'АВСТРИЯ', 'translation' => 'AUSTRIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'АЗЕРБАЙДЖАН', 'translation' => 'AZERBAIJAN', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'АЛБАНИЯ', 'translation' => 'ALBANIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'АЛЖИР', 'translation' => 'ALGERIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'АНГИЛЬЯ', 'translation' => 'ANGUILLA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'АНГОЛА', 'translation' => 'ANGOLA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'АНДОРРА', 'translation' => 'ANDORRA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'АНТАРКТИКА', 'translation' => 'ANTARCTICA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'АНТИГУА И БАРБУДА', 'translation' => 'ANTIGUA AND BARBUDA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'АРГЕНТИНА', 'translation' => 'ARGENTINA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'АРМЕНИЯ', 'translation' => 'ARMENIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'АРУБА', 'translation' => 'ARUBA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'АФГАНИСТАН', 'translation' => 'AFGHANISTAN', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'БАГАМЫ', 'translation' => 'BAHAMAS', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'БАНГЛАДЕШ', 'translation' => 'BANGLADESH', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'БАРБАДОС', 'translation' => 'BARBADOS', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'БАХРЕЙН', 'translation' => 'BAHRAIN', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'БЕЛИЗ', 'translation' => 'BELIZE', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'БЕЛАРУСЬ', 'translation' => 'BELARUS', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'БЕЛЬГИЯ', 'translation' => 'BELGIUM', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'БЕНИН', 'translation' => 'BENIN', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'БЕРМУДЫ', 'translation' => 'BERMUDA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'БОЛГАРИЯ', 'translation' => 'BULGARIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'БОЛИВИЯ', 'translation' => 'BOLIVIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'БОНЭЙР, СИНТ-ЭСТАТИУС И САБА', 'translation' => 'BONAIRE, SINT EUSTATIUS AND SABA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'БОСНИЯ И ГЕРЦЕГОВИНА', 'translation' => 'BOSNIA AND HERZEGOVINA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'БОТСВАНА', 'translation' => 'BOTSWANA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'БРАЗИЛИЯ', 'translation' => 'BRAZIL', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'БРИТАНСКИЕ ВИРГИНСКИЕ ОСТРОВА', 'translation' => 'VIRGIN ISLANDS (BRITISH)', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'БРИТАНСКИЕ ТЕРРИТОРИИ В ИНДИЙСКОМ ОКЕАНЕ', 'translation' => 'BRITISH INDIAN OCEAN TERRITOTY', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'БРУНЕЙ', 'translation' => 'BRUNEI DARUSSALAM', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'БУВЕ ОСТРОВА', 'translation' => 'BOUVET ISLAND', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'БУРКИНА-ФАСО', 'translation' => 'BURKINA FASO', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'БУРУНДИ', 'translation' => 'BURUNDI', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'БУТАН', 'translation' => 'BHUTAN', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ВАНУАТУ', 'translation' => 'VANUATU', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ВАТИКАН', 'translation' => 'VATICAN CITY STATE (HOLY SEE)', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ВЕЛИКОБРИТАНИЯ', 'translation' => 'UNITED KINDOM', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ВЕНГРИЯ', 'translation' => 'HUNGARY', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ВЕНЕСУЭЛА БОЛИВАРИАНСКАЯ РЕСПУБЛИКА', 'translation' => 'VENEZUELA, BOLIVARIAN REPUBLIC OF', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ВИРГИНСКИЕ ОСТРОВА (США)', 'translation' => 'VIRGIN ISLANDS (U.S.)', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'вознесения остров', 'translation' => 'ascension island', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ВОСТОЧНОЕ САМОА', 'translation' => 'AMERICAN SAMOA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ВЬЕТНАМ', 'translation' => 'VIET NAM', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ГАБОН', 'translation' => 'GABON', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ГАИТИ', 'translation' => 'HAITI', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ГАЙАНА', 'translation' => 'GUYANA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ГАМБИЯ', 'translation' => 'GAMBIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ГАНА', 'translation' => 'GHANA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ГВАДЕЛУПА', 'translation' => 'GUADELOUPE', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ГВАТЕМАЛА', 'translation' => 'GUATEMALA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ГВИНЕЯ', 'translation' => 'GUINEA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ГВИНЕЯ-БИСАУ', 'translation' => 'GUINEA-BISSAU', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ГЕРМАНИЯ', 'translation' => 'GERMANY', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ГЕРНСИ', 'translation' => 'GUERNSEY', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ГИБРАЛТАР', 'translation' => 'GIBRALTAR', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ГОНДУРАС', 'translation' => 'HONDURAS', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ГОНКОНГ', 'translation' => 'HONK KONG', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ГРЕНАДА', 'translation' => 'GRENADA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ГРЕНЛАНДИЯ', 'translation' => 'GREENLAND', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ГРЕЦИЯ', 'translation' => 'GREECE', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ГРУЗИЯ', 'translation' => 'GEORGIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ГУАМ', 'translation' => 'GUAM', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ДАНИЯ', 'translation' => 'DENMARK', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ДЕМОКРАТИЧЕСКАЯ РЕСПУБЛИКА КОНГО', 'translation' => 'DEMOCRATIC REPUBLIC OF THE CONGO', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ДЖЕРСИ', 'translation' => 'JERSEY', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ДЖИБУТИ', 'translation' => 'DJIBOUTI', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ДОМИНИКА', 'translation' => 'DOMINICA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ДОМИНИКАНСКАЯ РЕСПУБЛИКА', 'translation' => 'DOMINICAN REPUBLIC', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЕГИПЕТ', 'translation' => 'EGYPT', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЗАМБИЯ', 'translation' => 'ZAMBIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЗАПАДНАЯ САХАРА', 'translation' => 'WESTERN SAHARA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЗИМБАБВЕ', 'translation' => 'ZIMBABWE', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ИЗРАИЛЬ', 'translation' => 'ISRAEL', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ИНДИЯ', 'translation' => 'INDIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ИНДОНЕЗИЯ', 'translation' => 'INDONESIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ИОРДАНИЯ', 'translation' => 'JORDAN', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ИРАК', 'translation' => 'IRAQ', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ИРАН', 'translation' => 'IRAN (ISLAMIC REPUBLIC OF)', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ИРЛАНДИЯ', 'translation' => 'IRELAND', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ИСЛАНДИЯ', 'translation' => 'ICELAND', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ИСПАНИЯ', 'translation' => 'SPAIN', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ИТАЛИЯ', 'translation' => 'ITALY', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЙЕМЕН', 'translation' => 'YEMEN', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'КАБО-ВЕРДЕ', 'translation' => 'CAPE VERDE', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'КАЗАХСТАН', 'translation' => 'KAZAKHSTAN', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'КАЙМАНОВЫ ОСТРОВА', 'translation' => 'CAYMAN ISLAND', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'КАМБОДЖА', 'translation' => 'CAMBODIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'КАМЕРУН', 'translation' => 'CAMEROON', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'КАНАДА', 'translation' => 'CANADA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'КАТАР', 'translation' => 'QATAR', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'КЕНИЯ', 'translation' => 'KENYA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'КИПР', 'translation' => 'CYPRUS', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'КИРГИЗИЯ', 'translation' => 'KYRGYZSTAN', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'КИРИБАТИ', 'translation' => 'KIRIBATI', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'КИТАЙ', 'translation' => 'CHINA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'КНДР', 'translation' => 'KOREA, DEMOCRATIC PEOPLE'S REPUBLIC OF', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'КОКОС ОСТРОВА', 'translation' => 'COCOS (KEELING) ISLANDS', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'КОЛУМБИЯ', 'translation' => 'COLOMBIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'КОМОРЫ', 'translation' => 'COMOROS', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'КОРЕЯ', 'translation' => 'KOREA, REPUBLIC OF', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'КОСОВО', 'translation' => 'KOSOVO', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'КОСТА-РИКА', 'translation' => 'COSTA RICA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'КОТ-Д'ИВУАР', 'translation' => 'COTE D'IVOIRE', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'КУБА', 'translation' => 'CUBA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'КУВЕЙТ', 'translation' => 'KUWAIT', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'КУКА ОСТРОВА', 'translation' => 'COOK ISLANDS', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'КЮРАСАО', 'translation' => 'CURAÇAO', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЛАОС', 'translation' => 'LAO PEOPLE'S DEMOCRATIC REPUBLIC', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЛАТВИЯ', 'translation' => 'LATVIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЛЕСОТО', 'translation' => 'LESOTHO', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЛИБЕРИЯ', 'translation' => 'LIBERIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЛИВАН', 'translation' => 'LEBANON', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЛИВИЯ', 'translation' => 'LIBYAN', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЛИТВА', 'translation' => 'LITHUANIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЛИХТЕНШТЕЙН', 'translation' => 'LIECHTENSTEIN', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЛЮКСЕМБУРГ', 'translation' => 'LUXEMBOURG', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'МАВРИКИЙ', 'translation' => 'MAURITIUS', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'МАВРИТАНИЯ', 'translation' => 'MAURITANIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'МАДАГАСКАР', 'translation' => 'MADAGASCAR', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'МАЙОТТА', 'translation' => 'MAYOTTE', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'МАКАО', 'translation' => 'MACAU', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'МАКЕДОНИЯ', 'translation' => 'THE FORMER YUGOSLAV REPUBLIC OF MACEDONI', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'МАЛАВИ', 'translation' => 'MALAWI', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'МАЛАЙЗИЯ', 'translation' => 'MALAYSIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'МАЛИ', 'translation' => 'MALI', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'МАЛЬДИВЫ', 'translation' => 'MALDIVES', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'МАЛЫЕ ТИХООКЕАНСКИЕ ОТДАЛЕННЫЕ ОСТРОВА СОЕДИНЕННЫХ ШТАТОВ', 'translation' => 'UNITED STATES MINOR OUTLYING ISLANDS', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'МАЛЬТА', 'translation' => 'MALTA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'МАРОККО', 'translation' => 'MOROCCO', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'МАРТИНИКА', 'translation' => 'MARTINIQUE', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'МАРШАЛЛОВЫ ОСТРОВА', 'translation' => 'MARSHALL ISLANDS', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'МЕКСИКА', 'translation' => 'MEXICO', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'МИКРОНЕЗИЯ', 'translation' => 'MICRONESIA (FEDERATED STATES OF)', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'МОЗАМБИК', 'translation' => 'MOZAMBIQUE', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'МОЛДОВА, РЕСПУБЛИКА', 'translation' => 'MOLDOVA, REPUBLIC OF', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'МОНАКО', 'translation' => 'MONACO', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'МОНГОЛИЯ', 'translation' => 'MONGOLIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'МОНТСЕРРАТ', 'translation' => 'MONTSERRAT', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'МЬЯНМА', 'translation' => 'MYANMAR', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'МЭН ОСТРОВ', 'translation' => 'isle of man', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'НАМИБИЯ', 'translation' => 'NAMIBIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'НАУРУ', 'translation' => 'NAURU', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'НЕПАЛ', 'translation' => 'NEPAL', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'НИГЕР', 'translation' => 'NIGER', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'НИГЕРИЯ', 'translation' => 'NIGERIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'НИДЕРЛАНДСКИЕ АНТИЛЫ', 'translation' => 'NETHERLANDS ANTILLES', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'НИДЕРЛАНДЫ', 'translation' => 'NETHERLANDS', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'НИКАРАГУА', 'translation' => 'NICARAGUA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'НИУЭ', 'translation' => 'NIUE', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'НОВАЯ ЗЕЛАНДИЯ', 'translation' => 'NEW ZEALAND', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'НОВАЯ КАЛЕДОНИЯ', 'translation' => 'NEW CALEDONIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'НОРВЕГИЯ', 'translation' => 'NORWAY', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'НОРФОЛК ОСТРОВ', 'translation' => 'NORFOLK ISLAND', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ОБЪЕДИНЕННЫЕ АРАБСКИЕ ЭМИРАТЫ', 'translation' => 'UNITED ARAB EMIRATES', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ОМАН', 'translation' => 'OMAN', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ПАКИСТАН', 'translation' => 'PAKISTAN', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ПАЛАУ', 'translation' => 'PALAU', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ПАЛЕСТИНА', 'translation' => 'palestinian territory, occupied', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ПАНАМА', 'translation' => 'PANAMA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ПАПУА НОВАЯ ГВИНЕЯ', 'translation' => 'PAPUA NEW GUINEA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ПАРАГВАЙ', 'translation' => 'PARAGUAY', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ПЕРУ', 'translation' => 'PERU', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ПИТКЕРН', 'translation' => 'PITCAIRN', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ПОЛЬША', 'translation' => 'POLAND', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ПОРТУГАЛИЯ', 'translation' => 'PORTUGAL', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ПУЭРТО-РИКО', 'translation' => 'PUERTO RICO', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'РЕСПУБЛИКА КОНГО', 'translation' => 'CONGO REPUBLIC', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'РЕЮНЬОН', 'translation' => 'RÉUNION', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'РОЖДЕСТВА ОСТРОВ', 'translation' => 'CHRISTMAS ISLAND', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'РОССИЙСКАЯ ФЕДЕРАЦИЯ', 'translation' => 'RUSSIAN FEDERATION', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'РУАНДА', 'translation' => 'RWANDA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'РУМЫНИЯ', 'translation' => 'ROMANIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'САЛЬВАДОР', 'translation' => 'EL SALVADOR', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'САМОА', 'translation' => 'SAMOA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'САН-МАРИНО', 'translation' => 'SAN MARINO', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'САН-ТОМЕ И ПРИНСИПИ', 'translation' => 'SAO TOME AND PRINCIPE', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'САУДОВСКАЯ АРАВИЯ', 'translation' => 'SAUDI ARABIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'СВАЗИЛЕНД', 'translation' => 'SWAZILAND', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'СВЯТАЯ ЕЛЕНА, ', 'translation' => 'SAINT HELENA, ', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'СЕВЕРНЫЕ МАРИАНСКИЕ ОСТРОВА', 'translation' => 'NORTHERN MARIANA ISLAND', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'СЕЙШЕЛЫ', 'translation' => 'SEYCHELLES', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'СЕН-БАРТЕЛЕМИ', 'translation' => 'SAINT BARTHELEMY', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'СЕНЕГАЛ', 'translation' => 'SENEGAL', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'СЕНТ-МАРТЕН (НИДЕРЛАНДСКАЯ ЧАСТЬ)', 'translation' => 'SINT MAARTEN (DUTCH PART)', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'СЕН-МАРТЕН (ФРАНЦУЗСКАЯ ЧАСТЬ)', 'translation' => 'SAINT MARTIN (FRENCH PART)', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'СЕН-ПЬЕР И МИКЕЛОН', 'translation' => 'SAINT PIERRE AND MIQUELON', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'СЕНТ-ВИНСЕНТ И ГРЕНАДИНЫ', 'translation' => 'SAINT VINCENT AND THE GRENADINES', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'СЕНТ-КИТТС И НЕВИС', 'translation' => 'SAINT KITTS AND NEVIS', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'СЕНТ-ЛЮСИЯ', 'translation' => 'SAINT LUCIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'СЕРБИЯ', 'translation' => 'SERBIA ', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'СИНГАПУР', 'translation' => 'SINGAPORE', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'СИРИЙСКАЯ АРАБСКАЯ РЕСПУБЛИКА', 'translation' => 'SYRIAN ARAB REPUBLIC', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'СЛОВАКИЯ', 'translation' => 'SLOVAKIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'СЛОВЕНИЯ', 'translation' => 'SLOVENIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'СОЕДИНЕННЫЕ ШТАТЫ АМЕРИКИ', 'translation' => 'UNITED STATES', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'СОЛОМОНОВЫ ОСТРОВА', 'translation' => 'SOLOMON ISLANDS', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'СОМАЛИ', 'translation' => 'SOMALIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'Страна не определена', 'translation' => 'NOT DETERMINED', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'СУДАН', 'translation' => 'SUDAN', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'СУДАН', 'translation' => 'SUDAN', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'СУРИНАМ', 'translation' => 'SURINAME', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'СЬЕРРА-ЛЕОНЕ', 'translation' => 'SIERRA LEONE', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ТАДЖИКИСТАН', 'translation' => 'TAJIKISTAN', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ТАИЛАНД', 'translation' => 'THAILAND', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ТАЙВАНЬ', 'translation' => 'TAIWAN, PROVINCE OF CHINA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ТАНЗАНИЯ', 'translation' => 'TANZANIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ТЕРКС И КАЙКОС ОСТРОВА', 'translation' => 'TURKS AND CAICOS ISLANDS', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ТИМОР-ЛЕСТЕ', 'translation' => 'TIMOR-LESTE', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ТОГО', 'translation' => 'TOGO', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ТОКЕЛАУ', 'translation' => 'TOKELAU', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ТОНГА', 'translation' => 'TONGA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ТРИНИДАД И ТОБАГО', 'translation' => 'TRINIDAD AND TOBAGO', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ТУВАЛУ', 'translation' => 'TUVALU', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ТУНИС', 'translation' => 'TUNISIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ТУРКМЕНИЯ', 'translation' => 'TURKMENISTAN', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ТУРЦИЯ', 'translation' => 'TURKEY', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'УГАНДА', 'translation' => 'UGANDA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'УЗБЕКИСТАН', 'translation' => 'UZBEKISTAN', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'УКРАИНА', 'translation' => 'UKRAINE', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'УОЛЛEС И ФУТУНА ОСТРОВА', 'translation' => 'WALLS AND FUTUNA ISLANDS', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'УРУГВАЙ', 'translation' => 'URUGUAY', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ФАРЕРСКИЕ ОСТРОВА', 'translation' => 'FAROE ISLANDS', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ФИДЖИ', 'translation' => 'FIJI', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ФИЛИППИНЫ', 'translation' => 'PHILIPPINES', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ФИНЛЯНДИЯ', 'translation' => 'FINLAND', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ФОЛКЛЕНДСКИЕ (МАЛЬВИНСКИЕ) ОСТРОВА', 'translation' => 'FALKLAND ISLANDS (MALVINAS)', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ФРАНЦИЯ', 'translation' => 'FRANCE', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ФРАНЦИЯ, МЕТРОПОЛИЯ', 'translation' => 'FRANCE, METROPOLITAN', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ФРАНЦУЗСКАЯ ГВИАНА', 'translation' => 'FRENCH GUIANA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ФРАНЦУЗСКАЯ ПОЛИНЕЗИЯ', 'translation' => 'FRENCH POLYNESIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ФРАНЦУЗСКИЕ ЮЖНЫЕ ТЕРРИТОРИИ', 'translation' => 'FRENCH SOUTHERN TERRITORIES', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ХЕРД И МАКДОНАЛЬД ОСТРОВА', 'translation' => 'HEARD ISLAND AND MCDONALD ISLAND', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ХОРВАТИЯ', 'translation' => 'CROATIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЦЕНТРАЛЬНО-АФРИКАНСКАЯ РЕСПУБЛИКА', 'translation' => 'CENTRAL AFRICAN REPUBLIC', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЧАД', 'translation' => 'CHAD', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЧЕРНОГОРИЯ', 'translation' => 'MONTENEGRO', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЧЕШСКАЯ РЕСПУБЛИКА', 'translation' => 'CZECH REPUBLIC', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЧИЛИ', 'translation' => 'CHILE', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЧИЛИ, ПАСХИ ОСТРОВ', 'translation' => 'CHILE, EASTER ISLAND', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ШВЕЙЦАРИЯ', 'translation' => 'SWITZERLAND', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ШВЕЦИЯ', 'translation' => 'SWEDEN', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ШПИЦБЕРГЕН И ЯН-МАЙЕН', 'translation' => 'SVALBARD AND JAN MAYEN', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ШРИ ЛАНКА', 'translation' => 'SRI LANKA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЭКВАДОР', 'translation' => 'ECUADOR', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЭКВАТОРИАЛЬНАЯ ГВИНЕЯ', 'translation' => 'EQUATORIAL GUINEA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЭЛАНДСКИЕ ОСТРОВА', 'translation' => 'ALAND ISLANDS', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЭРИТРЕЯ', 'translation' => 'ERITREA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЭСТОНИЯ', 'translation' => 'ESTONIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЭФИОПИЯ', 'translation' => 'ETHIOPIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЮГОСЛАВИЯ²', 'translation' => 'YUGOSLAVIA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЮЖНАЯ ДЖОРДЖИЯ И ЮЖНЫЕ САНДВИЧЕВЫ ОСТРОВА', 'translation' => 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISL', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'Южная Осетия', 'translation' => 'South Ossetia', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЮЖНО-АФРИКАНСКАЯ РЕСПУБЛИКА', 'translation' => 'SOUTH AFRICA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЮЖНЫЙ СУДАН', 'translation' => 'SOUTH SUDAN', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЯМАЙКА', 'translation' => 'JAMAICA', 'relatedAttributeType' => '' ),
        self:: => array ( 'name' => 'ЯПОНИЯ', 'translation' => 'JAPAN', 'relatedAttributeType' => '' ),
    );
}
