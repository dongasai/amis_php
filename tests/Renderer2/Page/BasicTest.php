<?php

use PHPUnit\Framework\TestCase;
use AmisPhp\Renderer2\Page;
use AmisPhp\Renderer2\Form;
use AmisPhp\Renderer2\TextControl;

class BasicTest extends TestCase
{
    public function testGetType()
    {
        $page = new Page();
        $this->assertEquals('page', $page->getType());
    }

    public function testSetTitle()
    {
        $page = new Page();
        $pageWithTitle = $page->title('My Page Title');
        $this->assertEquals('My Page Title', $pageWithTitle->title);
        // 确保返回的是同一个对象实例（流畅接口）
        $this->assertSame($page, $pageWithTitle);
    }

    public function testSetSubTitle()
    {
        $page = new Page();
        $pageWithSubTitle = $page->subTitle('My Page Sub Title');
        $this->assertEquals('My Page Sub Title', $pageWithSubTitle->subTitle);
        // 确保返回的是同一个对象实例（流畅接口）
        $this->assertSame($page, $pageWithSubTitle);
    }

    public function testSetBody()
    {
        $page = new Page();
        $form = new Form();
        $input = new TextControl();
        $input->name('name')->label('Name');
        $form->controls([$input]);
        
        $pageWithBody = $page->body($form);
        $this->assertEquals($form, $pageWithBody->body);
        // 确保返回的是同一个对象实例（流畅接口）
        $this->assertSame($page, $pageWithBody);
    }
}