<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * The Sparkline class.
 *
 * @method name(string $v) 关联数据变量。 
 * @method width(int $v) 宽度 
 * @method height(int $v) 高度 
 * @method clickAction( $v) 点击行为 
 * @method placeholder(string $v) 空数据时显示的内容 
 * @method value(array $v)  

 */
class Sparkline extends BaseSchema
{
    protected string $type = 'sparkline';
}
