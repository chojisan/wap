<?php

namespace Modules\Template\Entities;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $fillable = [
        'template_code',
        'title',
        'default',
        'type',
        'parameters',
        'status'
    ];
}
