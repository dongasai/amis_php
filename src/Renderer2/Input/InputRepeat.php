<?php
namespace AmisPhp\Renderer2\Input;

use AmisPhp\BaseSchema;


/**
 * Repeat 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/repeat
 *
 * @method options(string $v)  
 * @method size(string $v) 表单项大小 

 */
class InputRepeat extends BaseSchema
{
    protected string $type = 'input-repeat';
}
