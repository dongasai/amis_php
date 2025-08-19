<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Tasks 渲染器，格式说明 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/tasks
 *
 * @method btnClassName( $v)  
 * @method btnText(string $v) 操作按钮文字 
 * @method checkApi( $v) 用来获取任务状态的 API，当没有进行时任务时不会发送。 
 * @method interval(int $v) 当有任务进行中，会每隔一段时间再次检测，而时间间隔就是通过此项配置，默认 3s。 
 * @method items(array $v)  
 * @method name( $v)  
 * @method operationLabel(string $v) 操作列说明 
 * @method reSubmitApi( $v) 如果任务失败，且可以重试，提交的时候会使用此 API 
 * @method remarkLabel(string $v) 备注列说明 
 * @method retryBtnClassName( $v) 配置容器重试按钮 className 
 * @method retryBtnText(string $v) 重试操作按钮文字 
 * @method statusLabel(string $v) 状态列说明 
 * @method statusLabelMap(array $v) 状态显示对应的类名配置。 
 * @method statusTextMap(array $v) 状态显示对应的文字显示配置。 
 * @method submitApi( $v) 提交任务使用的 API 
 * @method tableClassName( $v) 配置 table className 
 * @method taskNameLabel(string $v) 任务名称列说明 
 * @method initialStatusCode(int $v)  
 * @method readyStatusCode(int $v)  
 * @method loadingStatusCode(int $v)  
 * @method canRetryStatusCode(int $v)  
 * @method finishStatusCode(int $v)  
 * @method errorStatusCode(int $v)  

 */
class Tasks extends BaseSchema
{
    protected string $type = 'tasks';
}
