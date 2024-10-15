<?php

namespace AmisPhp;

use AmisPhp\Build\Method;
use AmisPhp\Build\Schema;

class Build
{

    static $list = [];

    public string $key;
    public string $keyOrigin;
    public  $schema;

    /**
     * @param Schema $schema
     */
    public function __construct( $schema, $key)
    {
        $this->keyOrigin = $key;
        $this->schema = $schema;
        $key= $this->getKey();

        self::$list[$key] = $this;
        $this->key        = $key;
    }

    public function render()
    {
        if (!($this->schema?->description ?? '')) {
            return;
        }
        // dump($this->key, $this->schema);
        $methods = Method::render(((array)($this->schema?->properties ?? [])), $this);
        $type = $this->getType();
        $className = $this->schema->name ?? "";
        if (!$type) {
            // 没有类型,跳过
            return false;
        }
        $classString = <<<html
<?php
namespace AmisPhp\Renderer2;
use AmisPhp\Renderer2\BaseSchema;
use AmisPhp\Build\Schema;
/**
$methods
 */
class {$className} extends BaseSchema
{
    public string \$type = '{$type}';
}

html;


    }



    /**
     * 获取真实类名
     *
     * @return string
     */
    public function getFullClassName()
    {
        $names     = explode('-', $this->key);
        $className = "\\AmisPhp\\Renderer2\\" . implode("\\", $names);

        return $className;
    }

    public function getKey()
    {
        $type = $this->getType();
        if(empty($type)){
            return $this->keyOrigin;
        }
        $list2=[];
        foreach (explode('-',$type) as $item){
            $list2[]=ucfirst($item);
        }

        return implode('-',$list2);
    }

    public function getType()
    {
        $type      = Method::getType((array)($this->schema?->properties ?? []));

        return $type;

    }
}