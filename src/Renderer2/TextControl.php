<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Text 文本输入框。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/input-text
 *
 * @method addOn( $v) 附带的操作按钮 
 * @method trimContents(boolean $v) 是否去除首尾空白文本。 
 * @method autoComplete( $v) 自动完成 API，当输入部分文字的时候，会将这些文字通过 ${term} 可以取到，发送给接口。 接口可以返回匹配到的选项，帮助用户输入。 
 * @method nativeAutoComplete(string $v) 配置原生 input 的 autoComplete 属性 
 * @method borderMode(string $v) 边框模式，全边框，还是半边框，或者没边框。 
 * @method minLength(int $v) 限制文字最小输入个数 
 * @method maxLength(int $v) 限制文字最大输入个数 
 * @method showCounter(boolean $v) 是否显示计数 
 * @method prefix(string $v) 前缀 
 * @method suffix(string $v) 后缀 
 * @method transform(\AmisPhp\Renderer2\TextControl\TextControlTransform $v) 自动转换值 
 * @method inputControlClassName(string $v) control节点的CSS类名 
 * @method nativeInputClassName(string $v) 原生input标签的CSS类名 
 * @method clearValueOnEmpty(boolean $v) 在内容为空的时候清除值 
 * @method size(string $v) 表单项大小 

 */
class TextControl extends BaseSchema
{
    protected string $type = 'textcontrol';
}
