<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Each 循环功能渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/each
 *
 * @method name(string $v) 关联字段名 
 * @method source(string $v) 关联字段名 支持数据映射 
 * @method itemKeyName(string $v) 用来控制通过什么字段读取成员数据，考虑到可能多层嵌套 如果名字一样会读取不到上层变量，所以这里可以指定一下 
 * @method indexKeyName(string $v) 用来控制通过什么字段读取序号，考虑到可能多层嵌套 如果名字一样会读取不到上层变量，所以这里可以指定一下 
 * @method items( $v)  
 * @method placeholder(string $v)  

 */
class Each extends BaseSchema
{
    protected string $type = 'each';
}
