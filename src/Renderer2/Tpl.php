<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * tpl 渲染器
 *
 * @method tpl( $v)  
 * @method html( $v)  
 * @method text( $v)  
 * @method raw(string $v)  
 * @method inline(boolean $v) 是否内联显示？ 
 * @method wrapperComponent( $v) 标签类型 
 * @method badge( $v) 角标 
 * @method testidBuilder( $v)  

 */
class Tpl extends BaseSchema
{
    protected string $type = 'tpl';
}
