<?php

namespace App\Repositories;

use App\Models\Subscription as Model;
use Laravel5Helpers\Repositories\Search;

class Subsciption extends Search
{
    protected $pageSize = 12;

    protected function getModel()
    {
        return new Model;
    }
}
