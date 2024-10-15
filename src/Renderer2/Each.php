<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Each 循环功能渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/each
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
 * @method name(string$v) 关联字段名 
 * @method source(string$v) 关联字段名 支持数据映射 
 * @method itemKeyName(string$v) 用来控制通过什么字段读取成员数据，考虑到可能多层嵌套 如果名字一样会读取不到上层变量，所以这里可以指定一下 
 * @method indexKeyName(string$v) 用来控制通过什么字段读取序号，考虑到可能多层嵌套 如果名字一样会读取不到上层变量，所以这里可以指定一下 
 * @method items($v)  
 * @method placeholder(string$v)  

 */
class Each extends BaseSchema
{
    protected string $type = 'each';
}
