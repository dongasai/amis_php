<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Link 链接展示控件。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/link
 *
 * @method blank(boolean $v) 是否新窗口打开。 
 * @method href(string $v) 链接地址 
 * @method body( $v) 链接内容，如果不配置将显示链接地址。 
 * @method badge( $v) 角标 
 * @method htmlTarget(string $v) a标签原生target属性 
 * @method icon(string $v) 图标 
 * @method rightIcon(string $v) 右侧图标 

 */
class Link extends BaseSchema
{
    protected string $type = 'link';
}
