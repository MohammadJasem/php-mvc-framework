<?php

namespace app\core\form;

use app\core\Model;

class Field extends BaseField
{
    const TYPE_PASSWORD = 'password';
    const TYPE_FILE = 'file';

    public function __construct(Model $model, string $attribute, $inputType)
    {
        $this->type = $inputType;
        parent::__construct($model, $attribute);
    }

    public function renderInput()
    {
        return sprintf('<input type="%s" class="form-control%s" name="%s" value="%s" min = 0 step="0.01">',
            $this->type,
            $this->model->hasError($this->attribute) ? ' is-invalid' : '',
            $this->attribute,
            $this->model->{$this->attribute},
        );
    }

    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }

    public function fileField()
    {
        $this->type = self::TYPE_FILE;
        return $this;
    }
}