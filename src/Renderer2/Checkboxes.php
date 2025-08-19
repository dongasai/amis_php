<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * 复选框 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/checkboxes
 *
 * @method checkAll(boolean $v) 是否开启全选功能 
 * @method defaultCheckAll(boolean $v) 是否默认全选 
 * @method checkAllText(string $v) 全选/不选文案 
 * @method columnsCount( $v) 每行显示多少个 
 * @method menuTpl(string $v) 自定义选项展示 
 * @method testIdBuilder( $v)  
 * @method size(string $v) 表单项大小 

 */
class Checkboxes extends BaseSchema
{
    protected string $type = 'checkboxes';
}
