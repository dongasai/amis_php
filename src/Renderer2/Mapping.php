<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Mapping 映射展示控件。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/mapping
 *
 * @method name(string $v) 关联字段名。 
 * @method map(\AmisPhp\Renderer2\Mapping\MappingMap $v) 配置映射规则，值可以使用模板语法。当 key 为 * 时表示 else，也就是说值没有映射到任何规则时用 * 对应的值展示。 
 * @method valueField(string $v) map或source为对象数组时，作为value值的字段名 
 * @method labelField(string $v) map或source为对象数组时，作为label值的字段名 
 * @method itemSchema( $v) 自定义渲染映射值，支持html或schema 
 * @method source( $v) 如果想远程拉取字典，请配置 source 为接口。 
 * @method placeholder(string $v) 占位符 

 */
class Mapping extends BaseSchema
{
    protected string $type = 'mapping';
}
