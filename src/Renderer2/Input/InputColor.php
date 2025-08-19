<?php
namespace AmisPhp\Renderer2\Input;

use AmisPhp\BaseSchema;


/**
 * Color 颜色选择框 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/color
 *
 * @method clearable(boolean $v) 是否显示清除按钮 
 * @method format(string $v) 颜色格式 
 * @method closeOnSelect(boolean $v) 选中颜色后是否关闭弹出层。 
 * @method presetColors(array $v) 预设颜色，用户可以直接从预设中选。 
 * @method allowCustomColor(boolean $v) 是否允许用户输入颜色。 
 * @method popOverContainerSelector(string $v) 弹窗容器选择器 
 * @method size(string $v) 表单项大小 

 */
class InputColor extends BaseSchema
{
    protected string $type = 'input-color';
}
