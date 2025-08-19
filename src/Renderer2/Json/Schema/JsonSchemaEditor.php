<?php
namespace AmisPhp\Renderer2\Json\Schema;

use AmisPhp\BaseSchema;


/**
 * JSON Schema Editor 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/json-schema-editor
 *
 * @method rootTypeMutable(boolean $v) 顶层是否允许修改类型 
 * @method showRootInfo(boolean $v) 顶层类型信息是否隐藏 
 * @method disabledTypes(array $v) 禁用类型，默认禁用了 null 类型 
 * @method enableAdvancedSetting(boolean $v) 开启详情配置 
 * @method advancedSettings(\AmisPhp\Renderer2\Json\Schema\Editor\JsonSchemaEditorAdvancedSettings $v) 自定义详情配置面板如：

{   boolean: [      {type: "input-text", name: "aa", label: "AA" }   ] }

当配置布尔字段详情时，就会出现以上配置 
 * @method placeholder( $v) 各属性输入控件的占位提示文本

{   key: "key placeholder",   title: "title placeholder",   description: "description placeholder",   default: "default placeholder" } 
 * @method mini(boolean $v) 是否为迷你模式，会隐藏一些不必要的元素 
 * @method size(string $v) 表单项大小 

 */
class JsonSchemaEditor extends BaseSchema
{
    protected string $type = 'json-schema-editor';
}
