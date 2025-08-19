<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * 视频播放器 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/video
 *
 * @method autoPlay(boolean $v) 是否自动播放 
 * @method columnsCount(int $v) 如果显示切帧，通过此配置项可以控制每行显示多少帧 
 * @method frames(\AmisPhp\Renderer2\Video\VideoFrames $v) 设置后，可以显示切帧.点击帧的时候会将视频跳到对应时间。

frames: {  '01:22': 'http://domain/xxx.jpg' } 
 * @method framesClassName( $v) 配置帧列表容器className 
 * @method isLive(boolean $v) 如果是实时的，请标记一下 
 * @method jumpFrame(boolean $v) 点击帧画面时是否跳转视频对应的点 
 * @method muted(boolean $v) 是否初始静音 
 * @method loop(boolean $v) 是否循环播放 
 * @method playerClassName( $v) 配置播放器 className 
 * @method poster( $v) 视频封面地址 
 * @method splitPoster(boolean $v) 是否将视频和封面分开显示 
 * @method src( $v) 视频播放地址 
 * @method videoType(string $v) 视频类型如： video/x-flv 
 * @method aspectRatio(string $v) 视频比率 
 * @method rates(array $v) 视频速率 
 * @method jumpBufferDuration(int $v) 跳转到帧时，往前多少秒。 
 * @method stopOnNextFrame(boolean $v) 默认播放的时候到了下一帧会继续播放，同时高亮下一帧。 如果配置这个则会停止播放，等待用户选择新的区间再播放。 

 */
class Video extends BaseSchema
{
    protected string $type = 'video';
}
