<?php
namespace AmisPhp\Renderer2\Input;

use AmisPhp\BaseSchema;


/**
 * InputArray 数组输入框。 combo 的别名。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/array
 *
 * @method scaffold($v) 新增成员时的默认值 
 * @method noBorder(boolean$v) 是否含有边框 
 * @method deleteConfirmText(string$v) 确认删除时的提示 
 * @method deleteApi($v) 删除时调用的api 
 * @method typeSwitchable(boolean$v) 是否可切换条件，配合`conditions`使用 
 * @method formClassName($v) 内部单组表单项的类名 
 * @method addButtonClassName($v) 新增按钮CSS类名 
 * @method addButtonText(string$v) 新增按钮文字 
 * @method addable(boolean$v) 是否可新增 
 * @method addattop(boolean$v) Add at top 
 * @method draggable(boolean$v) 是否可拖拽排序 
 * @method draggableTip(string$v) 可拖拽排序的提示信息。 
 * @method flat(boolean$v) 是否将结果扁平化(去掉name),只有当controls的length为1且multiple为true的时候才有效 
 * @method delimiter(string$v) 当扁平化开启并且joinValues为true时，用什么分隔符 
 * @method joinValues(boolean$v) 当扁平化开启的时候，是否用分隔符的形式发送给后端，否则采用array的方式 
 * @method maxLength($v) 限制最大个数 
 * @method minLength($v) 限制最小个数 
 * @method multiLine(boolean$v) 是否多行模式，默认一行展示完 
 * @method multiple(boolean$v) 是否可多选 
 * @method removable(boolean$v) 是否可删除 
 * @method subFormMode(string$v) 子表单的模式。 
 * @method subFormHorizontal($v) 如果是水平排版，这个属性可以细化水平排版的左右宽度占比。 
 * @method placeholder(string$v) 没有成员时显示。 
 * @method canAccessSuperData(boolean$v) 是否可以访问父级数据，正常 combo 已经关联到数组成员，是不能访问父级数据的。 
 * @method tabsMode(boolean$v) 采用 Tabs 展示方式？ 
 * @method tabsStyle(string$v) Tabs 的展示模式。 
 * @method tabsLabelTpl($v) 选项卡标题的生成模板。 
 * @method lazyLoad(boolean$v) 数据比较多，比较卡时，可以试试开启。 
 * @method strictMode(boolean$v) 严格模式，为了性能默认不开的。 
 * @method syncFields(array$v) 配置同步字段。只有 `strictMode` 为 `false` 时有效。 如果 Combo 层级比较深，底层的获取外层的数据可能不同步。 但是给 combo 配置这个属性就能同步下来。输入格式：`["os"]` 
 * @method nullable(boolean$v) 允许为空，如果子表单项里面配置验证器，且又是单条模式。可以允许用户选择清空（不填）。 
 * @method messages(\AmisPhp\Renderer2\Input\Array\Messages$v) 提示信息 
 * @method updatePristineAfterStoreDataReInit(boolean$v)  
 * @method testIdBuilder($v)  
 * @method remark($v) 显示一个小图标, 鼠标放上去的时候显示提示内容 
 * @method labelRemark($v) 显示一个小图标, 鼠标放上去的时候显示提示内容, 这个小图标跟 label 在一起 
 * @method size(string$v) 表单项大小 
 * @method label($v) 描述标题 
 * @method labelAlign($v) 描述标题 
 * @method labelWidth(int|string$v) label自定义宽度，默认单位为px 
 * @method labelClassName(string$v) 配置 label className 
 * @method name(string$v) 字段名，表单提交时的 key，支持多层级，用.连接，如： a.b.c 
 * @method extraName(string$v) 额外的字段名，当为范围组件时可以用来将另外一个值打平出来 
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
 * @method required(boolean$v) 是否为必填 
 * @method validationErrors(\AmisPhp\Renderer2\Input\Array\ValidationErrors$v) 验证失败的提示信息 
 * @method validations($v)  
 * @method value($v) 默认值，切记只能是静态值，不支持取变量，跟数据关联是通过设置 name 属性来实现的。 
 * @method clearValueOnHidden(boolean$v) 表单项隐藏时，是否在当前 Form 中删除掉该表单项值。注意同名的未隐藏的表单项值也会删掉 
 * @method validateApi($v) 远端校验表单项接口 
 * @method autoFill($v) 自动填充，当选项被选择的时候，将选项中的其他值同步设置到表单内。 
 * @method initAutoFill($v)  
 * @method row(int$v)  
 * @method visible(boolean$v) 是否显示 
 * @method visibleOn($v) 是否显示表达式 
 * @method static(boolean$v) 是否静态展示 
 * @method staticOn($v) 是否静态展示表达式 
 * @method staticPlaceholder(string$v) 静态展示空值占位 
 * @method staticClassName($v) 静态展示表单项类名 
 * @method staticLabelClassName($v) 静态展示表单项Label类名 
 * @method staticInputClassName($v) 静态展示表单项Value类名 
 * @method useMobileUI(boolean$v) 可以组件级别用来关闭移动端样式 
 * @method items($v) 成员渲染器配置 

 */
class Array extends BaseSchema
{
    protected string $type = 'input-array';
}
