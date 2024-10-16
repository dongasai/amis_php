<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * amis Page 渲染器。详情请见：https://aisuda.bce.baidu.com/amis/zh-CN/components/page
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
 * @method testid(string$v)  
 * @method title(string$v) 页面标题 
 * @method subTitle(string$v) 页面副标题 
 * @method remark($v) 页面描述, 标题旁边会出现个小图标，放上去会显示这个属性配置的内容。 
 * @method body($v) 内容区域 
 * @method bodyClassName($v) 内容区 css 类名 
 * @method aside($v) 边栏区域 
 * @method asideResizor(boolean$v) 边栏是否允许拖动 
 * @method asideSticky(boolean$v) 边栏内容是否粘住，即不跟随滚动。 
 * @method asideMinWidth(int$v) 边栏最小宽度 
 * @method asideMaxWidth(int$v) 边栏最小宽度 
 * @method asideClassName($v) 边栏区 css 类名 
 * @method data($v) 页面级别的初始数据 
 * @method headerClassName($v) 配置 header 容器 className 
 * @method initApi($v) 页面初始化的时候，可以设置一个 API 让其取拉取，发送数据会携带当前 data 数据（包含地址栏参数），获取得数据会合并到 data 中，供组件内使用。 
 * @method initFetch(boolean$v) 是否默认就拉取？ 
 * @method initFetchOn($v) 是否默认就拉取表达式 
 * @method messages($v)  
 * @method name($v)  
 * @method toolbar($v) 页面顶部区域，当存在 title 时在右上角显示。 
 * @method toolbarClassName($v) 配置 toolbar 容器 className 
 * @method interval(int$v) 配置轮询间隔，配置后 initApi 将轮询加载。 
 * @method silentPolling(boolean$v) 是否要静默加载，也就是说不显示进度 
 * @method stopAutoRefreshWhen($v) 配置停止轮询的条件。 
 * @method showErrorMsg(boolean$v) 是否显示错误信息，默认是显示的。 
 * @method regions(array$v) 默认不设置自动感觉内容来决定要不要展示这些区域 如果配置了，以配置为主。 

 */
class Page extends BaseSchema
{
    protected string $type = 'page';
}
