<?php

namespace Modules\Auth\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\User\Entities\User;

class Persistence extends Model
{
    protected $table = 'persistences';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}