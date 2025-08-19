<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Date 展示渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/date
 *
 * @method format(string $v) 展示的时间格式，参考 moment 中的格式说明。 
 * @method displayFormat(string $v) 展示的时间格式，参考 moment 中的格式说明。（新：同format） 
 * @method placeholder(string $v) 占位符 
 * @method valueFormat(string $v) 值的时间格式，参考 moment 中的格式说明。 
 * @method fromNow(boolean $v) 显示成相对时间，比如1分钟前 
 * @method updateFrequency(int $v) 更新频率， 默认为1分钟 
 * @method displayTimeZone(string $v) 时区 

 */
class Date extends BaseSchema
{
    protected string $type = 'date';
}
