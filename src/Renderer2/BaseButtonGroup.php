<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Button Group 渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/button-group
 *
 * @method btnClassName( $v)  
 * @method btnActiveClassName(string $v)  
 * @method buttons(array $v) 按钮集合 
 * @method btnLevel(string $v) 按钮样式级别 
 * @method btnActiveLevel(string $v) 按钮选中的样式级别 
 * @method vertical(boolean $v) 垂直展示？ 
 * @method tiled(boolean $v) 平铺展示？ 
 * @method visible(boolean $v) 是否显示 
 * @method visibleOn( $v) 通过 JS 表达式来配置当前表单项是否显示 
 * @method size(string $v) 按钮大小 

 */
class BaseButtonGroup extends BaseSchema
{
    protected string $type = 'basebuttongroup';
}
