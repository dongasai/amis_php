<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * amis Page 渲染器。详情请见：https://aisuda.bce.baidu.com/amis/zh-CN/components/page 一个页面只允许有一个 Page 渲染器。
 *
 * @method title(string $v) 页面标题 
 * @method subTitle(string $v) 页面副标题 
 * @method remark( $v) 页面描述, 标题旁边会出现个小图标，放上去会显示这个属性配置的内容。 
 * @method body( $v) 内容区域 
 * @method bodyClassName( $v) 内容区 css 类名 
 * @method aside( $v) 边栏区域 
 * @method asideResizor(boolean $v) 边栏是否允许拖动 
 * @method asideSticky(boolean $v) 边栏内容是否粘住，即不跟随滚动。 
 * @method asidePosition(string $v) 边栏位置 
 * @method asideMinWidth(int $v) 边栏最小宽度 
 * @method asideMaxWidth(int $v) 边栏最小宽度 
 * @method asideClassName( $v) 边栏区 css 类名 
 * @method data( $v) 页面级别的初始数据 
 * @method headerClassName( $v) 配置 header 容器 className 
 * @method initApi( $v) 页面初始化的时候，可以设置一个 API 让其取拉取，发送数据会携带当前 data 数据（包含地址栏参数），获取得数据会合并到 data 中，供组件内使用。 
 * @method initFetch(boolean $v) 是否默认就拉取？ 
 * @method initFetchOn( $v) 是否默认就拉取表达式 
 * @method messages( $v)  
 * @method name( $v)  
 * @method toolbar( $v) 页面顶部区域，当存在 title 时在右上角显示。 
 * @method toolbarClassName( $v) 配置 toolbar 容器 className 
 * @method interval(int $v) 配置轮询间隔，配置后 initApi 将轮询加载。 
 * @method silentPolling(boolean $v) 是否要静默加载，也就是说不显示进度 
 * @method stopAutoRefreshWhen( $v) 配置停止轮询的条件。 
 * @method showErrorMsg(boolean $v) 是否显示错误信息，默认是显示的。 
 * @method regions(array $v) 默认不设置自动感觉内容来决定要不要展示这些区域 如果配置了，以配置为主。 

 */
class Page extends BaseSchema
{
    protected string $type = 'page';
}
