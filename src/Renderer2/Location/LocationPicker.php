<?php
namespace AmisPhp\Renderer2\Location;

use AmisPhp\BaseSchema;


/**
 * Location 选点组件 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/location
 *
 * @method vendor(string $v) 选择地图类型 
 * @method ak(string $v) 有的地图需要设置 ak 信息 
 * @method autoSelectCurrentLoc(boolean $v) 是否自动选中当前地理位置 
 * @method onlySelectCurrentLoc(boolean $v) 是否限制只能选中当前地理位置 备注：可用于充当定位组件，只允许选择当前位置 
 * @method getLocationPlaceholder(string $v) 开启只读模式后的占位提示，默认为“点击获取位置信息” 备注：区分下现有的placeholder（“请选择位置”） 
 * @method hideViewControl(boolean $v) 是否隐藏地图控制组件，默认为false 
 * @method size(string $v) 表单项大小 

 */
class LocationPicker extends BaseSchema
{
    protected string $type = 'location-picker';
}
