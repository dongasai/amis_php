<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * The Portlet class.
 *
 * @method tabs(array $v)  
 * @method source(string $v) 关联已有数据，选项卡直接根据目标数据重复。 
 * @method tabsClassName( $v) 类名 
 * @method tabsMode(string $v) 展示形式 
 * @method contentClassName( $v) 内容类名 
 * @method linksClassName( $v) 链接外层类名 
 * @method mountOnEnter(boolean $v) 卡片是否只有在点开的时候加载？ 
 * @method unmountOnExit(boolean $v) 卡片隐藏的时候是否销毁卡片内容 
 * @method toolbar(array $v) 可以在右侧配置点其他功能按钮。不会随着tab切换 
 * @method scrollable(boolean $v) 是否支持溢出滚动 
 * @method divider(boolean $v) header和内容是否展示分割线 
 * @method description( $v) 标题右侧的描述 
 * @method hideHeader(boolean $v) 隐藏头部 

 */
class Portlet extends BaseSchema
{
    protected string $type = 'portlet';
}
