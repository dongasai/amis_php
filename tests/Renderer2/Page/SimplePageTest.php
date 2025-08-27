<?php

use PHPUnit\Framework\TestCase;
use AmisPhp\Renderer2\Page;


/**
 * 基本用法测试
 * 
 */
class SimplePageTest extends TestCase
{
    /**
     * 测试简单的页面配置
     * 
     * 对应的JSON配置:
     * {
     *   "type": "page",
     *   "title": "标题",
     *   "body": "Hello World!"
     * }
     */
    public function testSimplePageConfiguration()
    {
        // 创建Page实例并设置属性
        $page = (new Page())
            ->title('标题')
            ->body('Hello World!');

        // 期望的数组结构
        $expectedArray = [
            'type' => 'page',
            'attr' => [
                'title' => '标题',
                'body' => 'Hello World!'
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