<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Transfer 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/transfer
 *
 * @method showArrow(boolean $v) 是否显示剪头 
 * @method sortable(boolean $v) 可排序？ 
 * @method selectMode(string $v) 勾选展示模式 
 * @method resultListModeFollowSelect(boolean $v) 结果面板是否追踪显示 
 * @method leftOptions(array $v) 当 selectMode 为 associated 时用来定义左侧的选项 
 * @method leftMode(string $v) 当 selectMode 为 associated 时用来定义左侧的选择模式 
 * @method rightMode(string $v) 当 selectMode 为 associated 时用来定义右侧的选择模式 
 * @method searchResultMode(string $v) 搜索结果展示模式 
 * @method columns(array $v) 当 selectMode 为 table 时定义表格列信息。 
 * @method searchResultColumns(array $v) 当 searchResultMode 为 table 时定义表格列信息。 
 * @method searchable(boolean $v) 可搜索？ 
 * @method resultSearchable(boolean $v) 结果（右则）列表的检索功能，当设置为true时，可以通过输入检索模糊匹配检索内容 
 * @method searchApi( $v) 搜索 API 
 * @method selectTitle(string $v) 左侧的标题文字 
 * @method resultTitle(string $v) 右侧结果的标题文字 
 * @method menuTpl( $v) 用来丰富选项展示 
 * @method valueTpl( $v) 用来丰富值的展示 
 * @method searchPlaceholder(string $v) 左侧列表搜索框提示 
 * @method resultSearchPlaceholder(string $v) 右侧列表搜索框提示 
 * @method statistics(boolean $v) 统计数字 
 * @method itemHeight(int $v) 单个选项的高度，主要用于虚拟渲染 
 * @method virtualThreshold(int $v) 在选项数量达到多少时开启虚拟渲染 
 * @method showInvalidMatch(boolean $v) 当在value值未匹配到当前options中的选项时，是否value值对应文本飘红显示 
 * @method onlyChildren(boolean $v) 树形模式下，仅选中子节点 
 * @method initiallyOpen(boolean $v) 是否默认都展开 
 * @method autoCheckChildren(boolean $v) ui级联关系，true代表级联选中，false代表不级联，默认为true 
 * @method pagination(\AmisPhp\Renderer2\BaseTransferControl\BaseTransferControlPagination $v) 分页配置，selectMode为默认和table才会生效 
 * @method size(string $v) 表单项大小 

 */
class Transfer extends BaseSchema
{
    protected string $type = 'transfer';
}
