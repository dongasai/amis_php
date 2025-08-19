<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * AnchorNavSection 锚点区域渲染器 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/anchor-nav
 *
 * @method title(string $v) 导航文字说明 
 * @method href(string $v) 锚点链接 
 * @method body( $v) 内容 
 * @method children(array $v) 子节点 

 */
class AnchorNavSection extends BaseSchema
{
    protected string $type = 'anchornavsection';
}
