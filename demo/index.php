<?php

include dirname(__DIR__)."/vendor/autoload.php";

$page = new \AmisPhp\Renderer2\Page();
$page->title('表单页面');
$from = new \AmisPhp\Renderer2\Form();
$text = new \AmisPhp\Renderer2\Input\InputNumber();
$from->controls([

                ]);
$page->body($from);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="/jssdk/sdk.css" />
    <link rel="stylesheet" href="/jssdk/helper.css" />
</head>
<body>
{
type: 'page',
title: '表单页面',
body: {
type: 'form',
mode: 'horizontal',
api: '/saveForm',
controls: [
{
label: 'Name',
type: 'text',
name: 'name'
},
{
label: 'Email',
type: 'email',
name: 'email'
}
]
}
}
<div id="root" class="app-wrapper"></div>
<script src="/jssdk/sdk.js"></script>
<script type="text/javascript">
    (function () {
        let amis = amisRequire('amis/embed');
        // 通过替换下面这个配置来生成不同页面
        let amisJSON = '<?php
            ?>';
        let amisScoped = amis.embed('#root', amisJSON);
    })();
</script>
</body>
</html>
