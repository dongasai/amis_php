<?php
namespace AmisPhp\Renderer2\Date;

use AmisPhp\BaseSchema;


/**
 * DateRange 展示渲染器。
 *
 * @method visible(boolean$v) 是否显示 
 * @method visibleOn($v) 是否显示表达式 
 * @method static(boolean$v) 是否静态展示 
 * @method staticOn($v) 是否静态展示表达式 
 * @method staticPlaceholder(string$v) 静态展示空值占位 
 * @method staticClassName($v) 静态展示表单项类名 
 * @method staticLabelClassName($v) 静态展示表单项Label类名 
 * @method staticInputClassName($v) 静态展示表单项Value类名 
 * @method useMobileUI(boolean$v) 可以组件级别用来关闭移动端样式 
 * @method testIdBuilder($v)  
 * @method testid(string$v)  
 * @method valueFormat(string$v) 值的时间格式，参考 moment 中的格式说明。 
 * @method format(string$v) 展示的时间格式，参考 moment 中的格式说明。 
 * @method displayFormat(string$v) 展示的时间格式，参考 moment 中的格式说明。（新：同format） 
 * @method delimiter(string$v) 分割符 
 * @method connector(string$v) 连接符 

 */
class DateRange extends BaseSchema
{
    protected string $type = 'date-range';
}
