<?php

use PHPUnit\Framework\TestCase;
use AmisPhp\Renderer2\Page;
use AmisPhp\Renderer2\Tpl;

/**
 * 在其他区域渲染组件
 * 
 */
class RenderInOtherAreasTest extends TestCase
{
    /**
     * 在其他区域渲染组件
     *
     * 测试页面在其他区域渲染组件的配置
     * 
     * 对应的JSON配置:
     * {
     *   "type": "page",
     *   "aside": [
     *     {
     *       "type": "tpl",
     *       "tpl": "这是侧边栏部分"
     *     }
     *   ],
     *   "toolbar": [
     *     {
     *       "type": "tpl",
     *       "tpl": "这是工具栏部分"
     *     }
     *   ],
     *   "body": [
     *     {
     *       "type": "tpl",
     *       "tpl": "这是内容区"
     *     }
     *   ]
     * }
     */
    public function testRenderInOtherAreas()
    {
        // 创建模板组件
        $asideTpl = (new Tpl())->tpl('这是侧边栏部分');
        $toolbarTpl = (new Tpl())->tpl('这是工具栏部分');
        $bodyTpl = (new Tpl())->tpl('这是内容区');
        
        // 创建页面并设置属性
        $page = (new Page())
            ->aside([$asideTpl])
            ->toolbar([$toolbarTpl])
            ->body([$bodyTpl]);

        // 期望的数组结构
        $expectedArray = [
            'type' => 'page',
            'attr' => [
                'aside' => [$asideTpl],
                'toolbar' => [$toolbarTpl],
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