<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Flex 布局 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/flex
 *
 * @method justify(string $v) 水平分布 
 * @method alignItems(string $v) 垂直布局 
 * @method alignContent(string $v) 多行情况下的垂直分布 
 * @method direction(string $v) 方向 
 * @method items( $v) 每个 flex 的设置 

 */
class Flex extends BaseSchema
{
    protected string $type = 'flex';
}
