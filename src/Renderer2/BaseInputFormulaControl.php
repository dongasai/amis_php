<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * InputFormula 公式编辑器 文档：https://baidu.gitee.io/amis/zh-CN/components/form/input-formula
 *
 * @method evalMode(boolean $v) evalMode 即直接就是表达式，否则 需要 ${这里面才是表达式} 默认为 true 
 * @method mixedMode(boolean $v) 混合模式，意味着这个输入框既可以输入不同文本 也可以输入公式。 当输入公式时，值格式为 ${公式内容} 其他内容当字符串。 
 * @method variables(array $v) 用于提示的变量集合，默认为空 
 * @method variableMode(string $v) 变量展现模式，可选值：'tabs' ｜ 'tree' 
 * @method functions(array $v) 函数集合，默认不需要传，即  amis-formula 里面那个函数 如果有扩充，则需要传。 
 * @method title(string $v) 编辑器标题 
 * @method header(string $v) 顶部标题，默认为表达式 
 * @method inputMode(string $v) 控件模式 
 * @method allowInput(boolean $v) 外层input是否允许输入，否需要点击fx在弹窗中输入 
 * @method icon( $v) 按钮图标 
 * @method btnLabel(string $v) 按钮Label，inputMode为button时生效 
 * @method level(string $v) 按钮样式 
 * @method btnSize(string $v) 按钮大小 
 * @method borderMode(string $v) 边框模式，全边框，还是半边框，或者没边框。 
 * @method placeholder(string $v) 输入框占位符 
 * @method variableClassName(string $v) 变量面板CSS样式类名 
 * @method functionClassName(string $v) 函数面板CSS样式类名 
 * @method selfVariableName(string $v) 当前输入项字段 name: 用于避免循环绑定自身导致无限渲染 
 * @method inputSettings( $v) 输入框的类型 
 * @method size(string $v) 表单项大小 

 */
class BaseInputFormulaControl extends BaseSchema
{
    protected string $type = 'baseinputformulacontrol';
}
