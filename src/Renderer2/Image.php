<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * 图片展示控件。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/image
 *
 * @method defaultImage( $v) 默认图片地址 
 * @method title( $v) 图片标题 
 * @method name(string $v) 关联字段名，也可以直接配置 src 
 * @method imageCaption( $v) 图片描述信息 
 * @method src( $v) 图片地址，如果配置了 name，这个属性不用配置。 
 * @method originalSrc( $v) 大图地址，不设置用 src 
 * @method enlargeAble(boolean $v) 是否启动放大功能。 
 * @method enlargeWithGallary(boolean $v) 放大时是否显示图片集 
 * @method alt(string $v) 图片无法显示时的替换文本 
 * @method height(int $v) 高度 
 * @method width(int $v) 宽度 
 * @method innerClassName( $v) 组件内层 css 类名 
 * @method imageClassName( $v) 图片 css 类名 
 * @method thumbClassName( $v) 图片缩略图外层 css 类名 
 * @method imageGallaryClassName( $v) 放大详情图 CSS 类名 
 * @method caption( $v) 图片说明文字 
 * @method imageMode(string $v) 图片展示模式，默认为缩略图模式、可以配置成原图模式 
 * @method thumbMode(string $v) 预览图模式 
 * @method thumbRatio(string $v) 预览图比率 
 * @method href( $v) 链接地址 
 * @method blank(boolean $v) 是否新窗口打开 
 * @method htmlTarget(string $v) 链接的 target 
 * @method showToolbar(boolean $v) 是否展示图片工具栏 
 * @method toolbarActions(array $v) 工具栏配置 
 * @method hoverMode(string $v) 鼠标悬浮时的展示状态（对应AIpage的文字6，9，10不存在） 
 * @method sortType(string $v) 图集组件传入的排序方式 
 * @method fontStyle(\AmisPhp\Renderer2\Image\ImageFontStyle $v) 描述文字样式 
 * @method maskColor(string $v) 蒙层颜色 

 */
class Image extends BaseSchema
{
    protected string $type = 'image';
}
