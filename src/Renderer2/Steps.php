<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * The Steps class.
 *
 * @method steps(array $v) 步骤 
 * @method source(string $v) API 或 数据映射 
 * @method value(int|string $v) 指定当前步骤 
 * @method name(string $v) 变量映射 
 * @method status( $v)  
 * @method mode(string $v) 展示模式 
 * @method labelPlacement(string $v) 标签放置位置 
 * @method progressDot(boolean $v) 点状步骤条 
 * @method iconPosition(boolean $v) 切换图标位置 

 */
class Steps extends BaseSchema
{
    protected string $type = 'steps';
}
