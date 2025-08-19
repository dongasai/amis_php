<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * The ListItem class.
 *
 * @method actions(array $v)  
 * @method actionsPosition(string $v) 操作位置，默认在右侧，可以设置成左侧。 
 * @method avatar( $v) 图片地址 
 * @method body(array $v) 内容区域 
 * @method desc( $v) 描述 
 * @method remark( $v) tooltip 说明 
 * @method title( $v) 标题 
 * @method subTitle( $v) 副标题 

 */
class ListItem extends BaseSchema
{
    protected string $type = 'listitem';
}
