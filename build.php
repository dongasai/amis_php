<?php

$json = file_get_contents('https://aisuda.bce.baidu.com/amis/schema.json');

file_put_contents('schema.json',$json);