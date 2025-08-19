<?php
namespace AmisPhp\Renderer2\Date;

use AmisPhp\BaseSchema;


/**
 * DateRange 展示渲染器。
 *
 * @method valueFormat(string $v) 值的时间格式，参考 moment 中的格式说明。 
 * @method format(string $v) 展示的时间格式，参考 moment 中的格式说明。 
 * @method displayFormat(string $v) 展示的时间格式，参考 moment 中的格式说明。（新：同format） 
 * @method delimiter(string $v) 分割符 
 * @method connector(string $v) 连接符 

 */
class DateRange extends BaseSchema
{
    protected string $type = 'date-range';
}
