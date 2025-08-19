<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * The Step class.
 *
 * @method title( $v) 标题 
 * @method subTitle( $v) 子标题 
 * @method icon(string $v) 图标 
 * @method value(string|int $v)  
 * @method description( $v) 描述 

 */
class Step extends BaseSchema
{
    protected string $type = 'step';
}
