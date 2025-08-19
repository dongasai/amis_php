<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * The Table class.
 *
 * @method affixHeader(boolean $v) 是否固定表头 
 * @method affixFooter(boolean $v) 是否固底 
 * @method columns(array $v) 表格的列信息 
 * @method columnsTogglable( $v) 展示列显示开关，自动即：列数量大于或等于5个时自动开启 
 * @method footable( $v) 是否开启底部展示功能，适合移动端展示 
 * @method footerClassName( $v) 底部外层 CSS 类名 
 * @method headerClassName( $v) 顶部外层 CSS 类名 
 * @method placeholder( $v) 占位符 
 * @method showIndex(boolean $v) 是否显示序号 
 * @method showFooter(boolean $v) 是否显示底部 
 * @method showHeader(boolean $v) 是否显示头部 
 * @method source( $v) 数据源：绑定当前环境变量 
 * @method tableClassName( $v) 表格 CSS 类名 
 * @method title(string $v) 标题 
 * @method toolbarClassName( $v) 工具栏 CSS 类名 
 * @method combineNum( $v) 合并单元格配置，配置数字表示从左到右的多少列自动合并单元格。 
 * @method combineFromIndex(int $v) 合并单元格配置，配置从第几列开始合并。 
 * @method prefixRow(array $v) 顶部总结行 
 * @method affixRow(array $v) 底部总结行 
 * @method resizable(boolean $v) 是否可调整列宽 
 * @method rowClassNameExpr(string $v) 行样式表表达式 
 * @method itemBadge( $v) 行角标 
 * @method autoGenerateFilter( $v) 开启查询区域，会根据列元素的searchable属性值，自动生成查询条件表单 
 * @method canAccessSuperData(boolean $v) 表格是否可以获取父级数据域值，默认为false 
 * @method autoFillHeight( $v) 表格自动计算高度 
 * @method tableLayout(string $v) table layout 
 * @method deferApi( $v) 懒加载 API，当行数据中用 defer: true 标记了，则其孩子节点将会用这个 API 来拉取数据。 
 * @method persistKey(string $v) 持久化 key 

 */
class Table extends BaseSchema
{
    protected string $type = 'table';
}
