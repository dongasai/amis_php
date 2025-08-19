<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * 选项卡控件。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/tabs
 *
 * @method tabs(array $v) 选项卡成员。当配置了 source 时，选项卡成员，将会根据目标数据进行重复。 
 * @method source(string $v) 关联已有数据，选项卡直接根据目标数据重复。 
 * @method tabsMode( $v) 展示形式 
 * @method contentClassName( $v) 内容类名 
 * @method linksClassName( $v) 链接外层类名 
 * @method mountOnEnter(boolean $v) 卡片是否只有在点开的时候加载？ 
 * @method unmountOnExit(boolean $v) 卡片隐藏的时候是否销毁卡片内容 
 * @method toolbar( $v) 可以在右侧配置点其他功能按钮。 
 * @method subFormMode(string $v) 配置子表单项默认的展示方式。 
 * @method subFormHorizontal( $v) 如果是水平排版，这个属性可以细化水平排版的左右宽度占比。 
 * @method addable(boolean $v) 是否支持新增 
 * @method closable(boolean $v) 是否支持删除 
 * @method draggable(boolean $v) 是否支持拖拽 
 * @method showTip(boolean $v) 是否显示提示 
 * @method showTipClassName(string $v) tooltip 提示的类名 
 * @method editable(boolean $v) 是否可编辑标签名 
 * @method scrollable(boolean $v) 是否导航支持内容溢出滚动。属性废弃，为了兼容暂且保留 
 * @method sidePosition(string $v) 编辑器模式，侧边的位置 
 * @method addBtnText(string $v) 自定义增加按钮文案 
 * @method defaultKey( $v) 初始化激活的选项卡，hash值或索引值，支持使用表达式 
 * @method activeKey( $v) 激活的选项卡，hash值或索引值，支持使用表达式 
 * @method collapseOnExceed(int $v) 超过多少个时折叠按钮 
 * @method collapseBtnLabel(string $v) 折叠按钮文字 
 * @method swipeable(boolean $v) 是否滑动切换只在移动端生效 

 */
class Tabs extends BaseSchema
{
    protected string $type = 'tabs';
}
