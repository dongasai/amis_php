<?php
namespace AmisPhp\Renderer2\Input;

use AmisPhp\BaseSchema;


/**
 * File 文件上传控件 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/file
 *
 * @method btnLabel(string $v) 上传文件按钮说明 
 * @method accept(string $v) 默认只支持纯文本，要支持其他类型，请配置此属性。建议直接填写文件后缀 如：.txt,.csv

多个类型用逗号隔开。 
 * @method capture(string $v) 控制 input 标签的 capture 属性，用于移动端拍照或录像。 
 * @method asBase64(boolean $v) 如果上传的文件比较小可以设置此选项来简单的把文件 base64 的值给 form 一起提交，目前不支持多选。 
 * @method asBlob(boolean $v) 如果不希望 File 组件上传，可以配置 `asBlob` 或者 `asBase64`，采用这种方式后，组件不再自己上传了，而是直接把文件数据作为表单项的值，文件内容会在 Form 表单提交的接口里面一起带上。 
 * @method autoUpload(boolean $v) 是否自动开始上传 
 * @method chunkApi( $v) 默认 `/api/upload/chunk` 想自己存储时才需要关注。 
 * @method chunkSize(int $v) 分块大小，默认为 5M. 
 * @method concurrency(int $v) 分块上传的并发数 
 * @method delimiter(string $v) 分割符 
 * @method downloadUrl( $v) 默认显示文件路径的时候会支持直接下载， 可以支持加前缀如：`http://xx.dom/filename=` ， 如果不希望这样，可以把当前配置项设置为 `false`。

1.1.6 版本开始将支持变量 ${xxx} 来自己拼凑个下载地址，并且支持配置成 post. 
 * @method templateUrl( $v) 模板下载地址 
 * @method fileField(string $v) 默认 `file`, 如果你不想自己存储，则可以忽略此属性。 
 * @method finishChunkApi( $v) 默认 `/api/upload/finishChunkApi` 想自己存储时才需要关注。 
 * @method hideUploadButton(boolean $v) 是否隐藏上传按钮 
 * @method maxLength(int $v) 最多的个数 
 * @method maxSize(int $v) 默认没有限制，当设置后，文件大小大于此值将不允许上传。 
 * @method receiver( $v) 默认 `/api/upload/file` 如果想自己存储，请设置此选项。 
 * @method startChunkApi(string $v) 默认 `/api/upload/startChunk` 想自己存储时才需要关注。 
 * @method useChunk( $v) 默认为 'auto' amis 所在服务器，限制了文件上传大小不得超出10M，所以 amis 在用户选择大文件的时候，自动会改成分块上传模式。 
 * @method btnClassName( $v) 按钮 CSS 类名 
 * @method btnUploadClassName( $v) 上传按钮 CSS 类名 
 * @method multiple(boolean $v) 是否为多选 
 * @method joinValues(boolean $v) 1. 单选模式：当用户选中某个选项时，选项中的 value 将被作为该表单项的值提交， 否则，整个选项对象都会作为该表单项的值提交。 2. 多选模式：选中的多个选项的 `value` 会通过 `delimiter` 连接起来， 否则直接将以数组的形式提交值。 
 * @method extractValue(boolean $v) 开启后将选中的选项 value 的值封装为数组，作为当前表单项的值。 
 * @method resetValue( $v) 清除时设置的值 
 * @method autoFill(\AmisPhp\Renderer2\Input\File\InputFileAutoFill $v) 上传后把其他字段同步到表单内部。 
 * @method initAutoFill(boolean $v) 初始化时是否把其他字段同步到表单内部。 
 * @method valueField(string $v) 接口返回的数据中，哪个用来当做值 
 * @method nameField(string $v) 接口返回的数据中，哪个用来展示文件名 
 * @method urlField(string $v) 接口返回的数据中哪个用来作为下载地址。 
 * @method stateTextMap(\AmisPhp\Renderer2\Input\File\InputFileStateTextMap $v) 按钮状态文案配置。 
 * @method documentation(string $v) 说明文档内容配置 
 * @method documentLink(string $v) 说明文档链接配置 
 * @method drag(boolean $v) 是否为拖拽上传 
 * @method invalidTypeMessage(string $v) 校验格式失败时显示的文字信息 
 * @method invalidSizeMessage(string $v) 校验文件大小失败时显示的文字信息 
 * @method size(string $v) 表单项大小 

 */
class InputFile extends BaseSchema
{
    protected string $type = 'input-file';
}
