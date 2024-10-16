<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Alert 提示渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/alert
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
 * @method title(string$v) 提示框标题 
 * @method body($v) 内容区域 
 * @method level(string$v) 提示类型 
 * @method showCloseButton(boolean$v) 是否显示关闭按钮 
 * @method closeButtonClassName(string$v) 关闭按钮CSS类名 
 * @method showIcon(boolean$v) 是否显示ICON 
 * @method icon($v) 左侧图标 
 * @method iconClassName(string$v) 图标CSS类名 
 * @method actions($v) 操作区域 

 */
class Alert extends BaseSchema
{
    protected string $type = 'alert';
}
