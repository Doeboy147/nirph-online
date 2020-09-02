<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel5Helpers\Exceptions\LaravelHelpersExceptions;
use App\Definitions\Subscription as Definition;
use App\Repositories\Subsciption as Repository;

class Subscription extends Controller
{
    public function save($data)
    {
        try {
            return $this->getRepository()->createResource($this->getDefinition($data));
        } catch (LaravelHelpersExceptions $exception) {
            return $this->ajaxError($exception->getMessage());
        }
    }

    protected function getRepository()
    {
        return new Repository;
    }

    protected function getDefinition($data)
    {
        return new Definition($data);
    }
}
