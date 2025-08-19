<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Color 显示渲染器，格式说明。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/color
 *
 * @method defaultColor(string $v) 默认颜色 
 * @method showValue(boolean $v) 是否用文字显示值。 

 */
class Color extends BaseSchema
{
    protected string $type = 'color';
}
