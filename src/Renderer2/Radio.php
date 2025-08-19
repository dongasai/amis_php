<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Radio 单选框。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/radios
 *
 * @method trueValue(boolean|string|int $v) 勾选值 
 * @method falseValue(boolean|string|int $v) 未勾选值 
 * @method option(string $v) 选项说明 
 * @method badge( $v) 角标 
 * @method partial(boolean $v)  
 * @method optionType(string $v)  
 * @method size(string $v) 表单项大小 

 */
class Radio extends BaseSchema
{
    protected string $type = 'radio';
}
