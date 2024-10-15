<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * 提示渲染器，默认会显示个小图标，鼠标放上来的时候显示配置的内容。
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
 * @method label(string$v)  
 * @method icon($v)  
 * @method tooltipClassName($v)  
 * @method trigger(array$v) 触发规则 
 * @method title(string$v) 提示标题 
 * @method content($v) 提示内容 
 * @method placement(string$v) 显示位置 
 * @method rootClose(boolean$v) 点击其他内容时是否关闭弹框信息 
 * @method shape(string$v) icon的形状 

 */
class Remark extends BaseSchema
{
    protected string $type = 'remark';
}
