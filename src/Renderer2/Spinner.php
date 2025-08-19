<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * The Spinner class.
 *
 * @method show(boolean $v) 控制Spinner显示与隐藏 
 * @method spinnerClassName(string $v) spin图标位置包裹元素的自定义class 
 * @method spinnerWrapClassName(string $v) 作为容器使用时最外层元素的class 
 * @method mode(string $v)  
 * @method size(string $v) spinner Icon 大小 
 * @method icon(string $v) 自定义icon 
 * @method tip(string $v) spinner文案 
 * @method tipPlacement(string $v) spinner文案位置 
 * @method delay(int $v) 延迟显示 
 * @method overlay(boolean $v) 是否显示遮罩层 
 * @method body( $v) 作为容器使用时内容 

 */
class Spinner extends BaseSchema
{
    protected string $type = 'spinner';
}
