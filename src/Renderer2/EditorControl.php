<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Editor 代码编辑器 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/editor
 *
 * @method language(string $v) 语言类型 
 * @method size(string $v) 编辑器大小 
 * @method allowFullscreen(boolean $v) 是否展示全屏模式开关 
 * @method editorDidMount(string $v) 获取编辑器底层实例 

 */
class EditorControl extends BaseSchema
{
    protected string $type = 'editorcontrol';
}
