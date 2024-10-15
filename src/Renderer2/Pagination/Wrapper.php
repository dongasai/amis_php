<?php
namespace AmisPhp\Renderer2\Pagination;

use AmisPhp\BaseSchema;


/**
 * 分页容器功能性渲染器。详情请见：https://aisuda.bce.baidu.com/amis/zh-CN/components/pagination-wrapper
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
 * @method showPageInput(boolean$v) 是否显示快速跳转输入框 
 * @method maxButtons(int$v) 最多显示多少个分页按钮。 
 * @method inputName(string$v) 输入字段名 
 * @method outputName(string$v) 输出字段名 
 * @method perPage(int$v) 每页显示多条数据。 
 * @method position(string$v) 分页显示位置，如果配置为 none 则需要自己在内容区域配置 pagination 组件，否则不显示。 
 * @method body($v) 内容区域 

 */
class Wrapper extends BaseSchema
{
    protected string $type = 'pagination-wrapper';
}
