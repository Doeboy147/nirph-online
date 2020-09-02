<?php

namespace App\Definitions;

use Laravel5Helpers\Definitions\Definition;

class Product extends Definition
{

    public $name;

    public $price;

    public $downloads;

    public function __construct($data)
    {
        parent::__construct($data);
    }

    protected function setValidators()
    {
        return $this->validators = [
            'name'        => 'bail|required',
            'price'       => 'bail|required',
            'downloads'   => 'bail|required',
        ];
    }
}
