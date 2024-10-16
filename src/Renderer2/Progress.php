<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * 进度展示控件。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/progress
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
 * @method name(string$v) 关联字段名 
 * @method value(int$v) 进度值 
 * @method mode(string$v) 进度条类型 
 * @method progressClassName($v) 进度条 CSS 类名 
 * @method map($v) 配置不同的值段，用不同的样式提示用户 
 * @method showLabel(boolean$v) 是否显示值 
 * @method placeholder(string$v) 占位符 
 * @method stripe(boolean$v) 是否显示背景间隔 
 * @method animate(boolean$v) 是否显示动画（只有在开启的时候才能看出来） 
 * @method strokeWidth(int$v) 进度条线的宽度 
 * @method gapDegree(int$v) 仪表盘进度条缺口角度，可取值 0 ~ 295 
 * @method gapPosition(string$v) 仪表盘进度条缺口位置 
 * @method valueTpl(string$v) 内容的模板函数 
 * @method threshold($v) 阈值 
 * @method showThresholdText(boolean$v) 是否显示阈值数值 

 */
class Progress extends BaseSchema
{
    protected string $type = 'progress';
}
