<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * TextArea 多行文本输入框。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/textarea
 *
 * @method maxRows(int $v) 最大行数 
 * @method minRows(int $v) 最小行数 
 * @method readOnly(boolean $v) 是否只读 
 * @method borderMode(string $v) 边框模式，全边框，还是半边框，或者没边框。 
 * @method maxLength(int $v) 限制文字个数 
 * @method showCounter(boolean $v) 是否显示计数 
 * @method clearable(boolean $v) 输入内容是否可清除 
 * @method resetValue(string $v) 重置值 
 * @method size(string $v) 表单项大小 

 */
class Textarea extends BaseSchema
{
    protected string $type = 'textarea';
}
