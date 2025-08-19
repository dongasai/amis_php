<?php
namespace AmisPhp\Renderer2\Input;

use AmisPhp\BaseSchema;


/**
 * Month 月份选择控件 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/Month
 *
 * @method format(string $v) 月份存储格式 
 * @method inputFormat(string $v) 月份展示格式 
 * @method valueFormat(string $v) 替代format 
 * @method displayFormat(string $v) 日期展示格式(新：替代inputFormat) 
 * @method clearable(boolean $v) 是否显示清除按钮 
 * @method format(string $v) 日期存储格式 
 * @method valueFormat(string $v) 替代format 
 * @method inputFormat(string $v) 日期展示格式 
 * @method displayFormat(string $v) 日期展示格式(新：替代inputFormat) 
 * @method utc(boolean $v) 设定是否存储 utc 时间。 
 * @method emebed(boolean $v) 是否为内联模式？ 
 * @method borderMode(string $v) 边框模式，全边框，还是半边框，或者没边框。 
 * @method shortcuts( $v) 日期快捷键 
 * @method disabledDate(string $v) 字符串函数，用来决定是否禁用某个日期。

(currentDate: moment.Moment, props: any) => boolean; 
 * @method inputForbid(boolean $v)  
 * @method size(string $v) 表单项大小 

 */
class InputMonth extends BaseSchema
{
    protected string $type = 'input-month';
}
