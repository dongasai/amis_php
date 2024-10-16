<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Flex 布局 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/flex
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
 * @method justify(string$v) 水平分布 
 * @method alignItems(string$v) 垂直布局 
 * @method alignContent(string$v) 多行情况下的垂直分布 
 * @method direction(string$v) 方向 
 * @method items($v) 每个 flex 的设置 

 */
class Flex extends BaseSchema
{
    protected string $type = 'flex';
}
