<?php

namespace AmisPhp\Build;

use AmisPhp\Build;

class Method
{

    static $skip = [
        '$ref',
        '$$id',
        'loadingConfig',
        'onEvent',// 事件
        'staticSchema',// 不知道什么东西

        'editorSetting',// editorSetting 编辑器配置，运行时可以忽略,
        'css',// css跳过
        'mobileCSS',// mobileCSS 跳过
        'cssVars',// cssVars 跳过
        'pullRefresh',// pullRefresh跳过,
        'args',// args
    ];

    static $tyoeList = [
        'boolean' => 'boolean',
        'bool'    => 'boolean',
        'string'  => 'string',
        'number'  => 'int',
        'array'   => 'array'
    ];
    /**
     * 必须的属性
     *
     * @var string[]
     */
    static $baseMethods = [
        'id',// id 必须的
        'style',// 样式是默认的,
        'type',// 类型是必须的
        'definitions',// definitions 跳过
        'disabled',//disabled 默认的
        'disabledOn',// 默认的
        'hidden',// 默认的,
        'hiddenOn',//hiddenOn 默认的
        'className',// className 默认的
    ];

    static public function render(array $array,Build $build)
    {
        $string = '';
        foreach ($array as $k => $item) {
            if (in_array($k, self::$skip)) {
                continue;
            }
            if (in_array($k, self::$baseMethods)) {
                continue;
            }
            $string .= self::render2($k, (array)$item,$build);
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
    static protected function render2($key, $schema,$build)
    {
        $v    = '';
        $desc = '';
        if ($schema['$ref'] ?? '') {
            // 有引用

        } else {
            $v = self::getValue($schema, $key,$build);
        }
        $desc = self::getDesc($schema, $key,$build);


        return " * @method $key($v\$v) $desc \r\n";

    }

    public function getValueRef($schema)
    {

    }

    static public function getValue($schema, $key,$build)
    {
        if (!isset($schema['type'])) {
            if ($schema['anyOf'] ?? '') {
                return '';
            }

            return '';
//            dd(__FILE__, __LINE__, $key, $schema);
        }

        if (is_array($schema['type'])) {
            return self::getArrayType($schema, $key);
        }
        $type = self::$tyoeList[$schema['type']] ?? '';
        if (empty($type)) {
            if($schema['type'] === 'object'){
                $type = self::getTypeObject($schema,$key,$build);
            }else{
                dd(__FILE__,__LINE__,$key, $schema);

            }
        }

        return $type;
    }

    static public function getArrayType($schema, $key)
    {
        $list2 = [];
        foreach ($schema['type'] as $item) {
            $list2[] = self::$tyoeList[$item];
        }

        return implode('|', $list2);
    }


    /**
     *
     * @param $schema
     * @param $key
     * @return string
     */
    static public function getTypeObject($schema, $key,Build $build)
    {
        $ob = new Build($schema,$build->key.'-'.ucfirst($key));

        return $ob->getFullClassName();
    }


    /**
     * 获取类型
     *
     * @param array $array
     * @return string
     */
    static public function getType(array $array)
    {
//        dump($array);
        if (isset($array['type'])) {
            $const = $array['type']->const ?? '';

            if($const){
                return $const;
            }
            // 其他
        }
        return $array['type']?->const ?? '';
    }


    /**
     *
     * @param $schema
     * @param $key
     * @param $build
     * @return string
     */
    static public function getDesc($schema, $key,$build)
    {
//        dd($schema,__FILE__,__LINE__);
        return $schema['description']??"";
    }

}
