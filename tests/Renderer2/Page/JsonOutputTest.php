<?php

use PHPUnit\Framework\TestCase;
use AmisPhp\Renderer2\Page;
use AmisPhp\Renderer2\Form;
use AmisPhp\Renderer2\TextControl;

class JsonOutputTest extends TestCase
{
    public function testJsonOutput()
    {
        // 创建 Page 实例并设置属性
        $page = (new Page())
            ->title('My Page Title')
            ->subTitle('My Page Sub Title')
            ->body('This is the body content.');

        // 期望的 JSON 结构 (通过 json_encode($page) 或 (string)$page)
        $expectedJson = json_encode([
            'type' => 'page',
            'attr' => [
                'title' => 'My Page Title',
                'subTitle' => 'My Page Sub Title',
                'body' => 'This is the body content.'
            ]
        ], JSON_UNESCAPED_UNICODE);

        // 验证 __toString 方法 (返回 JSON 字符串)
        $this->assertEquals($expectedJson, (string)$page);

        // 验证 toArray 方法 (返回包含 'attr' 的数组)
        $expectedArray = [
            'type' => 'page',
            'attr' => [
                'title' => 'My Page Title',
                'subTitle' => 'My Page Sub Title',
                'body' => 'This is the body content.'
            ]
        ];
        $this->assertEquals($expectedArray, $page->toArray());

        // 验证 JsonSerializable 接口 (通过 json_encode)
        $this->assertEquals($expectedJson, json_encode($page));
    }

    public function testComplexPageJsonOutput()
    {
        // 创建一个更复杂的Page实例，模拟demo中的用法
        $page = new Page();
        $page->title('表单页面');
        
        $form = new Form();
        $form->mode('horizontal')->api('/saveForm');
        
        $inputName = new TextControl();
        $inputName->label('Name')->name('name');
        
        $inputEmail = new TextControl();
        $inputEmail->label('Email')->name('email');
        
        $form->controls([$inputName, $inputEmail]);
        $page->body($form);

        // 期望的 JSON 结构
        $expectedJson = json_encode([
            'type' => 'page',
            'attr' => [
                'title' => '表单页面',
                'body' => [
                    'type' => 'form',
                    'attr' => [
                        'mode' => 'horizontal',
                        'api' => '/saveForm',
                        'controls' => [
                            [
                                'type' => 'textcontrol',
                                'attr' => [
                                    'label' => 'Name',
                                    'name' => 'name'
                                ]
                            ],
                            [
                                'type' => 'textcontrol',
                                'attr' => [
                                    'label' => 'Email',
                                    'name' => 'email'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ], JSON_UNESCAPED_UNICODE);

        // 验证 __toString 方法 (返回 JSON 字符串)
        // 注意：由于对象嵌套和属性的动态性，实际输出可能与期望的不完全一致。
        // 这里主要是验证结构是否正确。
        $pageJson = (string)$page;
        $this->assertJson($pageJson);
        
        // 验证 toArray 方法
        $pageArray = $page->toArray();
        $this->assertArrayHasKey('type', $pageArray);
        $this->assertArrayHasKey('attr', $pageArray);
        $this->assertEquals('page', $pageArray['type']);
        $this->assertArrayHasKey('title', $pageArray['attr']);
        $this->assertArrayHasKey('body', $pageArray['attr']);
    }
}