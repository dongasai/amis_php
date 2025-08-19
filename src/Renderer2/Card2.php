<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Card2 新卡片渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/card2
 *
 * @method body( $v) 内容 
 * @method bodyClassName( $v) body 类名 
 * @method hideCheckToggler(boolean $v) 隐藏选框 
 * @method checkOnItemClick(boolean $v) 不配置href且cards容器下生效，点击整个卡片触发选中 
 * @method wrapperComponent(string $v) 渲染标签 

 */
class Card2 extends BaseSchema
{
    protected string $type = 'card2';
}
