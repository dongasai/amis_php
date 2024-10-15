<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Chart 图表渲染器。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/chart
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
 * @method chartTheme($v) Chart 主题配置 
 * @method api($v) 图表配置接口 
 * @method initFetch(boolean$v) 是否初始加载。 
 * @method initFetchOn($v) 是否初始加载用表达式来配置 
 * @method config($v) 配置echart的config，支持数据映射。如果用了数据映射，为了同步更新，请设置 trackExpression 
 * @method trackExpression(string$v) 跟踪表达式，如果这个表达式的运行结果发生变化了，则会更新 Echart，当 config 中用了数据映射时有用。 
 * @method width(int|string$v) 宽度设置 
 * @method height(int|string$v) 高度设置 
 * @method interval(int$v) 刷新时间 
 * @method name($v)  
 * @method dataFilter($v)  
 * @method source($v)  
 * @method disableDataMapping(boolean$v) 默认开启 Config 中的数据映射，如果想关闭，请开启此功能。 
 * @method clickAction($v) 点击行为配置，可以用来满足下钻操作等。 
 * @method replaceChartOption(boolean$v) 默认配置时追加的，如果更新配置想完全替换配置请配置为 true. 
 * @method unMountOnHidden(boolean$v) 不可见的时候隐藏 
 * @method mapURL($v) 获取 geo json 文件的地址 
 * @method mapName(string$v) 地图名称 
 * @method loadBaiduMap(boolean$v) 加载百度地图 

 */
class Chart extends BaseSchema
{
    protected string $type = 'chart';
}
