<?php

namespace Modules\User\Entities\Sentinel;

use Illuminate\Notifications\Notifiable;
use Cartalyst\Sentinel\Users\EloquentUser;

class User extends EloquentUser
{
    use Notifiable;
    
    protected $table = 'users';

    protected $fillable = [
        'username',
        'first_name',
        'middle_name',
        'last_name',
        'extension',
        'email',
        'password',
        'birthdate',
        'permissions'
    ];
  
   
}
