<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * The WizardStep class.
 *
 * @method api( $v) 当前步骤用来保存数据的 api。 
 * @method asyncApi( $v) 设置此属性后，表单提交发送保存接口后，还会继续轮询请求该接口，直到返回 finished 属性为 true 才 结束。 
 * @method initApi( $v) 当前步骤用来获取初始数据的 api 
 * @method jumpable(boolean $v) 是否可直接跳转到该步骤，一般编辑模式需要可直接跳转查看。 
 * @method jumpableOn( $v) 通过 JS 表达式来配置当前步骤可否被直接跳转到。 
 * @method title(string $v) Step 标题 
 * @method label(string $v)  
 * @method actions(array $v) 每一步可以单独配置按钮。如果不配置wizard会自动生成。 
 * @method redirect(string $v) 保存完后，可以指定跳转地址，支持相对路径和组内绝对路径，同时可以通过 $xxx 使用变量 
 * @method reload( $v)  
 * @method target(string $v) 默认表单提交自己会通过发送 api 保存数据，但是也可以设定另外一个 form 的 name 值，或者另外一个 `CRUD` 模型的 name 值。 如果 target 目标是一个 `Form` ，则目标 `Form` 会重新触发 `initApi` 和 `schemaApi`，api 可以拿到当前 form 数据。如果目标是一个 `CRUD` 模型，则目标模型会重新触发搜索，参数为当前 Form 数据。 
 * @method actions(array $v) 按钮集合，会固定在底部显示。 
 * @method body( $v) 表单项集合 
 * @method title( $v) 标题 
 * @method subTitle( $v) 子标题 
 * @method icon(string $v) 图标 
 * @method value(string|int $v)  
 * @method description( $v) 描述 

 */
class WizardStep extends BaseSchema
{
    protected string $type = 'wizardstep';
}
