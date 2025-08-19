<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * 图片集展示控件。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/images
 *
 * @method defaultImage( $v) 默认图片地址 
 * @method placeholder(string $v) 列表为空时显示 
 * @method delimiter(string $v) 配置值的连接符 
 * @method thumbMode(string $v) 预览图模式 
 * @method thumbRatio(string $v) 预览图比率 
 * @method name(string $v) 关联字段名，也可以直接配置 src 
 * @method value( $v)  
 * @method source(string $v)  
 * @method options(array $v)  
 * @method src(string $v) 图片地址，默认读取数据中的 image 属性，如果不是请配置 ,如  ${imageUrl} 
 * @method originalSrc(string $v) 大图地址，不设置用 src 属性，如果不是请配置，如：${imageOriginUrl} 
 * @method enlargeAble(boolean $v) 是否启动放大功能。 
 * @method enlargetWithImages(boolean $v) 放大时是否显示图片集 
 * @method showDimensions(boolean $v) 是否显示尺寸。 
 * @method listClassName( $v) 列表 CSS 类名 
 * @method imageGallaryClassName( $v) 放大详情图 CSS 类名 
 * @method showToolbar(boolean $v) 是否展示图片工具栏 
 * @method toolbarActions(array $v) 工具栏配置 
 * @method displayMode(string $v) 展示模式，支持缩略图模式（thumb）和大图模式（full） 
 * @method currentIndex(int $v) 当前展示图片索引 
 * @method fullThumbMode(string $v) 大图模式下的缩放模式 
 * @method sortType(string $v) 排列方式 类命名方式按照上右下左四个边命名，l=2m，m=2s，最小单位为s 每条边的顺序都是从上到下，从左到右。 
 * @method width(string $v) 宽度（有sortType时生效） 
 * @method height(string $v) 高度（有sortType时生效） 
 * @method hoverMode(string $v) 鼠标悬浮时的展示状态（对应AIpage的文字6，9，10不存在） 
 * @method fontStyle(\AmisPhp\Renderer2\Images\ImagesFontStyle $v) 描述文字样式 
 * @method maskColor(string $v) 蒙层颜色 

 */
class Images extends BaseSchema
{
    protected string $type = 'images';
}
