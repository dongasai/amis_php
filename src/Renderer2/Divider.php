<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Divider 分割线渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/divider
 *
 * @method lineStyle(string $v)  
 * @method direction(string $v)  
 * @method color(string $v)  
 * @method rotate(int $v)  
 * @method title( $v)  
 * @method titleClassName(string $v)  
 * @method titlePosition(string $v)  

 */
class Divider extends BaseSchema
{
    protected string $type = 'divider';
}
