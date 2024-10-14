<?php

namespace AmisPhp;

use AmisPhp\Build\Method;
use AmisPhp\Build\Schema;

class Build
{

    /**
     * @param Schema $schema
     */
    public function __construct(public $schema,public $key)
    {

    }

    public function render()
    {
        if(!($this->schema?->description??'')){
                return ;
        }
        dump($this->key,$this->schema);
        $methods = Method::render(((array)$this->schema->properties ?? []));

        $className = $this->schema->name ?? "";
        $type      = Method::getType((array)($this->schema->properties ?? []));
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

}