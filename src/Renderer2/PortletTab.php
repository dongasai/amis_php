<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * 栏目容器渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/portlet
 *
 * @method title(string $v) Tab 标题 
 * @method tab( $v) 内容 
 * @method toolbar(array $v) 可以在右侧配置点其他功能按钮，随着tab切换而切换 
 * @method body( $v) 内容 
 * @method icon( $v) 按钮图标 
 * @method iconPosition(string $v)  
 * @method reload(boolean $v) 设置以后内容每次都会重新渲染 
 * @method mountOnEnter(boolean $v) 点开时才加载卡片内容 
 * @method unmountOnExit(boolean $v) 卡片隐藏就销毁卡片节点。 

 */
class PortletTab extends BaseSchema
{
    protected string $type = 'portlettab';
}
