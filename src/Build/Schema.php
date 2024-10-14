<?php

namespace AmisPhp\Build;

class Schema
{

    /**
     * 属性列表
     * @var Schema[] $properties
     */
    public $properties;

    /**
     * 必须的属性
     * @var string[] $required
     *
     */
    public $required;

    /**
     * 允许附加属性
     * @var boolean $additionalProperties
     */
    public $additionalProperties;


    /**
     * 描述
     * @var string $description
     */
    public $description;

}