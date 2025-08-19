<?php
namespace AmisPhp\Renderer2\Input;

use AmisPhp\BaseSchema;


/**
 * Rating 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/rating
 *
 * @method count(int $v) 分数 
 * @method half(boolean $v) 允许半颗星 
 * @method allowClear(boolean $v) 是否允许再次点击后清除 
 * @method readonly(boolean $v) 是否只读 
 * @method colors( $v) 星星被选中的颜色 
 * @method inactiveColor(string $v) 未被选中的星星的颜色 
 * @method texts(\AmisPhp\Renderer2\Input\Rating\InputRatingTexts $v) 星星被选中时的提示文字 
 * @method textPosition( $v) 文字的位置 
 * @method char(string $v) 自定义字符 
 * @method charClassName(string $v) 自定义字符类名 
 * @method textClassName(string $v) 自定义文字类名 
 * @method size(string $v) 表单项大小 

 */
class InputRating extends BaseSchema
{
    protected string $type = 'input-rating';
}
