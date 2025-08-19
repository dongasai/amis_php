<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Plain 纯文本渲染器 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/plain
 *
 * @method tpl( $v)  
 * @method text( $v)  
 * @method inline(boolean $v) 是否内联显示？ 
 * @method placeholder(string $v) 占位符 

 */
class Plain extends BaseSchema
{
    protected string $type = 'plain';
}
