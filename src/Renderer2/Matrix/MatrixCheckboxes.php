<?php
namespace AmisPhp\Renderer2\Matrix;

use AmisPhp\BaseSchema;


/**
 * Matrix 选择控件。适合做权限勾选。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/matrix
 *
 * @method multiple(boolean $v) 配置singleSelectMode时设置为false 
 * @method singleSelectMode(boolean $v) 设置单选模式，multiple为false时有效 
 * @method source( $v) 可用来通过 API 拉取 options。 
 * @method columns(array $v)  
 * @method rows(array $v)  
 * @method rowLabel(string $v) 行标题说明 
 * @method size(string $v) 表单项大小 

 */
class MatrixCheckboxes extends BaseSchema
{
    protected string $type = 'matrix-checkboxes';
}
