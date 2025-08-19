<?php
namespace AmisPhp\Renderer2\Input;

use AmisPhp\BaseSchema;


/**
 * The InputTable class.
 *
 * @method addable(boolean $v) 可新增 
 * @method childrenAddable(boolean $v) 是否可以新增子项 
 * @method copyable(boolean $v) 可复制新增 
 * @method copyBtnLabel(string $v) 复制按钮文字 
 * @method copyBtnIcon(string $v) 复制按钮图标 
 * @method copyAddBtn(boolean $v) 是否显示复制按钮 
 * @method copyData(\AmisPhp\Renderer2\Input\Table\InputTableCopyData $v) 复制的时候用来配置复制映射的数据。默认值是 {&:$$}，相当与复制整个行数据 通常有时候需要用来标记是复制过来的，也可能需要删掉一下主键字段。 
 * @method draggable(boolean $v) 是否可以拖拽排序 
 * @method addApi( $v) 新增 API 
 * @method addBtnLabel(string $v) 新增按钮文字 
 * @method addBtnIcon(string $v) 新增按钮图标 
 * @method subAddBtnLabel(string $v) 孩子新增按钮文字 
 * @method subAddBtnIcon(string $v) 孩子新增按钮图标 
 * @method removable(boolean $v) 可否删除 
 * @method deleteApi( $v) 删除的 API 
 * @method editable(boolean $v) 可否编辑 
 * @method editBtnLabel(string $v) 更新按钮名称 
 * @method editBtnIcon(string $v) 更新按钮图标 
 * @method confirmBtnLabel(string $v) 确认按钮文字 
 * @method confirmBtnIcon(string $v) 确认按钮图标 
 * @method cancelBtnLabel(string $v) 取消按钮文字 
 * @method cancelBtnIcon(string $v) 取消按钮图标 
 * @method deleteBtnLabel(string $v) 删除按钮文字 
 * @method deleteBtnIcon(string $v) 删除按钮图标 
 * @method updateApi( $v) 更新 API 
 * @method scaffold( $v) 初始值，新增的时候 
 * @method deleteConfirmText(string $v) 删除确认文字 
 * @method valueField(string $v) 值字段 
 * @method needConfirm(boolean $v) 是否为确认的编辑模式。 
 * @method canAccessSuperData(boolean $v) 是否可以访问父级数据，正常 combo 已经关联到数组成员，是不能访问父级数据的。 
 * @method showIndex(boolean $v) 是否显示序号 
 * @method perPage(int $v) 分页个数，默认不分页 
 * @method maxLength( $v) 限制最大个数 
 * @method minLength( $v) 限制最小个数 
 * @method showFooterAddBtn(boolean $v) 是否显示底部新增按钮 
 * @method showTableAddBtn(boolean $v) 是否显示表格操作栏新增按钮 
 * @method footerAddBtn( $v) 底部新增按钮配置 
 * @method enableStaticTransform(boolean $v) 是否开启 static 状态切换 
 * @method toolbarClassName( $v) 底部工具栏CSS样式类 
 * @method matchFunc( $v) 自定义搜索匹配函数，当存在列的 searchable 为 true 时，会基于该函数计算的匹配结果进行过滤，主要用于处理列字段类型较为复杂或者字段值格式和后端返回不一致的场景

参数说明

 * `items` 当前表格数据  * `itemsRaw` 当前表格数据（未处理）  * `options` 配置  * `options.query` 查询条件  * `options.columns` 列配置  * `options.matchSorter` 系统默认的排序方法 
 * @method size(string $v) 表单项大小 
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
class InputTable extends BaseSchema
{
    protected string $type = 'input-table';
}
