<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Wrapper 容器渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/wrapper
 *
 * @method body( $v) 内容 
 * @method size(string $v)  
 * @method wrap(boolean $v)  

 */
class Wrapper extends BaseSchema
{
    protected string $type = 'wrapper';
}
