<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Panel渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/panel
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
 * @method actions(array$v) 按钮集合 
 * @method actionsClassName($v) 按钮集合外层类名 
 * @method body($v) 内容区域 
 * @method bodyClassName($v) 配置 Body 容器 className 
 * @method footer($v) 底部内容区域 
 * @method footerClassName($v) 配置 footer 容器 className 
 * @method footerWrapClassName($v) footer 和 actions 外层 div 类名。 
 * @method header($v) 头部内容, 和 title 二选一。 
 * @method headerClassName($v) 配置 header 容器 className 
 * @method title($v) Panel 标题 
 * @method affixFooter($v) 固定底部, 想要把按钮固定在底部的时候配置。 
 * @method subFormMode(string$v) 配置子表单项默认的展示方式。 
 * @method subFormHorizontal($v) 如果是水平排版，这个属性可以细化水平排版的左右宽度占比。 
 * @method headerControlClassName(string$v) 外观配置的classname 
 * @method bodyControlClassName(string$v)  
 * @method actionsControlClassName(string$v)  

 */
class Panel extends BaseSchema
{
    protected string $type = 'panel';
}
