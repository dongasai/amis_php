<?php
namespace AmisPhp\Renderer2\Tooltip;

use AmisPhp\BaseSchema;


/**
 * The TooltipWrapper class.
 *
 * @method title(string $v) 文字提示标题 
 * @method content(string $v) 文字提示内容，兼容 tooltip，但建议通过 content 来实现提示内容 
 * @method tooltip(string $v)  
 * @method placement(string $v) 文字提示浮层出现位置，默认为top 
 * @method offset(array $v) 浮层位置相对偏移量 
 * @method showArrow(boolean $v) 是否展示浮层指向箭头 
 * @method trigger( $v) 浮层触发方式，默认为hover 
 * @method mouseEnterDelay(int $v) 浮层延迟显示时间, 单位 ms 
 * @method mouseLeaveDelay(int $v) 浮层延迟隐藏时间, 单位 ms 
 * @method rootClose(boolean $v) 是否点击非内容区域关闭提示，默认为true 
 * @method body( $v) 内容区域 
 * @method wrapperComponent(string $v) 内容区包裹标签 
 * @method inline(boolean $v) 内容区是否内联显示，默认为false 
 * @method tooltipTheme(string $v) 主题样式， 默认为light 
 * @method enterable(boolean $v) 是否可以移入浮层中, 默认true 
 * @method tooltipStyle(\AmisPhp\Renderer2\Tooltip\Wrapper\TooltipWrapperTooltipStyle $v) 自定义提示浮层样式 
 * @method tooltipArrowClassName(string $v) 箭头CSS类名 
 * @method tooltipClassName(string $v) 文字提示浮层CSS类名 

 */
class TooltipWrapper extends BaseSchema
{
    protected string $type = 'tooltip-wrapper';
}
