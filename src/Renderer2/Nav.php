<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Nav 导航渲染器 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/nav
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
 * @method links(array$v) 链接地址集合 
 * @method indentSize(int$v)  
 * @method source($v) 可以通过 API 拉取。 
 * @method deferApi($v) 懒加载 api，如果不配置复用 source 接口。 
 * @method stacked(boolean$v) true 为垂直排列，false 为水平排列类似如 tabs。 
 * @method itemActions($v) 更多操作菜单列表 
 * @method draggable(boolean$v) 可拖拽 
 * @method saveOrderApi($v) 保存排序的 api 
 * @method itemBadge($v) 角标 
 * @method badge($v) 角标 
 * @method dragOnSameLevel(boolean$v) 仅允许同层级拖拽 
 * @method overflow($v) 横向导航时自动收纳配置 
 * @method level(int$v) 最多展示多少层级 
 * @method defaultOpenLevel(int$v) 默认展开层级 小于等于该层数的节点默认全部打开 
 * @method showKey(string$v) 控制仅展示指定key菜单下的子菜单项 
 * @method collapsed(boolean$v) 控制菜单缩起 
 * @method mode(string$v) 垂直模式 非折叠状态下 控制菜单打开方式 
 * @method expandIcon($v) 自定义展开图标 
 * @method expandPosition(string$v) 自定义展开图标位置 默认在前面 before after 
 * @method themeColor(string$v) 主题配色 默认light 
 * @method accordion(boolean$v) 手风琴展开 仅垂直inline模式支持 
 * @method popupClassName(string$v) 子菜单项展开浮层样式 
 * @method searchable(boolean$v) 是否开启搜索 
 * @method searchConfig(\AmisPhp\Renderer2\Nav\NavSearchConfig$v) 搜索框相关配置 

 */
class Nav extends BaseSchema
{
    protected string $type = 'nav';
}
