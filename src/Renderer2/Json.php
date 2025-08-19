<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * JSON 数据展示控件。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/json
 *
 * @method value( $v) 要展示的 JSON 数据 
 * @method levelExpand(int $v) 默认展开的级别 
 * @method source(string $v) 支持从数据链取值 
 * @method mutable(boolean $v) 是否可修改 
 * @method displayDataTypes(boolean $v) 是否显示数据类型 
 * @method enableClipboard(boolean $v) 是否可复制 
 * @method iconStyle(string $v) 图标风格 
 * @method quotesOnKeys(boolean $v) 是否显示键的引号 
 * @method sortKeys(boolean $v) 是否为键排序 
 * @method ellipsisThreshold( $v) 设置字符串的最大展示长度，超出长度阈值的字符串将被截断，点击value可切换字符串展示方式，默认为false 

 */
class Json extends BaseSchema
{
    protected string $type = 'json';
}
