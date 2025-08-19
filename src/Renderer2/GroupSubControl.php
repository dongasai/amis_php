<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * The GroupSubControl class.
 *
 * @method columnClassName( $v) 列类名 
 * @method columnRatio( $v) 宽度占用比率。在某些容器里面有用比如 group 
 * @method name(string $v) 列名称 

 */
class GroupSubControl extends BaseSchema
{
    protected string $type = 'groupsubcontrol';
}
