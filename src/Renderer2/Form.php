<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Form 表单渲染器。

说明：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/index
 *
 * @method visible(boolean$v) 是否显示 
 * @method visibleOn($v) 是否显示表达式 
 * @method static(boolean$v) 展示态时的className 
 * @method staticOn($v)  
 * @method staticPlaceholder(string$v) 静态展示空值占位 
 * @method staticClassName($v)  
 * @method staticLabelClassName($v) 静态展示表单项Label类名 
 * @method staticInputClassName($v) 静态展示表单项Value类名 
 * @method useMobileUI(boolean$v) 可以组件级别用来关闭移动端样式 
 * @method testIdBuilder($v)  
 * @method testid(string$v)  
 * @method title(string$v) 表单标题 
 * @method actions(array$v) 按钮集合，会固定在底部显示。 
 * @method body($v) 表单项集合 
 * @method tabs($v)  
 * @method fieldSet($v)  
 * @method data($v)  
 * @method debug(boolean$v) 是否开启调试，开启后会在顶部实时显示表单项数据。 
 * @method debugConfig(\AmisPhp\Renderer2\Form\DebugConfig$v) Debug面板配置 
 * @method initApi($v) 用来初始化表单数据 
 * @method initAsyncApi($v) Form 用来获取初始数据的 api,与initApi不同的是，会一直轮询请求该接口，直到返回 finished 属性为 true 才 结束。 
 * @method initFinishedField(string$v) 设置了initAsyncApi后，默认会从返回数据的data.finished来判断是否完成，也可以设置成其他的xxx，就会从data.xxx中获取 
 * @method initCheckInterval(int$v) 设置了initAsyncApi以后，默认拉取的时间间隔 
 * @method initFetch(boolean$v) 是否初始加载 
 * @method initFetchOn(string$v) 建议改成 api 的 sendOn 属性。 
 * @method interval(int$v) 设置后将轮询调用 initApi 
 * @method silentPolling(boolean$v) 是否静默拉取 
 * @method stopAutoRefreshWhen(string$v) 配置停止轮询的条件 
 * @method persistData(string$v) 是否开启本地缓存 
 * @method persistDataKeys(array$v) 开启本地缓存后限制保存哪些 key 
 * @method clearPersistDataAfterSubmit(boolean$v) 提交成功后清空本地缓存 
 * @method api($v) Form 用来保存数据的 api。

详情：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/index#%E8%A1%A8%E5%8D%95%E6%8F%90%E4%BA%A4 
 * @method feedback($v) Form 也可以配置 feedback。 
 * @method asyncApi($v) 设置此属性后，表单提交发送保存接口后，还会继续轮询请求该接口，直到返回 finished 属性为 true 才 结束。 
 * @method checkInterval(int$v) 轮询请求的时间间隔，默认为 3秒。设置 asyncApi 才有效 
 * @method finishedField(string$v) 如果决定结束的字段名不是 `finished` 请设置此属性，比如 `is_success` 
 * @method resetAfterSubmit(boolean$v) 提交完后重置表单 
 * @method clearAfterSubmit(boolean$v) 提交后清空表单 
 * @method mode(string$v) 配置表单项默认的展示方式。 
 * @method columnCount(int$v) 表单项显示为几列 
 * @method horizontal($v) 如果是水平排版，这个属性可以细化水平排版的左右宽度占比。 
 * @method autoFocus(boolean$v) 是否自动将第一个表单元素聚焦。 
 * @method messages(\AmisPhp\Renderer2\Form\Messages$v) 消息文案配置，记住这个优先级是最低的，如果你的接口返回了 msg，接口返回的优先。 
 * @method name(string$v)  
 * @method panelClassName($v) 配置容器 panel className 
 * @method primaryField(string$v) 设置主键 id, 当设置后，检测表单是否完成时（asyncApi），只会携带此数据。 
 * @method redirect(string$v)  
 * @method reload(string$v)  
 * @method submitOnChange(boolean$v) 修改的时候是否直接提交表单。 
 * @method submitOnInit(boolean$v) 表单初始先提交一次，联动的时候有用 
 * @method submitText(string$v) 默认的提交按钮名称，如果设置成空，则可以把默认按钮去掉。 
 * @method target(string$v) 默认表单提交自己会通过发送 api 保存数据，但是也可以设定另外一个 form 的 name 值，或者另外一个 `CRUD` 模型的 name 值。 如果 target 目标是一个 `Form` ，则目标 `Form` 会重新触发 `initApi` 和 `schemaApi`，api 可以拿到当前 form 数据。如果目标是一个 `CRUD` 模型，则目标模型会重新触发搜索，参数为当前 Form 数据。 
 * @method wrapWithPanel(boolean$v) 是否用 panel 包裹起来 
 * @method affixFooter(boolean$v) 是否固定底下的按钮在底部。 
 * @method promptPageLeave(boolean$v) 页面离开提示，为了防止页面不小心跳转而导致表单没有保存。 
 * @method promptPageLeaveMessage(string$v) 具体的提示信息，选填。 
 * @method rules(array$v) 组合校验规则，选填 
 * @method preventEnterSubmit(boolean$v) 禁用回车提交 
 * @method labelAlign($v) 表单label的对齐方式 
 * @method labelWidth(int|string$v) label自定义宽度，默认单位为px 

 */
class Form extends BaseSchema
{
    protected string $type = 'form';
}
