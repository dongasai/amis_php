<?php
namespace AmisPhp\Renderer2\Collapse;

use AmisPhp\BaseSchema;


/**
 * CollapseGroup 折叠渲染器，格式说明。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/collapse
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
 * @method activeKey($v) 激活面板 
 * @method accordion(boolean$v) 手风琴模式 
 * @method expandIcon($v) 自定义切换图标 
 * @method expandIconPosition(string$v) 设置图标位置 
 * @method body($v) 内容区域 
 * @method enableFieldSetStyle(boolean$v) 当Collapse作为Form组件的子元素时，开启该属性后组件样式设置为FieldSet组件的样式，默认开启 

 */
class CollapseGroup extends BaseSchema
{
    protected string $type = 'collapse-group';
}
