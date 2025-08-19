<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * The ComboSubControl class.
 *
 * @method unique(boolean $v) 是否唯一, 只有在 combo 里面才有用 
 * @method columnClassName( $v) 列类名，可以用来修改这类宽度。 
 * @method testid(string $v)  

 */
class ComboSubControl extends BaseSchema
{
    protected string $type = 'combosubcontrol';
}
