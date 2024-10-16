<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Container 容器渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/container
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
 * @method body($v) 内容 
 * @method bodyClassName($v) body 类名 
 * @method wrapperComponent(string$v) 使用的标签 
 * @method wrapperBody(boolean$v) 是否需要对body加一层div包裹，默认为 true 
 * @method draggable(boolean|string$v) 是否开启容器拖拽 
 * @method draggableConfig($v) 是否开启容器拖拽配置 

 */
class Container extends BaseSchema
{
    protected string $type = 'container';
}
