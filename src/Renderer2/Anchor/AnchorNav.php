<?php
namespace AmisPhp\Renderer2\Anchor;

use AmisPhp\BaseSchema;


/**
 * AnchorNav 锚点导航渲染器 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/anchor-nav
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
 * @method links(array$v) 楼层集合 
 * @method active(string|int$v) 被激活（定位）的楼层 
 * @method linkClassName($v) 导航样式名 
 * @method sectionClassName($v) 楼层样式名 
 * @method direction(string$v)  

 */
class AnchorNav extends BaseSchema
{
    protected string $type = 'anchor-nav';
}
