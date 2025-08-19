<?php
namespace AmisPhp\Renderer2\Input\Quarter;

use AmisPhp\BaseSchema;


/**
 * QuarterRange 季度范围控件 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-quarter-range
 *
 * @method delimiter(string $v) 分割符, 因为有两个值，开始时间和结束时间，所以要有连接符。默认为英文逗号。 
 * @method format(string $v) 默认 `X` 即时间戳格式，用来提交的时间格式。更多格式类型请参考 moment. 
 * @method valueFormat(string $v) 用来提交的时间格式。更多格式类型请参考 moment.（新：同format） 
 * @method inputFormat(string $v) 默认 `YYYY-MM-DD` 用来配置显示的时间格式。 
 * @method displayFormat(string $v) 用来配置显示的时间格式（新：同inputFormat） 
 * @method joinValues(boolean $v) 开启后将选中的选项 value 的值用连接符拼接起来，作为当前表单项的值。如： `value1,value2` 否则为 `[value1, value2]` 
 * @method maxDate(string $v) 最大日期限制，支持变量 $xxx 来取值，或者用相对值如：* `-2mins` 2分钟前\n * `+2days` 2天后\n* `-10week` 十周前\n可用单位： `min`、`hour`、`day`、`week`、`month`、`year`。所有单位支持复数形式。 
 * @method minDate(string $v) 最小日期限制，支持变量 $xxx 来取值，或者用相对值如：* `-2mins` 2分钟前\n * `+2days` 2天后\n* `-10week` 十周前\n可用单位： `min`、`hour`、`day`、`week`、`month`、`year`。所有单位支持复数形式。 
 * @method maxDuration(string $v) 最大跨度，比如 2days 
 * @method minDuration(string $v) 最小跨度，比如 2days 
 * @method value( $v) 这里面 value 需要特殊说明一下，因为支持相对值。* `-2mins` 2分钟前\n * `+2days` 2天后\n* `-10week` 十周前\n可用单位： `min`、`hour`、`day`、`week`、`month`、`year`。所有单位支持复数形式。 
 * @method borderMode(string $v) 边框模式，全边框，还是半边框，或者没边框。 
 * @method embed(boolean $v) 开启后变成非弹出模式，即内联模式。 
 * @method ranges( $v) 日期范围快捷键 
 * @method shortcuts( $v) 日期范围快捷键 
 * @method startPlaceholder(string $v) 日期范围开始时间-占位符 
 * @method endPlaceholder(string $v) 日期范围结束时间-占位符 
 * @method animation(boolean $v) 是否启用游标动画，默认开启 
 * @method transform(string $v) 日期数据处理函数，用来处理选择日期之后的的值

(value: moment.Moment, config: {type: 'start' | 'end'; originValue: moment.Moment, timeFormat: string}, props: any, data: any, moment: moment) => moment.Moment; 
 * @method popOverContainerSelector(string $v) 弹窗容器选择器 
 * @method size(string $v) 表单项大小 

 */
class InputQuarterRange extends BaseSchema
{
    protected string $type = 'input-quarter-range';
}
