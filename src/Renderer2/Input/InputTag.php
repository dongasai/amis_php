<?php
namespace AmisPhp\Renderer2\Input;

use AmisPhp\BaseSchema;


/**
 * Tag 输入框 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/tag
 *
 * @method optionsTip(string $v) 选项提示信息 
 * @method dropdown(boolean $v) 是否为下拉模式 
 * @method max(int $v) 允许添加的标签的最大数量 
 * @method maxTagLength(int $v) 单个标签的最大文本长度 
 * @method maxTagCount(int $v) 标签的最大展示数量，超出数量后以收纳浮层的方式展示，仅在多选模式开启后生效 
 * @method overflowTagPopover( $v) 收纳标签的Popover配置 
 * @method enableBatchAdd(boolean $v) 是否开启批量添加模式 
 * @method separator(string $v) 开启批量添加后，输入多个标签的分隔符，支持传入多个符号，默认为"-" 
 * @method size(string $v) 表单项大小 

 */
class InputTag extends BaseSchema
{
    protected string $type = 'input-tag';
}
