<?php
namespace AmisPhp\Renderer2\Input;

use AmisPhp\BaseSchema;


/**
 * 数字输入框 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-number
 *
 * @method max(int $v) 最大值 
 * @method min(int $v) 最小值 
 * @method step(int $v) 步长 
 * @method precision(int $v) 精度 
 * @method showSteps(boolean $v) 是否显示上下点击按钮 
 * @method borderMode(string $v) 边框模式，全边框，还是半边框，或者没边框。 
 * @method prefix(string $v) 前缀 
 * @method suffix(string $v) 后缀 
 * @method unitOptions( $v) 单位列表 
 * @method big(boolean $v) 是否是大数，如果是的话输入输出都将是字符串 
 * @method kilobitSeparator(boolean $v) 是否千分分隔 
 * @method readOnly(boolean $v) 只读 
 * @method keyboard(boolean $v) 是否启用键盘行为 
 * @method displayMode(string $v) 输入框为基础输入框还是加强输入框 
 * @method showAsPercent(boolean $v) 用来开启百分号的展示形式 
 * @method size(string $v) 表单项大小 

 */
class InputNumber extends BaseSchema
{
    protected string $type = 'input-number';
}
