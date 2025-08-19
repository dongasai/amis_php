<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * IFrame 渲染器 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/iframe
 *
 * @method src( $v) 页面地址 
 * @method width(int|string $v)  
 * @method height(int|string $v)  
 * @method allow(string $v)  
 * @method name(string $v)  
 * @method referrerpolicy(string $v)  
 * @method sandbox(string $v)  

 */
class Iframe extends BaseSchema
{
    protected string $type = 'iframe';
}
