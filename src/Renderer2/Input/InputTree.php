<?php
namespace AmisPhp\Renderer2\Input;

use AmisPhp\BaseSchema;


/**
 * Tree 下拉选择框。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/tree
 *
 * @method hideRoot(boolean $v) 是否隐藏顶级 
 * @method rootLabel(string $v) 顶级选项的名称 
 * @method rootValue( $v) 顶级选项的值 
 * @method showIcon(boolean $v) 显示图标 
 * @method autoCheckChildren(boolean $v) ui级联关系，true代表级联选中，false代表不级联，默认为true 
 * @method cascade(boolean $v) 该属性代表数据级联关系，autoCheckChildren为true时生效，默认为false，具体数据级联关系如下： 1.casacde为false，ui行为为级联选中子节点，子节点禁用；值只包含父节点的值 2.cascade为false，withChildren为true，ui行为为级联选中子节点，子节点禁用；值包含父子节点的值 3.cascade为true，ui行为级联选中子节点，子节点可反选，值包含父子节点的值，此时withChildren属性失效 4.cascade不论为true还是false，onlyChildren为true，ui行为级联选中子节点，子节点可反选，值只包含子节点的值 
 * @method nodeBehavior(array $v) 节点行为配置，默认为选中 
 * @method autoCancelParent(boolean $v) 子节点取消时自动取消父节点的值，默认为false 
 * @method withChildren(boolean $v) 选父级的时候是否把子节点的值也包含在内。 
 * @method onlyChildren(boolean $v) 选父级的时候，是否只把子节点的值包含在内 
 * @method onlyLeaf(boolean $v) 单选时，只运行选择叶子节点 
 * @method rootCreatable(boolean $v) 顶级节点是否可以创建子节点 
 * @method enableNodePath(boolean $v) 是否开启节点路径模式 
 * @method pathSeparator(string $v) 开启节点路径模式后，节点路径的分隔符 
 * @method showOutline(boolean $v) 是否显示展开线 
 * @method deferApi( $v) 懒加载接口 
 * @method highlightTxt(string $v) 需要高亮的字符串 
 * @method enableDefaultIcon(boolean $v) 是否为选项添加默认的Icon，默认值为true 
 * @method searchable(boolean $v) 是否开启搜索 
 * @method searchApi( $v) 搜索 API 
 * @method itemActions( $v) 自定义节点操作栏区域 
 * @method searchConfig(\AmisPhp\Renderer2\Input\Tree\InputTreeSearchConfig $v) 搜索框的配置 
 * @method treeClassName(string $v) tree 组件层类名 
 * @method heightAuto(boolean $v) 高度自动增长？ 
 * @method iconField(string $v) 设置 icon 字段名 
 * @method size(string $v) 表单项大小 

 */
class InputTree extends BaseSchema
{
    protected string $type = 'input-tree';
}
