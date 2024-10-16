<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Hbox 水平布局渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/hbox
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
 * @method columns(array$v)  
 * @method subFormMode(string$v) 配置子表单项默认的展示方式。 
 * @method subFormHorizontal($v) 如果是水平排版，这个属性可以细化水平排版的左右宽度占比。 
 * @method gap(string$v) 水平间距 
 * @method valign(string$v) 垂直对齐方式 
 * @method align(string$v) 水平对齐方式 

 */
class Hbox extends BaseSchema
{
    protected string $type = 'hbox';
}
