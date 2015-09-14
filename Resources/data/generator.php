<?php

$attributesFile = __DIR__."/attributes.csv";

$fh = fopen($attributesFile, "r");

$attributes = [];
$currentAttribute = null;
$currentAttributeDescription = "";
$currentAttributeType = "";

while (($csvObject = fgetcsv($fh, 1000, "\t")) !== false) {
    $name = $csvObject[0];
    $code = $csvObject[1];
    $translate = $csvObject[2];
    $constant = $csvObject[3];
    $relatedAttributeType = $csvObject[4];
    
    if (empty($name)) {
        continue;
    }
    
    if (empty($code) && empty($translate) && empty($constant) && empty($code) && empty($relatedAttributeType)) {
        $currentAttributeDescription = $name;
        $csvObject = fgetcsv($fh, 1000, "\t");
        $currentAttributeType = $csvObject[0];
        
        $currentAttribute = [
            "type" => $currentAttributeType,

            "description" => $currentAttributeDescription,
            "values" => [],
        ];
        $attributes[$currentAttributeType] = $currentAttribute;
        
        $csvObject = fgetcsv($fh, 1000, "\t");
        
        if ($currentAttributeType == "MailDirect") {
            break;
        }
        continue;
    }
    
    $attributes[$currentAttributeType]["values"][] = [
        "name" => $name,
        "code" => $code,
        "translate" => $translate,
        "constant" => $constant,
        "relatedAttributeType" => $relatedAttributeType,
    ];
}

while (($csvObject = fgetcsv($fh, 1000, "\t")) !== false) {
    $name_ru = $csvObject[0];
    $name_en = $csvObject[1];
    $name_fr = $csvObject[2];
    $alpha2 = $csvObject[3];
    $alpha3 = $csvObject[4];
    $code = $csvObject[5];
    
    if("" === trim($code)) {
        continue;
    }
    
    $attributes[$currentAttributeType]["values"][] = [
        "name" => $name_ru,
        "code" => $code,
        "translate" => $name_en ?: $name_fr,
        "constant" => strtoupper(preg_replace("/[^A-Za-z]/", preg_replace("/[(),]/", $name_en, ""), "_")),
        "relatedAttributeType" => "",
    ];
}

// file_put_contents("attributes.json", json_encode($attributes, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE ));

foreach ($attributes as $attribute) {
    $file = __DIR__."/../../Model/Rtm02Parameter/".$attribute["type"].".php";
    
    ob_start();
    
    echo "<?php

namespace a3mg\RussianPostBundle\Model\Rtm02Parameter;

/**
 * ". $attribute["description"] ."
 *
 * Class ". $attribute["type"] ."
 * @package a3mg\RussianPostBundle\Model\Rtm02Parameter
 */
class ". $attribute["type"] ." extends AbstractRtm02Parameter
{
";

    foreach ($attribute['values'] as $value) {
        echo "    const ". $value['constant'] ." = ". $value['code'] ."; // ". $value['name'] ."\n";
    }

    echo "
    /** @return string */
    public static function getType() {
        return '". $attribute['type'] ."';
    }
    
    /** @return string */
    public static function getDescription() {
        return '". $attribute['description'] ."';
    }
    
    protected \$dic = array (\n";

    foreach ($attribute['values'] as $value) {
        echo "        self::". $value['constant'] ." => array ( "
        . "'name' => '". $value['name'] ."', "
        . "'translation' => '". $value['translate'] ."', "
        . "'relatedAttributeType' => '". $value['relatedAttributeType'] ."' "
        ."),\n";
    }

    echo"    );
}
";
    
    $contents = ob_get_contents();
    ob_end_clean();
    file_put_contents($file, $contents);
}
