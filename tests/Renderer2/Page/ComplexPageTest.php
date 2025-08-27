<?php

use PHPUnit\Framework\TestCase;
use AmisPhp\Renderer2\Page;
use AmisPhp\Renderer2\Form;
use AmisPhp\Renderer2\TextControl;


/**
 * 渲染组件 测试
 * 
 */
class ComplexPageTest extends TestCase
{
    /**
     * 
     * 
     * 测试复杂的页面配置，包含表单和文本输入控件
     * 
     * 对应的JSON配置:
     * {
     *   "type": "page",
     *   "body": {
     *     "type": "form",
     *     "api": "/amis/api/mock2/form/saveForm",
     *     "body": [
     *       {
     *         "type": "input-text",
     *         "name": "name",
     *         "label": "姓名："
     *       }
     *     ]
     *   }
     * }
     */
    public function testComplexPageWithFormConfiguration()
    {
        // 创建文本输入控件
        $textInput = (new TextControl())
            ->name('name')
            ->label('姓名：');
        
        // 创建表单并设置属性
        $form = (new Form())
            ->api('/amis/api/mock2/form/saveForm')
            ->body([$textInput]);
        
        // 创建页面并设置body为表单
        $page = (new Page())
            ->body($form);

        // 期望的数组结构
        $expectedArray = [
            'type' => 'page',
            'attr' => [
                'body' => $form
            ]
        ];

        // 验证toArray方法
        $this->assertEquals($expectedArray, $page->toArray());

        // 验证JSON输出
        $expectedJson = json_encode($expectedArray);
        $this->assertEquals($expectedJson, (string)$page);
        $this->assertEquals($expectedJson, json_encode($page));
    }
}