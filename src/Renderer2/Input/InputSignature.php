<?php
namespace AmisPhp\Renderer2\Input;

use AmisPhp\BaseSchema;


/**
 * The InputSignature class.
 *
 * @method width(int $v) 组件宽度，默认占满父容器 
 * @method height(int $v) 组件高度，默认占满父容器 
 * @method color(string $v) 组件字段颜色 
 * @method bgColor(string $v) 组件背景颜色 
 * @method clearBtnLabel(string $v) 清空按钮名称 
 * @method clearBtnIcon(string $v) 清空按钮图标 
 * @method undoBtnLabel(string $v) 撤销按钮名称 
 * @method undoBtnIcon(string $v) 清空按钮图标 
 * @method confirmBtnLabel(string $v) 确认按钮名称 
 * @method confirmBtnIcon(string $v) 确认按钮图标 
 * @method embed(boolean $v) 是否内嵌 
 * @method embedConfirmLabel(string $v) 弹窗确认按钮名称 
 * @method embedConfirmIcon(string $v) 弹窗确认按钮图标 
 * @method ebmedCancelLabel(string $v) 弹窗取消按钮名称 
 * @method ebmedCancelIcon(string $v) 弹窗取消按钮图标 
 * @method embedBtnIcon(string $v) 弹窗按钮图标 
 * @method embedBtnLabel(string $v) 弹窗按钮文案 
 * @method uploadApi( $v) 上传签名图片api, 仅在内嵌模式下生效 
 * @method size(string $v) 表单项大小 

 */
class InputSignature extends BaseSchema
{
    protected string $type = 'input-signature';
}
