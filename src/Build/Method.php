<?php

namespace AmisPhp\Build;

class Method
{

    static $skip = [
        '$ref',
        '$$id',
        'loadingConfig',
        'onEvent',// 事件
        'type',// 类型是必须的
        'staticSchema',// 不知道什么东西
        'style',// 样式是默认的,
        'editorSetting',// editorSetting 编辑器配置，运行时可以忽略,
        'css',// css跳过
        'mobileCSS',// mobileCSS 跳过
        'definitions',// definitions 跳过
        'cssVars',// cssVars 跳过
        'pullRefresh',// pullRefresh跳过,
        'args',// args
    ];

    static public function render(array $array)
    {
        $string = '';
        foreach ($array as $k => $item) {
            if (in_array($k, self::$skip)) {
                continue;
            }
            $string .= self::render2($k, (array)$item);
        }
        // dd($string);

        return $string;

    }


    /**
     * Schema
     *
     * @param $schema
     * @return string
     */
    static protected function render2($key, $schema)
    {
        $v    = '';
        $desc = '';
        if ($schema['$ref'] ?? '') {
            // 有引用

        } else {
            $v = self::getValue($schema, $key);
        }

        return "@method $key($v\$v) $desc \r\n";

    }

    public function getValueRef($schema)
    {

    }

   static public function getValue($schema, $key)
    {
        if (!isset($schema['type'])) {
            if($schema['anyOf']??''){
                return '';
            }
            dd(__FILE__,__LINE__,$key, $schema);
        }
        $c    = [
            'boolean' => 'boolean',
            'bool'    => 'boolean',
            'string'  => 'string',
            'number'  => 'int',
            'array'   => 'array'
        ];
        $type = $c[$schema['type']] ?? '';
        if (empty($type)) {
            dd($key, $schema);
        }

        return $type;
    }

    /**
     * 获取类型
     *
     * @param array $array
     * @return string
     */
    static public function getType(array $array)
    {
        return $array->type?->const ?? '';
    }

}
