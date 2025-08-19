<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * The TimelineItem class.
 *
 * @method time(string $v) 时间点 
 * @method title( $v) 时间节点标题 
 * @method detail(string $v) 详细内容 
 * @method detailCollapsedText(string $v) detail折叠时文案 
 * @method detailExpandedText(string $v) detail展开时文案 
 * @method color(string $v) 时间点圆圈颜色 
 * @method icon( $v) 图标 
 * @method iconClassName(string $v) 图标的CSS类名 
 * @method timeClassName(string $v) 节点时间的CSS类名（优先级高于统一配置的timeClassName） 
 * @method titleClassName(string $v) 节点标题的CSS类名（优先级高于统一配置的titleClassName） 
 * @method detailClassName(string $v) 节点详情的CSS类名（优先级高于统一配置的detailClassName） 
 * @method dotSize(string $v)  
 * @method lineColor(string $v)  
 * @method hideDot(boolean $v)  
 * @method cardSchema( $v) 卡片展示配置，如果传入则以卡片形式展示，传入对象转为卡片展示，传入的time、title、detail及相关属性将被忽略，只有连线配置和节点圆圈配置生效 

 */
class TimelineItem extends BaseSchema
{
    protected string $type = 'timelineitem';
}
