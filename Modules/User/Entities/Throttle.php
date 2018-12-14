<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;

class Throttle extends Model
{
    protected $table = 'throttle';

    protected $fillable = [
        'ip',
        'type',
    ];
}
