<?php

$json = file_get_contents('https://github.com/baidu/amis/releases/download/6.8.0/schema.json');

file_put_contents('schema.json',$json);