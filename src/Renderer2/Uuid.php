<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * UUID 功能性组件 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/uuid
 *
 * @method length(int $v) 长度，默认 uuid 的长度是 36，如果不需要那么长，可以设置这个来缩短 
 * @method size(string $v) 表单项大小 

 */
class Uuid extends BaseSchema
{
    protected string $type = 'uuid';
}
