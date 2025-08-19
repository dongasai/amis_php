<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Control 表单项包裹 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/control
 *
 * @method size(string $v) 表单项大小 

 */
class Control extends BaseSchema
{
    protected string $type = 'control';
}
