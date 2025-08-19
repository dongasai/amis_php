<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * The List class.
 *
 * @method title( $v) 标题 
 * @method footer( $v) 底部区域 
 * @method footerClassName( $v) 底部区域类名 
 * @method header( $v) 顶部区域 
 * @method headerClassName( $v) 顶部区域类名 
 * @method listItem( $v) 单条数据展示内容配置 
 * @method source( $v) 数据源: 绑定当前环境变量 
 * @method showFooter(boolean $v) 是否显示底部 
 * @method showHeader(boolean $v) 是否显示头部 
 * @method placeholder( $v) 无数据提示 
 * @method hideCheckToggler(boolean $v) 是否隐藏勾选框 
 * @method affixHeader(boolean $v) 是否固顶 
 * @method affixFooter(boolean $v) 是否固底 
 * @method itemCheckableOn( $v) 配置某项是否可以点选 
 * @method itemDraggableOn( $v) 配置某项是否可拖拽排序，前提是要开启拖拽功能 
 * @method checkOnItemClick(boolean $v) 点击列表单行时，是否选择 
 * @method valueField(string $v) 可以用来作为值的字段 
 * @method size(string $v) 大小 
 * @method itemAction( $v) 点击列表项的行为 
 * @method showIndexBar(boolean $v) 是否显示右侧字母索引条 
 * @method indexField(string $v) 索引依据字段 
 * @method indexBarOffset(int $v) 索引条偏移量 

 */
class List extends BaseSchema
{
    protected string $type = 'list';
}
