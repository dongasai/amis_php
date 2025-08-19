<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * The LinkAction class.
 *
 * @method block(boolean $v) 是否为块状展示，默认为内联。 
 * @method disabledTip(string $v) 禁用时的文案提示。 
 * @method icon( $v) 按钮图标， iconfont 的类名 
 * @method iconClassName( $v) icon 上的css 类名 
 * @method rightIcon( $v) 右侧按钮图标， iconfont 的类名 
 * @method rightIconClassName( $v) 右侧 icon 上的 css 类名 
 * @method loadingClassName( $v) loading 上的css 类名 
 * @method label(string $v) 按钮文字 
 * @method level(string $v) 按钮样式 
 * @method primary(boolean $v)  
 * @method size(string $v) 按钮大小 
 * @method tooltip( $v)  
 * @method tooltipPlacement(string $v)  
 * @method confirmText(string $v) 提示文字，配置了操作前会要求用户确认。 
 * @method required(array $v) 如果按钮在form中，配置此属性会要求用户把指定的字段通过验证后才会触发行为。 
 * @method activeLevel(string $v) 激活状态时的样式 
 * @method activeClassName(string $v) 激活状态时的类名 
 * @method close(boolean|string $v) 如果按钮在弹框中，可以配置这个动作完成后是否关闭弹窗，或者指定关闭目标弹框。 
 * @method requireSelected(boolean $v) 当按钮时批量操作按钮时，默认必须有勾选元素才能可点击，如果此属性配置成 false，则没有点选成员也能点击。 
 * @method mergeData(boolean $v) 是否将弹框中数据 merge 到父级作用域。 
 * @method target(string $v) 可以指定让谁来触发这个动作。 
 * @method countDown(int $v) 点击后的禁止倒计时（秒） 
 * @method countDownTpl(string $v) 倒计时文字自定义 
 * @method badge( $v) 角标 
 * @method hotKey(string $v) 键盘快捷键 
 * @method loadingOn(string $v) 是否显示loading效果 
 * @method disabledOnAction(boolean $v) 是否在动作结束前禁用按钮 
 * @method onClick( $v) 自定义事件处理函数 
 * @method body( $v) 子内容 
 * @method tabIndex(string $v)  
 * @method href(string $v) 点击后打开的链接地址 

 */
class LinkAction extends BaseSchema
{
    protected string $type = 'linkaction';
}
