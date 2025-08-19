<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Words
 *
 * @method limit(int $v) 展示限制, 为0时也无限制 
 * @method expendButtonText(string $v) 展示文字 
 * @method expendButton( $v) 展示文字 
 * @method collapseButtonText(string $v) 收起文字 
 * @method collapseButton( $v) 展示文字 
 * @method words( $v) tags数据 
 * @method inTag( $v) useTag 当数据是数组时，是否使用tag的方式展示 
 * @method delimiter(string $v) 分割符 
 * @method labelTpl(string $v) 标签模板 

 */
class Words extends BaseSchema
{
    protected string $type = 'words';
}
