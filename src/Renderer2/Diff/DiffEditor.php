<?php
namespace AmisPhp\Renderer2\Diff;

use AmisPhp\BaseSchema;


/**
 * Diff 编辑器 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/diff
 *
 * @method diffValue( $v) 左侧面板的值， 支持取变量。 
 * @method language(string $v) 语言，参考 monaco-editor 
 * @method options( $v) 编辑器配置 
 * @method size(string $v) 表单项大小 

 */
class DiffEditor extends BaseSchema
{
    protected string $type = 'diff-editor';
}
