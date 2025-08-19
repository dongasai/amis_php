<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * The NavItem class.
 *
 * @method label( $v) 文字说明 
 * @method icon( $v) 图标类名，参考 fontawesome 4。 
 * @method to( $v)  
 * @method target(string $v)  
 * @method unfolded(boolean $v)  
 * @method active(boolean $v)  
 * @method defer(boolean $v)  
 * @method deferApi( $v)  
 * @method children(array $v)  
 * @method key(string $v)  
 * @method disabledTip(string $v)  
 * @method mode(string $v)  

 */
class NavItem extends BaseSchema
{
    protected string $type = 'navitem';
}
