<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Words
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
 * @method limit(int$v) 展示限制, 为0时也无限制 
 * @method expendButtonText(string$v) 展示文字 
 * @method expendButton($v) 展示文字 
 * @method collapseButtonText(string$v) 收起文字 
 * @method collapseButton($v) 展示文字 
 * @method words($v) tags数据 
 * @method inTag($v) useTag 当数据是数组时，是否使用tag的方式展示 
 * @method delimiter(string$v) 分割符 

 */
class Words extends BaseSchema
{
    protected string $type = 'words';
}
