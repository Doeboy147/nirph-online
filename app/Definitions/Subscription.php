<?php

namespace App\Definitions;

use Laravel5Helpers\Definitions\Definition;

class Subscription extends Definition
{
    public $user_id;

    public $package;


    public function __construct($data)
    {
        parent::__construct($data);
    }

    protected function setValidators()
    {
        return $this->validators = [
            'package'   => 'bail|required',
        ];
    }
}
