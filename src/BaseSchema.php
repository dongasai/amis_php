<?php

namespace AmisPhp;

use Closure;


/**
 *
 * @method $this className($v)
 * @method $this style($v)
 * @method $this ref($v)
 * @method $this disabled($v)
 * @method $this disabledOn($v)
 * @method $this hidden($v)
 * @method $this hiddenOn($v)
 * @method $this visible($v)
 * @method $this visibleOn($v)
 * @method $this id($v)
 * @method $this value($v)
 *
 * @method $this onEvent($v) 配置事件
 *
 * @method getValue($value) 给组件赋值时自定义处理
 * @method setValue($value) 组件赋值提交时自定义处理
 * @method onDelete($value) 删除时自定义处理
 * @method defaultAttr() 可以自定义属性的设置
 */
class BaseSchema implements \JsonSerializable
{

    protected string $type;

    protected $attr = [];

    /**
     * @return static
     */
    public static function make(): self
    {
        return new static();
    }

    public function __set($name, $value)
    {
        $this->attr[$name] = $value;

        return $this;
    }

    public function __get($name)
    {
        return $this->attr[$name];
    }

    public function __call($name, $arguments)
    {
        $argument = $arguments[0];
        if ($argument instanceof Closure) {
            $argument = $argument();
        }
        $this->attr[$name] = $argument;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return $this->toArray();
    }

    public function __toString()
    {
        return json_encode($this->toArray());
    }

    public function toArray(): array
    {
        if (method_exists(static::class, 'defaultAttr')) {
            $this->defaultAttr();
        }

        return get_object_vars($this);
    }

    /**
     * @param string $type
     */
    public function type(string $type): void
    {
        $this->type = $type;
    }

}
