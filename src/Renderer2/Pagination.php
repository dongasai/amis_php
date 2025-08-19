<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * The Pagination class.
 *
 * @method layout( $v) 通过控制layout属性的顺序，调整分页结构 total,perPage,pager,go 
 * @method maxButtons(int $v) 最多显示多少个分页按钮。 
 * @method mode( $v) 模式，默认normal，如果只想简单显示可以配置成 `simple`。 
 * @method activePage(int $v) 当前页数 
 * @method total(int $v) 总条数 
 * @method perPage(int $v) 每页显示条数 
 * @method showPerPage(boolean $v) 是否展示分页切换，也同时受layout控制 
 * @method perPageAvailable(array $v) 指定每页可以显示多少条 
 * @method showPageInput(boolean $v) 是否显示快速跳转输入框 
 * @method hasNext(boolean $v)  
 * @method popOverContainerSelector(string $v) 弹层挂载节点 

 */
class Pagination extends BaseSchema
{
    protected string $type = 'pagination';
}
