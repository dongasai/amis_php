<?php

namespace AmisPhp\Build;

use AmisPhp\Build;

class AllOf
{

    /**
     * 渲染方法
     *
     * @param array $array
     * @param Build $build
     * @return void
     */
    static public function renderMethod(array $arrayPt, Build $build)
    {
        $methods = '';
        
        /** 
         * @var \stdClass $pt
         */
        foreach ($arrayPt as $pt) {
            if ($pt?->type) {
                // 有类型
                $methods .= Method::render((array)$pt->properties, $build);
            }
            if ($pt->{'$ref'} ?? "") {
                if ($pt->{'$ref'} != '#/definitions/BaseSchema') {
                    $name = self::ref2name($pt->{'$ref'});
                    $obj  = Build::$list[$name];
                    if ($obj) {
                        $methods .= $obj->renderMethods();
//                        dd($pt->{'$ref'}, $name, $obj);
                    }
                }
            }
        }

        return $methods;
    }

    public static function ref2name(string $ref)
    {
        $keyOrigin = substr($ref, 14);

        if (substr($keyOrigin, -6) == 'Schema') {
            return substr($keyOrigin, 0, -6);
        }

        return $keyOrigin;
    }

    public static function ps()
    {

    }

}