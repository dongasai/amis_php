<?php
namespace AmisPhp\Renderer2\Input;

use AmisPhp\BaseSchema;


/**
 * City 城市选择框。 文档：https://aisuda.bce.baidu.com/amis/zh-CN/components/form/city
 *
 * @method extractValue(boolean $v) 开启后只会存城市的 code 信息 
 * @method joinValues(boolean $v) 是否将各个信息拼接成字符串。 
 * @method delimiter(string $v) 拼接的符号是啥？ 
 * @method allowCity(boolean $v) 允许选择城市？ 
 * @method allowDistrict(boolean $v) 允许选择地区？ 
 * @method allowStreet(boolean $v) 允许选择街道？ 
 * @method searchable(boolean $v) 是否显示搜索框 
 * @method itemClassName(string $v) 下拉框className 
 * @method size(string $v) 表单项大小 

 */
class InputCity extends BaseSchema
{
    protected string $type = 'input-city';
}
