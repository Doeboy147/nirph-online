<?php

namespace App\Models;

use Laravel5Helpers\Uuid\UuidModel;

class Subscription extends UuidModel
{
    protected $table = 'subscriptions';

    public function user()
    {
        return $this->hasOne('App\Models\User', 'uuid', 'user_id');
    }
}
