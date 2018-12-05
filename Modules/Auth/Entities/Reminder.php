<?php

namespace Modules\Auth\Entities;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    protected $table = 'reminders';

    protected $fillable = [
        'code',
        'completed',
        'completed_at',
    ];
}