<?php

namespace Modules\Auth\Entities;

use Illuminate\Database\Eloquent\Model;

class Activation extends Model
{
    protected $table = 'activations';

    protected $fillable = [
        'code',
        'completed',
        'completed_at',
    ];
}