<?php
namespace AmisPhp\Renderer2\Dropdown;

use AmisPhp\BaseSchema;


/**
 * 下拉按钮渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/dropdown-button
 *
 * @method visible(boolean$v) 是否显示 
 * @method visibleOn($v) 是否显示表达式 
 * @method static(boolean$v) 是否静态展示 
 * @method staticOn($v) 是否静态展示表达式 
 * @method staticPlaceholder(string$v) 静态展示空值占位 
 * @method staticClassName($v) 静态展示表单项类名 
 * @method staticLabelClassName($v) 静态展示表单项Label类名 
 * @method staticInputClassName($v) 静态展示表单项Value类名 
 * @method useMobileUI(boolean$v) 可以组件级别用来关闭移动端样式 
 * @method testIdBuilder($v)  
 * @method testid(string$v)  
 * @method block(boolean$v) 是否独占一行 `display: block` 
 * @method btnClassName($v) 给 Button 配置 className。 
 * @method buttons(array$v) 按钮集合，支持分组 
 * @method body($v) 内容区域 
 * @method label(string$v) 按钮文字 
 * @method level(string$v) 按钮级别，样式 
 * @method closeOnOutside(boolean$v) 点击外部是否关闭 
 * @method closeOnClick(boolean$v) 点击内容是否关闭 
 * @method size(string$v) 按钮大小 
 * @method align(string$v) 对齐方式 
 * @method iconOnly(boolean$v) 是否只显示图标。 
 * @method rightIcon($v) 右侧图标 
 * @method trigger(string$v) 触发条件，默认是 click 
 * @method hideCaret(boolean$v) 是否显示下拉按钮 
 * @method menuClassName(string$v) 菜单 CSS 样式 
 * @method overlayPlacement(string$v)  

 */
class DropdownButton extends BaseSchema
{
    protected string $type = 'dropdown-button';
}
