<?php

namespace App\Models;

use Laravel5Helpers\Uuid\UuidModel;

class User extends UuidModel
{
    protected $table = 'users';

    public function user()
    {
        return $this->hasOne('App\Models\User', 'uuid', 'user_id');
    }
}
