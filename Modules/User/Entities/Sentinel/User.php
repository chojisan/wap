<?php

namespace Modules\User\Entities\Sentinel;

use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
//use Laracasts\Presenter\PresentableTrait;
use Modules\User\Entities\UserInterface;
use Modules\User\Entities\UserToken;
//use Modules\User\Presenters\UserPresenter;

class User extends EloquentUser
{
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
