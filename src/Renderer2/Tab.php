<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * The Tab class.
 *
 * @method title( $v) Tab 标题 
 * @method tab( $v) 内容 
 * @method body( $v) 内容 
 * @method badge(int $v) 徽标 
 * @method hash(string $v) 设置以后将跟url的hash对应 
 * @method icon( $v) 按钮图标 
 * @method iconPosition(string $v)  
 * @method reload(boolean $v) 设置以后内容每次都会重新渲染 
 * @method mountOnEnter(boolean $v) 点开时才加载卡片内容 
 * @method unmountOnExit(boolean $v) 卡片隐藏就销毁卡片节点。 
 * @method mode(string $v) 配置子表单项默认的展示方式。 
 * @method horizontal( $v) 如果是水平排版，这个属性可以细化水平排版的左右宽度占比。 
 * @method closable(boolean $v) 是否可关闭，优先级高于 tabs 的 closable 

 */
class Tab extends BaseSchema
{
    protected string $type = 'tab';
}
