<?php
namespace AmisPhp\Renderer2\Input;

use AmisPhp\BaseSchema;


/**
 * The InputRange class.
 *
 * @method value( $v) 滑块值 
 * @method max( $v) 最大值 
 * @method min( $v) 最小值 
 * @method step( $v) 步长 
 * @method unit(string $v) 单位 
 * @method showSteps(boolean $v) 是否展示步长 
 * @method parts( $v) 分割块数 
 * @method marks(array $v) 刻度 
 * @method tooltipVisible(boolean $v) 是否展示标签 
 * @method tooltipPlacement( $v) 标签方向 
 * @method multiple(boolean $v) 是否为双滑块 
 * @method joinValues(boolean $v) 是否通过分隔符连接 
 * @method delimiter(string $v) 分隔符 
 * @method showInput(boolean $v) 是否展示输入框 
 * @method clearable(boolean $v) 输入框是否可清除 
 * @method size(string $v) 表单项大小 

 */
class InputRange extends BaseSchema
{
    protected string $type = 'input-range';
}
