<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Carousel 轮播图渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/carousel
 *
 * @method direction(string $v) 轮播图方向，默认为水平方向 
 * @method loop(boolean $v) 是否循环播放, 默认为 true。 
 * @method mouseEvent(boolean $v) 是否支持鼠标事件 默认为 true。 
 * @method auto(boolean $v) 是否自动播放 
 * @method interval(int|string $v) 轮播间隔时间 
 * @method duration(int $v) 动画时长 
 * @method width(int|string $v) 设置宽度 
 * @method height(int|string $v) 设置高度 
 * @method controlsTheme(string $v)  
 * @method placeholder(string $v) 占位 
 * @method controls(array $v) 配置控件内容 
 * @method animation(string $v) 动画类型 
 * @method itemSchema( $v) 配置单条呈现模板 
 * @method name( $v)  
 * @method thumbMode(string $v) 预览图模式 
 * @method options(array $v) 配置固定值 
 * @method alwaysShowArrow(boolean $v) 是否一直显示箭头 
 * @method multiple(\AmisPhp\Renderer2\Carousel\CarouselMultiple $v) 多图模式配置项 
 * @method icons(\AmisPhp\Renderer2\Carousel\CarouselIcons $v) 自定义箭头图标 

 */
class Carousel extends BaseSchema
{
    protected string $type = 'carousel';
}
