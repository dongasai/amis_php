<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Icon 图标渲染器 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/icon
 *
 * @method icon( $v) 按钮类型 
 * @method vendor(string $v)  
 * @method badge( $v) 角标 

 */
class Icon extends BaseSchema
{
    protected string $type = 'icon';
}
