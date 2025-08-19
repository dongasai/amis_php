<?php
namespace AmisPhp\Renderer2\Tree;

use AmisPhp\BaseSchema;


/**
 * Tree 下拉选择框。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/tree
 *
 * @method hideRoot(boolean $v) 是否隐藏顶级 
 * @method rootLabel(string $v) 顶级选项的名称 
 * @method rootValue( $v) 顶级选项的值 
 * @method showIcon(boolean $v) 显示图标 
 * @method cascade(boolean $v) 父子之间是否完全独立。 
 * @method nodeBehavior(array $v) 节点行为配置，默认为选中 
 * @method withChildren(boolean $v) 选父级的时候是否把子节点的值也包含在内。 
 * @method onlyChildren(boolean $v) 选父级的时候，是否只把子节点的值包含在内 
 * @method onlyLeaf(boolean $v) 单选时，只运行选择叶子节点 
 * @method rootCreatable(boolean $v) 顶级节点是否可以创建子节点 
 * @method hideNodePathLabel(boolean $v) 是否隐藏选择框中已选中节点的祖先节点的文本信息 
 * @method enableNodePath(boolean $v) 是否开启节点路径模式 
 * @method pathSeparator(string $v) 开启节点路径模式后，节点路径的分隔符 
 * @method showOutline(boolean $v) 是否显示展开线 
 * @method deferApi( $v) 懒加载接口 
 * @method maxTagCount(int $v) 标签的最大展示数量，超出数量后以收纳浮层的方式展示，仅在多选模式开启后生效 
 * @method overflowTagPopover( $v) 收纳标签的Popover配置 
 * @method menuTpl(string $v) 自定义选项 
 * @method autoCancelParent(boolean $v) 子节点取消时自动取消父节点的值，默认为false 
 * @method itemActions( $v) 自定义节点操作栏区域 
 * @method enableDefaultIcon(boolean $v) 是否为选项添加默认的Icon，默认值为true 
 * @method testIdBuilder( $v)  
 * @method size(string $v) 表单项大小 

 */
class TreeSelect extends BaseSchema
{
    protected string $type = 'tree-select';
}
