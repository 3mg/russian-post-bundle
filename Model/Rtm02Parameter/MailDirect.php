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
    const ABKHAZIA = 895; // АБХАЗИЯ
    const AUSTRALIA = 36; // АВСТРАЛИЯ
    const AUSTRIA = 40; // АВСТРИЯ
    const AZERBAIJAN = 31; // АЗЕРБАЙДЖАН
    const ALBANIA = 8; // АЛБАНИЯ
    const ALGERIA = 12; // АЛЖИР
    const ANGUILLA = 660; // АНГИЛЬЯ
    const ANGOLA = 24; // АНГОЛА
    const ANDORRA = 20; // АНДОРРА
    const ANTARCTICA = 10; // АНТАРКТИКА
    const ANTIGUA_AND_BARBUDA = 28; // АНТИГУА И БАРБУДА
    const ARGENTINA = 32; // АРГЕНТИНА
    const ARMENIA = 51; // АРМЕНИЯ
    const ARUBA = 533; // АРУБА
    const AFGHANISTAN = 4; // АФГАНИСТАН
    const BAHAMAS = 44; // БАГАМЫ
    const BANGLADESH = 50; // БАНГЛАДЕШ
    const BARBADOS = 52; // БАРБАДОС
    const BAHRAIN = 48; // БАХРЕЙН
    const BELIZE = 84; // БЕЛИЗ
    const BELARUS = 112; // БЕЛАРУСЬ
    const BELGIUM = 56; // БЕЛЬГИЯ
    const BENIN = 204; // БЕНИН
    const BERMUDA = 60; // БЕРМУДЫ
    const BULGARIA = 100; // БОЛГАРИЯ
    const BOLIVIA = 68; // БОЛИВИЯ
    const BONAIRE_SINT_EUSTATIUS_AND_SABA = 535; // БОНЭЙР, СИНТ-ЭСТАТИУС И САБА
    const BOSNIA_AND_HERZEGOVINA = 70; // БОСНИЯ И ГЕРЦЕГОВИНА
    const BOTSWANA = 72; // БОТСВАНА
    const BRAZIL = 76; // БРАЗИЛИЯ
    const VIRGIN_ISLANDS_BRITISH = 92; // БРИТАНСКИЕ ВИРГИНСКИЕ ОСТРОВА
    const BRITISH_INDIAN_OCEAN_TERRITOTY = 86; // БРИТАНСКИЕ ТЕРРИТОРИИ В ИНДИЙСКОМ ОКЕАНЕ
    const BRUNEI_DARUSSALAM = 96; // БРУНЕЙ
    const BOUVET_ISLAND = 74; // БУВЕ ОСТРОВА
    const BURKINA_FASO = 854; // БУРКИНА-ФАСО
    const BURUNDI = 108; // БУРУНДИ
    const BHUTAN = 64; // БУТАН
    const VANUATU = 548; // ВАНУАТУ
    const VATICAN_CITY_STATE_HOLY_SEE = 336; // ВАТИКАН
    const UNITED_KINDOM = 826; // ВЕЛИКОБРИТАНИЯ
    const HUNGARY = 348; // ВЕНГРИЯ
    const VENEZUELA_BOLIVARIAN_REPUBLIC_OF = 862; // ВЕНЕСУЭЛА БОЛИВАРИАНСКАЯ РЕСПУБЛИКА
    const VIRGIN_ISLANDS_U_S_ = 850; // ВИРГИНСКИЕ ОСТРОВА (США)
    const ASCENSION_ISLAND = 906; // вознесения остров
    const AMERICAN_SAMOA = 16; // ВОСТОЧНОЕ САМОА
    const VIET_NAM = 704; // ВЬЕТНАМ
    const GABON = 266; // ГАБОН
    const HAITI = 332; // ГАИТИ
    const GUYANA = 328; // ГАЙАНА
    const GAMBIA = 270; // ГАМБИЯ
    const GHANA = 288; // ГАНА
    const GUADELOUPE = 312; // ГВАДЕЛУПА
    const GUATEMALA = 320; // ГВАТЕМАЛА
    const GUINEA = 324; // ГВИНЕЯ
    const GUINEA_BISSAU = 624; // ГВИНЕЯ-БИСАУ
    const GERMANY = 276; // ГЕРМАНИЯ
    const GUERNSEY = 831; // ГЕРНСИ
    const GIBRALTAR = 292; // ГИБРАЛТАР
    const HONDURAS = 340; // ГОНДУРАС
    const HONK_KONG = 344; // ГОНКОНГ
    const GRENADA = 308; // ГРЕНАДА
    const GREENLAND = 304; // ГРЕНЛАНДИЯ
    const GREECE = 300; // ГРЕЦИЯ
    const GEORGIA = 268; // ГРУЗИЯ
    const GUAM = 316; // ГУАМ
    const DENMARK = 208; // ДАНИЯ
    const DEMOCRATIC_REPUBLIC_OF_THE_CONGO = 180; // ДЕМОКРАТИЧЕСКАЯ РЕСПУБЛИКА КОНГО
    const JERSEY = 832; // ДЖЕРСИ
    const DJIBOUTI = 262; // ДЖИБУТИ
    const DOMINICA = 212; // ДОМИНИКА
    const DOMINICAN_REPUBLIC = 214; // ДОМИНИКАНСКАЯ РЕСПУБЛИКА
    const EGYPT = 818; // ЕГИПЕТ
    const ZAMBIA = 894; // ЗАМБИЯ
    const WESTERN_SAHARA = 732; // ЗАПАДНАЯ САХАРА
    const ZIMBABWE = 716; // ЗИМБАБВЕ
    const ISRAEL = 376; // ИЗРАИЛЬ
    const INDIA = 356; // ИНДИЯ
    const INDONESIA = 360; // ИНДОНЕЗИЯ
    const JORDAN = 400; // ИОРДАНИЯ
    const IRAQ = 368; // ИРАК
    const IRAN_ISLAMIC_REPUBLIC_OF = 364; // ИРАН
    const IRELAND = 372; // ИРЛАНДИЯ
    const ICELAND = 352; // ИСЛАНДИЯ
    const SPAIN = 724; // ИСПАНИЯ
    const ITALY = 380; // ИТАЛИЯ
    const YEMEN = 887; // ЙЕМЕН
    const CAPE_VERDE = 132; // КАБО-ВЕРДЕ
    const KAZAKHSTAN = 398; // КАЗАХСТАН
    const CAYMAN_ISLAND = 136; // КАЙМАНОВЫ ОСТРОВА
    const CAMBODIA = 116; // КАМБОДЖА
    const CAMEROON = 120; // КАМЕРУН
    const CANADA = 124; // КАНАДА
    const QATAR = 634; // КАТАР
    const KENYA = 404; // КЕНИЯ
    const CYPRUS = 196; // КИПР
    const KYRGYZSTAN = 417; // КИРГИЗИЯ
    const KIRIBATI = 296; // КИРИБАТИ
    const CHINA = 156; // КИТАЙ
    const KOREA_DEMOCRATIC_PEOPLE_S_REPUBLIC_OF = 408; // КНДР
    const COCOS_KEELING_ISLANDS = 166; // КОКОС ОСТРОВА
    const COLOMBIA = 170; // КОЛУМБИЯ
    const COMOROS = 174; // КОМОРЫ
    const KOREA_REPUBLIC_OF = 410; // КОРЕЯ
    const KOSOVO = 914; // КОСОВО
    const COSTA_RICA = 188; // КОСТА-РИКА
    const COTE_D_IVOIRE = 384; // КОТ-Д\'ИВУАР
    const CUBA = 192; // КУБА
    const KUWAIT = 414; // КУВЕЙТ
    const COOK_ISLANDS = 184; // КУКА ОСТРОВА
    const CURA__AO = 531; // КЮРАСАО
    const LAO_PEOPLE_S_DEMOCRATIC_REPUBLIC = 418; // ЛАОС
    const LATVIA = 428; // ЛАТВИЯ
    const LESOTHO = 426; // ЛЕСОТО
    const LIBERIA = 430; // ЛИБЕРИЯ
    const LEBANON = 422; // ЛИВАН
    const LIBYAN = 434; // ЛИВИЯ
    const LITHUANIA = 440; // ЛИТВА
    const LIECHTENSTEIN = 438; // ЛИХТЕНШТЕЙН
    const LUXEMBOURG = 442; // ЛЮКСЕМБУРГ
    const MAURITIUS = 480; // МАВРИКИЙ
    const MAURITANIA = 478; // МАВРИТАНИЯ
    const MADAGASCAR = 450; // МАДАГАСКАР
    const MAYOTTE = 175; // МАЙОТТА
    const MACAU = 446; // МАКАО
    const THE_FORMER_YUGOSLAV_REPUBLIC_OF_MACEDONI = 807; // МАКЕДОНИЯ
    const MALAWI = 454; // МАЛАВИ
    const MALAYSIA = 458; // МАЛАЙЗИЯ
    const MALI = 466; // МАЛИ
    const MALDIVES = 462; // МАЛЬДИВЫ
    const UNITED_STATES_MINOR_OUTLYING_ISLANDS = 581; // МАЛЫЕ ТИХООКЕАНСКИЕ ОТДАЛЕННЫЕ ОСТРОВА СОЕДИНЕННЫХ ШТАТОВ
    const MALTA = 470; // МАЛЬТА
    const MOROCCO = 504; // МАРОККО
    const MARTINIQUE = 474; // МАРТИНИКА
    const MARSHALL_ISLANDS = 584; // МАРШАЛЛОВЫ ОСТРОВА
    const MEXICO = 484; // МЕКСИКА
    const MICRONESIA_FEDERATED_STATES_OF = 583; // МИКРОНЕЗИЯ
    const MOZAMBIQUE = 508; // МОЗАМБИК
    const MOLDOVA_REPUBLIC_OF = 498; // МОЛДОВА, РЕСПУБЛИКА
    const MONACO = 492; // МОНАКО
    const MONGOLIA = 496; // МОНГОЛИЯ
    const MONTSERRAT = 500; // МОНТСЕРРАТ
    const MYANMAR = 104; // МЬЯНМА
    const ISLE_OF_MAN = 833; // МЭН ОСТРОВ
    const NAMIBIA = 516; // НАМИБИЯ
    const NAURU = 520; // НАУРУ
    const NEPAL = 524; // НЕПАЛ
    const NIGER = 562; // НИГЕР
    const NIGERIA = 566; // НИГЕРИЯ
    const NETHERLANDS_ANTILLES = 530; // НИДЕРЛАНДСКИЕ АНТИЛЫ
    const NETHERLANDS = 528; // НИДЕРЛАНДЫ
    const NICARAGUA = 558; // НИКАРАГУА
    const NIUE = 570; // НИУЭ
    const NEW_ZEALAND = 554; // НОВАЯ ЗЕЛАНДИЯ
    const NEW_CALEDONIA = 540; // НОВАЯ КАЛЕДОНИЯ
    const NORWAY = 578; // НОРВЕГИЯ
    const NORFOLK_ISLAND = 574; // НОРФОЛК ОСТРОВ
    const UNITED_ARAB_EMIRATES = 784; // ОБЪЕДИНЕННЫЕ АРАБСКИЕ ЭМИРАТЫ
    const OMAN = 512; // ОМАН
    const PAKISTAN = 586; // ПАКИСТАН
    const PALAU = 585; // ПАЛАУ
    const PALESTINIAN_TERRITORY_OCCUPIED = 275; // ПАЛЕСТИНА
    const PANAMA = 591; // ПАНАМА
    const PAPUA_NEW_GUINEA = 598; // ПАПУА НОВАЯ ГВИНЕЯ
    const PARAGUAY = 600; // ПАРАГВАЙ
    const PERU = 604; // ПЕРУ
    const PITCAIRN = 612; // ПИТКЕРН
    const POLAND = 616; // ПОЛЬША
    const PORTUGAL = 620; // ПОРТУГАЛИЯ
    const PUERTO_RICO = 630; // ПУЭРТО-РИКО
    const CONGO_REPUBLIC = 178; // РЕСПУБЛИКА КОНГО
    const R__UNION = 638; // РЕЮНЬОН
    const CHRISTMAS_ISLAND = 162; // РОЖДЕСТВА ОСТРОВ
    const RUSSIAN_FEDERATION = 643; // РОССИЙСКАЯ ФЕДЕРАЦИЯ
    const RWANDA = 646; // РУАНДА
    const ROMANIA = 642; // РУМЫНИЯ
    const EL_SALVADOR = 222; // САЛЬВАДОР
    const SAMOA = 882; // САМОА
    const SAN_MARINO = 674; // САН-МАРИНО
    const SAO_TOME_AND_PRINCIPE = 678; // САН-ТОМЕ И ПРИНСИПИ
    const SAUDI_ARABIA = 682; // САУДОВСКАЯ АРАВИЯ
    const SWAZILAND = 748; // СВАЗИЛЕНД
    const SAINT_HELENA_ = 654; // СВЯТАЯ ЕЛЕНА, 
    const NORTHERN_MARIANA_ISLAND = 580; // СЕВЕРНЫЕ МАРИАНСКИЕ ОСТРОВА
    const SEYCHELLES = 690; // СЕЙШЕЛЫ
    const SAINT_BARTHELEMY = 652; // СЕН-БАРТЕЛЕМИ
    const SENEGAL = 686; // СЕНЕГАЛ
    const SINT_MAARTEN_DUTCH_PART = 534; // СЕНТ-МАРТЕН (НИДЕРЛАНДСКАЯ ЧАСТЬ)
    const SAINT_MARTIN_FRENCH_PART = 663; // СЕН-МАРТЕН (ФРАНЦУЗСКАЯ ЧАСТЬ)
    const SAINT_PIERRE_AND_MIQUELON = 666; // СЕН-ПЬЕР И МИКЕЛОН
    const SAINT_VINCENT_AND_THE_GRENADINES = 670; // СЕНТ-ВИНСЕНТ И ГРЕНАДИНЫ
    const SAINT_KITTS_AND_NEVIS = 659; // СЕНТ-КИТТС И НЕВИС
    const SAINT_LUCIA = 662; // СЕНТ-ЛЮСИЯ
    const SERBIA_ = 688; // СЕРБИЯ
    const SINGAPORE = 702; // СИНГАПУР
    const SYRIAN_ARAB_REPUBLIC = 760; // СИРИЙСКАЯ АРАБСКАЯ РЕСПУБЛИКА
    const SLOVAKIA = 703; // СЛОВАКИЯ
    const SLOVENIA = 705; // СЛОВЕНИЯ
    const UNITED_STATES = 840; // СОЕДИНЕННЫЕ ШТАТЫ АМЕРИКИ
    const SOLOMON_ISLANDS = 90; // СОЛОМОНОВЫ ОСТРОВА
    const SOMALIA = 706; // СОМАЛИ
    const NOT_DETERMINED = 0; // Страна не определена
    const SUDAN = 736; // СУДАН
    const SUDAN_729 = 729; // СУДАН
    const SURINAME = 740; // СУРИНАМ
    const SIERRA_LEONE = 694; // СЬЕРРА-ЛЕОНЕ
    const TAJIKISTAN = 762; // ТАДЖИКИСТАН
    const THAILAND = 764; // ТАИЛАНД
    const TAIWAN_PROVINCE_OF_CHINA = 158; // ТАЙВАНЬ
    const TANZANIA = 834; // ТАНЗАНИЯ
    const TURKS_AND_CAICOS_ISLANDS = 796; // ТЕРКС И КАЙКОС ОСТРОВА
    const TIMOR_LESTE = 626; // ТИМОР-ЛЕСТЕ
    const TOGO = 768; // ТОГО
    const TOKELAU = 772; // ТОКЕЛАУ
    const TONGA = 776; // ТОНГА
    const TRINIDAD_AND_TOBAGO = 780; // ТРИНИДАД И ТОБАГО
    const TUVALU = 798; // ТУВАЛУ
    const TUNISIA = 788; // ТУНИС
    const TURKMENISTAN = 795; // ТУРКМЕНИЯ
    const TURKEY = 792; // ТУРЦИЯ
    const UGANDA = 800; // УГАНДА
    const UZBEKISTAN = 860; // УЗБЕКИСТАН
    const UKRAINE = 804; // УКРАИНА
    const WALLS_AND_FUTUNA_ISLANDS = 876; // УОЛЛEС И ФУТУНА ОСТРОВА
    const URUGUAY = 858; // УРУГВАЙ
    const FAROE_ISLANDS = 234; // ФАРЕРСКИЕ ОСТРОВА
    const FIJI = 242; // ФИДЖИ
    const PHILIPPINES = 608; // ФИЛИППИНЫ
    const FINLAND = 246; // ФИНЛЯНДИЯ
    const FALKLAND_ISLANDS_MALVINAS = 238; // ФОЛКЛЕНДСКИЕ (МАЛЬВИНСКИЕ) ОСТРОВА
    const FRANCE = 250; // ФРАНЦИЯ
    const FRANCE_METROPOLITAN = 249; // ФРАНЦИЯ, МЕТРОПОЛИЯ
    const FRENCH_GUIANA = 254; // ФРАНЦУЗСКАЯ ГВИАНА
    const FRENCH_POLYNESIA = 258; // ФРАНЦУЗСКАЯ ПОЛИНЕЗИЯ
    const FRENCH_SOUTHERN_TERRITORIES = 260; // ФРАНЦУЗСКИЕ ЮЖНЫЕ ТЕРРИТОРИИ
    const HEARD_ISLAND_AND_MCDONALD_ISLAND = 334; // ХЕРД И МАКДОНАЛЬД ОСТРОВА
    const CROATIA = 191; // ХОРВАТИЯ
    const CENTRAL_AFRICAN_REPUBLIC = 140; // ЦЕНТРАЛЬНО-АФРИКАНСКАЯ РЕСПУБЛИКА
    const CHAD = 148; // ЧАД
    const MONTENEGRO = 499; // ЧЕРНОГОРИЯ
    const CZECH_REPUBLIC = 203; // ЧЕШСКАЯ РЕСПУБЛИКА
    const CHILE = 152; // ЧИЛИ
    const CHILE_EASTER_ISLAND = 903; // ЧИЛИ, ПАСХИ ОСТРОВ
    const SWITZERLAND = 756; // ШВЕЙЦАРИЯ
    const SWEDEN = 752; // ШВЕЦИЯ
    const SVALBARD_AND_JAN_MAYEN = 744; // ШПИЦБЕРГЕН И ЯН-МАЙЕН
    const SRI_LANKA = 144; // ШРИ ЛАНКА
    const ECUADOR = 218; // ЭКВАДОР
    const EQUATORIAL_GUINEA = 226; // ЭКВАТОРИАЛЬНАЯ ГВИНЕЯ
    const ALAND_ISLANDS = 248; // ЭЛАНДСКИЕ ОСТРОВА
    const ERITREA = 232; // ЭРИТРЕЯ
    const ESTONIA = 233; // ЭСТОНИЯ
    const ETHIOPIA = 231; // ЭФИОПИЯ
    const YUGOSLAVIA = 891; // ЮГОСЛАВИЯ²
    const SOUTH_GEORGIA_AND_THE_SOUTH_SANDWICH_ISL = 239; // ЮЖНАЯ ДЖОРДЖИЯ И ЮЖНЫЕ САНДВИЧЕВЫ ОСТРОВА
    const SOUTH_OSSETIA = 896; // Южная Осетия
    const SOUTH_AFRICA = 710; // ЮЖНО-АФРИКАНСКАЯ РЕСПУБЛИКА
    const SOUTH_SUDAN = 728; // ЮЖНЫЙ СУДАН
    const JAMAICA = 388; // ЯМАЙКА
    const JAPAN = 392; // ЯПОНИЯ

    /** @return string */
    public static function getType() {
        return 'MailDirect';
    }
    
    /** @return string */
    public static function getDescription() {
        return 'Коды стран пересылки почтовых отправлений';
    }
    
    protected $dic = array (
        self::ABKHAZIA => array ( 'name' => 'АБХАЗИЯ', 'translation' => 'Abkhazia', 'relatedAttributeType' => '' ),
        self::AUSTRALIA => array ( 'name' => 'АВСТРАЛИЯ', 'translation' => 'AUSTRALIA', 'relatedAttributeType' => '' ),
        self::AUSTRIA => array ( 'name' => 'АВСТРИЯ', 'translation' => 'AUSTRIA', 'relatedAttributeType' => '' ),
        self::AZERBAIJAN => array ( 'name' => 'АЗЕРБАЙДЖАН', 'translation' => 'AZERBAIJAN', 'relatedAttributeType' => '' ),
        self::ALBANIA => array ( 'name' => 'АЛБАНИЯ', 'translation' => 'ALBANIA', 'relatedAttributeType' => '' ),
        self::ALGERIA => array ( 'name' => 'АЛЖИР', 'translation' => 'ALGERIA', 'relatedAttributeType' => '' ),
        self::ANGUILLA => array ( 'name' => 'АНГИЛЬЯ', 'translation' => 'ANGUILLA', 'relatedAttributeType' => '' ),
        self::ANGOLA => array ( 'name' => 'АНГОЛА', 'translation' => 'ANGOLA', 'relatedAttributeType' => '' ),
        self::ANDORRA => array ( 'name' => 'АНДОРРА', 'translation' => 'ANDORRA', 'relatedAttributeType' => '' ),
        self::ANTARCTICA => array ( 'name' => 'АНТАРКТИКА', 'translation' => 'ANTARCTICA', 'relatedAttributeType' => '' ),
        self::ANTIGUA_AND_BARBUDA => array ( 'name' => 'АНТИГУА И БАРБУДА', 'translation' => 'ANTIGUA AND BARBUDA', 'relatedAttributeType' => '' ),
        self::ARGENTINA => array ( 'name' => 'АРГЕНТИНА', 'translation' => 'ARGENTINA', 'relatedAttributeType' => '' ),
        self::ARMENIA => array ( 'name' => 'АРМЕНИЯ', 'translation' => 'ARMENIA', 'relatedAttributeType' => '' ),
        self::ARUBA => array ( 'name' => 'АРУБА', 'translation' => 'ARUBA', 'relatedAttributeType' => '' ),
        self::AFGHANISTAN => array ( 'name' => 'АФГАНИСТАН', 'translation' => 'AFGHANISTAN', 'relatedAttributeType' => '' ),
        self::BAHAMAS => array ( 'name' => 'БАГАМЫ', 'translation' => 'BAHAMAS', 'relatedAttributeType' => '' ),
        self::BANGLADESH => array ( 'name' => 'БАНГЛАДЕШ', 'translation' => 'BANGLADESH', 'relatedAttributeType' => '' ),
        self::BARBADOS => array ( 'name' => 'БАРБАДОС', 'translation' => 'BARBADOS', 'relatedAttributeType' => '' ),
        self::BAHRAIN => array ( 'name' => 'БАХРЕЙН', 'translation' => 'BAHRAIN', 'relatedAttributeType' => '' ),
        self::BELIZE => array ( 'name' => 'БЕЛИЗ', 'translation' => 'BELIZE', 'relatedAttributeType' => '' ),
        self::BELARUS => array ( 'name' => 'БЕЛАРУСЬ', 'translation' => 'BELARUS', 'relatedAttributeType' => '' ),
        self::BELGIUM => array ( 'name' => 'БЕЛЬГИЯ', 'translation' => 'BELGIUM', 'relatedAttributeType' => '' ),
        self::BENIN => array ( 'name' => 'БЕНИН', 'translation' => 'BENIN', 'relatedAttributeType' => '' ),
        self::BERMUDA => array ( 'name' => 'БЕРМУДЫ', 'translation' => 'BERMUDA', 'relatedAttributeType' => '' ),
        self::BULGARIA => array ( 'name' => 'БОЛГАРИЯ', 'translation' => 'BULGARIA', 'relatedAttributeType' => '' ),
        self::BOLIVIA => array ( 'name' => 'БОЛИВИЯ', 'translation' => 'BOLIVIA', 'relatedAttributeType' => '' ),
        self::BONAIRE_SINT_EUSTATIUS_AND_SABA => array ( 'name' => 'БОНЭЙР, СИНТ-ЭСТАТИУС И САБА', 'translation' => 'BONAIRE, SINT EUSTATIUS AND SABA', 'relatedAttributeType' => '' ),
        self::BOSNIA_AND_HERZEGOVINA => array ( 'name' => 'БОСНИЯ И ГЕРЦЕГОВИНА', 'translation' => 'BOSNIA AND HERZEGOVINA', 'relatedAttributeType' => '' ),
        self::BOTSWANA => array ( 'name' => 'БОТСВАНА', 'translation' => 'BOTSWANA', 'relatedAttributeType' => '' ),
        self::BRAZIL => array ( 'name' => 'БРАЗИЛИЯ', 'translation' => 'BRAZIL', 'relatedAttributeType' => '' ),
        self::VIRGIN_ISLANDS_BRITISH => array ( 'name' => 'БРИТАНСКИЕ ВИРГИНСКИЕ ОСТРОВА', 'translation' => 'VIRGIN ISLANDS (BRITISH)', 'relatedAttributeType' => '' ),
        self::BRITISH_INDIAN_OCEAN_TERRITOTY => array ( 'name' => 'БРИТАНСКИЕ ТЕРРИТОРИИ В ИНДИЙСКОМ ОКЕАНЕ', 'translation' => 'BRITISH INDIAN OCEAN TERRITOTY', 'relatedAttributeType' => '' ),
        self::BRUNEI_DARUSSALAM => array ( 'name' => 'БРУНЕЙ', 'translation' => 'BRUNEI DARUSSALAM', 'relatedAttributeType' => '' ),
        self::BOUVET_ISLAND => array ( 'name' => 'БУВЕ ОСТРОВА', 'translation' => 'BOUVET ISLAND', 'relatedAttributeType' => '' ),
        self::BURKINA_FASO => array ( 'name' => 'БУРКИНА-ФАСО', 'translation' => 'BURKINA FASO', 'relatedAttributeType' => '' ),
        self::BURUNDI => array ( 'name' => 'БУРУНДИ', 'translation' => 'BURUNDI', 'relatedAttributeType' => '' ),
        self::BHUTAN => array ( 'name' => 'БУТАН', 'translation' => 'BHUTAN', 'relatedAttributeType' => '' ),
        self::VANUATU => array ( 'name' => 'ВАНУАТУ', 'translation' => 'VANUATU', 'relatedAttributeType' => '' ),
        self::VATICAN_CITY_STATE_HOLY_SEE => array ( 'name' => 'ВАТИКАН', 'translation' => 'VATICAN CITY STATE (HOLY SEE)', 'relatedAttributeType' => '' ),
        self::UNITED_KINDOM => array ( 'name' => 'ВЕЛИКОБРИТАНИЯ', 'translation' => 'UNITED KINDOM', 'relatedAttributeType' => '' ),
        self::HUNGARY => array ( 'name' => 'ВЕНГРИЯ', 'translation' => 'HUNGARY', 'relatedAttributeType' => '' ),
        self::VENEZUELA_BOLIVARIAN_REPUBLIC_OF => array ( 'name' => 'ВЕНЕСУЭЛА БОЛИВАРИАНСКАЯ РЕСПУБЛИКА', 'translation' => 'VENEZUELA, BOLIVARIAN REPUBLIC OF', 'relatedAttributeType' => '' ),
        self::VIRGIN_ISLANDS_U_S_ => array ( 'name' => 'ВИРГИНСКИЕ ОСТРОВА (США)', 'translation' => 'VIRGIN ISLANDS (U.S.)', 'relatedAttributeType' => '' ),
        self::ASCENSION_ISLAND => array ( 'name' => 'вознесения остров', 'translation' => 'ascension island', 'relatedAttributeType' => '' ),
        self::AMERICAN_SAMOA => array ( 'name' => 'ВОСТОЧНОЕ САМОА', 'translation' => 'AMERICAN SAMOA', 'relatedAttributeType' => '' ),
        self::VIET_NAM => array ( 'name' => 'ВЬЕТНАМ', 'translation' => 'VIET NAM', 'relatedAttributeType' => '' ),
        self::GABON => array ( 'name' => 'ГАБОН', 'translation' => 'GABON', 'relatedAttributeType' => '' ),
        self::HAITI => array ( 'name' => 'ГАИТИ', 'translation' => 'HAITI', 'relatedAttributeType' => '' ),
        self::GUYANA => array ( 'name' => 'ГАЙАНА', 'translation' => 'GUYANA', 'relatedAttributeType' => '' ),
        self::GAMBIA => array ( 'name' => 'ГАМБИЯ', 'translation' => 'GAMBIA', 'relatedAttributeType' => '' ),
        self::GHANA => array ( 'name' => 'ГАНА', 'translation' => 'GHANA', 'relatedAttributeType' => '' ),
        self::GUADELOUPE => array ( 'name' => 'ГВАДЕЛУПА', 'translation' => 'GUADELOUPE', 'relatedAttributeType' => '' ),
        self::GUATEMALA => array ( 'name' => 'ГВАТЕМАЛА', 'translation' => 'GUATEMALA', 'relatedAttributeType' => '' ),
        self::GUINEA => array ( 'name' => 'ГВИНЕЯ', 'translation' => 'GUINEA', 'relatedAttributeType' => '' ),
        self::GUINEA_BISSAU => array ( 'name' => 'ГВИНЕЯ-БИСАУ', 'translation' => 'GUINEA-BISSAU', 'relatedAttributeType' => '' ),
        self::GERMANY => array ( 'name' => 'ГЕРМАНИЯ', 'translation' => 'GERMANY', 'relatedAttributeType' => '' ),
        self::GUERNSEY => array ( 'name' => 'ГЕРНСИ', 'translation' => 'GUERNSEY', 'relatedAttributeType' => '' ),
        self::GIBRALTAR => array ( 'name' => 'ГИБРАЛТАР', 'translation' => 'GIBRALTAR', 'relatedAttributeType' => '' ),
        self::HONDURAS => array ( 'name' => 'ГОНДУРАС', 'translation' => 'HONDURAS', 'relatedAttributeType' => '' ),
        self::HONK_KONG => array ( 'name' => 'ГОНКОНГ', 'translation' => 'HONK KONG', 'relatedAttributeType' => '' ),
        self::GRENADA => array ( 'name' => 'ГРЕНАДА', 'translation' => 'GRENADA', 'relatedAttributeType' => '' ),
        self::GREENLAND => array ( 'name' => 'ГРЕНЛАНДИЯ', 'translation' => 'GREENLAND', 'relatedAttributeType' => '' ),
        self::GREECE => array ( 'name' => 'ГРЕЦИЯ', 'translation' => 'GREECE', 'relatedAttributeType' => '' ),
        self::GEORGIA => array ( 'name' => 'ГРУЗИЯ', 'translation' => 'GEORGIA', 'relatedAttributeType' => '' ),
        self::GUAM => array ( 'name' => 'ГУАМ', 'translation' => 'GUAM', 'relatedAttributeType' => '' ),
        self::DENMARK => array ( 'name' => 'ДАНИЯ', 'translation' => 'DENMARK', 'relatedAttributeType' => '' ),
        self::DEMOCRATIC_REPUBLIC_OF_THE_CONGO => array ( 'name' => 'ДЕМОКРАТИЧЕСКАЯ РЕСПУБЛИКА КОНГО', 'translation' => 'DEMOCRATIC REPUBLIC OF THE CONGO', 'relatedAttributeType' => '' ),
        self::JERSEY => array ( 'name' => 'ДЖЕРСИ', 'translation' => 'JERSEY', 'relatedAttributeType' => '' ),
        self::DJIBOUTI => array ( 'name' => 'ДЖИБУТИ', 'translation' => 'DJIBOUTI', 'relatedAttributeType' => '' ),
        self::DOMINICA => array ( 'name' => 'ДОМИНИКА', 'translation' => 'DOMINICA', 'relatedAttributeType' => '' ),
        self::DOMINICAN_REPUBLIC => array ( 'name' => 'ДОМИНИКАНСКАЯ РЕСПУБЛИКА', 'translation' => 'DOMINICAN REPUBLIC', 'relatedAttributeType' => '' ),
        self::EGYPT => array ( 'name' => 'ЕГИПЕТ', 'translation' => 'EGYPT', 'relatedAttributeType' => '' ),
        self::ZAMBIA => array ( 'name' => 'ЗАМБИЯ', 'translation' => 'ZAMBIA', 'relatedAttributeType' => '' ),
        self::WESTERN_SAHARA => array ( 'name' => 'ЗАПАДНАЯ САХАРА', 'translation' => 'WESTERN SAHARA', 'relatedAttributeType' => '' ),
        self::ZIMBABWE => array ( 'name' => 'ЗИМБАБВЕ', 'translation' => 'ZIMBABWE', 'relatedAttributeType' => '' ),
        self::ISRAEL => array ( 'name' => 'ИЗРАИЛЬ', 'translation' => 'ISRAEL', 'relatedAttributeType' => '' ),
        self::INDIA => array ( 'name' => 'ИНДИЯ', 'translation' => 'INDIA', 'relatedAttributeType' => '' ),
        self::INDONESIA => array ( 'name' => 'ИНДОНЕЗИЯ', 'translation' => 'INDONESIA', 'relatedAttributeType' => '' ),
        self::JORDAN => array ( 'name' => 'ИОРДАНИЯ', 'translation' => 'JORDAN', 'relatedAttributeType' => '' ),
        self::IRAQ => array ( 'name' => 'ИРАК', 'translation' => 'IRAQ', 'relatedAttributeType' => '' ),
        self::IRAN_ISLAMIC_REPUBLIC_OF => array ( 'name' => 'ИРАН', 'translation' => 'IRAN (ISLAMIC REPUBLIC OF)', 'relatedAttributeType' => '' ),
        self::IRELAND => array ( 'name' => 'ИРЛАНДИЯ', 'translation' => 'IRELAND', 'relatedAttributeType' => '' ),
        self::ICELAND => array ( 'name' => 'ИСЛАНДИЯ', 'translation' => 'ICELAND', 'relatedAttributeType' => '' ),
        self::SPAIN => array ( 'name' => 'ИСПАНИЯ', 'translation' => 'SPAIN', 'relatedAttributeType' => '' ),
        self::ITALY => array ( 'name' => 'ИТАЛИЯ', 'translation' => 'ITALY', 'relatedAttributeType' => '' ),
        self::YEMEN => array ( 'name' => 'ЙЕМЕН', 'translation' => 'YEMEN', 'relatedAttributeType' => '' ),
        self::CAPE_VERDE => array ( 'name' => 'КАБО-ВЕРДЕ', 'translation' => 'CAPE VERDE', 'relatedAttributeType' => '' ),
        self::KAZAKHSTAN => array ( 'name' => 'КАЗАХСТАН', 'translation' => 'KAZAKHSTAN', 'relatedAttributeType' => '' ),
        self::CAYMAN_ISLAND => array ( 'name' => 'КАЙМАНОВЫ ОСТРОВА', 'translation' => 'CAYMAN ISLAND', 'relatedAttributeType' => '' ),
        self::CAMBODIA => array ( 'name' => 'КАМБОДЖА', 'translation' => 'CAMBODIA', 'relatedAttributeType' => '' ),
        self::CAMEROON => array ( 'name' => 'КАМЕРУН', 'translation' => 'CAMEROON', 'relatedAttributeType' => '' ),
        self::CANADA => array ( 'name' => 'КАНАДА', 'translation' => 'CANADA', 'relatedAttributeType' => '' ),
        self::QATAR => array ( 'name' => 'КАТАР', 'translation' => 'QATAR', 'relatedAttributeType' => '' ),
        self::KENYA => array ( 'name' => 'КЕНИЯ', 'translation' => 'KENYA', 'relatedAttributeType' => '' ),
        self::CYPRUS => array ( 'name' => 'КИПР', 'translation' => 'CYPRUS', 'relatedAttributeType' => '' ),
        self::KYRGYZSTAN => array ( 'name' => 'КИРГИЗИЯ', 'translation' => 'KYRGYZSTAN', 'relatedAttributeType' => '' ),
        self::KIRIBATI => array ( 'name' => 'КИРИБАТИ', 'translation' => 'KIRIBATI', 'relatedAttributeType' => '' ),
        self::CHINA => array ( 'name' => 'КИТАЙ', 'translation' => 'CHINA', 'relatedAttributeType' => '' ),
        self::KOREA_DEMOCRATIC_PEOPLE_S_REPUBLIC_OF => array ( 'name' => 'КНДР', 'translation' => 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'relatedAttributeType' => '' ),
        self::COCOS_KEELING_ISLANDS => array ( 'name' => 'КОКОС ОСТРОВА', 'translation' => 'COCOS (KEELING) ISLANDS', 'relatedAttributeType' => '' ),
        self::COLOMBIA => array ( 'name' => 'КОЛУМБИЯ', 'translation' => 'COLOMBIA', 'relatedAttributeType' => '' ),
        self::COMOROS => array ( 'name' => 'КОМОРЫ', 'translation' => 'COMOROS', 'relatedAttributeType' => '' ),
        self::KOREA_REPUBLIC_OF => array ( 'name' => 'КОРЕЯ', 'translation' => 'KOREA, REPUBLIC OF', 'relatedAttributeType' => '' ),
        self::KOSOVO => array ( 'name' => 'КОСОВО', 'translation' => 'KOSOVO', 'relatedAttributeType' => '' ),
        self::COSTA_RICA => array ( 'name' => 'КОСТА-РИКА', 'translation' => 'COSTA RICA', 'relatedAttributeType' => '' ),
        self::COTE_D_IVOIRE => array ( 'name' => 'КОТ-Д\'ИВУАР', 'translation' => 'COTE D\'IVOIRE', 'relatedAttributeType' => '' ),
        self::CUBA => array ( 'name' => 'КУБА', 'translation' => 'CUBA', 'relatedAttributeType' => '' ),
        self::KUWAIT => array ( 'name' => 'КУВЕЙТ', 'translation' => 'KUWAIT', 'relatedAttributeType' => '' ),
        self::COOK_ISLANDS => array ( 'name' => 'КУКА ОСТРОВА', 'translation' => 'COOK ISLANDS', 'relatedAttributeType' => '' ),
        self::CURA__AO => array ( 'name' => 'КЮРАСАО', 'translation' => 'CURAÇAO', 'relatedAttributeType' => '' ),
        self::LAO_PEOPLE_S_DEMOCRATIC_REPUBLIC => array ( 'name' => 'ЛАОС', 'translation' => 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'relatedAttributeType' => '' ),
        self::LATVIA => array ( 'name' => 'ЛАТВИЯ', 'translation' => 'LATVIA', 'relatedAttributeType' => '' ),
        self::LESOTHO => array ( 'name' => 'ЛЕСОТО', 'translation' => 'LESOTHO', 'relatedAttributeType' => '' ),
        self::LIBERIA => array ( 'name' => 'ЛИБЕРИЯ', 'translation' => 'LIBERIA', 'relatedAttributeType' => '' ),
        self::LEBANON => array ( 'name' => 'ЛИВАН', 'translation' => 'LEBANON', 'relatedAttributeType' => '' ),
        self::LIBYAN => array ( 'name' => 'ЛИВИЯ', 'translation' => 'LIBYAN', 'relatedAttributeType' => '' ),
        self::LITHUANIA => array ( 'name' => 'ЛИТВА', 'translation' => 'LITHUANIA', 'relatedAttributeType' => '' ),
        self::LIECHTENSTEIN => array ( 'name' => 'ЛИХТЕНШТЕЙН', 'translation' => 'LIECHTENSTEIN', 'relatedAttributeType' => '' ),
        self::LUXEMBOURG => array ( 'name' => 'ЛЮКСЕМБУРГ', 'translation' => 'LUXEMBOURG', 'relatedAttributeType' => '' ),
        self::MAURITIUS => array ( 'name' => 'МАВРИКИЙ', 'translation' => 'MAURITIUS', 'relatedAttributeType' => '' ),
        self::MAURITANIA => array ( 'name' => 'МАВРИТАНИЯ', 'translation' => 'MAURITANIA', 'relatedAttributeType' => '' ),
        self::MADAGASCAR => array ( 'name' => 'МАДАГАСКАР', 'translation' => 'MADAGASCAR', 'relatedAttributeType' => '' ),
        self::MAYOTTE => array ( 'name' => 'МАЙОТТА', 'translation' => 'MAYOTTE', 'relatedAttributeType' => '' ),
        self::MACAU => array ( 'name' => 'МАКАО', 'translation' => 'MACAU', 'relatedAttributeType' => '' ),
        self::THE_FORMER_YUGOSLAV_REPUBLIC_OF_MACEDONI => array ( 'name' => 'МАКЕДОНИЯ', 'translation' => 'THE FORMER YUGOSLAV REPUBLIC OF MACEDONI', 'relatedAttributeType' => '' ),
        self::MALAWI => array ( 'name' => 'МАЛАВИ', 'translation' => 'MALAWI', 'relatedAttributeType' => '' ),
        self::MALAYSIA => array ( 'name' => 'МАЛАЙЗИЯ', 'translation' => 'MALAYSIA', 'relatedAttributeType' => '' ),
        self::MALI => array ( 'name' => 'МАЛИ', 'translation' => 'MALI', 'relatedAttributeType' => '' ),
        self::MALDIVES => array ( 'name' => 'МАЛЬДИВЫ', 'translation' => 'MALDIVES', 'relatedAttributeType' => '' ),
        self::UNITED_STATES_MINOR_OUTLYING_ISLANDS => array ( 'name' => 'МАЛЫЕ ТИХООКЕАНСКИЕ ОТДАЛЕННЫЕ ОСТРОВА СОЕДИНЕННЫХ ШТАТОВ', 'translation' => 'UNITED STATES MINOR OUTLYING ISLANDS', 'relatedAttributeType' => '' ),
        self::MALTA => array ( 'name' => 'МАЛЬТА', 'translation' => 'MALTA', 'relatedAttributeType' => '' ),
        self::MOROCCO => array ( 'name' => 'МАРОККО', 'translation' => 'MOROCCO', 'relatedAttributeType' => '' ),
        self::MARTINIQUE => array ( 'name' => 'МАРТИНИКА', 'translation' => 'MARTINIQUE', 'relatedAttributeType' => '' ),
        self::MARSHALL_ISLANDS => array ( 'name' => 'МАРШАЛЛОВЫ ОСТРОВА', 'translation' => 'MARSHALL ISLANDS', 'relatedAttributeType' => '' ),
        self::MEXICO => array ( 'name' => 'МЕКСИКА', 'translation' => 'MEXICO', 'relatedAttributeType' => '' ),
        self::MICRONESIA_FEDERATED_STATES_OF => array ( 'name' => 'МИКРОНЕЗИЯ', 'translation' => 'MICRONESIA (FEDERATED STATES OF)', 'relatedAttributeType' => '' ),
        self::MOZAMBIQUE => array ( 'name' => 'МОЗАМБИК', 'translation' => 'MOZAMBIQUE', 'relatedAttributeType' => '' ),
        self::MOLDOVA_REPUBLIC_OF => array ( 'name' => 'МОЛДОВА, РЕСПУБЛИКА', 'translation' => 'MOLDOVA, REPUBLIC OF', 'relatedAttributeType' => '' ),
        self::MONACO => array ( 'name' => 'МОНАКО', 'translation' => 'MONACO', 'relatedAttributeType' => '' ),
        self::MONGOLIA => array ( 'name' => 'МОНГОЛИЯ', 'translation' => 'MONGOLIA', 'relatedAttributeType' => '' ),
        self::MONTSERRAT => array ( 'name' => 'МОНТСЕРРАТ', 'translation' => 'MONTSERRAT', 'relatedAttributeType' => '' ),
        self::MYANMAR => array ( 'name' => 'МЬЯНМА', 'translation' => 'MYANMAR', 'relatedAttributeType' => '' ),
        self::ISLE_OF_MAN => array ( 'name' => 'МЭН ОСТРОВ', 'translation' => 'isle of man', 'relatedAttributeType' => '' ),
        self::NAMIBIA => array ( 'name' => 'НАМИБИЯ', 'translation' => 'NAMIBIA', 'relatedAttributeType' => '' ),
        self::NAURU => array ( 'name' => 'НАУРУ', 'translation' => 'NAURU', 'relatedAttributeType' => '' ),
        self::NEPAL => array ( 'name' => 'НЕПАЛ', 'translation' => 'NEPAL', 'relatedAttributeType' => '' ),
        self::NIGER => array ( 'name' => 'НИГЕР', 'translation' => 'NIGER', 'relatedAttributeType' => '' ),
        self::NIGERIA => array ( 'name' => 'НИГЕРИЯ', 'translation' => 'NIGERIA', 'relatedAttributeType' => '' ),
        self::NETHERLANDS_ANTILLES => array ( 'name' => 'НИДЕРЛАНДСКИЕ АНТИЛЫ', 'translation' => 'NETHERLANDS ANTILLES', 'relatedAttributeType' => '' ),
        self::NETHERLANDS => array ( 'name' => 'НИДЕРЛАНДЫ', 'translation' => 'NETHERLANDS', 'relatedAttributeType' => '' ),
        self::NICARAGUA => array ( 'name' => 'НИКАРАГУА', 'translation' => 'NICARAGUA', 'relatedAttributeType' => '' ),
        self::NIUE => array ( 'name' => 'НИУЭ', 'translation' => 'NIUE', 'relatedAttributeType' => '' ),
        self::NEW_ZEALAND => array ( 'name' => 'НОВАЯ ЗЕЛАНДИЯ', 'translation' => 'NEW ZEALAND', 'relatedAttributeType' => '' ),
        self::NEW_CALEDONIA => array ( 'name' => 'НОВАЯ КАЛЕДОНИЯ', 'translation' => 'NEW CALEDONIA', 'relatedAttributeType' => '' ),
        self::NORWAY => array ( 'name' => 'НОРВЕГИЯ', 'translation' => 'NORWAY', 'relatedAttributeType' => '' ),
        self::NORFOLK_ISLAND => array ( 'name' => 'НОРФОЛК ОСТРОВ', 'translation' => 'NORFOLK ISLAND', 'relatedAttributeType' => '' ),
        self::UNITED_ARAB_EMIRATES => array ( 'name' => 'ОБЪЕДИНЕННЫЕ АРАБСКИЕ ЭМИРАТЫ', 'translation' => 'UNITED ARAB EMIRATES', 'relatedAttributeType' => '' ),
        self::OMAN => array ( 'name' => 'ОМАН', 'translation' => 'OMAN', 'relatedAttributeType' => '' ),
        self::PAKISTAN => array ( 'name' => 'ПАКИСТАН', 'translation' => 'PAKISTAN', 'relatedAttributeType' => '' ),
        self::PALAU => array ( 'name' => 'ПАЛАУ', 'translation' => 'PALAU', 'relatedAttributeType' => '' ),
        self::PALESTINIAN_TERRITORY_OCCUPIED => array ( 'name' => 'ПАЛЕСТИНА', 'translation' => 'palestinian territory, occupied', 'relatedAttributeType' => '' ),
        self::PANAMA => array ( 'name' => 'ПАНАМА', 'translation' => 'PANAMA', 'relatedAttributeType' => '' ),
        self::PAPUA_NEW_GUINEA => array ( 'name' => 'ПАПУА НОВАЯ ГВИНЕЯ', 'translation' => 'PAPUA NEW GUINEA', 'relatedAttributeType' => '' ),
        self::PARAGUAY => array ( 'name' => 'ПАРАГВАЙ', 'translation' => 'PARAGUAY', 'relatedAttributeType' => '' ),
        self::PERU => array ( 'name' => 'ПЕРУ', 'translation' => 'PERU', 'relatedAttributeType' => '' ),
        self::PITCAIRN => array ( 'name' => 'ПИТКЕРН', 'translation' => 'PITCAIRN', 'relatedAttributeType' => '' ),
        self::POLAND => array ( 'name' => 'ПОЛЬША', 'translation' => 'POLAND', 'relatedAttributeType' => '' ),
        self::PORTUGAL => array ( 'name' => 'ПОРТУГАЛИЯ', 'translation' => 'PORTUGAL', 'relatedAttributeType' => '' ),
        self::PUERTO_RICO => array ( 'name' => 'ПУЭРТО-РИКО', 'translation' => 'PUERTO RICO', 'relatedAttributeType' => '' ),
        self::CONGO_REPUBLIC => array ( 'name' => 'РЕСПУБЛИКА КОНГО', 'translation' => 'CONGO REPUBLIC', 'relatedAttributeType' => '' ),
        self::R__UNION => array ( 'name' => 'РЕЮНЬОН', 'translation' => 'RÉUNION', 'relatedAttributeType' => '' ),
        self::CHRISTMAS_ISLAND => array ( 'name' => 'РОЖДЕСТВА ОСТРОВ', 'translation' => 'CHRISTMAS ISLAND', 'relatedAttributeType' => '' ),
        self::RUSSIAN_FEDERATION => array ( 'name' => 'РОССИЙСКАЯ ФЕДЕРАЦИЯ', 'translation' => 'RUSSIAN FEDERATION', 'relatedAttributeType' => '' ),
        self::RWANDA => array ( 'name' => 'РУАНДА', 'translation' => 'RWANDA', 'relatedAttributeType' => '' ),
        self::ROMANIA => array ( 'name' => 'РУМЫНИЯ', 'translation' => 'ROMANIA', 'relatedAttributeType' => '' ),
        self::EL_SALVADOR => array ( 'name' => 'САЛЬВАДОР', 'translation' => 'EL SALVADOR', 'relatedAttributeType' => '' ),
        self::SAMOA => array ( 'name' => 'САМОА', 'translation' => 'SAMOA', 'relatedAttributeType' => '' ),
        self::SAN_MARINO => array ( 'name' => 'САН-МАРИНО', 'translation' => 'SAN MARINO', 'relatedAttributeType' => '' ),
        self::SAO_TOME_AND_PRINCIPE => array ( 'name' => 'САН-ТОМЕ И ПРИНСИПИ', 'translation' => 'SAO TOME AND PRINCIPE', 'relatedAttributeType' => '' ),
        self::SAUDI_ARABIA => array ( 'name' => 'САУДОВСКАЯ АРАВИЯ', 'translation' => 'SAUDI ARABIA', 'relatedAttributeType' => '' ),
        self::SWAZILAND => array ( 'name' => 'СВАЗИЛЕНД', 'translation' => 'SWAZILAND', 'relatedAttributeType' => '' ),
        self::SAINT_HELENA_ => array ( 'name' => 'СВЯТАЯ ЕЛЕНА, ', 'translation' => 'SAINT HELENA, ', 'relatedAttributeType' => '' ),
        self::NORTHERN_MARIANA_ISLAND => array ( 'name' => 'СЕВЕРНЫЕ МАРИАНСКИЕ ОСТРОВА', 'translation' => 'NORTHERN MARIANA ISLAND', 'relatedAttributeType' => '' ),
        self::SEYCHELLES => array ( 'name' => 'СЕЙШЕЛЫ', 'translation' => 'SEYCHELLES', 'relatedAttributeType' => '' ),
        self::SAINT_BARTHELEMY => array ( 'name' => 'СЕН-БАРТЕЛЕМИ', 'translation' => 'SAINT BARTHELEMY', 'relatedAttributeType' => '' ),
        self::SENEGAL => array ( 'name' => 'СЕНЕГАЛ', 'translation' => 'SENEGAL', 'relatedAttributeType' => '' ),
        self::SINT_MAARTEN_DUTCH_PART => array ( 'name' => 'СЕНТ-МАРТЕН (НИДЕРЛАНДСКАЯ ЧАСТЬ)', 'translation' => 'SINT MAARTEN (DUTCH PART)', 'relatedAttributeType' => '' ),
        self::SAINT_MARTIN_FRENCH_PART => array ( 'name' => 'СЕН-МАРТЕН (ФРАНЦУЗСКАЯ ЧАСТЬ)', 'translation' => 'SAINT MARTIN (FRENCH PART)', 'relatedAttributeType' => '' ),
        self::SAINT_PIERRE_AND_MIQUELON => array ( 'name' => 'СЕН-ПЬЕР И МИКЕЛОН', 'translation' => 'SAINT PIERRE AND MIQUELON', 'relatedAttributeType' => '' ),
        self::SAINT_VINCENT_AND_THE_GRENADINES => array ( 'name' => 'СЕНТ-ВИНСЕНТ И ГРЕНАДИНЫ', 'translation' => 'SAINT VINCENT AND THE GRENADINES', 'relatedAttributeType' => '' ),
        self::SAINT_KITTS_AND_NEVIS => array ( 'name' => 'СЕНТ-КИТТС И НЕВИС', 'translation' => 'SAINT KITTS AND NEVIS', 'relatedAttributeType' => '' ),
        self::SAINT_LUCIA => array ( 'name' => 'СЕНТ-ЛЮСИЯ', 'translation' => 'SAINT LUCIA', 'relatedAttributeType' => '' ),
        self::SERBIA_ => array ( 'name' => 'СЕРБИЯ', 'translation' => 'SERBIA ', 'relatedAttributeType' => '' ),
        self::SINGAPORE => array ( 'name' => 'СИНГАПУР', 'translation' => 'SINGAPORE', 'relatedAttributeType' => '' ),
        self::SYRIAN_ARAB_REPUBLIC => array ( 'name' => 'СИРИЙСКАЯ АРАБСКАЯ РЕСПУБЛИКА', 'translation' => 'SYRIAN ARAB REPUBLIC', 'relatedAttributeType' => '' ),
        self::SLOVAKIA => array ( 'name' => 'СЛОВАКИЯ', 'translation' => 'SLOVAKIA', 'relatedAttributeType' => '' ),
        self::SLOVENIA => array ( 'name' => 'СЛОВЕНИЯ', 'translation' => 'SLOVENIA', 'relatedAttributeType' => '' ),
        self::UNITED_STATES => array ( 'name' => 'СОЕДИНЕННЫЕ ШТАТЫ АМЕРИКИ', 'translation' => 'UNITED STATES', 'relatedAttributeType' => '' ),
        self::SOLOMON_ISLANDS => array ( 'name' => 'СОЛОМОНОВЫ ОСТРОВА', 'translation' => 'SOLOMON ISLANDS', 'relatedAttributeType' => '' ),
        self::SOMALIA => array ( 'name' => 'СОМАЛИ', 'translation' => 'SOMALIA', 'relatedAttributeType' => '' ),
        self::NOT_DETERMINED => array ( 'name' => 'Страна не определена', 'translation' => 'NOT DETERMINED', 'relatedAttributeType' => '' ),
        self::SUDAN => array ( 'name' => 'СУДАН', 'translation' => 'SUDAN', 'relatedAttributeType' => '' ),
        self::SUDAN_729 => array ( 'name' => 'СУДАН', 'translation' => 'SUDAN', 'relatedAttributeType' => '' ),
        self::SURINAME => array ( 'name' => 'СУРИНАМ', 'translation' => 'SURINAME', 'relatedAttributeType' => '' ),
        self::SIERRA_LEONE => array ( 'name' => 'СЬЕРРА-ЛЕОНЕ', 'translation' => 'SIERRA LEONE', 'relatedAttributeType' => '' ),
        self::TAJIKISTAN => array ( 'name' => 'ТАДЖИКИСТАН', 'translation' => 'TAJIKISTAN', 'relatedAttributeType' => '' ),
        self::THAILAND => array ( 'name' => 'ТАИЛАНД', 'translation' => 'THAILAND', 'relatedAttributeType' => '' ),
        self::TAIWAN_PROVINCE_OF_CHINA => array ( 'name' => 'ТАЙВАНЬ', 'translation' => 'TAIWAN, PROVINCE OF CHINA', 'relatedAttributeType' => '' ),
        self::TANZANIA => array ( 'name' => 'ТАНЗАНИЯ', 'translation' => 'TANZANIA', 'relatedAttributeType' => '' ),
        self::TURKS_AND_CAICOS_ISLANDS => array ( 'name' => 'ТЕРКС И КАЙКОС ОСТРОВА', 'translation' => 'TURKS AND CAICOS ISLANDS', 'relatedAttributeType' => '' ),
        self::TIMOR_LESTE => array ( 'name' => 'ТИМОР-ЛЕСТЕ', 'translation' => 'TIMOR-LESTE', 'relatedAttributeType' => '' ),
        self::TOGO => array ( 'name' => 'ТОГО', 'translation' => 'TOGO', 'relatedAttributeType' => '' ),
        self::TOKELAU => array ( 'name' => 'ТОКЕЛАУ', 'translation' => 'TOKELAU', 'relatedAttributeType' => '' ),
        self::TONGA => array ( 'name' => 'ТОНГА', 'translation' => 'TONGA', 'relatedAttributeType' => '' ),
        self::TRINIDAD_AND_TOBAGO => array ( 'name' => 'ТРИНИДАД И ТОБАГО', 'translation' => 'TRINIDAD AND TOBAGO', 'relatedAttributeType' => '' ),
        self::TUVALU => array ( 'name' => 'ТУВАЛУ', 'translation' => 'TUVALU', 'relatedAttributeType' => '' ),
        self::TUNISIA => array ( 'name' => 'ТУНИС', 'translation' => 'TUNISIA', 'relatedAttributeType' => '' ),
        self::TURKMENISTAN => array ( 'name' => 'ТУРКМЕНИЯ', 'translation' => 'TURKMENISTAN', 'relatedAttributeType' => '' ),
        self::TURKEY => array ( 'name' => 'ТУРЦИЯ', 'translation' => 'TURKEY', 'relatedAttributeType' => '' ),
        self::UGANDA => array ( 'name' => 'УГАНДА', 'translation' => 'UGANDA', 'relatedAttributeType' => '' ),
        self::UZBEKISTAN => array ( 'name' => 'УЗБЕКИСТАН', 'translation' => 'UZBEKISTAN', 'relatedAttributeType' => '' ),
        self::UKRAINE => array ( 'name' => 'УКРАИНА', 'translation' => 'UKRAINE', 'relatedAttributeType' => '' ),
        self::WALLS_AND_FUTUNA_ISLANDS => array ( 'name' => 'УОЛЛEС И ФУТУНА ОСТРОВА', 'translation' => 'WALLS AND FUTUNA ISLANDS', 'relatedAttributeType' => '' ),
        self::URUGUAY => array ( 'name' => 'УРУГВАЙ', 'translation' => 'URUGUAY', 'relatedAttributeType' => '' ),
        self::FAROE_ISLANDS => array ( 'name' => 'ФАРЕРСКИЕ ОСТРОВА', 'translation' => 'FAROE ISLANDS', 'relatedAttributeType' => '' ),
        self::FIJI => array ( 'name' => 'ФИДЖИ', 'translation' => 'FIJI', 'relatedAttributeType' => '' ),
        self::PHILIPPINES => array ( 'name' => 'ФИЛИППИНЫ', 'translation' => 'PHILIPPINES', 'relatedAttributeType' => '' ),
        self::FINLAND => array ( 'name' => 'ФИНЛЯНДИЯ', 'translation' => 'FINLAND', 'relatedAttributeType' => '' ),
        self::FALKLAND_ISLANDS_MALVINAS => array ( 'name' => 'ФОЛКЛЕНДСКИЕ (МАЛЬВИНСКИЕ) ОСТРОВА', 'translation' => 'FALKLAND ISLANDS (MALVINAS)', 'relatedAttributeType' => '' ),
        self::FRANCE => array ( 'name' => 'ФРАНЦИЯ', 'translation' => 'FRANCE', 'relatedAttributeType' => '' ),
        self::FRANCE_METROPOLITAN => array ( 'name' => 'ФРАНЦИЯ, МЕТРОПОЛИЯ', 'translation' => 'FRANCE, METROPOLITAN', 'relatedAttributeType' => '' ),
        self::FRENCH_GUIANA => array ( 'name' => 'ФРАНЦУЗСКАЯ ГВИАНА', 'translation' => 'FRENCH GUIANA', 'relatedAttributeType' => '' ),
        self::FRENCH_POLYNESIA => array ( 'name' => 'ФРАНЦУЗСКАЯ ПОЛИНЕЗИЯ', 'translation' => 'FRENCH POLYNESIA', 'relatedAttributeType' => '' ),
        self::FRENCH_SOUTHERN_TERRITORIES => array ( 'name' => 'ФРАНЦУЗСКИЕ ЮЖНЫЕ ТЕРРИТОРИИ', 'translation' => 'FRENCH SOUTHERN TERRITORIES', 'relatedAttributeType' => '' ),
        self::HEARD_ISLAND_AND_MCDONALD_ISLAND => array ( 'name' => 'ХЕРД И МАКДОНАЛЬД ОСТРОВА', 'translation' => 'HEARD ISLAND AND MCDONALD ISLAND', 'relatedAttributeType' => '' ),
        self::CROATIA => array ( 'name' => 'ХОРВАТИЯ', 'translation' => 'CROATIA', 'relatedAttributeType' => '' ),
        self::CENTRAL_AFRICAN_REPUBLIC => array ( 'name' => 'ЦЕНТРАЛЬНО-АФРИКАНСКАЯ РЕСПУБЛИКА', 'translation' => 'CENTRAL AFRICAN REPUBLIC', 'relatedAttributeType' => '' ),
        self::CHAD => array ( 'name' => 'ЧАД', 'translation' => 'CHAD', 'relatedAttributeType' => '' ),
        self::MONTENEGRO => array ( 'name' => 'ЧЕРНОГОРИЯ', 'translation' => 'MONTENEGRO', 'relatedAttributeType' => '' ),
        self::CZECH_REPUBLIC => array ( 'name' => 'ЧЕШСКАЯ РЕСПУБЛИКА', 'translation' => 'CZECH REPUBLIC', 'relatedAttributeType' => '' ),
        self::CHILE => array ( 'name' => 'ЧИЛИ', 'translation' => 'CHILE', 'relatedAttributeType' => '' ),
        self::CHILE_EASTER_ISLAND => array ( 'name' => 'ЧИЛИ, ПАСХИ ОСТРОВ', 'translation' => 'CHILE, EASTER ISLAND', 'relatedAttributeType' => '' ),
        self::SWITZERLAND => array ( 'name' => 'ШВЕЙЦАРИЯ', 'translation' => 'SWITZERLAND', 'relatedAttributeType' => '' ),
        self::SWEDEN => array ( 'name' => 'ШВЕЦИЯ', 'translation' => 'SWEDEN', 'relatedAttributeType' => '' ),
        self::SVALBARD_AND_JAN_MAYEN => array ( 'name' => 'ШПИЦБЕРГЕН И ЯН-МАЙЕН', 'translation' => 'SVALBARD AND JAN MAYEN', 'relatedAttributeType' => '' ),
        self::SRI_LANKA => array ( 'name' => 'ШРИ ЛАНКА', 'translation' => 'SRI LANKA', 'relatedAttributeType' => '' ),
        self::ECUADOR => array ( 'name' => 'ЭКВАДОР', 'translation' => 'ECUADOR', 'relatedAttributeType' => '' ),
        self::EQUATORIAL_GUINEA => array ( 'name' => 'ЭКВАТОРИАЛЬНАЯ ГВИНЕЯ', 'translation' => 'EQUATORIAL GUINEA', 'relatedAttributeType' => '' ),
        self::ALAND_ISLANDS => array ( 'name' => 'ЭЛАНДСКИЕ ОСТРОВА', 'translation' => 'ALAND ISLANDS', 'relatedAttributeType' => '' ),
        self::ERITREA => array ( 'name' => 'ЭРИТРЕЯ', 'translation' => 'ERITREA', 'relatedAttributeType' => '' ),
        self::ESTONIA => array ( 'name' => 'ЭСТОНИЯ', 'translation' => 'ESTONIA', 'relatedAttributeType' => '' ),
        self::ETHIOPIA => array ( 'name' => 'ЭФИОПИЯ', 'translation' => 'ETHIOPIA', 'relatedAttributeType' => '' ),
        self::YUGOSLAVIA => array ( 'name' => 'ЮГОСЛАВИЯ²', 'translation' => 'YUGOSLAVIA', 'relatedAttributeType' => '' ),
        self::SOUTH_GEORGIA_AND_THE_SOUTH_SANDWICH_ISL => array ( 'name' => 'ЮЖНАЯ ДЖОРДЖИЯ И ЮЖНЫЕ САНДВИЧЕВЫ ОСТРОВА', 'translation' => 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISL', 'relatedAttributeType' => '' ),
        self::SOUTH_OSSETIA => array ( 'name' => 'Южная Осетия', 'translation' => 'South Ossetia', 'relatedAttributeType' => '' ),
        self::SOUTH_AFRICA => array ( 'name' => 'ЮЖНО-АФРИКАНСКАЯ РЕСПУБЛИКА', 'translation' => 'SOUTH AFRICA', 'relatedAttributeType' => '' ),
        self::SOUTH_SUDAN => array ( 'name' => 'ЮЖНЫЙ СУДАН', 'translation' => 'SOUTH SUDAN', 'relatedAttributeType' => '' ),
        self::JAMAICA => array ( 'name' => 'ЯМАЙКА', 'translation' => 'JAMAICA', 'relatedAttributeType' => '' ),
        self::JAPAN => array ( 'name' => 'ЯПОНИЯ', 'translation' => 'JAPAN', 'relatedAttributeType' => '' ),
    );
}
