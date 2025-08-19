<?php
namespace AmisPhp\Renderer2\Input\Sub;

use AmisPhp\BaseSchema;


/**
 * SubForm 子表单 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/subform
 *
 * @method placeholder(string $v) 占位符 
 * @method multiple(boolean $v) 是否多选 
 * @method draggable(boolean $v) 是否可拖拽排序 
 * @method draggableTip(string $v) 拖拽提示信息 
 * @method addable(boolean $v) 是否可新增 
 * @method removable(boolean $v) 是否可删除 
 * @method minLength(int $v) 最少个数 
 * @method maxLength(int $v) 最多个数 
 * @method labelField(string $v) 当值中存在这个字段，则按钮名称将使用此字段的值来展示。 
 * @method btnLabel(string $v) 按钮默认名称 
 * @method addButtonText(string $v) 新增按钮文字 
 * @method addButtonClassName( $v) 新增按钮 CSS 类名 
 * @method itemClassName( $v) 值元素的类名 
 * @method itemsClassName( $v) 值列表元素的类名 
 * @method showErrorMsg(boolean $v) 是否在左下角显示报错信息 
 * @method form( $v) 子表单详情 
 * @method scaffold( $v)  
 * @method size(string $v) 表单项大小 

 */
class InputSubForm extends BaseSchema
{
    protected string $type = 'input-sub-form';
}
