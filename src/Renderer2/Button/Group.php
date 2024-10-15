<?php
namespace AmisPhp\Renderer2\Button;

use AmisPhp\BaseSchema;


/**
 * Button Group 渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/button-group
 *
 * @method visible(boolean$v) 是否显示 
 * @method visibleOn($v) 通过 JS 表达式来配置当前表单项是否显示 
 * @method static(boolean$v) 是否静态展示 
 * @method staticOn($v) 是否静态展示表达式 
 * @method staticPlaceholder(string$v) 静态展示空值占位 
 * @method staticClassName($v) 静态展示表单项类名 
 * @method staticLabelClassName($v) 静态展示表单项Label类名 
 * @method staticInputClassName($v) 静态展示表单项Value类名 
 * @method useMobileUI(boolean$v) 可以组件级别用来关闭移动端样式 
 * @method testIdBuilder($v)  
 * @method testid(string$v)  
 * @method btnClassName($v)  
 * @method btnActiveClassName(string$v)  
 * @method buttons(array$v) 按钮集合 
 * @method btnLevel(string$v) 按钮样式级别 
 * @method btnActiveLevel(string$v) 按钮选中的样式级别 
 * @method vertical(boolean$v) 垂直展示？ 
 * @method tiled(boolean$v) 平铺展示？ 
 * @method size(string$v) 按钮大小 

 */
class Group extends BaseSchema
{
    protected string $type = 'button-group';
}
