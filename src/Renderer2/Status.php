<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * 状态展示控件。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/status
 *
 * @method placeholder(string $v) 占位符 
 * @method map(\AmisPhp\Renderer2\Status\StatusMap $v) 状态图标映射关系 
 * @method labelMap(\AmisPhp\Renderer2\Status\StatusLabelMap $v) 文字映射关系 
 * @method source( $v) 新版配置映射源的字段 可以兼容新版icon并且配置颜色 2.8.0 新增 

 */
class Status extends BaseSchema
{
    protected string $type = 'status';
}
