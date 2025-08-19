<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Picker 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/picker
 *
 * @method labelTpl( $v) 可用来生成选中的值的描述文字 
 * @method labelField(string $v) 建议用 labelTpl 选中一个字段名用来作为值的描述文字 
 * @method valueField(string $v) 选一个可以用来作为值的字段。 
 * @method pickerSchema( $v) 弹窗选择框详情。 
 * @method modalMode(string $v) 弹窗模式，dialog 或者 drawer 
 * @method modalSize(string $v) 弹窗的尺寸，可选值为 'sm'、'md'、'lg'、'xl' 
 * @method modalTitle(string $v) 弹窗的标题，默认为情选择 
 * @method embed(boolean $v) 内嵌模式，也就是说不弹框了。 
 * @method overflowConfig(\AmisPhp\Renderer2\Picker\PickerOverflowConfig $v) 开启最大标签展示数量的相关配置 
 * @method itemClearable(boolean $v) 选中项可删除，默认为true 
 * @method size(string $v) 表单项大小 

 */
class Picker extends BaseSchema
{
    protected string $type = 'picker';
}
