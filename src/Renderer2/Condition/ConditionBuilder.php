<?php
namespace AmisPhp\Renderer2\Condition;

use AmisPhp\BaseSchema;


/**
 * 条件组合控件 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/condition-builder
 *
 * @method embed(boolean $v) 内嵌模式，默认为 true 
 * @method pickerIcon( $v) 非内嵌模式时 弹窗触发icon 
 * @method funcs( $v) 函数集合 
 * @method fields( $v) 字段集合 
 * @method config( $v) 其他配置 
 * @method source( $v) 通过远程拉取配置项 
 * @method builderMode(string $v) 展现模式 
 * @method showANDOR(boolean $v) 是否显示并或切换键按钮，只在简单模式下有用 
 * @method draggable(boolean $v) 是否可拖拽，默认为 true 
 * @method addBtnVisibleOn(string $v)  
 * @method addGroupBtnVisibleOn(string $v) 表达式：控制按钮“添加条件组”的显示 
 * @method formula( $v) 将字段输入控件变成公式编辑器。 
 * @method formulaForIf( $v) if 里面公式编辑器配置 
 * @method size(string $v) 表单项大小 

 */
class ConditionBuilder extends BaseSchema
{
    protected string $type = 'condition-builder';
}
