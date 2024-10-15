<?php
namespace AmisPhp\Renderer2\Input;

use AmisPhp\BaseSchema;


/**
 * 年份选择控件
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
 * @method size(string$v) 表单项大小 
 * @method label($v) 描述标题 
 * @method labelAlign($v) 描述标题 
 * @method labelWidth(int|string$v) label自定义宽度，默认单位为px 
 * @method labelClassName(string$v) 配置 label className 
 * @method name(string$v) 字段名，表单提交时的 key，支持多层级，用.连接，如： a.b.c 
 * @method extraName(string$v) 额外的字段名，当为范围组件时可以用来将另外一个值打平出来 
 * @method remark($v) 显示一个小图标, 鼠标放上去的时候显示提示内容 
 * @method labelRemark($v) 显示一个小图标, 鼠标放上去的时候显示提示内容, 这个小图标跟 label 在一起 
 * @method hint(string$v) 输入提示，聚焦的时候显示 
 * @method submitOnChange(boolean$v) 当修改完的时候是否提交表单。 
 * @method readOnly(boolean$v) 是否只读 
 * @method readOnlyOn(string$v) 只读条件 
 * @method validateOnChange(boolean$v) 不设置时，当表单提交过后表单项每次修改都会触发重新验证， 如果设置了，则由此配置项来决定要不要每次修改都触发验证。 
 * @method description(string$v) 描述内容，支持 Html 片段。 
 * @method desc(string$v)  
 * @method descriptionClassName($v) 配置描述上的 className 
 * @method mode(string$v) 配置当前表单项展示模式 
 * @method horizontal($v) 当配置为水平布局的时候，用来配置具体的左右分配。 
 * @method inline(boolean$v) 表单 control 是否为 inline 模式。 
 * @method inputClassName($v) 配置 input className 
 * @method placeholder(string$v) 占位符 
 * @method required(boolean$v) 是否为必填 
 * @method validationErrors(\AmisPhp\Renderer2\Input\Year\ValidationErrors$v) 验证失败的提示信息 
 * @method validations($v)  
 * @method value($v) 默认值，切记只能是静态值，不支持取变量，跟数据关联是通过设置 name 属性来实现的。 
 * @method clearValueOnHidden(boolean$v) 表单项隐藏时，是否在当前 Form 中删除掉该表单项值。注意同名的未隐藏的表单项值也会删掉 
 * @method validateApi($v) 远端校验表单项接口 
 * @method autoFill($v) 自动填充，当选项被选择的时候，将选项中的其他值同步设置到表单内。 
 * @method initAutoFill($v)  
 * @method row(int$v)  
 * @method clearable(boolean$v) 是否显示清除按钮 
 * @method format(string$v) 月份存储格式 
 * @method valueFormat(string$v) 替代format 
 * @method inputFormat(string$v) 月份展示格式 
 * @method displayFormat(string$v) 日期展示格式(新：替代inputFormat) 
 * @method utc(boolean$v) 设定是否存储 utc 时间。 
 * @method emebed(boolean$v) 是否为内联模式？ 
 * @method borderMode(string$v) 边框模式，全边框，还是半边框，或者没边框。 
 * @method shortcuts($v) 日期快捷键 
 * @method disabledDate(string$v) 字符串函数，用来决定是否禁用某个日期。

(currentDate: moment.Moment, props: any) => boolean; 

 */
class Year extends BaseSchema
{
    protected string $type = 'input-year';
}
