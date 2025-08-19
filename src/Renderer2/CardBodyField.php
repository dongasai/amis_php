<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * The CardBodyField class.
 *
 * @method label(string $v) 列标题 
 * @method labelClassName( $v) label 类名 
 * @method name(string $v) 绑定字段名 
 * @method popOver( $v) 配置查看详情功能 
 * @method quickEdit( $v) 配置快速编辑功能 
 * @method copyable( $v) 配置点击复制功能 

 */
class CardBodyField extends BaseSchema
{
    protected string $type = 'cardbodyfield';
}
