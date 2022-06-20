<?php

namespace app\core\form;

class TextAreaField extends BaseField
{
    public function renderInput(): string
    {
        return sprintf('<textarea class="form-control%s" rows="5" name="%s">%s</textarea>',
            $this->model->hasError($this->attribute) ? ' is-invalid' : '',
            $this->attribute,
            $this->model->{$this->attribute},
        );
    }
}