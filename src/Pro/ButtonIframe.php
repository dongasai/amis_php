<?php

namespace AmisPhp\Pro;

use AmisPhp\AmisPhp;
use AmisPhp\Renderers\BaseSchema;
use AmisPhp\Renderers\Button;
use AmisPhp\Renderers\Dialog;
use AmisPhp\Renderers\IFrame;


/**
 * 打开弹窗Iframe的按钮
 *
 * @method self title(string $v)
 * @method self src(string $v)
 * @method self size(string $v)
 * @method self height(string $v)
 */
class ButtonIframe extends BaseSchemaRender
{

    public $size   = 'lg';
    public $height = '600px';

    public function size_md()
    {
        $this->height = '300px';
        $this->size   = 'md';
        return $this;
    }

    public function render(): BaseSchema
    {
        $ifinfo = IFrame::make()->width("100%")->height($this->height)->src($this->src);
        $dialog = Dialog::make()->size($this->size)->title($this->title)->body($ifinfo)->actions([]);
        return (Button::make())->label($this->title)->actionType("dialog")->dialog($dialog);
    }


}
