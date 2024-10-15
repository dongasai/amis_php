<?php

$json = file_get_contents('https://github.com/baidu/amis/releases/download/6.8.0/jssdk.tar.gz');

file_put_contents('jssdk.tar.gz',$json);