<?php



include "vendor/autoload.php";

$data = json_decode(file_get_contents('schema.13.json'));

$list = [];
$nList= [];
foreach ($data->definitions as $key => $value) {
    if (($value->allOf ?? '') == 'object' || ($value->allOf ?? '') ) {
        $nList[] =$key;
        $list[$key] = [
            'key'   => $key,
            'value' => $value
        ];
    }
}

dump($nList);
foreach ($list as $item) {
    new \AmisPhp\Build($item['value'],$item['key']);
}
$knames= array_keys(\AmisPhp\Build::$list);
sort($knames);
dump($knames);
foreach (\AmisPhp\Build::$list as $item2){
    $item2->render(false);;
}
foreach (\AmisPhp\Build::$list as $item2){
    $item2->render();;
}
//dump(\AmisPhp\Build::$list['Page']);


dump('OK');