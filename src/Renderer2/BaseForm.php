<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Form 表单渲染器。

说明：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/index
 *
 * @method actions(array $v) 按钮集合，会固定在底部显示。 
 * @method body( $v) 表单项集合 

 */
class BaseForm extends BaseSchema
{
    protected string $type = 'baseform';
}
