<?php

namespace AmisPhp;

use AmisPhp\Build\Method;
use AmisPhp\Build\Schema;

class Build
{

    static $list = [];

    public string $key;
    public string $keyOrigin;
    public        $schema;

    /**
     * @param Schema $schema
     */
    public function __construct($schema, $key)
    {
        $this->keyOrigin = $key;
        $this->schema    = $schema;
        $key             = $this->getKey();

        self::$list[$key] = $this;
        $this->key        = $key;
    }

    public function render($write = true)
    {
        if (!($this->schema?->description ?? '')) {
            return;
        }
        // dump($this->key, $this->schema);
        $methods          = Method::render(((array)($this->schema?->properties ?? [])), $this);
        $type             = $this->getType();
        $className        = $this->getClassName();
        $classDescription = $this->getDescription();
        $namespace        = $this->getNameSpace();
        if (!$type) {
            // 没有类型,跳过
            return false;
        }
        $classString = <<<html
<?php
namespace $namespace;

use AmisPhp\BaseSchema;


/**
 * $classDescription
 *
$methods
 */
class {$className} extends BaseSchema
{
    protected string \$type = '{$type}';
}

html;

        $path = $this->getFilePath();
        if($write){
            file_put_contents($path, $classString);
        }
//        dd($path);

    }


    /**
     * 获取真实类名
     *
     * @return string
     */
    public function getFullClassName()
    {
        $names     = explode('-', $this->key);
        $names2 = $names;
        array_pop($names2);
        $className = implode("", $names);
        $nameSpace = $this->getNameSpace();
        return '\\'.$nameSpace . '\\' . $className;
        if(count($names2)> 1){
            $className = "\\AmisPhp\\Renderer2\\". implode("\\", $names2). implode("", $names);

        }elseif($names2 == 1){
            $className = "\\AmisPhp\\Renderer2\\".  $names2[0].'\\'. implode("", $names);

        }else{
            $className = "\\AmisPhp\\Renderer2\\".  implode("", $names);

        }

        return $className;
    }

    public function getClassName()
    {
        $class =  substr($this->getFullClassName(), strrpos($this->getFullClassName(), '\\') + 1);


        return $class;
    }

    public function getNameSpace()
    {
        $names = $this->getKey();
        $names = explode('-', $names);
        if (count($names) > 1) {
//                dd($names);
            array_pop($names);
            return 'AmisPhp\\Renderer2\\' . implode('\\', $names);

        } else {
            return 'AmisPhp\\Renderer2';
        }
    }


    public function getKey()
    {
        $type = $this->getType();
        if (empty($type)) {
            if (substr($this->keyOrigin, -6) == 'Schema') {
                return substr($this->keyOrigin, 0, -6);
            }

            return $this->keyOrigin;
        }
        $list2 = [];
        foreach (explode('-', $type) as $item) {
            $list2[] = ucfirst($item);
        }

        return implode('-', $list2);
    }

    public function getType()
    {
        $type = Method::getType((array)($this->schema?->properties ?? []));

        return $type;
    }

    public function getFilePath()
    {
        $name = $this->getFullClassName();
//        dump($name);
        $name = str_replace('\\', '/', $name);
       // /AmisPhp
        $name = substr($name, 19);

        $path = __DIR__ . '/Renderer2/' . $name . '.php';
//        dump($path,$name);
        $dir  = dirname($path);

        if (!is_dir($dir)) {
//            dump($dir);
            $dirmk = mkdir($dir, 0777, true);
//            dump($dirmk);
        }

        return $path;
    }

    public function getDescription()
    {
        return $this->schema?->description;

    }

}
