<?php
namespace AmisPhp\Renderer2\Grid;

use AmisPhp\BaseSchema;


/**
 * 二维布局渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/grid-2d
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
 * @method cols(int$v) 列数量，默认是 12 
 * @method width($v) grid 2d 容器宽度，默认是 auto 
 * @method gap(int|string$v) 格子间距，默认 0，包含行和列 
 * @method gapRow(int|string$v) 格子行级别的间距，如果不设置就和 gap 一样 
 * @method rowHeight(int|string$v) 单位行高度，默认 50 px 
 * @method grids(array$v) 每个格子的配置 

 */
class 2d extends BaseSchema
{
    protected string $type = 'grid-2d';
}
