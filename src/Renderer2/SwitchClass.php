<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Switch 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/switch
 *
 * @method trueValue(boolean|string|int $v) 勾选值 
 * @method falseValue(boolean|string|int $v) 未勾选值 
 * @method option(string $v) 选项说明 
 * @method onText( $v) 开启时显示的内容 
 * @method offText( $v) 关闭时显示的内容 
 * @method size(string $v) 开关尺寸 
 * @method loading(boolean $v) 是否处于加载状态 
 * @method size(string $v) 表单项大小 

 */
class SwitchClass extends BaseSchema
{
    protected string $type = 'switch';
}
