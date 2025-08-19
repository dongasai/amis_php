<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Hidden 隐藏域。功能性组件 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/hidden
 *
 * @method size(string $v) 表单项大小 

 */
class Hidden extends BaseSchema
{
    protected string $type = 'hidden';
}
