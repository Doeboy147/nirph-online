<?php

namespace App\Repositories;

use App\Models\Product as Model;
use Laravel5Helpers\Repositories\Search;

class Product extends Search
{
    protected $pageSize = 6;

    protected function getModel()
    {
        return new Model;
    }

    public function getProduct($id)
    {
        return $this->getModel()->where('uuid', $id)->first();
    }

    public function deleteProduct($id)
    {
        return $this->getModel()->where('uuid', $id)->delete();
    }
}
