<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Card 卡片渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/card
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
 * @method header(\AmisPhp\Renderer2\Card\CardHeader$v) 头部配置 
 * @method body(array$v) 内容区域 
 * @method media(\AmisPhp\Renderer2\Card\CardMedia$v) 多媒体区域 
 * @method actions(array$v) 底部按钮集合。 
 * @method toolbar(array$v) 工具栏按钮 
 * @method secondary($v) 次要说明 
 * @method useCardLabel(boolean$v) 卡片内容区的表单项label是否使用Card内部的样式，默认为true 

 */
class Card extends BaseSchema
{
    protected string $type = 'card';
}
