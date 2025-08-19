<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * The Timeline class.
 *
 * @method items(array $v) 节点数据 
 * @method source( $v) API 或 数据映射 
 * @method mode(string $v) 文字相对于时间轴展示方向 
 * @method direction(string $v) 展示方向 
 * @method reverse(boolean $v) 节点倒序 
 * @method itemTitleSchema( $v) 节点title自定一展示模板 
 * @method iconClassName(string $v) 图标的CSS类名 
 * @method timeClassName(string $v) 节点时间的CSS类名 
 * @method titleClassName(string $v) 节点标题的CSS类名 
 * @method detailClassName(string $v) 节点详情的CSS类名 
 * @method cardSchema( $v) 卡片展示配置，如果传入则将items数据传入cardSchema中循环渲染，itemTitleSchema、titleClassName、detailClassName将不生效。配置后 timeline item中的数据都将可以在cardSchema中通过数据方式引用。如果子节点也配置了cardSchema，则子节点的cardSchema优先级高于timeline的cardSchema 

 */
class Timeline extends BaseSchema
{
    protected string $type = 'timeline';
}
