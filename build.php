<?php



include "vendor/autoload.php";

$data = json_decode(file_get_contents('schema.json'));

$list = [];
foreach ($data->definitions as $key => $value) {
    if (($value->type ?? '') == 'object') {
        $list[] = [
            'key'   => $key,
            'value' => $value
        ];
    }
}


foreach ($list as $item) {
    new \AmisPhp\Build($item['value'],$item['key']);
}
foreach (\AmisPhp\Build::$list as $item2){
    $item2->render();;
}
dump(\AmisPhp\Build::$list);
