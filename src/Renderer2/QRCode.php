<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * 二维码展示控件。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/qrcode
 *
 * @method name(string $v) 关联字段名。 
 * @method qrcodeClassName( $v) css 类名 
 * @method codeSize(int $v) 二维码的宽高大小，默认 128 
 * @method backgroundColor(string $v) 背景色 
 * @method foregroundColor(string $v) 前景色 
 * @method level(string $v) 二维码复杂级别 
 * @method placeholder(string $v) 占位符 
 * @method imageSettings( $v) 图片配置 
 * @method mode(string $v) 渲染模式 
 * @method eyeType(string $v) 码眼类型 
 * @method eyeBorderColor(string $v) 码眼边框颜色 
 * @method eyeBorderSize(string $v) 码眼边框大小 
 * @method eyeInnerColor(string $v) 码眼内部颜色 
 * @method pointType(string $v) 码点类型 
 * @method pointSize(string $v) 码点大小 
 * @method pointSizeRandom(boolean $v) 码点大小随机 

 */
class QRCode extends BaseSchema
{
    protected string $type = 'qrcode';
}
