<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Service 服务类控件。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/service
 *
 * @method api( $v) 页面初始化的时候，可以设置一个 API 让其取拉取，发送数据会携带当前 data 数据（包含地址栏参数），获取得数据会合并到 data 中，供组件内使用。 
 * @method ws(string $v) WebScocket 地址，用于实时获取数据 
 * @method dataProvider( $v) 通过调用外部函数来获取数据 
 * @method body( $v) 内容区域 
 * @method fetchOn( $v)  
 * @method initFetch(boolean $v) 是否默认就拉取？ 
 * @method initFetchOn( $v) 是否默认就拉取？通过表达式来决定. 
 * @method schemaApi( $v) 用来获取远程 Schema 的 api 
 * @method initFetchSchema(boolean $v) 是否默认加载 schemaApi 
 * @method initFetchSchemaOn( $v) 用表达式来配置。 
 * @method interval(int $v) 是否轮询拉取 
 * @method silentPolling(boolean $v) 是否静默拉取 
 * @method stopAutoRefreshWhen( $v) 关闭轮询的条件。 
 * @method messages( $v)  
 * @method name( $v)  
 * @method showErrorMsg(boolean $v) 是否以Alert的形式显示api接口响应的错误信息，默认展示 

 */
class Service extends BaseSchema
{
    protected string $type = 'service';
}
