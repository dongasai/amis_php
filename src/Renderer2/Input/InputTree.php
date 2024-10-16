<?php
namespace AmisPhp\Renderer2\Input;

use AmisPhp\BaseSchema;


/**
 * Tree 下拉选择框。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/tree
 *
 * @method options($v) 选项集合 
 * @method source($v) 可用来通过 API 拉取 options。 
 * @method selectFirst(boolean$v) 默认选择选项第一个值。 
 * @method initFetchOn(string$v) 用表达式来配置 source 接口初始要不要拉取 
 * @method initFetch(boolean$v) 配置 source 接口初始拉不拉取。 
 * @method multiple(boolean$v) 是否为多选模式 
 * @method joinValues(boolean$v) 单选模式：当用户选中某个选项时，选项中的 value 将被作为该表单项的值提交，否则，整个选项对象都会作为该表单项的值提交。 多选模式：选中的多个选项的 `value` 会通过 `delimiter` 连接起来，否则直接将以数组的形式提交值。 
 * @method delimiter(string$v) 分割符 
 * @method valuesNoWrap(boolean$v) 多选模式，值太多时是否避免折行 
 * @method extractValue(boolean$v) 开启后将选中的选项 value 的值封装为数组，作为当前表单项的值。 
 * @method clearable(boolean$v) 是否可清除。 
 * @method resetValue(string$v) 点清除按钮时，将表单项设置成当前配置的值。 
 * @method deferField(string$v) 懒加载字段 
 * @method deferApi($v) 懒加载接口 
 * @method addApi($v) 添加时调用的接口 
 * @method addControls(array$v) 新增时的表单项。 
 * @method addDialog($v) 控制新增弹框设置项 
 * @method creatable(boolean$v) 是否可以新增 
 * @method createBtnLabel(string$v) 新增文字 
 * @method editable(boolean$v) 是否可以编辑 
 * @method editApi($v) 编辑时调用的 API 
 * @method editControls(array$v) 选项修改的表单项 
 * @method editDialog($v) 控制编辑弹框设置项 
 * @method removable(boolean$v) 是否可删除 
 * @method deleteApi($v) 选项删除 API 
 * @method deleteConfirmText(string$v) 选项删除提示文字。 
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
 * @method placeholder(string$v) 占位符 
 * @method required(boolean$v) 是否为必填 
 * @method validationErrors(\AmisPhp\Renderer2\Input\Tree\InputTreeValidationErrors$v) 验证失败的提示信息 
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
 * @method testIdBuilder($v)  
 * @method remark($v) 显示一个小图标, 鼠标放上去的时候显示提示内容 
 * @method labelRemark($v) 显示一个小图标, 鼠标放上去的时候显示提示内容, 这个小图标跟 label 在一起 
 * @method hideRoot(boolean$v) 是否隐藏顶级 
 * @method rootLabel(string$v) 顶级选项的名称 
 * @method rootValue($v) 顶级选项的值 
 * @method showIcon(boolean$v) 显示图标 
 * @method autoCheckChildren(boolean$v) ui级联关系，true代表级联选中，false代表不级联，默认为true 
 * @method cascade(boolean$v) 该属性代表数据级联关系，autoCheckChildren为true时生效，默认为false，具体数据级联关系如下： 1.casacde为false，ui行为为级联选中子节点，子节点禁用；值只包含父节点的值 2.cascade为false，withChildren为true，ui行为为级联选中子节点，子节点禁用；值包含父子节点的值 3.cascade为true，ui行为级联选中子节点，子节点可反选，值包含父子节点的值，此时withChildren属性失效 4.cascade不论为true还是false，onlyChildren为true，ui行为级联选中子节点，子节点可反选，值只包含子节点的值 
 * @method withChildren(boolean$v) 选父级的时候是否把子节点的值也包含在内。 
 * @method onlyChildren(boolean$v) 选父级的时候，是否只把子节点的值包含在内 
 * @method onlyLeaf(boolean$v) 单选时，只运行选择叶子节点 
 * @method rootCreatable(boolean$v) 顶级节点是否可以创建子节点 
 * @method enableNodePath(boolean$v) 是否开启节点路径模式 
 * @method pathSeparator(string$v) 开启节点路径模式后，节点路径的分隔符 
 * @method showOutline(boolean$v) 是否显示展开线 
 * @method highlightTxt(string$v) 需要高亮的字符串 
 * @method enableDefaultIcon(boolean$v) 是否为选项添加默认的Icon，默认值为true 
 * @method searchable(boolean$v) 是否开启搜索 
 * @method searchApi($v) 搜索 API 
 * @method searchConfig(\AmisPhp\Renderer2\Input\Tree\InputTreeSearchConfig$v) 搜索框的配置 
 * @method heightAuto(boolean$v) 高度自动增长？ 

 */
class InputTree extends BaseSchema
{
    protected string $type = 'input-tree';
}
