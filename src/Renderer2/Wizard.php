<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * 表单向导 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/wizard
 *
 * @method actionClassName( $v) 配置按钮 className 
 * @method actionFinishLabel(string $v) 完成按钮的文字描述 
 * @method actionNextLabel(string $v) 下一步按钮的文字描述 
 * @method actionNextSaveLabel(string $v) 下一步并且保存按钮的文字描述 
 * @method actionPrevLabel(string $v) 上一步按钮的文字描述 
 * @method api( $v) Wizard 用来保存数据的 api。 [详情](https://baidu.github.io/amis/docs/api#wizard) 
 * @method bulkSubmit(boolean $v) 是否合并后再提交 
 * @method initApi( $v) Wizard 用来获取初始数据的 api。 
 * @method mode(string $v) 展示模式 
 * @method name( $v)  
 * @method readOnly(boolean $v) 是否为只读模式。 
 * @method redirect(string $v) 保存完后，可以指定跳转地址，支持相对路径和组内绝对路径，同时可以通过 $xxx 使用变量 
 * @method reload( $v)  
 * @method target(string $v) 默认表单提交自己会通过发送 api 保存数据，但是也可以设定另外一个 form 的 name 值，或者另外一个 `CRUD` 模型的 name 值。 如果 target 目标是一个 `Form` ，则目标 `Form` 会重新触发 `initApi` 和 `schemaApi`，api 可以拿到当前 form 数据。如果目标是一个 `CRUD` 模型，则目标模型会重新触发搜索，参数为当前 Form 数据。 
 * @method affixFooter( $v) 是否将底部按钮固定在底部。 
 * @method steps(array $v)  
 * @method startStep(string $v)  
 * @method stepsClassName(string $v) 步骤条区域css类 
 * @method bodyClassName(string $v) 表单区域css类 
 * @method stepClassName(string $v) step + body区域css类 
 * @method footerClassName(string $v) 底部操作栏的css类 
 * @method wrapWithPanel(boolean $v) 是否用panel包裹 

 */
class Wizard extends BaseSchema
{
    protected string $type = 'wizard';
}
