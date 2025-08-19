<?php
namespace AmisPhp\Renderer2\Anchor;

use AmisPhp\BaseSchema;


/**
 * AnchorNav 锚点导航渲染器 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/anchor-nav
 *
 * @method links(array $v) 楼层集合 
 * @method active(string|int $v) 被激活（定位）的楼层 
 * @method linkClassName( $v) 导航样式名 
 * @method sectionClassName( $v) 楼层样式名 
 * @method direction(string $v)  

 */
class AnchorNav extends BaseSchema
{
    protected string $type = 'anchor-nav';
}
