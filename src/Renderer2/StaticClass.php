<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Static 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/static
 *
 * @method tpl( $v) 内容模板， 支持 HTML 
 * @method text( $v) 内容模板，不支持 HTML 
 * @method popOver( $v) 配置查看详情功能 
 * @method quickEdit( $v) 配置快速编辑功能 
 * @method copyable( $v) 配置点击复制功能 
 * @method borderMode(string $v) 边框模式，默认是无边框的 
 * @method size(string $v) 表单项大小 

 */
class StaticClass extends BaseSchema
{
    protected string $type = 'static';
}
