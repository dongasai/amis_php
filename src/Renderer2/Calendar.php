<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * The Calendar class.
 *
 * @method schedules( $v) 日程 
 * @method scheduleClassNames(array $v) 日程显示颜色自定义 
 * @method scheduleAction( $v) 日程点击展示 
 * @method largeMode(boolean $v) 是否开启放大模式 
 * @method todayActiveStyle(\AmisPhp\Renderer2\Calendar\CalendarTodayActiveStyle $v) 今日激活时的自定义样式 

 */
class Calendar extends BaseSchema
{
    protected string $type = 'calendar';
}
