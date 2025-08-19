<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * The Custom class.
 *
 * @method label(string $v)  
 * @method valueTypes(array $v)  
 * @method operators(array $v)  
 * @method funcs(array $v)  
 * @method defaultValue( $v)  
 * @method placeholder(string $v)  

 */
class Custom extends BaseSchema
{
    protected string $type = 'custom';
}
