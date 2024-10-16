<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Carousel 轮播图渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/carousel
 *
 * @method visible(boolean$v) 是否显示 
 * @method visibleOn($v) 是否显示表达式 
 * @method static(boolean$v) 是否静态展示 
 * @method staticOn($v) 是否静态展示表达式 
 * @method staticPlaceholder(string$v) 静态展示空值占位 
 * @method staticClassName($v) 静态展示表单项类名 
 * @method staticLabelClassName($v) 静态展示表单项Label类名 
 * @method staticInputClassName($v) 静态展示表单项Value类名 
 * @method useMobileUI(boolean$v) 可以组件级别用来关闭移动端样式 
 * @method testIdBuilder($v)  
 * @method testid(string$v)  
 * @method auto(boolean$v) 是否自动播放 
 * @method interval(int|string$v) 轮播间隔时间 
 * @method duration(int$v) 动画时长 
 * @method width(int$v) 设置宽度 
 * @method height(int$v) 设置高度 
 * @method controlsTheme(string$v)  
 * @method placeholder(string$v) 占位 
 * @method controls(array$v) 配置控件内容 
 * @method animation(string$v) 动画类型 
 * @method itemSchema($v) 配置单条呈现模板 
 * @method name($v)  
 * @method thumbMode(string$v) 预览图模式 
 * @method options(array$v) 配置固定值 
 * @method alwaysShowArrow(boolean$v) 是否一直显示箭头 
 * @method multiple(\AmisPhp\Renderer2\Carousel\CarouselMultiple$v) 多图模式配置项 
 * @method icons(\AmisPhp\Renderer2\Carousel\CarouselIcons$v) 自定义箭头图标 

 */
class Carousel extends BaseSchema
{
    protected string $type = 'carousel';
}
