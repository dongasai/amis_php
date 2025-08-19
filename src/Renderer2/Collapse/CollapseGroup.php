<?php
namespace AmisPhp\Renderer2\Collapse;

use AmisPhp\BaseSchema;


/**
 * CollapseGroup 折叠渲染器，格式说明。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/collapse
 *
 * @method activeKey( $v) 激活面板 
 * @method accordion(boolean $v) 手风琴模式 
 * @method expandIcon( $v) 自定义切换图标 
 * @method expandIconPosition(string $v) 设置图标位置 
 * @method body( $v) 内容区域 
 * @method enableFieldSetStyle(boolean $v) 当Collapse作为Form组件的子元素时，开启该属性后组件样式设置为FieldSet组件的样式，默认开启 

 */
class CollapseGroup extends BaseSchema
{
    protected string $type = 'collapse-group';
}
