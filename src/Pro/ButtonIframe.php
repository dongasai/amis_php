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
 *
 */
class ButtonIframe extends BaseSchemaRender
{
    public function render(): BaseSchema
    {
        $ifinfo = IFrame::make()->width("100%")->height("600px")->src($this->src);
        $dialog = Dialog::make()->size('lg')->title($this->title)->body($ifinfo)->actions([]);
        return (Button::make())->label($this->title)->actionType("dialog")->dialog($dialog);
    }


}