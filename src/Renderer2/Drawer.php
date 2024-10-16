<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Drawer 抽出式弹框。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/drawer
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
 * @method headerClassName($v) 配置 头部 容器 className 
 * @method footerClassName($v) 配置 头部 容器 className 
 * @method closeOnEsc(boolean$v) 是否支持按 ESC 关闭 Dialog 
 * @method name($v)  
 * @method size(string$v) Dialog 大小 
 * @method title($v) 请通过配置 title 设置标题 
 * @method position(string$v) 从什么位置弹出 
 * @method showCloseButton(boolean$v) 是否展示关闭按钮 当值为false时，默认开启closeOnOutside 
 * @method width(int|string$v) 抽屉的宽度 （当position为left | right时生效） 
 * @method height(int|string$v) 抽屉的高度 （当position为top | bottom时生效） 
 * @method header($v) 头部 
 * @method footer($v) 底部 
 * @method confirm(boolean$v) 影响自动生成的按钮，如果自己配置了按钮这个配置无效。 
 * @method resizable(boolean$v) 是否可以拖动弹窗大小 
 * @method overlay(boolean$v) 是否显示蒙层 
 * @method closeOnOutside(boolean$v) 点击外部的时候是否关闭弹框。 
 * @method showErrorMsg(boolean$v) 是否显示错误信息 
 * @method data(\AmisPhp\Renderer2\Drawer\DrawerData$v) 数据映射 

 */
class Drawer extends BaseSchema
{
    protected string $type = 'drawer';
}
