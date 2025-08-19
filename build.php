<?php

// 清空 src/Renderer2 目录
$renderer2Dir = __DIR__ . '/src/Renderer2';
if (is_dir($renderer2Dir)) {
    $files = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($renderer2Dir, RecursiveDirectoryIterator::SKIP_DOTS),
        RecursiveIteratorIterator::CHILD_FIRST
    );
    
    foreach ($files as $file) {
        if ($file->isDir()) {
            rmdir($file->getRealPath());
        } else {
            unlink($file->getRealPath());
        }
    }
} else {
    mkdir($renderer2Dir, 0777, true);
}

include "vendor/autoload.php";

$data = json_decode(file_get_contents('schema.json'));

$list = [];
$nList= [];
foreach ($data->definitions as $key => $value) {
    // 修正条件判断，正确处理 allOf 数组
    if (!empty($value->allOf) && is_array($value->allOf)) {
        $nList[] =$key;
        $list[$key] = [
            'key'   => $key,
            'value' => $value
        ];
    }
}

foreach ($list as $item) {
    new \AmisPhp\Build($item['value'],$item['key']);
}

foreach (\AmisPhp\Build::$list as $item2){
    $item2->render(false);;
}
foreach (\AmisPhp\Build::$list as $item2){
    $item2->render();;
}

dump('OK');