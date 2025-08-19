<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * The Remark class.
 *
 * @method label(string $v)  
 * @method icon( $v)  
 * @method tooltipClassName( $v)  
 * @method trigger(array $v) 触发规则 
 * @method title(string $v) 提示标题 
 * @method content( $v) 提示内容 
 * @method placement(string $v) 显示位置 
 * @method rootClose(boolean $v) 点击其他内容时是否关闭弹框信息 
 * @method shape(string $v) icon的形状 

 */
class Remark extends BaseSchema
{
    protected string $type = 'remark';
}
