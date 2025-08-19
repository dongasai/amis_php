<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Container 容器渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/container
 *
 * @method body( $v) 内容 
 * @method bodyClassName( $v) body 类名 
 * @method wrapperComponent(string $v) 使用的标签 
 * @method wrapperBody(boolean $v) 是否需要对body加一层div包裹，默认为 true 
 * @method draggable(boolean|string $v) 是否开启容器拖拽 
 * @method draggableConfig( $v) 是否开启容器拖拽配置 

 */
class Container extends BaseSchema
{
    protected string $type = 'container';
}
