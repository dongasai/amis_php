<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Tag
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
 * @method color(string$v) 标签颜色 
 * @method label(string$v) 标签文本内容 
 * @method displayMode(string$v) normal: 面性标签，对应color的背景色 rounded: 线性标签， 对应color的边框 status: 带图标的标签， 图标可以自定义 
 * @method icon($v) status模式时候设置的前置图标 
 * @method closable(boolean$v) 是否展示关闭按钮 
 * @method closeIcon($v) 关闭图标 
 * @method checkable(boolean$v) 是否是可选的标签 
 * @method checked(boolean$v) 是否选中 

 */
class Tag extends BaseSchema
{
    protected string $type = 'tag';
}
