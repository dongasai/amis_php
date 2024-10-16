<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * 状态展示控件。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/status
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
 * @method placeholder(string$v) 占位符 
 * @method map(\AmisPhp\Renderer2\Status\StatusMap$v) 状态图标映射关系 
 * @method labelMap(\AmisPhp\Renderer2\Status\StatusLabelMap$v) 文字映射关系 
 * @method source($v) 新版配置映射源的字段 可以兼容新版icon并且配置颜色 2.8.0 新增 

 */
class Status extends BaseSchema
{
    protected string $type = 'status';
}
