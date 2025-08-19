<?php
namespace AmisPhp\Renderer2\Multiline;

use AmisPhp\BaseSchema;


/**
 * MultilineText
 *
 * @method text(string $v) 文本 
 * @method maxRows(int $v) 最大行数 
 * @method expendButtonText(string $v) 展开按钮文本 
 * @method collapseButtonText(string $v) 收起按钮文本 

 */
class MultilineText extends BaseSchema
{
    protected string $type = 'multiline-text';
}
