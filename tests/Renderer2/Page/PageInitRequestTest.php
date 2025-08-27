<?php

use PHPUnit\Framework\TestCase;
use AmisPhp\Renderer2\Page;
use AmisPhp\Renderer2\Tpl;

/**
 * 页面初始化请求
 * 
 */
class PageInitRequestTest extends TestCase
{
    /**
     * 页面初始化请求
     *
     * 测试页面初始化请求的配置
     * 
     * 对应的JSON配置:
     * {
     *   "type": "page",
     *   "initApi": "/amis/api/mock2/page/initData",
     *   "body": [
     *     {
     *       "type": "tpl",
     *       "tpl": "当前时间是：${date}"
     *     }
     *   ]
     * }
     */
    public function testPageInitRequest()
    {
        // 创建模板组件
        $bodyTpl = (new Tpl())->tpl('当前时间是：${date}');
        
        // 创建页面并设置属性
        $page = (new Page())
            ->initApi('/amis/api/mock2/page/initData')
            ->body([$bodyTpl]);

        // 期望的数组结构
        $expectedArray = [
            'type' => 'page',
            'attr' => [
                'initApi' => '/amis/api/mock2/page/initData',
                'body' => [$bodyTpl]
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