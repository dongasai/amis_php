<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Cards 卡片集合渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/card
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
 * @method card($v)  
 * @method headerClassName($v) 头部 CSS 类名 
 * @method footerClassName($v) 底部 CSS 类名 
 * @method itemClassName($v) 卡片 CSS 类名 
 * @method placeholder($v) 无数据提示 
 * @method showFooter(boolean$v) 是否显示底部 
 * @method showHeader(boolean$v) 是否显示头部 
 * @method source($v) 数据源: 绑定当前环境变量 
 * @method title($v) 标题 
 * @method hideCheckToggler(boolean$v) 是否隐藏勾选框 
 * @method affixHeader(boolean$v) 是否固顶 
 * @method affixFooter(boolean$v) 是否固底 
 * @method header($v) 顶部区域 
 * @method footer($v) 底部区域 
 * @method itemCheckableOn($v) 配置某项是否可以点选 
 * @method itemDraggableOn($v) 配置某项是否可拖拽排序，前提是要开启拖拽功能 
 * @method checkOnItemClick(boolean$v) 点击卡片的时候是否勾选卡片。 
 * @method masonryLayout(boolean$v) 是否为瀑布流布局？ 
 * @method valueField(string$v) 可以用来作为值的字段 

 */
class Cards extends BaseSchema
{
    protected string $type = 'cards';
}
