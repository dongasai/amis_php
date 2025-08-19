<?php
namespace AmisPhp\Renderer2\Pagination;

use AmisPhp\BaseSchema;


/**
 * 分页容器功能性渲染器。详情请见：https://aisuda.bce.baidu.com/amis/zh-CN/components/pagination-wrapper
 *
 * @method showPageInput(boolean $v) 是否显示快速跳转输入框 
 * @method maxButtons(int $v) 最多显示多少个分页按钮。 
 * @method inputName(string $v) 输入字段名 
 * @method outputName(string $v) 输出字段名 
 * @method perPage(int $v) 每页显示多条数据。 
 * @method position(string $v) 分页显示位置，如果配置为 none 则需要自己在内容区域配置 pagination 组件，否则不显示。 
 * @method body( $v) 内容区域 

 */
class PaginationWrapper extends BaseSchema
{
    protected string $type = 'pagination-wrapper';
}
