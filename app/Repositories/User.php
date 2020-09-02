<?php

namespace App\Repositories;

use App\Models\User as Model;
use Laravel5Helpers\Repositories\Search;

class User extends Search
{
    protected $pageSize = 6;

    protected function getModel()
    {
        return new Model;
    }

    public function getUser($id)
    {
        return $this->getModel()->where('uuid', $id)->first();
    }

    public function deleteUser($id)
    {
        return $this->getModel()->where('uuid', $id)->delete();
    }
}
