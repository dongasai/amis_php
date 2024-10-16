<?php
namespace AmisPhp\Renderer2\Search;

use AmisPhp\BaseSchema;


/**
 * 搜索框渲染器
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
 * @method name(string$v) 关键字名字。 
 * @method placeholder(string$v) 占位符 
 * @method mini(boolean$v) 是否为 Mini 样式。 
 * @method enhance(boolean$v) 是否为加强样式 
 * @method clearable(boolean$v) 是否可清除 
 * @method searchImediately(boolean$v) 是否立马搜索。 
 * @method clearAndSubmit(boolean$v) 是否开启清空内容后立即重新搜索 
 * @method loading(boolean$v) 是否处于加载状态 

 */
class SearchBox extends BaseSchema
{
    protected string $type = 'search-box';
}
