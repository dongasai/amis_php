<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Group 表单集合渲染器，能让多个表单在一行显示 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/group
 *
 * @method body(array $v) FormItem 集合 
 * @method gap(string $v) 间隔 
 * @method direction(string $v) 配置时垂直摆放还是左右摆放。 
 * @method subFormMode(string $v) 配置子表单项默认的展示方式。 
 * @method subFormHorizontal( $v) 如果是水平排版，这个属性可以细化水平排版的左右宽度占比。 
 * @method size(string $v) 表单项大小 

 */
class Group extends BaseSchema
{
    protected string $type = 'group';
}
