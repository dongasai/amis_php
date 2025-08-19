<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * The Cards class.
 *
 * @method card( $v)  
 * @method headerClassName( $v) 头部 CSS 类名 
 * @method footerClassName( $v) 底部 CSS 类名 
 * @method itemClassName( $v) 卡片 CSS 类名 
 * @method placeholder( $v) 无数据提示 
 * @method showFooter(boolean $v) 是否显示底部 
 * @method showHeader(boolean $v) 是否显示头部 
 * @method source( $v) 数据源: 绑定当前环境变量 
 * @method title( $v) 标题 
 * @method hideCheckToggler(boolean $v) 是否隐藏勾选框 
 * @method affixHeader(boolean $v) 是否固顶 
 * @method affixFooter(boolean $v) 是否固底 
 * @method header( $v) 顶部区域 
 * @method footer( $v) 底部区域 
 * @method itemCheckableOn( $v) 配置某项是否可以点选 
 * @method itemDraggableOn( $v) 配置某项是否可拖拽排序，前提是要开启拖拽功能 
 * @method checkOnItemClick(boolean $v) 点击卡片的时候是否勾选卡片。 
 * @method masonryLayout(boolean $v) 是否为瀑布流布局？ 
 * @method valueField(string $v) 可以用来作为值的字段 

 */
class Cards extends BaseSchema
{
    protected string $type = 'cards';
}
