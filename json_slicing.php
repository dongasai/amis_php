<?php



include "vendor/autoload.php";

$data = json_decode(file_get_contents('schema.json'));

$list = [];
foreach ($data->definitions as $key => $value) {
     if (($value->allOf ?? '') == 'object' || ($value->allOf ?? '') ) {
        $list[] = [
            'key'   => $key,
            'value' => $value
        ];
    }
}


foreach ($list as $item){
//    dd($item);
    $json = json_encode($item['value'],JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
    file_put_contents(__DIR__.'/json/'.$item['key'].'.json',$json);
}


