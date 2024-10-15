<?php
namespace AmisPhp\Renderer2\Input;

use AmisPhp\BaseSchema;


/**
 * Image 图片上传控件 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/image
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
 * @method validationErrors(\AmisPhp\Renderer2\Input\Image\ValidationErrors$v) 验证失败的提示信息 
 * @method validations($v)  
 * @method value($v) 默认值，切记只能是静态值，不支持取变量，跟数据关联是通过设置 name 属性来实现的。 
 * @method clearValueOnHidden(boolean$v) 表单项隐藏时，是否在当前 Form 中删除掉该表单项值。注意同名的未隐藏的表单项值也会删掉 
 * @method validateApi($v) 远端校验表单项接口 
 * @method autoFill(\AmisPhp\Renderer2\Input\Image\AutoFill$v) 上传后把其他字段同步到表单内部。 
 * @method initAutoFill(boolean$v) 初始化时是否把其他字段同步到表单内部。 
 * @method row(int$v)  
 * @method src($v) 默认展示图片的链接 
 * @method imageClassName(string$v) 默认展示图片的类名 
 * @method accept(string$v) 配置接收的图片类型

建议直接填写文件后缀 如：.txt,.csv

多个类型用逗号隔开。 
 * @method allowInput(boolean$v) 默认都是通过用户选择图片后上传返回图片地址，如果开启此选项，则可以允许用户图片地址。 
 * @method autoUpload(boolean$v) 是否自动开始上传 
 * @method uploadBtnText($v) 上传按钮文案 
 * @method btnClassName($v) 选择图片按钮的 CSS 类名 
 * @method btnUploadClassName($v) 上传按钮的 CSS 类名 
 * @method compress(boolean$v)  
 * @method compressOptions(\AmisPhp\Renderer2\Input\Image\CompressOptions$v)  
 * @method crop($v)  
 * @method cropFormat(string$v) 裁剪后的图片类型 
 * @method cropQuality(int$v) 裁剪后的质量 
 * @method reCropable(boolean$v) 是否允许二次裁剪。 
 * @method hideUploadButton(boolean$v) 是否隐藏上传按钮 
 * @method limit(\AmisPhp\Renderer2\Input\Image\Limit$v) 限制图片大小，超出不让上传。 
 * @method maxLength(int$v) 最多的个数 
 * @method maxSize(int$v) 默认没有限制，当设置后，文件大小大于此值将不允许上传。 
 * @method receiver($v) 默认 `/api/upload` 如果想自己存储，请设置此选项。 
 * @method showCompressOptions(boolean$v) 默认为 false, 开启后，允许用户输入压缩选项。 
 * @method multiple(boolean$v) 是否为多选 
 * @method capture(string$v) 可配置移动端的拍照功能，比如配置 `camera` 移动端只能拍照，等 
 * @method joinValues(boolean$v) 单选模式：当用户选中某个选项时，选项中的 value 将被作为该表单项的值提交，否则，整个选项对象都会作为该表单项的值提交。 多选模式：选中的多个选项的 `value` 会通过 `delimiter` 连接起来，否则直接将以数组的形式提交值。 
 * @method delimiter(string$v) 分割符 
 * @method extractValue(boolean$v) 开启后将选中的选项 value 的值封装为数组，作为当前表单项的值。 
 * @method resetValue($v) 清除时设置的值 
 * @method thumbMode(string$v) 缩路图展示模式 
 * @method thumbRatio(string$v) 缩路图展示比率。 
 * @method initCrop(boolean$v) 初始化时是否打开裁剪模式 
 * @method dropCrop(boolean$v) 图片上传完毕是否进入裁剪模式 
 * @method frameImage($v) 默认占位图图片地址 
 * @method fixedSize(boolean$v) 是否开启固定尺寸 
 * @method fixedSizeClassName($v) 固定尺寸的 CSS类名 
 * @method draggable(boolean$v) 是否可拖拽排序 
 * @method draggableTip(string$v) 可拖拽排序的提示信息。 

 */
class Image extends BaseSchema
{
    protected string $type = 'input-image';
}
