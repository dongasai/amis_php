<?php
namespace AmisPhp\Renderer2\Json\Schema;

use AmisPhp\BaseSchema;


/**
 * JSON Schema Editor 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/json-schema-editor
 *
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
 * @method validationErrors(\AmisPhp\Renderer2\Json\Schema\Editor\ValidationErrors$v) 验证失败的提示信息 
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
 * @method rootTypeMutable(boolean$v) 顶层是否允许修改类型 
 * @method showRootInfo(boolean$v) 顶层类型信息是否隐藏 
 * @method disabledTypes(array$v) 禁用类型，默认禁用了 null 类型 
 * @method enableAdvancedSetting(boolean$v) 开启详情配置 
 * @method advancedSettings(\AmisPhp\Renderer2\Json\Schema\Editor\AdvancedSettings$v) 自定义详情配置面板如：

{   boolean: [      {type: "input-text", name: "aa", label: "AA" }   ] }

当配置布尔字段详情时，就会出现以上配置 
 * @method placeholder($v) 各属性输入控件的占位提示文本

{   key: "key placeholder",   title: "title placeholder",   description: "description placeholder",   default: "default placeholder" } 
 * @method mini(boolean$v) 是否为迷你模式，会隐藏一些不必要的元素 

 */
class Editor extends BaseSchema
{
    protected string $type = 'json-schema-editor';
}
