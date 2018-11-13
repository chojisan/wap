<?php

namespace Modules\User\Entities;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    const ADMIN_TYPE = 'administrator';
    const USER_TYPE = 'user';
    const GUEST_TYPE = 'guest';

    protected $fillable = [
        'username',
        'first_name',
        'middle_name',
        'last_name',
        'extension',
        'password',
        'birthdate'
    ];

    public function isAdmin() {
        //return $this->type === self::ADMIN_TYPE;
    }
}
