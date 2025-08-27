<?php

use PHPUnit\Framework\TestCase;
use AmisPhp\Renderer2\Page;
use AmisPhp\Renderer2\Tpl;

/**
 * 轮询初始化接口
 * 
 */
class PollingInitApiTest extends TestCase
{
    /**
     * 轮询初始化接口
     *
     * 测试轮询初始化接口的配置
     * 
     * 对应的JSON配置:
     * {
     *   "type": "page",
     *   "initApi": "/amis/api/mock2/page/initData",
     *   "interval": 3000,
     *   "body": [
     *     {
     *       "type": "tpl",
     *       "tpl": "当前时间是：${date}"
     *     }
     *   ]
     * }
     */
    public function testPollingInitApi()
    {
        // 创建模板组件
        $bodyTpl = (new Tpl())->tpl('当前时间是：${date}');
        
        // 创建页面并设置属性
        $page = (new Page())
            ->initApi('/amis/api/mock2/page/initData')
            ->interval(3000)
            ->body([$bodyTpl]);

        // 期望的数组结构
        $expectedArray = [
            'type' => 'page',
            'attr' => [
                'initApi' => '/amis/api/mock2/page/initData',
                'interval' => 3000,
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