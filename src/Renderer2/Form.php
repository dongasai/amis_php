<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * The Form class.
 *
 * @method actions(array $v) 按钮集合，会固定在底部显示。 
 * @method body( $v) 表单项集合 

 */
class Form extends BaseSchema
{
    protected string $type = 'form';
}
