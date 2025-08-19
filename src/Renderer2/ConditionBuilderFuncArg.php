<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * The ConditionBuilderFuncArg class.
 *
 * @method isOptional(boolean $v)  
 * @method label(string $v)  
 * @method valueTypes(array $v)  
 * @method operators(array $v)  
 * @method funcs(array $v)  
 * @method defaultValue( $v)  
 * @method placeholder(string $v)  

 */
class ConditionBuilderFuncArg extends BaseSchema
{
    protected string $type = 'conditionbuilderfuncarg';
}
