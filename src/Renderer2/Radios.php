<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Radio 单选框。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/radios
 *
 * @method columnsCount(int $v) 每行显示多少个 
 * @method size(string $v) 表单项大小 

 */
class Radios extends BaseSchema
{
    protected string $type = 'radios';
}
