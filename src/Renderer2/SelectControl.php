<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * Select 下拉选择框。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/select
 *
 * @method autoComplete( $v) 自动完成 API，当输入部分文字的时候，会将这些文字通过 ${term} 可以取到，发送给接口。 接口可以返回匹配到的选项，帮助用户输入。 
 * @method menuTpl(string $v) 可以自定义菜单展示。 
 * @method showInvalidMatch(boolean $v) 当在value值未匹配到当前options中的选项时，是否value值对应文本飘红显示 
 * @method borderMode(string $v) 边框模式，全边框，还是半边框，或者没边框。 
 * @method selectMode(string $v) 勾选展示模式 
 * @method leftOptions(array $v) 当 selectMode 为 associated 时用来定义左侧的选项 
 * @method leftMode(string $v) 当 selectMode 为 associated 时用来定义左侧的选择模式 
 * @method rightMode(string $v) 当 selectMode 为 associated 时用来定义右侧的选择模式 
 * @method searchResultMode(string $v) 搜索结果展示模式 
 * @method columns(array $v) 当 selectMode 为 table 时定义表格列信息。 
 * @method searchResultColumns(array $v) 当 searchResultMode 为 table 时定义表格列信息。 
 * @method searchable(boolean $v) 可搜索？ 
 * @method searchApi( $v) 搜索 API 
 * @method itemHeight(int $v) 单个选项的高度，主要用于虚拟渲染 
 * @method virtualThreshold(int $v) 在选项数量达到多少时开启虚拟渲染 
 * @method checkAll(boolean $v) 可多选条件下，是否可全选 
 * @method defaultCheckAll(boolean $v) 可多选条件下，是否默认全选中所有值 
 * @method checkAllLabel(string $v) 可多选条件下，全选项文案，默认 ”全选“ 
 * @method maxTagCount(int $v) 标签的最大展示数量，超出数量后以收纳浮层的方式展示，仅在多选模式开启后生效 
 * @method overflowTagPopover(\AmisPhp\Renderer2\SelectControl\SelectControlOverflowTagPopover $v) 收纳标签的Popover配置 
 * @method optionClassName( $v) 选项的自定义CSS类名 
 * @method overlay(\AmisPhp\Renderer2\SelectControl\SelectControlOverlay $v) 下拉框 Popover 设置 
 * @method testIdBuilder( $v)  
 * @method size(string $v) 表单项大小 

 */
class SelectControl extends BaseSchema
{
    protected string $type = 'selectcontrol';
}
