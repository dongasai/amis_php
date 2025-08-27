<?php

use PHPUnit\Framework\TestCase;
use AmisPhp\Renderer2\Page;
use AmisPhp\Renderer2\Tpl;

/**
 * 下拉刷新
 * 
 */
class PullRefreshTest extends TestCase
{
    /**
     * 下拉刷新
     *
     * 测试配置下拉刷新功能
     * 
     * 对应的JSON配置:
     * {
     *   "type": "page",
     *   "initApi": "/amis/api/mock2/page/initData",
     *   "pullRefresh": {
     *     "disabled": false
     *   },
     *   "body": [
     *     {
     *       "type": "tpl",
     *       "tpl": "当前时间是：${date}"
     *     }
     *   ]
     * }
     */
    public function testPullRefresh()
    {
        // 创建模板组件
        $bodyTpl = (new Tpl())->tpl('当前时间是：${date}');
        
        // 创建页面并设置属性
        $page = (new Page())
            ->initApi('/amis/api/mock2/page/initData')
            ->pullRefresh(['disabled' => false])
            ->body([$bodyTpl]);

        // 期望的数组结构
        $expectedArray = [
            'type' => 'page',
            'attr' => [
                'initApi' => '/amis/api/mock2/page/initData',
                'pullRefresh' => ['disabled' => false],
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