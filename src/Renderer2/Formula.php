<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * 公式功能控件。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/formula
 *
 * @method condition(string $v) 触发公式的作用条件，如 data.xxx == \"a\" 或者 ${xx} 
 * @method autoSet(boolean $v) 是否自动应用 
 * @method formula(string $v) 公式 
 * @method initSet(boolean $v) 是否初始应用 
 * @method name(string $v) 字段名，公式结果将作用到此处指定的变量中去 
 * @method size(string $v) 表单项大小 

 */
class Formula extends BaseSchema
{
    protected string $type = 'formula';
}
