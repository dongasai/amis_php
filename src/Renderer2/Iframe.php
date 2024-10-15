<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * IFrame 渲染器 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/iframe
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
 * @method src($v) 页面地址 
 * @method events(\AmisPhp\Renderer2\Iframe\Events$v) 事件相应，配置后当 iframe 通过 postMessage 发送事件时，可以触发 AMIS 内部的动作。 
 * @method width(int|string$v)  
 * @method height(int|string$v)  
 * @method allow(string$v)  
 * @method name(string$v)  
 * @method referrerpolicy(string$v)  
 * @method sandbox(string$v)  

 */
class Iframe extends BaseSchema
{
    protected string $type = 'iframe';
}
