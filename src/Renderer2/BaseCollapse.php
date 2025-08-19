<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * The BaseCollapse class.
 *
 * @method key(string $v) 标识 
 * @method headerPosition(string $v) 标题展示位置 
 * @method header( $v) 标题 
 * @method bodyClassName(string $v) 配置 Body 容器 className 
 * @method collapsable(boolean $v) 是否可折叠 
 * @method collapsed(boolean $v) 默认是否折叠 
 * @method showArrow(boolean $v) 图标是否展示 
 * @method expandIcon( $v) 自定义切换图标 
 * @method headingClassName(string $v) 标题 CSS 类名 
 * @method collapseHeader( $v) 收起的标题 
 * @method size(string $v) 控件大小 
 * @method mountOnEnter(boolean $v) 点开时才加载内容 
 * @method unmountOnExit(boolean $v) 卡片隐藏就销毁内容。 
 * @method divideLine(boolean $v) 标题内容分割线 

 */
class BaseCollapse extends BaseSchema
{
    protected string $type = 'basecollapse';
}
