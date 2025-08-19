<?php
namespace AmisPhp\Renderer2\Input\Rich;

use AmisPhp\BaseSchema;


/**
 * RichText 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-rich-text
 *
 * @method vendor(string $v) 编辑器类型 
 * @method receiver( $v) 图片保存 API 
 * @method videoReceiver( $v) 视频保存 API 
 * @method fileField(string $v) 接收器的字段名 
 * @method borderMode(string $v) 边框模式，全边框，还是半边框，或者没边框。 
 * @method options( $v) tinymce 或 froala 的配置 
 * @method size(string $v) 表单项大小 

 */
class InputRichText extends BaseSchema
{
    protected string $type = 'input-rich-text';
}
