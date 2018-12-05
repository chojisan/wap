<?php

namespace Modules\Template\Entities;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $table = 'throttle';

    protected $fillable = [
        'ip',
        'type',
    ];
}
