<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Tag
 *
 * @method color(string $v) 标签颜色 
 * @method label(string $v) 标签文本内容 
 * @method displayMode(string $v) normal: 面性标签，对应color的背景色 rounded: 线性标签， 对应color的边框 status: 带图标的标签， 图标可以自定义 
 * @method icon( $v) status模式时候设置的前置图标 
 * @method closable(boolean $v) 是否展示关闭按钮 
 * @method closeIcon( $v) 关闭图标 
 * @method checkable(boolean $v) 是否是可选的标签 
 * @method checked(boolean $v) 是否选中 

 */
class Tag extends BaseSchema
{
    protected string $type = 'tag';
}
