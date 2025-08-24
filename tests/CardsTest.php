<?php

use PHPUnit\Framework\TestCase;
use AmisPhp\Renderer2\Cards;

class CardsTest extends TestCase
{
    public function testGetType()
    {
        $cards = new Cards();
        $this->assertEquals('cards', $cards->getType());
    }

    public function testSetTitle()
    {
        $cards = new Cards();
        $cardsWithTitle = $cards->title('My Title');
        $this->assertEquals('My Title', $cardsWithTitle->title);
        // 确保返回的是同一个对象实例（流畅接口）
        $this->assertSame($cards, $cardsWithTitle);
    }

    public function testJsonOutput()
    {
        // 创建 Cards 实例并设置属性
        $cards = (new Cards())
            ->title('My Cards Title')
            ->placeholder('No data available');

        // 由于属性是动态设置在 $attr 数组中的，toArray 会包含 'attr' 键
        // 期望的 JSON 结构 (通过 json_encode($cards) 或 (string)$cards)
        $expectedJson = json_encode([
            'type' => 'cards',
            'attr' => [
                'title' => 'My Cards Title',
                'placeholder' => 'No data available'
            ]
        ], JSON_UNESCAPED_UNICODE);

        // 验证 __toString 方法 (返回 JSON 字符串)
        $this->assertEquals($expectedJson, (string)$cards);

        // 验证 toArray 方法 (返回包含 'attr' 的数组)
        $expectedArray = [
            'type' => 'cards',
            'attr' => [
                'title' => 'My Cards Title',
                'placeholder' => 'No data available'
            ]
        ];
        $this->assertEquals($expectedArray, $cards->toArray());

        // 验证 JsonSerializable 接口 (通过 json_encode)
        $this->assertEquals($expectedJson, json_encode($cards));
    }
}