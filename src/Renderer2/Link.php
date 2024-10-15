<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Link 链接展示控件。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/link
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
 * @method blank(boolean$v) 是否新窗口打开。 
 * @method href(string$v) 链接地址 
 * @method body($v) 链接内容，如果不配置将显示链接地址。 
 * @method badge($v) 角标 
 * @method htmlTarget(string$v) a标签原生target属性 
 * @method icon(string$v) 图标 
 * @method rightIcon(string$v) 右侧图标 

 */
class Link extends BaseSchema
{
    protected string $type = 'link';
}
