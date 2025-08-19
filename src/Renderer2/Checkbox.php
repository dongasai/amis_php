<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Checkbox 勾选框。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/checkbox
 *
 * @method trueValue(boolean|string|int $v) 勾选值 
 * @method falseValue(boolean|string|int $v) 未勾选值 
 * @method option(string $v) 选项说明 
 * @method badge( $v) 角标 
 * @method partial(boolean $v)  
 * @method optionType(string $v)  
 * @method checked(boolean $v)  
 * @method testIdBuilder( $v)  
 * @method size(string $v) 表单项大小 

 */
class Checkbox extends BaseSchema
{
    protected string $type = 'checkbox';
}
