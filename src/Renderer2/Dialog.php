<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Dialog 弹框渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/dialog
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
 * @method inputParams($v) 弹窗参数说明，值格式为 JSONSchema。 
 * @method actions(array$v) 默认不用填写，自动会创建确认和取消按钮。 
 * @method body($v) 内容区域 
 * @method bodyClassName($v) 配置 Body 容器 className 
 * @method closeOnEsc(boolean$v) 是否支持按 ESC 关闭 Dialog 
 * @method closeOnOutside(boolean$v) 是否支持点其它区域关闭 Dialog 
 * @method name($v)  
 * @method size(string$v) Dialog 大小 
 * @method height(string$v) Dialog 高度 
 * @method width(string$v) Dialog 宽度 
 * @method title($v) 请通过配置 title 设置标题 
 * @method header($v)  
 * @method headerClassName($v)  
 * @method footer($v)  
 * @method confirm(boolean$v) 影响自动生成的按钮，如果自己配置了按钮这个配置无效。 
 * @method showCloseButton(boolean$v) 是否显示关闭按钮 
 * @method showErrorMsg(boolean$v) 是否显示错误信息 
 * @method showLoading(boolean$v) 是否显示 spinner 
 * @method overlay(boolean$v) 是否显示蒙层 
 * @method dialogType(string$v) 弹框类型 confirm 确认弹框 
 * @method draggable(boolean$v) 可拖拽 
 * @method data(\AmisPhp\Renderer2\Dialog\DialogData$v) 数据映射 

 */
class Dialog extends BaseSchema
{
    protected string $type = 'dialog';
}
