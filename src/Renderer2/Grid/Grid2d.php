<?php
namespace AmisPhp\Renderer2\Grid;

use AmisPhp\BaseSchema;


/**
 * 二维布局渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/grid-2d
 *
 * @method cols(int $v) 列数量，默认是 12 
 * @method width( $v) grid 2d 容器宽度，默认是 auto 
 * @method gap(int|string $v) 格子间距，默认 0，包含行和列 
 * @method gapRow(int|string $v) 格子行级别的间距，如果不设置就和 gap 一样 
 * @method rowHeight(int|string $v) 单位行高度，默认 50 px 
 * @method grids(array $v) 每个格子的配置 

 */
class Grid2d extends BaseSchema
{
    protected string $type = 'grid-2d';
}
