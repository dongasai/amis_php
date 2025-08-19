<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * The Avatar class.
 *
 * @method badge( $v) 角标 
 * @method src(string $v) 图片地址 
 * @method defaultAvatar(string $v) 默认头像 
 * @method icon(string $v) 图标 
 * @method fit(string $v) 图片相对于容器的缩放方式 
 * @method shape(string $v) 形状 
 * @method size( $v) 大小 
 * @method text(string $v) 文本 
 * @method gap(int $v) 字符类型距离左右两侧边界单位像素 
 * @method alt(string $v) 图片无法显示时的替换文字地址 
 * @method draggable(boolean $v) 图片是否允许拖动 
 * @method crossOrigin(string $v) 图片CORS属性 
 * @method onError(string $v) 图片加载失败的是否默认处理，字符串函数 

 */
class Avatar extends BaseSchema
{
    protected string $type = 'avatar';
}
