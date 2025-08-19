<?php
namespace AmisPhp\Renderer2\Nested;

use AmisPhp\BaseSchema;


/**
 * Nested Select 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/nested-select
 *
 * @method borderMode(string $v) 边框模式，全边框，还是半边框，或者没边框。 
 * @method menuClassName(string $v) 弹框的 css 类 
 * @method cascade(boolean $v) 父子之间是否完全独立。 
 * @method withChildren(boolean $v) 选父级的时候是否把子节点的值也包含在内。 
 * @method onlyChildren(boolean $v) 选父级的时候，是否只把子节点的值包含在内 
 * @method onlyLeaf(boolean $v) 只允许选择叶子节点 
 * @method hideNodePathLabel(boolean $v) 是否隐藏选择框中已选中节点的祖先节点的文本信息 
 * @method maxTagCount(int $v) 标签的最大展示数量，超出数量后以收纳浮层的方式展示，仅在多选模式开启后生效 
 * @method overflowTagPopover(\AmisPhp\Renderer2\Nested\Select\NestedSelectOverflowTagPopover $v) 收纳标签的Popover配置 
 * @method size(string $v) 表单项大小 

 */
class NestedSelect extends BaseSchema
{
    protected string $type = 'nested-select';
}
