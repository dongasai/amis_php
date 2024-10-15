<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Collapse 折叠渲染器，格式说明。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/collapse
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
 * @method key(string$v) 标识 
 * @method headerPosition(string$v) 标题展示位置 
 * @method header($v) 标题 
 * @method body($v) 内容区域 
 * @method bodyClassName(string$v) 配置 Body 容器 className 
 * @method collapsable(boolean$v) 是否可折叠 
 * @method collapsed(boolean$v) 默认是否折叠 
 * @method showArrow(boolean$v) 图标是否展示 
 * @method expandIcon($v) 自定义切换图标 
 * @method headingClassName(string$v) 标题 CSS 类名 
 * @method collapseHeader($v) 收起的标题 
 * @method size(string$v) 控件大小 
 * @method mountOnEnter(boolean$v) 点开时才加载内容 
 * @method unmountOnExit(boolean$v) 卡片隐藏就销毁内容。 
 * @method divideLine(boolean$v) 标题内容分割线 

 */
class Collapse extends BaseSchema
{
    protected string $type = 'collapse';
}
