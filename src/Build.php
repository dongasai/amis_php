<?php

namespace AmisPhp;

use AmisPhp\Build\AllOf;
use AmisPhp\Build\Method;
use AmisPhp\Build\Schema;

class Build
{

    /**
     *
     *
     * @var Build[] array
     */
    static $list = [];

    public string $key;
    public string $keyOrigin;
    public        $schema;

    static $classAs = [
        'Static' => 'StaticClass',
        'Switch' => 'SwitchClass'
    ];

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

    public function renderMethods()
    {
//        dump($this->keyOrigin);
        if ($this->schema?->allOf) {
            $methods = AllOf::renderMethod(((array)($this->schema?->allOf ?? [])), $this);
        } else {
            $methods = Method::render(((array)($this->schema?->properties ?? [])), $this);
        }
        if ($this->keyOrigin == 'BaseCardsSchema') {
//            dd($methods);
        }

        return $methods;
    }

    public function render($write = true)
    {
        $description = $this->getDescription();
        // 不再跳过没有描述的类
        // if (!($description)) {
        //     echo "没有description,跳过 {$this->keyOrigin} \n";
        //     return;
        // }
        
        // dump($this->key, $this->schema);
        $methods          = $this->renderMethods();
        $type             = $this->getType();
        $className        = $this->getClassName();
        $classDescription = $this->getDescription();
        $namespace        = $this->getNameSpace();
        
        // 如果没有类型，使用键名作为类型
        if (!$type) {
            $type = strtolower($this->key);
        }
        
        // 检查是否有 allOf 引用其他类，如果有则继承该类
        $extendsClass = "BaseSchema";
        if (!empty($this->schema?->allOf) && is_array($this->schema->allOf)) {
            foreach ($this->schema->allOf as $item) {
                if (isset($item->{'$ref'}) && $item->{'$ref'} != '#/definitions/BaseSchema') {
                    $refKey = str_replace('#/definitions/', '', $item->{'$ref'});
                    // 将 Schema 名称转换为类名
                    if (substr($refKey, -6) == 'Schema') {
                        $refClassName = substr($refKey, 0, -6);
                        // 转换为大驼峰命名
                        $parts = explode('-', $refClassName);
                        $refClassName = implode('', array_map('ucfirst', $parts));
                        
                        // 检查该类是否存在
                        if (isset(self::$list[$refKey])) {
                            $extendsClass = $refClassName;
                            break;
                        }
                    }
                }
            }
        }
        
        // 如果没有描述，使用默认描述
        if (empty($classDescription)) {
            $classDescription = "The {$className} class.";
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
class {$className} extends $extendsClass
{
    protected string \$type = '{$type}';
}

html;

        $path = $this->getFilePath();
        if ($write) {
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
        $className = $this->getClassName();
        $nameSpace = $this->getNameSpace();

        return '\\' . $nameSpace . '\\' . $className;
    }

    public function getClassName()
    {
        $names  = explode('-', $this->key);
        $names2 = $names;
        array_pop($names2);
        $className = implode("", $names);
        $className = ucfirst($className);

        if (isset(self::$classAs[$className])) {
            $className = self::$classAs[$className];
        }

        return $className;
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
                $key = substr($this->keyOrigin, 0, -6);
                return $key;
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
        $dir = dirname($path);

        if (!is_dir($dir)) {
//            dump($dir);
            $dirmk = mkdir($dir, 0777, true);
//            dump($dirmk);
        }

        return $path;
    }


    public function getDescription(): string
    {
        $description = $this->schema?->description ?? '';
        if(empty($description)){
            // 没有描述,但是有上级
            // 检查是否有 allOf 引用其他定义
            if (!empty($this->schema?->allOf) && is_array($this->schema->allOf)) {
                foreach ($this->schema->allOf as $item) {
                    if (isset($item->{'$ref'})) {
                        $refKey = str_replace('#/definitions/', '', $item->{'$ref'});
                        if (isset(self::$list[$refKey])) {
                            $refDescription = self::$list[$refKey]->getDescription();
                            if (!empty($refDescription)) {
                                return $refDescription;
                            }
                        }
                    }
                }
            }
        }
        return $description;
    }

}
