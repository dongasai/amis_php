<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * 操作栏渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/operation
 *
 * @method placeholder(string $v) 占位符 
 * @method buttons(array $v)  

 */
class Operation extends BaseSchema
{
    protected string $type = 'operation';
}
