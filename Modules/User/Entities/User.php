<?php

namespace Modules\User\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Modules\Auth\Entities\Activation;
use Modules\Auth\Entities\Persistence;
use Modules\Auth\Entities\Reminder;
use Modules\Auth\Entities\Role;
use Modules\Auth\Entities\Throttle;

class User extends Authenticatable implements UserInterface
{
    use Notifiable;
    
    protected $table = 'users';

    protected $loginNames = ['email'];

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

    protected $hidden = [
        'password', 'remember_token',
    ];
  
    /**
     * Returns the roles relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
      return $this->belongsToMany(Role::class, 'role_users');
    }

    /**
     * Returns the persistences relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function persistences()
    {
        return $this->hasMany(Persistences::class);
    }

    /**
     * Returns the activations relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activations()
    {
        return $this->hasMany(Activations::class);
    }

    /**
     * Returns the reminders relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reminders()
    {
        return $this->hasMany(Reminders::class);
    }

    /**
     * Returns the throttle relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function throttle()
    {
        return $this->hasMany(Throttle::class);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserId()
    {
        return $this->getKey();
    }

    /**
     * {@inheritDoc}
     */
    public function getUserLogin()
    {
        return $this->getAttribute($this->getUserLoginName());
    }

    /**
     * {@inheritDoc}
     */
    public function getUserLoginName()
    {
        return reset($this->loginNames);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserPassword()
    {
        return $this->password;
    }
}
