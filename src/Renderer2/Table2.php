<?php
namespace AmisPhp\Renderer2;

use AmisPhp\BaseSchema;


/**
 * The Table2 class.
 *
 * @method title( $v) 表格标题 
 * @method source( $v) 表格数据源 
 * @method columnsTogglable( $v) 表格可自定义列 
 * @method columns(array $v) 表格列配置 
 * @method rowSelection( $v) 表格可选择配置 
 * @method expandable( $v) 表格行可展开配置 
 * @method sticky(boolean $v) 粘性头部 
 * @method loading( $v) 加载中 
 * @method itemBadge( $v) 行角标内容 
 * @method showBadge(boolean $v) 是否展示行角标 
 * @method popOverContainer( $v) 指定挂载dom 
 * @method keyField(string $v) 多选、嵌套展开记录的ID字段名 默认id 
 * @method childrenColumnName(string $v) 数据源嵌套自定义字段名 
 * @method rowClassNameExpr(string $v) 自定义行样式 
 * @method lineHeight(string $v) 是否固定内容行高度 
 * @method bordered(boolean $v) 是否展示边框 
 * @method showHeader(boolean $v) 是否展示表头 
 * @method footer( $v) 指定表尾 
 * @method quickSaveApi( $v) 快速编辑后用来批量保存的 API 
 * @method quickSaveItemApi( $v) 快速编辑配置成及时保存时使用的 API 
 * @method messages( $v) 接口报错信息配置 
 * @method reload(string $v) 重新加载的组件名称 
 * @method actions(array $v) 操作列配置 
 * @method maxKeepItemSelectionLength(int $v) 批量操作最大限制数 
 * @method keepItemSelectionOnPageChange(boolean $v) 翻页是否保存数据 
 * @method selectable(boolean $v) 是否可选择 作用同rowSelection 兼容原CRUD属性 默认多选 
 * @method multiple(boolean $v) 是否可多选 作用同rowSelection.type 兼容原CRUD属性 不设置认为是多选 仅设置selectable才起作用 
 * @method primaryField(string $v) 设置ID字段名 作用同keyFiled 兼容原CURD属性 
 * @method tableLayout(string $v)  
 * @method autoFillHeight( $v) 表格自动计算高度 
 * @method canAccessSuperData(boolean $v) 表格是否可以获取父级数据域值，默认为false 
 * @method lazyRenderAfter(int $v) 当一次性渲染太多列上有用，默认为 100，可以用来提升表格渲染性能 

 */
class Table2 extends BaseSchema
{
    protected string $type = 'table2';
}
