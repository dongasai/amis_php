<?php
namespace AmisPhp\Renderer2\List;

use AmisPhp\BaseSchema;


/**
 * List 复选框 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/list-select
 *
 * @method submitOnDBClick(boolean $v) 开启双击点选并提交。 
 * @method imageClassName(string $v) 图片div类名 
 * @method itemSchema( $v) 可以自定义展示模板。 
 * @method activeItemSchema( $v) 激活态自定义展示模板。 
 * @method listClassName( $v) 支持配置 list div 的 css 类名。 比如：flex justify-between 
 * @method size(string $v) 表单项大小 

 */
class ListSelect extends BaseSchema
{
    protected string $type = 'list-select';
}
