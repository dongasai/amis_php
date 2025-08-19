<?php
namespace AmisPhp\Renderer2\Input;

use AmisPhp\BaseSchema;


/**
 * InputGroup 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-group
 *
 * @method body( $v) FormItem 集合 
 * @method validationConfig(\AmisPhp\Renderer2\Input\Group\InputGroupValidationConfig $v) 校验提示信息配置 
 * @method size(string $v) 表单项大小 

 */
class InputGroup extends BaseSchema
{
    protected string $type = 'input-group';
}
