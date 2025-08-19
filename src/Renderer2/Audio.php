<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Audio 音频渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/audio
 *
 * @method inline(boolean $v) 是否是内联模式 
 * @method src( $v) "视频播放地址, 支持 $ 取变量。 
 * @method loop(boolean $v) 是否循环播放 
 * @method autoPlay(boolean $v) 是否自动播放 
 * @method rates(array $v) 配置可选播放倍速 
 * @method controls(array $v) 可以配置控制器 

 */
class Audio extends BaseSchema
{
    protected string $type = 'audio';
}
