<?php

include "vendor/autoload.php";

$data = json_decode(file_get_contents('schema.json'));
dump($data);

dump($data->definitions->CardSchema);
dump($data->definitions->PageSchema);

$list = [];
foreach ($data->definitions as $key => $value) {
    if (($value->type ?? '') == 'object') {
        $list[] = [
            'key'   => $key,
            'value' => $value
        ];
    }
}

$list2=[];
foreach ($list as $item) {
  $list2[] = new \AmisPhp\Build($item['value'],$item['key']);
}

foreach ($list2 as $item2){
    $item2->render();;
}
dump($list,$list2);
