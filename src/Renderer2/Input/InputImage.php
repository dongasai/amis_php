<?php
namespace AmisPhp\Renderer2\Input;

use AmisPhp\BaseSchema;


/**
 * Image 图片上传控件 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/image
 *
 * @method showErrorModal(boolean $v) 格式校验失败是否显示弹窗 
 * @method invalidTypeMessage(string $v) 校验格式失败时显示的文字信息 
 * @method invalidSizeMessage(string $v) 校验文件大小失败时显示的文字信息 
 * @method src( $v) 默认展示图片的链接 
 * @method imageClassName(string $v) 默认展示图片的类名 
 * @method accept(string $v) 配置接收的图片类型

建议直接填写文件后缀 如：.txt,.csv

多个类型用逗号隔开。 
 * @method allowInput(boolean $v) 默认都是通过用户选择图片后上传返回图片地址，如果开启此选项，则可以允许用户图片地址。 
 * @method autoUpload(boolean $v) 是否自动开始上传 
 * @method uploadBtnText( $v) 上传按钮文案 
 * @method btnClassName( $v) 选择图片按钮的 CSS 类名 
 * @method btnUploadClassName( $v) 上传按钮的 CSS 类名 
 * @method compress(boolean $v)  
 * @method compressOptions(\AmisPhp\Renderer2\Input\Image\InputImageCompressOptions $v)  
 * @method crop( $v)  
 * @method cropFormat(string $v) 裁剪后的图片类型 
 * @method cropQuality(int $v) 裁剪后的质量 
 * @method reCropable(boolean $v) 是否允许二次裁剪。 
 * @method hideUploadButton(boolean $v) 是否隐藏上传按钮 
 * @method limit(\AmisPhp\Renderer2\Input\Image\InputImageLimit $v) 限制图片大小，超出不让上传。 
 * @method maxLength(int $v) 最多的个数 
 * @method maxSize(int $v) 默认没有限制，当设置后，文件大小大于此值将不允许上传。 
 * @method receiver( $v) 默认 `/api/upload` 如果想自己存储，请设置此选项。 
 * @method showCompressOptions(boolean $v) 默认为 false, 开启后，允许用户输入压缩选项。 
 * @method multiple(boolean $v) 是否为多选 
 * @method capture(string $v) 可配置移动端的拍照功能，比如配置 `camera` 移动端只能拍照，等 
 * @method joinValues(boolean $v) 单选模式：当用户选中某个选项时，选项中的 value 将被作为该表单项的值提交，否则，整个选项对象都会作为该表单项的值提交。 多选模式：选中的多个选项的 `value` 会通过 `delimiter` 连接起来，否则直接将以数组的形式提交值。 
 * @method delimiter(string $v) 分割符 
 * @method extractValue(boolean $v) 开启后将选中的选项 value 的值封装为数组，作为当前表单项的值。 
 * @method resetValue( $v) 清除时设置的值 
 * @method thumbMode(string $v) 缩路图展示模式 
 * @method thumbRatio(string $v) 缩路图展示比率。 
 * @method autoFill(\AmisPhp\Renderer2\Input\Image\InputImageAutoFill $v) 上传后把其他字段同步到表单内部。 
 * @method initAutoFill(boolean $v) 初始化时是否把其他字段同步到表单内部。 
 * @method initCrop(boolean $v) 初始化时是否打开裁剪模式 
 * @method dropCrop(boolean $v) 图片上传完毕是否进入裁剪模式 
 * @method frameImage( $v) 默认占位图图片地址 
 * @method fixedSize(boolean $v) 是否开启固定尺寸 
 * @method fixedSizeClassName( $v) 固定尺寸的 CSS类名 
 * @method draggable(boolean $v) 是否可拖拽排序 
 * @method draggableTip(string $v) 可拖拽排序的提示信息。 
 * @method size(string $v) 表单项大小 

 */
class InputImage extends BaseSchema
{
    protected string $type = 'input-image';
}
