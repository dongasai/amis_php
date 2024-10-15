<?php
namespace AmisPhp\Renderer2\Button;

use AmisPhp\BaseSchema;


/**
 * Button Toolar 渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/button-toolbar
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
 * @method buttons(array$v)  

 */
class Toolbar extends BaseSchema
{
    protected string $type = 'button-toolbar';
}
