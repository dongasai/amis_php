<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Alert 提示渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/alert
 *
 * @method title(string $v) 提示框标题 
 * @method body( $v) 内容区域 
 * @method level(string $v) 提示类型 
 * @method showCloseButton(boolean $v) 是否显示关闭按钮 
 * @method closeButtonClassName(string $v) 关闭按钮CSS类名 
 * @method showIcon(boolean $v) 是否显示ICON 
 * @method icon( $v) 左侧图标 
 * @method iconClassName(string $v) 图标CSS类名 
 * @method actions( $v) 操作区域 

 */
class Alert extends BaseSchema
{
    protected string $type = 'alert';
}
