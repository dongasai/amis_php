<?php
namespace AmisPhp\Renderer2\Multiline;

use AmisPhp\BaseSchema;


/**
 * MultilineText
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
 * @method text(string$v) 文本 
 * @method maxRows(int$v) 最大行数 
 * @method expendButtonText(string$v) 展开按钮文本 
 * @method collapseButtonText(string$v) 收起按钮文本 

 */
class MultilineText extends BaseSchema
{
    protected string $type = 'multiline-text';
}
