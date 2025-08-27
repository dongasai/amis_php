<?php

use PHPUnit\Framework\TestCase;
use AmisPhp\Renderer2\Page;
use AmisPhp\Renderer2\Tpl;

/**
 * 配置 stopAutoRefreshWhen 表达式
 * 
 */
class StopAutoRefreshWhenTest extends TestCase
{
    /**
     * 配置 stopAutoRefreshWhen 表达式
     *
     * 测试配置 stopAutoRefreshWhen 表达式，当满足条件时停止轮询
     * 
     * 对应的JSON配置:
     * {
     *   "type": "page",
     *   "initApi": "/amis/api/mock2/page/initData",
     *   "stopAutoRefreshWhen": "this.time % 5",
     *   "interval": 3000,
     *   "body": [
     *     {
     *       "type": "tpl",
     *       "tpl": "当前时间戳是：${date}"
     *     }
     *   ]
     * }
     */
    public function testStopAutoRefreshWhen()
    {
        // 创建模板组件
        $bodyTpl = (new Tpl())->tpl('当前时间戳是：${date}');
        
        // 创建页面并设置属性
        $page = (new Page())
            ->initApi('/amis/api/mock2/page/initData')
            ->stopAutoRefreshWhen('this.time % 5')
            ->interval(3000)
            ->body([$bodyTpl]);

        // 期望的数组结构
        $expectedArray = [
            'type' => 'page',
            'attr' => [
                'initApi' => '/amis/api/mock2/page/initData',
                'stopAutoRefreshWhen' => 'this.time % 5',
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