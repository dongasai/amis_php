<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Combo 组合输入框类型 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/combo
 *
 * @method scaffold( $v) 单组表单项初始值。默认为 `{}` 
 * @method noBorder(boolean $v) 是否含有边框 
 * @method deleteConfirmText(string $v) 确认删除时的提示 
 * @method deleteApi( $v) 删除时调用的api 
 * @method typeSwitchable(boolean $v) 是否可切换条件，配合`conditions`使用 
 * @method conditions(array $v) 符合某类条件后才渲染的schema 
 * @method formClassName( $v) 内部单组表单项的类名 
 * @method addButtonClassName( $v) 新增按钮CSS类名 
 * @method addButtonText(string $v) 新增按钮文字 
 * @method addable(boolean $v) 是否可新增 
 * @method addattop(boolean $v) Add at top 
 * @method items(array $v) 数组输入框的子项 
 * @method draggable(boolean $v) 是否可拖拽排序 
 * @method draggableTip(string $v) 可拖拽排序的提示信息。 
 * @method flat(boolean $v) 是否将结果扁平化(去掉name),只有当controls的length为1且multiple为true的时候才有效 
 * @method delimiter(string $v) 当扁平化开启并且joinValues为true时，用什么分隔符 
 * @method joinValues(boolean $v) 当扁平化开启的时候，是否用分隔符的形式发送给后端，否则采用array的方式 
 * @method maxLength( $v) 限制最大个数 
 * @method minLength( $v) 限制最小个数 
 * @method multiLine(boolean $v) 是否多行模式，默认一行展示完 
 * @method multiple(boolean $v) 是否可多选 
 * @method removable(boolean $v) 是否可删除 
 * @method subFormMode(string $v) 子表单的模式。 
 * @method subFormHorizontal( $v) 如果是水平排版，这个属性可以细化水平排版的左右宽度占比。 
 * @method placeholder(string $v) 没有成员时显示。 
 * @method canAccessSuperData(boolean $v) 是否可以访问父级数据，正常 combo 已经关联到数组成员，是不能访问父级数据的。 
 * @method tabsMode(boolean $v) 采用 Tabs 展示方式？ 
 * @method tabsStyle(string $v) Tabs 的展示模式。 
 * @method tabsLabelTpl( $v) 选项卡标题的生成模板。 
 * @method lazyLoad(boolean $v) 数据比较多，比较卡时，可以试试开启。 
 * @method perPage(int $v) 分页个数，默认不分页 
 * @method strictMode(boolean $v) 严格模式，为了性能默认不开的。 
 * @method syncFields(array $v) 配置同步字段。只有 `strictMode` 为 `false` 时有效。 如果 Combo 层级比较深，底层的获取外层的数据可能不同步。 但是给 combo 配置这个属性就能同步下来。输入格式：`["os"]` 
 * @method nullable(boolean $v) 允许为空，如果子表单项里面配置验证器，且又是单条模式。可以允许用户选择清空（不填）。 
 * @method messages(\AmisPhp\Renderer2\BaseComboControl\BaseComboControlMessages $v) 提示信息 
 * @method updatePristineAfterStoreDataReInit(boolean $v)  
 * @method testIdBuilder( $v)  
 * @method size(string $v) 表单项大小 

 */
class BaseComboControl extends BaseSchema
{
    protected string $type = 'basecombocontrol';
}
