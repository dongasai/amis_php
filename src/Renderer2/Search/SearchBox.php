<?php
namespace AmisPhp\Renderer2\Search;

use AmisPhp\BaseSchema;


/**
 * 搜索框渲染器
 *
 * @method name(string $v) 关键字名字。 
 * @method placeholder(string $v) 占位符 
 * @method mini(boolean $v) 是否为 Mini 样式。 
 * @method enhance(boolean $v) 是否为加强样式 
 * @method clearable(boolean $v) 是否可清除 
 * @method searchImediately(boolean $v) 是否立马搜索。 
 * @method clearAndSubmit(boolean $v) 是否开启清空内容后立即重新搜索 
 * @method loading(boolean $v) 是否处于加载状态 

 */
class SearchBox extends BaseSchema
{
    protected string $type = 'search-box';
}
