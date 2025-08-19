<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * The State class.
 *
 * @method title(string $v) 状态标题 
 * @method body( $v) 内容 
 * @method visibleOn(string $v) 显示条件 

 */
class State extends BaseSchema
{
    protected string $type = 'state';
}
