<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Audio 音频渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/audio
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
 * @method inline(boolean$v) 是否是内联模式 
 * @method src($v) "视频播放地址, 支持 $ 取变量。 
 * @method loop(boolean$v) 是否循环播放 
 * @method autoPlay(boolean$v) 是否自动播放 
 * @method rates(array$v) 配置可选播放倍速 
 * @method controls(array$v) 可以配置控制器 

 */
class Audio extends BaseSchema
{
    protected string $type = 'audio';
}
